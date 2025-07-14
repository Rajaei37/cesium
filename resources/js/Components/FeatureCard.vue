<template>
  <div
    class="p-6 bg-white shadow-md rounded-xl text-center transform transition duration-300 hover:-translate-y-1 hover:shadow-lg group flex flex-col items-center justify-center"
  >
    <div class="relative w-24 h-24 mb-4 flex items-center justify-center">
      <div class="absolute inset-0 bg-secondary-light rounded-full transform scale-0 group-hover:scale-100 transition-transform duration-300"></div>
      <img
        :src="icon"
        alt="Icon"
        class="w-16 h-16 relative z-10 transition-transform duration-300 group-hover:scale-110"
      />
    </div>
    <h3 class="text-xl font-bold text-[#362869] mb-2">{{ title }}</h3>
    <p class="text-gray-600 text-sm font-light">{{ desc }}</p>
  </div>
</template>

<script setup>
defineProps({
  icon: String,
  title: String,
  desc: String,
});
</script>

<style scoped>
/* Add any specific styles for the enhanced FeatureCard here */
</style>


