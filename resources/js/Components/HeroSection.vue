<template>
  <section ref="root" id="home" class="relative bg-[#362869] text-white pt-20 pb-16 overflow-hidden min-h-screen flex items-center">
    <BackgroundMolecules :images="bg" />

    <div class="container mx-auto px-4 sm:px-6 relative z-10 flex flex-col lg:flex-row items-center justify-between">
      <div class="w-full lg:w-1/2 text-left mb-8 lg:mb-0">
        <h1 class="text-6xl sm:text-7xl md:text-8xl font-bold leading-tight mb-6">
          Cesium
          <span class="block text-[#facb24] text-sm font-medium mt-2">
            is Active by nature
          </span>
        </h1>

        <div class="space-y-1 mb-8 max-w-2xl">
          <p class="text-xl sm:text-2xl font-medium opacity-95">Cesium isn&apos;t a marketing agency.</p>
          <p class="text-lg sm:text-xl opacity-90 font-light leading-relaxed">It&apos;s a high-energy force designed to react with your business</p>
          <p class="text-lg sm:text-xl opacity-90 font-light leading-relaxed">sparking momentum, amplifying results, and scaling with precision.</p>
        </div>

        <a href="/contact-us" class="inline-block bg-[#facb24] text-[#362869] font-bold py-4 px-8 rounded shadow hover:bg-[#FFD300] transition transform hover:scale-105">
          Request Strategy Call
        </a>
      </div>

      <div class="w-full lg:w-1/2 flex justify-center lg:justify-end">
        <!-- Placeholder for slot machine or other interactive element -->
        <div class="w-full max-w-xs sm:max-w-md md:max-w-lg bg-white/10 rounded-lg p-8 backdrop-blur-sm">
          <div class="text-center">
            <div class="text-4xl mb-4">⚡</div>
            <h3 class="text-xl font-bold mb-2">Ready to React?</h3>
            <p class="text-sm opacity-80">Let&apos;s ignite your growth</p>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
import { ref } from 'vue';
import { useIntersectionObserver } from '@vueuse/core';
import BackgroundMolecules from './BackgroundMolecules.vue';

const root = ref(null);
const bg = [
  { 
    src: '/assets/Vector.svg', 
    alt: 'vector', 
    class: 'pointer-events-none absolute w-full h-full object-contain opacity-20 transform -translate-x-[10%] min-w-[120%]'
  }
];

// reveal once
useIntersectionObserver(root, ([{ isIntersecting }]) => {
  if (isIntersecting) {
    // add a helper class (keeps original markup unchanged)
    root.value?.classList.add('animate-fade-in-up');
  }
}, { threshold: 0.15 });
</script>

<style scoped>
@keyframes fadeInUp { from { opacity:0; transform: translateY(24px); } to { opacity:1; transform: translateY(0); } }
.animate-fade-in-up { animation: fadeInUp 0.75s ease-out forwards; }
@keyframes float-slow { 0%,100%{transform: translateY(0);}50%{transform: translateY(-8px);} }
.animate-float-slow { animation: float-slow 6s ease-in-out infinite; }
</style>

