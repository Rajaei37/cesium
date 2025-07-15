<template>
  <div
    class="relative w-full min-h-64 sm:h-64 md:h-72 lg:h-80 rounded-xl shadow-lg transition-all duration-700 transform-style-preserve-3d cursor-pointer"
    :class="{ 'rotate-y-180': isFlipped }"
    @click="toggleFlip"
    @keydown.enter="toggleFlip"
    @keydown.space.prevent="toggleFlip"
    tabindex="0"
    role="button"
    :aria-label="isFlipped ? 'Hide details for ' + title : 'Show details for ' + title"
  >
    <!-- Front of the card -->
    <div class="absolute inset-0 backface-hidden bg-white p-4 sm:p-6 md:p-8 rounded-xl flex flex-col items-center justify-center text-center">
      <div class="relative mb-4 sm:mb-6 w-16 h-16 sm:w-20 sm:h-20 md:w-24 md:h-24 flex items-center justify-center rounded-full bg-secondary-light group-hover:bg-secondary transition-all duration-300">
        <img :src="icon" :alt="title + ' icon'" class="w-10 h-10 sm:w-12 sm:h-12 md:w-16 md:h-16 object-contain" />
      </div>
      <h3 class="text-lg sm:text-xl md:text-2xl font-semibold text-primary mb-2 sm:mb-3 leading-tight">{{ title }}</h3>
      <p class="text-sm sm:text-base text-gray-700 font-light leading-relaxed">{{ desc }}</p>
      <span v-if="long_desc" class="absolute bottom-2 sm:bottom-4 text-xs sm:text-sm text-secondary font-medium">{{ isFlipped ? 'Tap to See Less' : 'Tap to See More' }}</span>
    </div>

    <!-- Back of the card -->
    <div class="absolute inset-0 backface-hidden rotate-y-180 bg-primary text-white p-4 sm:p-6 md:p-8 rounded-xl flex flex-col items-center justify-center text-center overflow-y-auto">
      <h3 class="text-lg sm:text-xl md:text-2xl font-semibold mb-2 sm:mb-3 leading-tight">{{ title }}</h3>
      <div class="flex-1 flex items-center justify-center">
        <p class="text-xs sm:text-sm md:text-base font-light text-justify leading-relaxed overflow-y-auto max-h-full">{{ long_desc }}</p>
      </div>
      <span class="absolute bottom-2 sm:bottom-4 text-xs sm:text-sm text-secondary font-medium">Tap to See Less</span>
    </div>
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
  console.log('Card clicked:', props.title, 'Has long_desc:', !!props.long_desc);
  if (props.long_desc) {
    isFlipped.value = !isFlipped.value;
    console.log('Card flipped to:', isFlipped.value);
  }
};
</script>

<style scoped>
.transform-style-preserve-3d {
  transform-style: preserve-3d;
}

.backface-hidden {
  backface-visibility: hidden;
}

.rotate-y-180 {
  transform: rotateY(180deg);
}

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

/* Ensure text doesn't overflow on smaller screens */
@media (max-width: 640px) {
  .text-justify {
    text-align: left;
  }
}

/* Focus styles for accessibility */
div:focus-visible {
  outline: 2px solid #facb24;
  outline-offset: 2px;
  border-radius: 0.5rem;
}
</style>

