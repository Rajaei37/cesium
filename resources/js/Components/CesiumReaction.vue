<template>
  <section ref="root" class="py-20 bg-[#362869] text-white relative overflow-hidden" 
           style="background-image: url('/assets/Rectangle8.jpg'); background-size: cover; background-position: center; background-attachment: fixed;">
    <div class="absolute inset-0 bg-[#362869] opacity-40 mix-blend-mode-screen"></div>

    <div class="container mx-auto px-6 text-center relative z-10">
      <h2 class="text-4xl lg:text-5xl font-bold mb-4">After the Cesium Reaction</h2>
      <p class="text-xl opacity-90 mb-10 max-w-3xl mx-auto font-light">we catalyze your brand&apos;s trajectory.</p>
      <p class="text-xl opacity-90 mb-16 max-w-3xl mx-auto font-light">Real numbers. Real ignition. Measurable explosions in growth and performance.</p>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 max-w-6xl mx-auto">
        <div v-for="(stat, idx) in stats" :key="idx" class="bg-white/10 backdrop-blur-sm rounded-xl p-6 text-center">
          <div class="text-4xl lg:text-5xl font-bold text-[#facb24] mb-2">{{ stat.value }}{{ stat.suffix }}</div>
          <h3 class="text-lg font-semibold mb-2">{{ stat.label }}</h3>
          <p class="text-sm opacity-80">{{ stat.description }}</p>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
import { ref } from 'vue';
import { useIntersectionObserver } from '@vueuse/core';

const root = ref(null);

const stats = [
  { value: "180", suffix: "%", label: "Combustion Boost", description: "Clients average over 180% growth in returns." },
  { value: "250", suffix: "+", label: "Ignitions Triggered", description: "Successful campaigns launched through our reactor." },
  { value: "97", suffix: "%", label: "Stable Reaction Rate", description: "Repeatable long-term performance." },
  { value: "-35", suffix: "%", label: "Cost-to-Acquisition Drop", description: "Reduced CAC after exposure." }
];

useIntersectionObserver(root, ([{ isIntersecting }]) => {
  if (isIntersecting) root.value?.classList.add('animate-fade-in-up');
}, { threshold: 0.15 });
</script>

<style scoped>
.animate-fade-in-up { animation: fadeInUp 0.8s ease-out forwards; opacity: 0; transform: translateY(20px); }
@keyframes fadeInUp { to { opacity: 1; transform: translateY(0); } }
</style>

