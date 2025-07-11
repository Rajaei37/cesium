<template>
  <div class="flex flex-wrap justify-center items-center gap-8 md:gap-12 py-8">
    <div v-for="(badge, index) in badges" :key="index" class="flex flex-col items-center">
      <img :src="badge.src" :alt="badge.alt" class="h-16 md:h-20 object-contain" />
      <p v-if="badge.caption" class="mt-2 text-sm text-gray-600 text-center">{{ badge.caption }}</p>
    </div>
  </div>
</template>

<script setup>
defineProps({
  badges: {
    type: Array,
    default: () => []
  }
})
</script>

<style scoped>
/* Add any specific styles here if needed */
</style>


