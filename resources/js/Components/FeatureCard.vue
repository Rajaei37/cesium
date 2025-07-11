<template>
  <div
    class="p-6 bg-white shadow-md rounded-xl text-center transform transition duration-300 hover:-translate-y-1 hover:shadow-lg group"
  >
    <img
      :src="icon"
      alt="Icon"
      class="w-12 h-12 mx-auto mb-4 transition-transform duration-300 group-hover:scale-110"
    />
    <h3 class="text-xl font-bold text-[#362869] mb-2">{{ title }}</h3>
    <p class="text-gray-600">{{ desc }}</p>
  </div>
</template>

<script setup>
defineProps({
  icon: String,
  title: String,
  desc: String,
});
</script>


