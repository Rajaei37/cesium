<template>
  <div
    class="relative p-8 rounded-xl shadow-lg transition-all duration-300 overflow-hidden group"
    :class="isExpanded ? 'h-auto' : 'h-64'"
  >
    <div class="relative z-10 flex flex-col items-center text-center">
      <div class="relative mb-6 w-24 h-24 flex items-center justify-center rounded-full bg-secondary-light group-hover:bg-secondary transition-all duration-300">
        <img :src="icon" :alt="title + ' icon'" class="w-16 h-16 object-contain" />
      </div>
      <h3 class="text-2xl font-semibold text-primary mb-3">{{ title }}</h3>
      <p class="text-gray-700 font-light mb-4">{{ desc }}</p>
      <button
        v-if="long_desc"
        @click="toggleExpand"
        class="text-secondary font-medium hover:underline focus:outline-none"
      >
        {{ isExpanded ? 'Show Less' : 'Learn More' }}
      </button>
    </div>

    <div
      v-if="long_desc"
      class="absolute inset-0 bg-white p-8 rounded-xl shadow-lg transition-all duration-300 transform"
      :class="isExpanded ? 'translate-y-0 opacity-100 z-20' : 'translate-y-full opacity-0 -z-10'"
    >
      <h3 class="text-2xl font-semibold text-primary mb-3 text-center">{{ title }}</h3>
      <p class="text-gray-700 font-light text-justify mb-4">{{ long_desc }}</p>
      <button
        @click="toggleExpand"
        class="absolute bottom-4 left-1/2 -translate-x-1/2 text-secondary font-medium hover:underline focus:outline-none"
      >
        Show Less
      </button>
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

const isExpanded = ref(false);

const toggleExpand = () => {
  isExpanded.value = !isExpanded.value;
};
</script>

<style scoped>
/* Add any specific styles for the FeatureCard here if needed */
</style>


