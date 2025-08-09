<template>
  <section id="services" ref="root" class="py-20 bg-[#362869] text-white relative overflow-hidden"
           style="background-image: url('/assets/Rectangle8.jpg'); background-size: cover; background-position: center; background-attachment: fixed;">
    <div class="absolute inset-0 bg-[#362869] opacity-40 mix-blend-mode-screen"></div>

    <div class="container mx-auto px-6 relative z-10">
      <div class="text-center mb-16">
        <h2 class="text-4xl lg:text-5xl font-semibold text-white mb-4">What We Offer</h2>
        <p class="text-xl text-white/90 max-w-3xl mx-auto font-light">Comprehensive marketing solutions designed specifically for the iGaming industry</p>
      </div>

      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8 mb-12">
        <div v-for="(s, i) in services" :key="i" 
             class="group bg-gray-100 rounded-[0.56px] shadow-lg p-8 text-center relative overflow-hidden hover:bg-[#facb24] hover:scale-105 transition-all duration-300">
          <div class="w-16 h-16 bg-[#facb24] group-hover:bg-[#362869] rounded-full flex items-center justify-center mx-auto mb-6 transition-colors">
            <div class="w-10 h-10 text-[#362869] group-hover:text-white text-2xl font-bold">{{ s.icon }}</div>
          </div>
          <h3 class="text-xl font-bold text-[#362869] mb-4">{{ s.title }}</h3>
          <p class="text-sm leading-relaxed text-gray-600 group-hover:text-[#362869] mb-6">{{ s.description }}</p>
          
          <!-- Learn More Button - Hidden by default, visible on hover -->
          <a href="https://odin-recharge-bot.online/what-we-offer" 
             class="inline-block bg-[#362869] text-white px-4 py-2 rounded-[0.56px] text-sm font-semibold opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            Learn More →
          </a>
        </div>
      </div>

      <!-- CTA Button -->
      <div class="text-center">
        <a href="https://odin-recharge-bot.online/what-we-offer" 
           class="inline-block bg-[#facb24] text-[#362869] font-bold py-4 px-8 rounded-[0.56px] shadow-lg hover:bg-[#FFD300] transition transform hover:scale-105">
          Explore all services in detail
        </a>
      </div>
    </div>
  </section>
</template>

<script setup>
import { ref } from 'vue';
import { useIntersectionObserver } from '@vueuse/core';

const root = ref(null);

const services = [
  { 
    title: 'Social Media Marketing', 
    description: 'Build engaged communities and drive viral growth through strategic social campaigns.', 
    icon: '📱'
  },
  { 
    title: 'Data Analytics', 
    description: 'Transform raw data into actionable insights that fuel precision-targeted growth strategies.', 
    icon: '📊'
  },
  { 
    title: 'Content Marketing', 
    description: 'Create compelling narratives that resonate with your audience and drive engagement.', 
    icon: '✍️'
  },
  { 
    title: 'Email Marketing', 
    description: 'Deliver personalized messages that convert prospects into loyal customers.', 
    icon: '📧'
  },
  { 
    title: 'SEO Optimization', 
    description: 'Improve your search engine rankings and organic visibility with proven strategies.', 
    icon: '🔍'
  },
  { 
    title: 'Branding & Visual Identity', 
    description: 'Create a powerful brand presence that stands out in the competitive market.', 
    icon: '🎨'
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

