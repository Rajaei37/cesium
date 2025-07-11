<template>
  <div 
    class="bg-white rounded-xl shadow-lg overflow-hidden transition-all duration-300 hover:shadow-xl hover:-translate-y-1 group focus-within:ring-2 focus-within:ring-[#facb24] focus-within:ring-offset-2"
    role="article"
    :aria-labelledby="`case-study-title-${id}`"
    :aria-describedby="`case-study-description-${id}`"
  >
    <!-- Image -->
    <div class="relative h-48 w-full overflow-hidden">
      <img 
        v-if="!imageError"
        :src="image" 
        :alt="`${title} case study image`"
        class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105"
        @error="handleImageError"
        loading="lazy"
      />
      <div 
        v-else
        class="w-full h-full bg-gray-200 flex items-center justify-center text-gray-500 text-sm"
      >
        📸 Image Unavailable
      </div>
    </div>

    <div class="p-6">
      <!-- Title -->
      <h3 
        :id="`case-study-title-${id}`"
        class="text-xl font-bold text-[#362869] mb-3 group-hover:text-[#5f4b8b] transition-colors duration-200 line-clamp-2"
      >
        {{ title }}
      </h3>

      <!-- Description -->
      <p 
        :id="`case-study-description-${id}`"
        class="text-gray-600 text-sm leading-relaxed mb-4 line-clamp-3"
      >
        {{ description }}
      </p>

      <!-- Metrics -->
      <div v-if="metrics && metrics.length" class="mb-4">
        <div v-for="(metric, index) in metrics" :key="index" class="flex items-center text-gray-700 text-sm mb-1">
          <svg class="w-4 h-4 text-[#facb24] mr-2" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
          </svg>
          <span>{{ metric.label }}: <span class="font-semibold">{{ metric.value }}</span></span>
        </div>
      </div>

      <!-- Call to Action -->
      <button
        @click="handleViewCaseStudy"
        class="w-full bg-[#facb24] text-[#362869] font-bold py-3 px-4 rounded-lg hover:bg-yellow-400 transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-[#facb24] focus:ring-offset-2"
        aria-label="View full case study"
      >
        View Case Study
      </button>
    </div>
  </div>
</template>

<script setup>
import { ref } from 'vue'

const props = defineProps({
  id: {
    type: [String, Number],
    default: () => Math.random().toString(36).substr(2, 9)
  },
  title: {
    type: String,
    required: true
  },
  description: {
    type: String,
    required: true
  },
  image: {
    type: String,
    default: ''
  },
  metrics: {
    type: Array,
    default: () => []
  },
  url: {
    type: String,
    default: ''
  }
})

const emit = defineEmits(['view-case-study'])

const imageError = ref(false)

const handleImageError = () => {
  console.warn(`Failed to load case study image: ${props.image}`)
  imageError.value = true
}

const handleViewCaseStudy = () => {
  emit('view-case-study', {
    id: props.id,
    title: props.title,
    url: props.url
  })
  if (props.url) {
    window.open(props.url, '_blank', 'noopener,noreferrer')
  }
}
</script>

<style scoped>
/* Line clamping for text overflow */
.line-clamp-2 {
  display: -webkit-box;
  -webkit-line-clamp: 2;
  -webkit-box-orient: vertical;
  overflow: hidden;
}

.line-clamp-3 {
  display: -webkit-box;
  -webkit-line-clamp: 3;
  -webkit-box-orient: vertical;
  overflow: hidden;
}

/* Enhanced hover effects */
.group:hover {
  transform: translateY(-2px);
  box-shadow: 0 15px 30px -5px rgba(0, 0, 0, 0.1), 0 6px 12px -2px rgba(0, 0, 0, 0.05);
}

/* Smooth transitions */
.transition-all {
  transition-property: all;
  transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
}

.transition-colors {
  transition-property: background-color, border-color, color, fill, stroke;
  transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
}

.transition-transform {
  transition-property: transform;
  transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
}

/* Accessibility improvements */
@media (prefers-reduced-motion: reduce) {
  .transition-all,
  .transition-colors,
  .transition-transform,
  .group-hover\:scale-105 {
    transition: none;
  }
  
  .group:hover {
    transform: none;
  }
  
  .group:hover .group-hover\:scale-105 {
    transform: none;
  }
}

/* Focus styles for better accessibility */
button:focus-visible {
  outline: 2px solid #facb24;
  outline-offset: 2px;
}

/* Image overlay/effect */
.relative.h-48.w-full.overflow-hidden::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: linear-gradient(to top, rgba(0,0,0,0.4) 0%, rgba(0,0,0,0) 50%);
  opacity: 0;
  transition: opacity 0.3s ease-in-out;
}

.group:hover .relative.h-48.w-full.overflow-hidden::before {
  opacity: 1;
}

/* Metric icon color */
.text-\[\#facb24\] {
  color: #facb24;
}
</style>


