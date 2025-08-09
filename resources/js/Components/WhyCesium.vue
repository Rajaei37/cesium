<template>
  <section ref="root" class="py-20 bg-gray-100 relative overflow-hidden">
    <BackgroundMolecules :images="bg" />

    <div class="container mx-auto px-6 text-center relative z-10">
      <h2 class="text-5xl lg:text-6xl font-bold text-[#362869] mb-4">Why <span class="text-[#362869]">Cesium</span>?</h2>
      <p class="text-xl text-gray-600 mb-16 font-medium">Because Inactive Doesn&apos;t Win.</p>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto">
        <div v-for="(c, idx) in cards" :key="idx" class="bg-white rounded-xl shadow-lg p-8 relative overflow-hidden">
          <div class="absolute top-4 right-4 text-8xl font-bold text-gray-100 opacity-30">{{ idx + 1 }}</div>
          <div class="inline-flex items-center justify-center w-12 h-12 bg-[#facb24] rounded-full text-[#362869] font-bold text-xl mb-6">{{ idx + 1 }})</div>
          <h3 class="text-2xl font-bold text-[#362869] mb-4" v-html="c.title"></h3>
          <p class="text-gray-600 text-sm leading-relaxed" v-html="c.description"></p>
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
  { src: '/assets/Group22.svg', alt: 'molecule', class: 'absolute top-10 left-10 w-16 opacity-30' },
  { src: '/assets/Group23.svg', alt: 'molecule', class: 'absolute top-20 right-20 w-20 opacity-30' }
];

const cards = [
  { 
    title: 'Precision-Fueled<br>Reactions', 
    description: 'Every move we make is based on calibrated data and tested hypotheses.<br>Our strategies aren&apos;t just data-driven, they&apos;re reaction-tuned to create maximum market ignition.' 
  },
  { 
    title: 'Repeatable Chain<br>Reactions', 
    description: 'We don&apos;t rely on luck. We engineer repeatable systems that spark, scale, and sustain performance — with measurable outcomes at every stage.' 
  },
  { 
    title: 'Domain<br>Chemistry', 
    description: 'We don&apos;t just work in your industry — we react with it. Years of deep learning give us the ability to anticipate volatility, exploit opportunity, and maximize momentum.' 
  }
];

useIntersectionObserver(root, ([{ isIntersecting }]) => {
  if (isIntersecting) root.value?.classList.add('animate-fade-in-up');
}, { threshold: 0.15 });
</script>

<style scoped>
.animate-fade-in-up { animation: fadeInUp 0.8s ease-out forwards; opacity: 0; transform: translateY(20px); }
@keyframes fadeInUp { to { opacity: 1; transform: translateY(0); } }
</style>

