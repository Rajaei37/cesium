<template>
  <div class="absolute inset-0 overflow-hidden pointer-events-none" aria-hidden="true">
    <img
      v-for="(img, i) in images"
      :key="i"
      :src="img.src"
      :alt="img.alt || 'decorative background'"
      :class="img.class"
      loading="lazy"
      decoding="async"
      draggable="false"
    />
  </div>
</template>

<script setup>
/**
 * Small, reusable component for decorative SVGs/images used as background elements.
 * Props:
 *  - images: [{ src, alt?, class }]
 *
 * Keep images small (SVG preferred).
 */
const props = defineProps({
  images: {
    type: Array,
    default: () => [],
  },
});
</script>

<style scoped>
/* Prevent pointer events and ensure visuals are subtle */
img { user-select: none; }
</style>

