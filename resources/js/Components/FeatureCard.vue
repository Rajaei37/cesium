<template>
  <div
    class="relative w-full h-64 rounded-xl shadow-lg transition-all duration-700 transform-style-preserve-3d cursor-pointer"
    :class="{ 'rotate-y-180': isFlipped }"
    @click="toggleFlip"
  >
    <!-- Front of the card -->
    <div class="absolute inset-0 backface-hidden bg-white p-8 rounded-xl flex flex-col items-center justify-center text-center">
      <div class="relative mb-6 w-24 h-24 flex items-center justify-center rounded-full bg-secondary-light group-hover:bg-secondary transition-all duration-300">
        <img :src="icon" :alt="title + ' icon'" class="w-16 h-16 object-contain" />
      </div>
      <h3 class="text-2xl font-semibold text-primary mb-3">{{ title }}</h3>
      <p class="text-gray-700 font-light">{{ desc }}</p>
      <span v-if="long_desc" class="absolute bottom-4 text-secondary font-medium">Tap to See More</span>
    </div>

    <!-- Back of the card -->
    <div class="absolute inset-0 backface-hidden rotate-y-180 bg-primary text-white p-8 rounded-xl flex flex-col items-center justify-center text-center overflow-y-auto">
      <h3 class="text-2xl font-semibold mb-3">{{ title }}</h3>
      <p class="font-light text-justify">{{ long_desc }}</p>
      <span class="absolute bottom-4 text-secondary font-medium">Tap to See Less</span>
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
  if (props.long_desc) {
    isFlipped.value = !isFlipped.value;
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
</style>


