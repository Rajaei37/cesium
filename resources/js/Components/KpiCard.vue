<template>
  <div 
    class="text-center p-4 rounded-lg hover:bg-white/10 transition-colors duration-300"
    role="region"
    :aria-labelledby="`kpi-label-${id}`"
  >
    <!-- Icon with error handling -->
    <div class="w-10 h-10 mx-auto mb-3 flex items-center justify-center">
      <img 
        v-if="!imageError"
        :src="icon" 
        :alt="`${label} icon`"
        class="w-10 h-10"
        @error="handleImageError"
        loading="lazy"
      />
      <div 
        v-else
        class="w-10 h-10 bg-[#facb24] rounded-full flex items-center justify-center text-[#362869] text-lg font-bold"
        :aria-label="`${label} icon placeholder`"
      >
        {{ getIconFallback() }}
      </div>
    </div>
    
    <!-- Animated counter -->
    <div 
      ref="counterRef" 
      class="text-3xl font-extrabold text-[#facb24] mb-1"
      :aria-live="isAnimating ? 'polite' : 'off'"
      :aria-label="`${formattedValue} ${label}`"
    >
      {{ displayValue }}
    </div>
    
    <p 
      :id="`kpi-label-${id}`"
      class="text-sm text-white font-medium"
    >
      {{ label }}
    </p>
    
    <!-- Loading indicator during animation -->
    <div 
      v-if="isAnimating && showLoadingIndicator"
      class="mt-2 w-8 h-1 bg-[#facb24]/30 rounded-full mx-auto overflow-hidden"
      aria-hidden="true"
    >
      <div class="h-full bg-[#facb24] rounded-full animate-pulse"></div>
    </div>
  </div>
</template>

<script setup>
import { onMounted, ref, computed, watch } from 'vue'
import gsap from 'gsap'

// Props
const props = defineProps({
  id: {
    type: [String, Number],
    default: () => Math.random().toString(36).substr(2, 9)
  },
  icon: {
    type: String,
    required: true
  },
  value: {
    type: [String, Number],
    required: true
  },
  label: {
    type: String,
    required: true
  },
  animationDuration: {
    type: Number,
    default: 2
  },
  showLoadingIndicator: {
    type: Boolean,
    default: false
  },
  startAnimation: {
    type: Boolean,
    default: true
  }
})

// Emits
const emit = defineEmits(['animation-complete'])

// State
const counterRef = ref(null)
const imageError = ref(false)
const isAnimating = ref(false)
const displayValue = ref('0')
const currentValue = ref(0)

// Computed
const finalValue = computed(() => Number(props.value) || 0)
const formattedValue = computed(() => formatNumber(finalValue.value))

// Methods
const handleImageError = () => {
  console.warn(`Failed to load KPI icon: ${props.icon}`)
  imageError.value = true
}

const getIconFallback = () => {
  const fallbacks = {
    'player': '👥',
    'spend': '💰',
    'launches': '🚀',
    'revenue': '📊',
    'growth': '📈'
  }
  
  // Try to match icon filename to emoji
  const iconName = props.icon.split('/').pop()?.split('.')[0]?.toLowerCase()
  return fallbacks[iconName] || '📊'
}

const formatNumber = (num) => {
  const n = Number(num)
  if (n >= 1_000_000) return `${(n / 1_000_000).toFixed(1)}M+`
  if (n >= 1_000) return `${Math.round(n / 1_000)}K+`
  return n.toString()
}

const animateCounter = () => {
  if (!counterRef.value || !props.startAnimation) {
    displayValue.value = formattedValue.value
    return
  }

  isAnimating.value = true
  currentValue.value = 0
  displayValue.value = '0'

  gsap.to(currentValue, {
    value: finalValue.value,
    duration: props.animationDuration,
    ease: 'power2.out',
    onUpdate: () => {
      displayValue.value = formatNumber(Math.round(currentValue.value))
    },
    onComplete: () => {
      isAnimating.value = false
      displayValue.value = formattedValue.value
      emit('animation-complete', {
        id: props.id,
        value: finalValue.value,
        formattedValue: formattedValue.value
      })
    }
  })
}

const resetAnimation = () => {
  if (gsap) {
    gsap.killTweensOf(currentValue)
  }
  currentValue.value = 0
  displayValue.value = '0'
  isAnimating.value = false
}

// Watchers
watch(() => props.value, () => {
  if (props.startAnimation) {
    resetAnimation()
    animateCounter()
  } else {
    displayValue.value = formattedValue.value
  }
})

watch(() => props.startAnimation, (newVal) => {
  if (newVal) {
    animateCounter()
  } else {
    resetAnimation()
    displayValue.value = formattedValue.value
  }
})

// Lifecycle
onMounted(() => {
  // Delay animation slightly to ensure proper mounting
  setTimeout(() => {
    animateCounter()
  }, 100)
})

// Expose methods for parent component
defineExpose({
  animateCounter,
  resetAnimation
})
</script>

<style scoped>
/* Enhanced number display */
.text-3xl {
  font-variant-numeric: tabular-nums;
  letter-spacing: -0.025em;
}

/* Smooth transitions */
.transition-colors {
  transition-property: background-color, border-color, color, fill, stroke;
  transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
}

/* Accessibility improvements */
@media (prefers-reduced-motion: reduce) {
  .animate-pulse {
    animation: none;
  }
}

/* Loading indicator animation */
@keyframes pulse {
  0%, 100% {
    opacity: 1;
  }
  50% {
    opacity: 0.5;
  }
}

.animate-pulse {
  animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
}

/* Hover effects */
.hover\:bg-white\/10:hover {
  background-color: rgba(255, 255, 255, 0.1);
}

/* Focus styles for accessibility */
div:focus-visible {
  outline: 2px solid #facb24;
  outline-offset: 2px;
  border-radius: 0.5rem;
}
</style>

