<template>
  <article 
    class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 overflow-hidden border border-gray-100 hover:border-[#362869]/20 transform hover:-translate-y-2"
    :class="{ 'featured': featured }"
  >
    <!-- Featured Badge -->
    <div v-if="featured" class="absolute top-4 right-4 z-10">
      <div class="bg-gradient-to-r from-[#facb24] to-yellow-400 text-[#362869] px-3 py-1 rounded-full text-sm font-bold shadow-lg">
        Featured Case
      </div>
    </div>

    <!-- Header Image/Visual -->
    <div class="relative h-48 bg-gradient-to-br from-[#362869] to-[#5f4b8b] overflow-hidden">
      <!-- Background Pattern -->
      <div class="absolute inset-0 opacity-20">
        <div class="absolute top-4 left-4 w-16 h-16 border border-white/30 rounded-full"></div>
        <div class="absolute bottom-4 right-4 w-12 h-12 border border-white/30 rounded-full"></div>
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-20 h-20 border border-white/20 rounded-full"></div>
      </div>

      <!-- Client Logo -->
      <div class="absolute top-6 left-6">
        <div v-if="!logoError" class="bg-white/10 backdrop-blur-sm rounded-lg p-3 border border-white/20">
          <img
            :src="clientLogo"
            :alt="`${clientName} logo`"
            class="h-8 w-auto object-contain"
            @error="logoError = true"
            loading="lazy"
          />
        </div>
        <div v-else class="bg-white/10 backdrop-blur-sm rounded-lg p-3 border border-white/20">
          <div class="h-8 w-16 bg-white/20 rounded flex items-center justify-center">
            <span class="text-white text-xs font-bold">{{ getClientInitials() }}</span>
          </div>
        </div>
      </div>

      <!-- Industry Tag -->
      <div class="absolute top-6 right-6">
        <span class="bg-[#facb24]/20 text-[#facb24] px-3 py-1 rounded-full text-sm font-medium border border-[#facb24]/30 backdrop-blur-sm">
          {{ industry }}
        </span>
      </div>

      <!-- Main Metric Display -->
      <div class="absolute bottom-6 left-6 right-6">
        <div class="bg-white/10 backdrop-blur-lg rounded-xl p-4 border border-white/20">
          <div class="text-center">
            <div class="text-3xl font-bold text-[#facb24] mb-1">{{ primaryMetric.value }}</div>
            <div class="text-white/80 text-sm">{{ primaryMetric.label }}</div>
          </div>
        </div>
      </div>
    </div>

    <!-- Content -->
    <div class="p-6">
      <!-- Title and Client Info -->
      <div class="mb-4">
        <h3 class="text-xl font-bold text-[#362869] mb-2 group-hover:text-[#5f4b8b] transition-colors duration-300">
          {{ title }}
        </h3>
        <p class="text-gray-600 text-sm mb-3">
          <span class="font-medium">{{ clientName }}</span> • {{ industry }} • {{ duration }}
        </p>
        <p class="text-gray-700 leading-relaxed">{{ description }}</p>
      </div>

      <!-- Challenge & Solution Preview -->
      <div class="mb-6">
        <div class="grid md:grid-cols-2 gap-4">
          <div class="bg-red-50 rounded-lg p-3 border-l-4 border-red-400">
            <h4 class="font-semibold text-red-800 text-sm mb-1">Challenge</h4>
            <p class="text-red-700 text-sm">{{ challenge }}</p>
          </div>
          <div class="bg-green-50 rounded-lg p-3 border-l-4 border-green-400">
            <h4 class="font-semibold text-green-800 text-sm mb-1">Solution</h4>
            <p class="text-green-700 text-sm">{{ solution }}</p>
          </div>
        </div>
      </div>

      <!-- Key Metrics Grid -->
      <div class="mb-6">
        <h4 class="font-semibold text-[#362869] mb-3 text-sm uppercase tracking-wide">Key Results</h4>
        <div class="grid grid-cols-2 md:grid-cols-3 gap-3">
          <div 
            v-for="metric in metrics" 
            :key="metric.label"
            class="text-center bg-gray-50 rounded-lg p-3 hover:bg-[#362869]/5 transition-colors duration-300"
          >
            <div class="text-lg font-bold text-[#362869] mb-1">{{ metric.value }}</div>
            <div class="text-xs text-gray-600">{{ metric.label }}</div>
          </div>
        </div>
      </div>

      <!-- Services Used -->
      <div class="mb-6">
        <h4 class="font-semibold text-[#362869] mb-2 text-sm uppercase tracking-wide">Services Used</h4>
        <div class="flex flex-wrap gap-2">
          <span 
            v-for="service in services" 
            :key="service"
            class="px-2 py-1 bg-[#362869]/10 text-[#362869] rounded-md text-xs font-medium hover:bg-[#362869]/20 transition-colors duration-300"
          >
            {{ service }}
          </span>
        </div>
      </div>

      <!-- Timeline -->
      <div v-if="timeline && timeline.length" class="mb-6">
        <h4 class="font-semibold text-[#362869] mb-3 text-sm uppercase tracking-wide">Project Timeline</h4>
        <div class="space-y-2">
          <div 
            v-for="(phase, index) in timeline" 
            :key="index"
            class="flex items-center gap-3"
          >
            <div class="w-2 h-2 bg-[#facb24] rounded-full flex-shrink-0"></div>
            <div class="text-sm">
              <span class="font-medium text-[#362869]">{{ phase.phase }}:</span>
              <span class="text-gray-600 ml-1">{{ phase.description }}</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Client Quote -->
      <div v-if="clientQuote" class="mb-6 bg-[#362869]/5 rounded-lg p-4 border-l-4 border-[#facb24]">
        <blockquote class="text-[#362869] italic mb-2">"{{ clientQuote.text }}"</blockquote>
        <cite class="text-sm text-gray-600 not-italic">
          — {{ clientQuote.author }}, {{ clientQuote.position }}
        </cite>
      </div>

      <!-- Action Buttons -->
      <div class="flex flex-col sm:flex-row gap-3">
        <button
          @click="$emit('view-full-case', caseId)"
          class="flex-1 bg-[#362869] text-white px-4 py-3 rounded-lg font-medium hover:bg-[#5f4b8b] transition-all duration-300 hover:shadow-lg transform hover:scale-105 text-center"
        >
          View Full Case Study
        </button>
        <button
          @click="$emit('contact-about-case', { caseId, clientName, services })"
          class="flex-1 border-2 border-[#362869] text-[#362869] px-4 py-3 rounded-lg font-medium hover:bg-[#362869] hover:text-white transition-all duration-300 text-center"
        >
          Discuss Similar Project
        </button>
      </div>

      <!-- Social Sharing -->
      <div class="mt-4 pt-4 border-t border-gray-100">
        <div class="flex items-center justify-between">
          <span class="text-sm text-gray-500">Share this case study:</span>
          <div class="flex gap-2">
            <button
              @click="shareCase('linkedin')"
              class="w-8 h-8 bg-blue-600 text-white rounded-full flex items-center justify-center hover:bg-blue-700 transition-colors duration-300"
              aria-label="Share on LinkedIn"
            >
              <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
              </svg>
            </button>
            <button
              @click="shareCase('twitter')"
              class="w-8 h-8 bg-black text-white rounded-full flex items-center justify-center hover:bg-gray-800 transition-colors duration-300"
              aria-label="Share on Twitter"
            >
              <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
              </svg>
            </button>
            <button
              @click="shareCase('email')"
              class="w-8 h-8 bg-gray-600 text-white rounded-full flex items-center justify-center hover:bg-gray-700 transition-colors duration-300"
              aria-label="Share via Email"
            >
              <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
              </svg>
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- Hover Overlay for Additional Info -->
    <div class="absolute inset-0 bg-[#362869]/95 opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-center justify-center p-6 pointer-events-none">
      <div class="text-center text-white transform translate-y-4 group-hover:translate-y-0 transition-transform duration-500">
        <h4 class="text-xl font-bold mb-3">{{ title }}</h4>
        <p class="text-white/80 mb-4 leading-relaxed">{{ hoverDescription || description }}</p>
        <div class="flex justify-center gap-4 text-sm">
          <div class="text-center">
            <div class="text-[#facb24] font-bold text-lg">{{ primaryMetric.value }}</div>
            <div class="text-white/70">{{ primaryMetric.label }}</div>
          </div>
          <div v-if="metrics[0]" class="text-center">
            <div class="text-[#facb24] font-bold text-lg">{{ metrics[0].value }}</div>
            <div class="text-white/70">{{ metrics[0].label }}</div>
          </div>
        </div>
      </div>
    </div>
  </article>
</template>

<script setup>
import { ref } from 'vue'

// Props
const props = defineProps({
  caseId: {
    type: [String, Number],
    required: true
  },
  title: {
    type: String,
    required: true
  },
  clientName: {
    type: String,
    required: true
  },
  clientLogo: {
    type: String,
    default: ''
  },
  industry: {
    type: String,
    required: true
  },
  duration: {
    type: String,
    required: true
  },
  description: {
    type: String,
    required: true
  },
  hoverDescription: {
    type: String,
    default: ''
  },
  challenge: {
    type: String,
    required: true
  },
  solution: {
    type: String,
    required: true
  },
  primaryMetric: {
    type: Object,
    required: true,
    validator: (value) => {
      return value && typeof value.label === 'string' && typeof value.value === 'string'
    }
  },
  metrics: {
    type: Array,
    default: () => []
  },
  services: {
    type: Array,
    default: () => []
  },
  timeline: {
    type: Array,
    default: () => []
  },
  clientQuote: {
    type: Object,
    default: null,
    validator: (value) => {
      return !value || (value.text && value.author && value.position)
    }
  },
  featured: {
    type: Boolean,
    default: false
  }
})

// Emits
const emit = defineEmits(['view-full-case', 'contact-about-case'])

// State
const logoError = ref(false)

// Methods
const getClientInitials = () => {
  return props.clientName
    .split(' ')
    .map(word => word.charAt(0))
    .join('')
    .substring(0, 2)
    .toUpperCase()
}

const shareCase = (platform) => {
  const url = window.location.href
  const title = `Case Study: ${props.title}`
  const description = props.description
  
  let shareUrl = ''
  
  switch (platform) {
    case 'linkedin':
      shareUrl = `https://www.linkedin.com/sharing/share-offsite/?url=${encodeURIComponent(url)}`
      break
    case 'twitter':
      shareUrl = `https://twitter.com/intent/tweet?url=${encodeURIComponent(url)}&text=${encodeURIComponent(title)}`
      break
    case 'email':
      shareUrl = `mailto:?subject=${encodeURIComponent(title)}&body=${encodeURIComponent(description + '\n\n' + url)}`
      break
  }
  
  if (shareUrl) {
    window.open(shareUrl, '_blank', 'width=600,height=400')
  }
}

// Expose methods for parent component
defineExpose({
  shareCase
})
</script>

<style scoped>
/* Enhanced hover effects */
.group:hover .transform {
  transform: translateY(-8px);
}

/* Custom animations */
@keyframes slideInUp {
  from {
    opacity: 0;
    transform: translateY(20px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

.animate-slide-in-up {
  animation: slideInUp 0.6s ease-out;
}

/* Featured case styling */
.featured {
  position: relative;
}

.featured::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  height: 4px;
  background: linear-gradient(90deg, #facb24, #f59e0b);
  border-radius: 8px 8px 0 0;
}

/* Accessibility improvements */
@media (prefers-reduced-motion: reduce) {
  .transition-all,
  .transition-transform,
  .transition-colors,
  .transition-opacity {
    transition: none;
  }
  
  .group-hover\:translate-y-0,
  .hover\:scale-105,
  .hover\:-translate-y-2 {
    transform: none;
  }
  
  .animate-slide-in-up {
    animation: none;
  }
}

/* Focus styles for better accessibility */
button:focus-visible {
  outline: 2px solid #facb24;
  outline-offset: 2px;
}

/* Enhanced gradient effects */
.bg-gradient-to-br {
  background-image: linear-gradient(to bottom right, var(--tw-gradient-stops));
}

/* Custom backdrop blur */
.backdrop-blur-lg {
  backdrop-filter: blur(16px);
}

.backdrop-blur-sm {
  backdrop-filter: blur(4px);
}

/* Smooth transitions for all interactive elements */
* {
  transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;
  transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
  transition-duration: 300ms;
}

/* Enhanced shadow effects */
.shadow-lg {
  box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
}

.shadow-2xl {
  box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
}

.hover\:shadow-2xl:hover {
  box-shadow: 0 25px 50px -12px rgba(54, 40, 105, 0.3);
}
</style>

