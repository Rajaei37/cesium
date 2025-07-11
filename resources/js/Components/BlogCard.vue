<template>
  <article 
    class="p-6 border border-gray-200 rounded-lg hover:shadow-md transition-all duration-300 bg-white group cursor-pointer focus-within:ring-2 focus-within:ring-[#362869] focus-within:ring-offset-2"
    @click="handleCardClick"
    @keydown.enter="handleCardClick"
    @keydown.space.prevent="handleCardClick"
    tabindex="0"
    role="button"
    :aria-labelledby="`blog-title-${id}`"
    :aria-describedby="`blog-desc-${id}`"
  >
    <!-- Optional image/thumbnail -->
    <div 
      v-if="image"
      class="mb-4 overflow-hidden rounded-md"
    >
      <img
        v-if="!imageError"
        :src="image"
        :alt="`${title} thumbnail`"
        class="w-full h-32 object-cover transition-transform duration-300 group-hover:scale-105"
        @error="handleImageError"
        loading="lazy"
      />
      <div 
        v-else
        class="w-full h-32 bg-gray-100 flex items-center justify-center text-gray-400"
      >
        📄 Image unavailable
      </div>
    </div>

    <!-- Content -->
    <div class="space-y-3">
      <h4 
        :id="`blog-title-${id}`"
        class="text-lg font-bold text-[#362869] mb-2 group-hover:text-[#5f4b8b] transition-colors duration-200 line-clamp-2"
      >
        {{ title }}
      </h4>
      
      <p 
        :id="`blog-desc-${id}`"
        class="text-sm text-gray-600 leading-relaxed line-clamp-3"
      >
        {{ desc }}
      </p>

      <!-- Meta information -->
      <div 
        v-if="author || date || readTime"
        class="flex items-center justify-between text-xs text-gray-500 pt-2 border-t border-gray-100"
      >
        <div class="flex items-center space-x-2">
          <span v-if="author" class="flex items-center">
            👤 {{ author }}
          </span>
          <span v-if="date" class="flex items-center">
            📅 {{ formatDate(date) }}
          </span>
        </div>
        <span v-if="readTime" class="flex items-center">
          ⏱️ {{ readTime }} min read
        </span>
      </div>

      <!-- Tags -->
      <div 
        v-if="tags && tags.length"
        class="flex flex-wrap gap-1 pt-2"
      >
        <span
          v-for="tag in tags.slice(0, 3)"
          :key="tag"
          class="px-2 py-1 text-xs bg-[#362869]/10 text-[#362869] rounded-full"
        >
          {{ tag }}
        </span>
        <span
          v-if="tags.length > 3"
          class="px-2 py-1 text-xs bg-gray-100 text-gray-500 rounded-full"
        >
          +{{ tags.length - 3 }}
        </span>
      </div>

      <!-- Call to action -->
      <div class="pt-2">
        <span class="text-sm text-[#362869] font-medium group-hover:text-[#5f4b8b] transition-colors duration-200 flex items-center">
          Read more 
          <svg 
            class="w-4 h-4 ml-1 transition-transform duration-200 group-hover:translate-x-1" 
            fill="none" 
            stroke="currentColor" 
            viewBox="0 0 24 24"
            aria-hidden="true"
          >
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
          </svg>
        </span>
      </div>
    </div>
  </article>
</template>

<script setup>
import { ref, computed } from 'vue'

// Props
const props = defineProps({
  id: {
    type: [String, Number],
    default: () => Math.random().toString(36).substr(2, 9)
  },
  title: {
    type: String,
    required: true
  },
  desc: {
    type: String,
    required: true
  },
  image: {
    type: String,
    default: ''
  },
  author: {
    type: String,
    default: ''
  },
  date: {
    type: [String, Date],
    default: ''
  },
  readTime: {
    type: [String, Number],
    default: ''
  },
  tags: {
    type: Array,
    default: () => []
  },
  url: {
    type: String,
    default: ''
  }
})

// Emits
const emit = defineEmits(["click", "read-more"])
// State
const imageError = ref(false)

// Methods
const handleImageError = () => {
  console.warn(`Failed to load blog image: ${props.image}`)
  imageError.value = true
}

const handleCardClick = () => {
  emit('click', {
    id: props.id,
    title: props.title,
    url: props.url
  })
  
  emit('read-more', {
    id: props.id,
    title: props.title,
    url: props.url
  })
  
  // If URL is provided, navigate to it
  if (props.url) {
    window.open(props.url, '_blank', 'noopener,noreferrer')
  }
}

const formatDate = (date) => {
  if (!date) return ''
  
  try {
    const dateObj = typeof date === 'string' ? new Date(date) : date
    return dateObj.toLocaleDateString('en-US', {
      year: 'numeric',
      month: 'short',
      day: 'numeric'
    })
  } catch (error) {
    console.warn('Invalid date format:', date)
    return date.toString()
  }
}

// Computed
const truncatedTitle = computed(() => {
  return props.title.length > 60 ? props.title.substring(0, 60) + '...' : props.title
})

const truncatedDesc = computed(() => {
  return props.desc.length > 120 ? props.desc.substring(0, 120) + '...' : props.desc
})
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
  box-shadow: 0 10px 25px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
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
  .group-hover\:scale-105,
  .group-hover\:translate-x-1 {
    transition: none;
  }
  
  .group:hover {
    transform: none;
  }
  
  .group:hover .group-hover\:scale-105 {
    transform: none;
  }
  
  .group:hover .group-hover\:translate-x-1 {
    transform: none;
  }
}

/* Focus styles for better accessibility */
article:focus-visible {
  outline: 2px solid #362869;
  outline-offset: 2px;
}

/* Custom scrollbar for overflow content */
.overflow-hidden::-webkit-scrollbar {
  display: none;
}

.overflow-hidden {
  -ms-overflow-style: none;
  scrollbar-width: none;
}

/* Tag styling */
.rounded-full {
  border-radius: 9999px;
}

/* Arrow animation */
.group:hover svg {
  transform: translateX(0.25rem);
}
</style>


