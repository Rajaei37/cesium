<template>
  <div 
    class="bg-white p-6 rounded-xl shadow text-center hover:shadow-md transition-all duration-300 hover:-translate-y-1 group focus-within:ring-2 focus-within:ring-[#362869] focus-within:ring-offset-2"
    role="article"
    :aria-labelledby="`team-name-${id}`"
    :aria-describedby="`team-role-${id}`"
  >
    <!-- Profile Image with error handling -->
    <div class="relative mb-4 mx-auto w-24 h-24">
      <img 
        v-if="!imageError"
        :src="photo" 
        :alt="`${name} profile photo`"
        class="rounded-full h-24 w-24 mx-auto object-cover transition-transform duration-300 group-hover:scale-105 border-2 border-gray-100"
        @error="handleImageError"
        loading="lazy"
      />
      <div 
        v-else
        class="rounded-full h-24 w-24 mx-auto bg-[#362869] flex items-center justify-center text-white text-2xl font-bold border-2 border-gray-100"
        :aria-label="`${name} profile photo placeholder`"
      >
        {{ getInitials() }}
      </div>
      
      <!-- Online status indicator (optional) -->
      <div 
        v-if="isOnline"
        class="absolute bottom-1 right-1 w-4 h-4 bg-green-400 border-2 border-white rounded-full"
        :aria-label="`${name} is online`"
      ></div>
    </div>
    
    <!-- Name -->
    <h4 
      :id="`team-name-${id}`"
      class="text-lg font-semibold text-[#362869] mb-1 group-hover:text-[#5f4b8b] transition-colors duration-200"
    >
      {{ name }}
    </h4>
    
    <!-- Role -->
    <p 
      :id="`team-role-${id}`"
      class="text-sm text-gray-600 mb-3 font-medium"
    >
      {{ role }}
    </p>

    <!-- Bio (optional) -->
    <p 
      v-if="bio"
      class="text-xs text-gray-500 mb-4 leading-relaxed line-clamp-3"
    >
      {{ bio }}
    </p>

    <!-- Skills/Expertise tags (optional) -->
    <div 
      v-if="skills && skills.length"
      class="flex flex-wrap justify-center gap-1 mb-4"
    >
      <span
        v-for="skill in skills.slice(0, 3)"
        :key="skill"
        class="px-2 py-1 text-xs bg-[#362869]/10 text-[#362869] rounded-full"
      >
        {{ skill }}
      </span>
      <span
        v-if="skills.length > 3"
        class="px-2 py-1 text-xs bg-gray-100 text-gray-500 rounded-full"
        :title="`+${skills.length - 3} more skills`"
      >
        +{{ skills.length - 3 }}
      </span>
    </div>

    <!-- Social Links (optional) -->
    <div 
      v-if="socialLinks && Object.keys(socialLinks).length"
      class="flex justify-center space-x-3"
    >
      <a
        v-if="socialLinks.linkedin"
        :href="socialLinks.linkedin"
        target="_blank"
        rel="noopener noreferrer"
        class="text-gray-400 hover:text-blue-600 transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 rounded"
        :aria-label="`${name}'s LinkedIn profile`"
      >
        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
          <path fill-rule="evenodd" d="M16.338 16.338H13.67V12.16c0-.995-.017-2.277-1.387-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248H8.014v-8.59h2.559v1.174h.037c.356-.675 1.227-1.387 2.526-1.387 2.703 0 3.203 1.778 3.203 4.092v4.711zM5.005 6.575a1.548 1.548 0 11-.003-3.096 1.548 1.548 0 01.003 3.096zm-1.337 9.763H6.34v-8.59H3.667v8.59zM17.668 1H2.328C1.595 1 1 1.581 1 2.298v15.403C1 18.418 1.595 19 2.328 19h15.34c.734 0 1.332-.582 1.332-1.299V2.298C19 1.581 18.402 1 17.668 1z" clip-rule="evenodd" />
        </svg>
      </a>
      
      <a
        v-if="socialLinks.twitter"
        :href="socialLinks.twitter"
        target="_blank"
        rel="noopener noreferrer"
        class="text-gray-400 hover:text-blue-400 transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-offset-2 rounded"
        :aria-label="`${name}'s Twitter profile`"
      >
        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
          <path d="M6.29 18.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0120 3.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.073 4.073 0 01.8 7.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 010 16.407a11.616 11.616 0 006.29 1.84" />
        </svg>
      </a>
      
      <a
        v-if="socialLinks.email"
        :href="`mailto:${socialLinks.email}`"
        class="text-gray-400 hover:text-gray-600 transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 rounded"
        :aria-label="`Email ${name}`"
      >
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
        </svg>
      </a>
    </div>

    <!-- Contact button (optional) -->
    <button
      v-if="showContactButton"
      @click="handleContact"
      class="mt-4 px-4 py-2 text-sm bg-[#facb24] text-[#362869] rounded-full font-medium hover:bg-yellow-400 transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-[#facb24] focus:ring-offset-2"
      :aria-label="`Contact ${name.split(' ')[0]}`"
    >
      Contact {{ name.split(' ')[0] }}
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
  name: {
    type: String,
    required: true
  },
  role: {
    type: String,
    required: true
  },
  photo: {
    type: String,
    required: true
  },
  bio: {
    type: String,
    default: ''
  },
  skills: {
    type: Array,
    default: () => []
  },
  socialLinks: {
    type: Object,
    default: () => ({})
  },
  isOnline: {
    type: Boolean,
    default: false
  },
  showContactButton: {
    type: Boolean,
    default: false
  }
})

// Emits
const emit = defineEmits(['contact'])

// State
const imageError = ref(false)

// Methods
const handleImageError = () => {
  console.warn(`Failed to load team member photo: ${props.photo}`)
  imageError.value = true
}

const getInitials = () => {
  return props.name
    .split(' ')
    .map(word => word.charAt(0).toUpperCase())
    .join('')
    .substring(0, 2)
}

const handleContact = () => {
  emit('contact', {
    id: props.id,
    name: props.name,
    role: props.role,
    email: props.socialLinks?.email
  })
}

// Computed
const firstName = computed(() => {
  return props.name.split(' ')[0]
})

const truncatedBio = computed(() => {
  if (!props.bio) return ''
  return props.bio.length > 100 ? props.bio.substring(0, 100) + '...' : props.bio
})
</script>

<style scoped>
/* Line clamping for bio text */
.line-clamp-3 {
  display: -webkit-box;
  -webkit-line-clamp: 3;
  -webkit-box-orient: vertical;
  overflow: hidden;
}

/* Enhanced hover effects */
.group:hover {
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

/* Profile image enhancements */
.group:hover img {
  box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
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
a:focus-visible,
button:focus-visible {
  outline: 2px solid #362869;
  outline-offset: 2px;
}

/* Social link hover effects */
a svg {
  transition: transform 0.2s ease;
}

a:hover svg {
  transform: scale(1.1);
}

/* Skill tags styling */
.rounded-full {
  border-radius: 9999px;
}

/* Online status pulse animation */
.bg-green-400 {
  animation: pulse-green 2s infinite;
}

@keyframes pulse-green {
  0%, 100% {
    opacity: 1;
  }
  50% {
    opacity: 0.7;
  }
}

/* Custom tooltip for skills overflow */
[title] {
  position: relative;
  cursor: help;
}

/* Button hover effects */
button:hover {
  transform: translateY(-1px);
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

button:active {
  transform: translateY(0);
}
</style>


