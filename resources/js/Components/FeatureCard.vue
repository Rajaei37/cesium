<template>
  <div
    class="p-6 bg-white shadow-md rounded-xl text-center transform transition duration-300 hover:-translate-y-1 hover:shadow-lg group focus-within:ring-2 focus-within:ring-[#362869] focus-within:ring-offset-2"
    role="article"
    :aria-labelledby="`feature-title-${id}`"
  >
    <!-- Icon with error handling -->
    <div class="w-12 h-12 mx-auto mb-4 flex items-center justify-center">
      <img
        v-if="!imageError"
        :src="icon"
        :alt="`${title} icon`"
        class="w-12 h-12 transition-transform duration-300 group-hover:scale-110"
        @error="handleImageError"
        loading="lazy"
      />
      <div 
        v-else
        class="w-12 h-12 bg-[#362869] rounded-lg flex items-center justify-center text-white text-xl"
        :aria-label="`${title} icon placeholder`"
      >
        {{ getIconFallback() }}
      </div>
    </div>
    
    <h3 
      :id="`feature-title-${id}`"
      class="text-xl font-bold text-[#362869] mb-2"
    >
      {{ title }}
    </h3>
    
    <p class="text-gray-600 leading-relaxed">
      {{ desc }}
    </p>
    
    <!-- Optional CTA button -->
    <button
      v-if="showCta"
      @click="$emit('cta-click', { title, desc })"
      class="mt-4 px-4 py-2 text-sm bg-[#facb24] text-[#362869] rounded-full font-medium hover:bg-yellow-400 transition focus:outline-none focus:ring-2 focus:ring-[#facb24] focus:ring-offset-2"
      :aria-label="`Learn more about ${title}`"
    >
      Learn More
    </button>
  </div>
</template>

<script setup>
import { ref, computed } from 'vue'

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
  title: {
    type: String,
    required: true
  },
  desc: {
    type: String,
    required: true
  },
  showCta: {
    type: Boolean,
    default: false
  }
})

// Emits
const emit = defineEmits(['cta-click'])

// State
const imageError = ref(false)

// Methods
const handleImageError = () => {
  console.warn(`Failed to load icon: ${props.icon}`)
  imageError.value = true
}

const getIconFallback = () => {
  const fallbacks = {
    'rocket': '🚀',
    'seo': '📈',
    'programmatic': '🎯',
    'crm': '💌',
    'compliance': '✅',
    'branding': '🎨'
  }
  
  // Try to match icon filename to emoji
  const iconName = props.icon.split('/').pop()?.split('.')[0]?.toLowerCase()
  return fallbacks[iconName] || '⭐'
}
</script>

<style scoped>
/* Enhanced hover effects */
.group:hover {
  box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
}

/* Smooth transitions for all interactive elements */
* {
  transition-property: transform, box-shadow, background-color, border-color;
  transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
}

/* Accessibility improvements */
@media (prefers-reduced-motion: reduce) {
  .transition,
  .transition-transform,
  .group-hover\:scale-110 {
    transition: none;
  }
  
  .group:hover .group-hover\:scale-110 {
    transform: none;
  }
}

/* Focus styles for better accessibility */
button:focus-visible {
  outline: 2px solid #362869;
  outline-offset: 2px;
}
</style>

