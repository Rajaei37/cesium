<template>
  <div
    class="relative w-full min-h-64 sm:h-64 md:h-72 lg:h-80 rounded-xl shadow-lg cursor-pointer overflow-hidden group hover:shadow-xl transition-all duration-300"
    @click="toggleFlip"
    @keydown.enter="toggleFlip"
    @keydown.space.prevent="toggleFlip"
    tabindex="0"
    role="button"
    :aria-label="isFlipped ? 'Hide details for ' + title : 'Show details for ' + title"
  >
    <!-- Front of the card -->
    <div 
      class="absolute inset-0 bg-white rounded-xl flex flex-col transition-all duration-700 ease-in-out"
      :class="{
        'opacity-100 transform translate-x-0': !isFlipped,
        'opacity-0 transform -translate-x-full': isFlipped
      }"
    >
      <!-- Card Header with Icon -->
      <div class="flex-shrink-0 p-4 sm:p-6 md:p-8 pb-2 sm:pb-3 md:pb-4">
        <div class="w-12 h-12 sm:w-16 sm:h-16 md:w-20 md:h-20 mx-auto mb-3 sm:mb-4 flex items-center justify-center rounded-full bg-secondary-light group-hover:bg-secondary transition-all duration-300">
          <img :src="icon" :alt="title + ' icon'" class="w-6 h-6 sm:w-8 sm:h-8 md:w-10 md:h-10 object-contain" />
        </div>
      </div>

      <!-- Card Content -->
      <div class="flex-1 flex flex-col justify-center px-4 sm:px-6 md:px-8 pb-12 sm:pb-14 md:pb-16">
        <h3 class="text-base sm:text-lg md:text-xl lg:text-2xl font-semibold text-primary mb-2 sm:mb-3 leading-tight text-center">{{ title }}</h3>
        <p class="text-xs sm:text-sm md:text-base text-gray-700 font-light leading-relaxed text-center flex-1 flex items-center justify-center">{{ desc }}</p>
      </div>

      <!-- Expand Icon (only show if has long_desc) -->
      <div 
        v-if="long_desc"
        class="absolute bottom-3 sm:bottom-4 md:bottom-5 right-3 sm:right-4 md:right-5 w-8 h-8 sm:w-10 sm:h-10 bg-secondary rounded-full flex items-center justify-center shadow-md group-hover:bg-secondary-dark transition-all duration-300"
      >
        <svg class="w-4 h-4 sm:w-5 sm:h-5 text-primary transition-transform duration-300" :class="{ 'rotate-180': isFlipped }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
        </svg>
      </div>
    </div>

    <!-- Back of the card -->
    <div 
      class="absolute inset-0 bg-primary text-white rounded-xl flex flex-col transition-all duration-700 ease-in-out"
      :class="{
        'opacity-0 transform translate-x-full': !isFlipped,
        'opacity-100 transform translate-x-0': isFlipped
      }"
    >
      <!-- Back Header -->
      <div class="flex-shrink-0 p-4 sm:p-6 md:p-8 pb-2 sm:pb-3 md:pb-4 text-center">
        <h3 class="text-base sm:text-lg md:text-xl lg:text-2xl font-semibold leading-tight">{{ title }}</h3>
      </div>

      <!-- Back Content -->
      <div class="flex-1 px-4 sm:px-6 md:px-8 pb-12 sm:pb-14 md:pb-16 overflow-y-auto">
        <div class="h-full flex items-start justify-center">
          <p class="text-xs sm:text-sm md:text-base font-light leading-relaxed text-left">{{ long_desc }}</p>
        </div>
      </div>

      <!-- Collapse Icon -->
      <div class="absolute bottom-3 sm:bottom-4 md:bottom-5 right-3 sm:right-4 md:right-5 w-8 h-8 sm:w-10 sm:h-10 bg-secondary rounded-full flex items-center justify-center shadow-md hover:bg-secondary-dark transition-all duration-300">
        <svg class="w-4 h-4 sm:w-5 sm:h-5 text-primary transition-transform duration-300 rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
        </svg>
      </div>
    </div>

    <!-- Status Indicator (Top-left corner) -->
    <div 
      v-if="long_desc"
      class="absolute top-3 sm:top-4 md:top-5 left-3 sm:left-4 md:left-5 w-2 h-2 sm:w-3 sm:h-3 rounded-full transition-all duration-300"
      :class="isFlipped ? 'bg-secondary' : 'bg-gray-300'"
    ></div>
  </div>
</template>

<script setup>
import { ref } from 'vue';

const props = defineProps({
  icon: String,
  title: String,
  desc: String,
  long_desc: String,
});

const isFlipped = ref(false);

const toggleFlip = () => {
  if (props.long_desc) {
    isFlipped.value = !isFlipped.value;
  }
};
</script>

<style scoped>
/* Responsive height adjustments */
@media (max-width: 640px) {
  .min-h-64 {
    min-height: 16rem; /* 256px */
  }
}

@media (min-width: 641px) and (max-width: 768px) {
  .sm\:h-64 {
    height: 16rem; /* 256px */
  }
}

@media (min-width: 769px) and (max-width: 1024px) {
  .md\:h-72 {
    height: 18rem; /* 288px */
  }
}

@media (min-width: 1025px) {
  .lg\:h-80 {
    height: 20rem; /* 320px */
  }
}

/* Focus styles for accessibility */
div:focus-visible {
  outline: 2px solid #facb24;
  outline-offset: 2px;
  border-radius: 0.5rem;
}

/* Smooth transitions */
.transition-all {
  transition-property: all;
  transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
}

/* Transform utilities */
.transform {
  transform: translateX(0);
}

.translate-x-0 {
  transform: translateX(0);
}

.-translate-x-full {
  transform: translateX(-100%);
}

.translate-x-full {
  transform: translateX(100%);
}

.rotate-180 {
  transform: rotate(180deg);
}

/* Custom scrollbar for back content */
.overflow-y-auto::-webkit-scrollbar {
  width: 4px;
}

.overflow-y-auto::-webkit-scrollbar-track {
  background: rgba(255, 255, 255, 0.1);
  border-radius: 2px;
}

.overflow-y-auto::-webkit-scrollbar-thumb {
  background: rgba(250, 203, 36, 0.5);
  border-radius: 2px;
}

.overflow-y-auto::-webkit-scrollbar-thumb:hover {
  background: rgba(250, 203, 36, 0.7);
}

/* Hover effects */
.group:hover .group-hover\:bg-secondary {
  background-color: #facb24;
}

.group:hover .group-hover\:bg-secondary-dark {
  background-color: #e6b622;
}
</style>

