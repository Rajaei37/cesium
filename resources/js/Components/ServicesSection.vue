<template>
  <!-- Enhanced What We Offer Section -->
  <div class="container mx-auto px-6 text-center relative z-10 py-20">
    <!-- Section Header with Enhanced Animation -->
    <div class="text-center mb-16" ref="headerSection">
      <h2 class="text-4xl lg:text-5xl font-semibold mb-4 text-white animate-title-reveal">
        What We <span class="text-gradient-yellow">Offer</span>
      </h2>
      <div class="w-24 h-1 bg-gradient-to-r from-secondary to-secondary-light mx-auto mb-6 rounded-full animate-scale-in"></div>
      <p class="text-xl opacity-90 max-w-3xl mx-auto font-light text-white animate-fade-in-delayed">
        Custom-formulated marketing solutions that ignite iGaming growth.<br>
        Each service is engineered to <span class="text-secondary font-medium">spark action</span> and <span class="text-secondary font-medium">scale performance</span>.
      </p>
    </div>
    
    <!-- Enhanced Service Cards with Modern Design -->
    <div class="max-w-5xl mx-auto space-y-6" ref="servicesContainer">
      <!-- Service Card 1: Paid Media -->
      <div 
        class="service-card-enhanced group bg-gradient-to-r from-white/95 to-white/90 backdrop-blur-lg border border-white/20 p-8 flex flex-col lg:flex-row items-start lg:items-center justify-between transition-all duration-700 hover:shadow-2xl hover:shadow-secondary/20 cursor-pointer rounded-2xl"
        @click="navigateToService('paid-media')"
        @mouseenter="playCardHover"
      >
        <!-- Icon and Content -->
        <div class="flex items-start space-x-6 flex-1">
          <!-- Animated Icon -->
          <div class="service-icon bg-gradient-to-br from-secondary to-secondary-light p-4 rounded-xl shadow-lg group-hover:scale-110 group-hover:rotate-6 transition-all duration-500">
            <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
            </svg>
          </div>
          
          <!-- Content -->
          <div class="text-left flex-1">
            <h3 class="text-2xl font-bold text-primary mb-3 group-hover:text-secondary transition-colors duration-300">
              Paid Media
            </h3>
            <p class="text-gray-700 text-base leading-relaxed max-w-2xl">
              Launch high-voltage ad campaigns across top platforms to drive instant results and maximize your ROI.
            </p>
            
            <!-- Feature Tags -->
            <div class="flex flex-wrap gap-2 mt-4">
              <span class="px-3 py-1 bg-secondary/10 text-secondary text-xs font-medium rounded-full">Google Ads</span>
              <span class="px-3 py-1 bg-secondary/10 text-secondary text-xs font-medium rounded-full">Social Media</span>
              <span class="px-3 py-1 bg-secondary/10 text-secondary text-xs font-medium rounded-full">Programmatic</span>
            </div>
          </div>
        </div>

        <!-- Action Buttons -->
        <div class="flex items-center space-x-4 mt-6 lg:mt-0 lg:ml-6">
          <button 
            class="learn-more-btn opacity-0 group-hover:opacity-100 bg-gradient-to-r from-primary to-primary-light text-white px-6 py-3 font-semibold rounded-xl transition-all duration-500 transform group-hover:scale-105 hover:shadow-lg"
            @click.stop="navigateToService('paid-media')"
          >
            Learn More
          </button>
          <svg class="w-6 h-6 text-primary group-hover:text-secondary transition-all duration-300 transform group-hover:translate-x-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
          </svg>
        </div>

        <!-- Hover Glow Effect -->
        <div class="absolute inset-0 bg-gradient-to-r from-secondary/5 to-transparent rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"></div>
      </div>

      <!-- Service Card 2: SEO Optimization -->
      <div 
        class="service-card-enhanced group bg-gradient-to-r from-white/95 to-white/90 backdrop-blur-lg border border-white/20 p-8 flex flex-col lg:flex-row items-start lg:items-center justify-between transition-all duration-700 hover:shadow-2xl hover:shadow-secondary/20 cursor-pointer rounded-2xl"
        @click="navigateToService('seo-optimization')"
        @mouseenter="playCardHover"
      >
        <div class="flex items-start space-x-6 flex-1">
          <div class="service-icon bg-gradient-to-br from-green-400 to-green-500 p-4 rounded-xl shadow-lg group-hover:scale-110 group-hover:rotate-6 transition-all duration-500">
            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
            </svg>
          </div>
          
          <div class="text-left flex-1">
            <h3 class="text-2xl font-bold text-primary mb-3 group-hover:text-secondary transition-colors duration-300">
              SEO Optimization
            </h3>
            <p class="text-gray-700 text-base leading-relaxed max-w-2xl">
              Climb search rankings and sustain long-term organic traffic reactions through strategic optimization.
            </p>
            
            <div class="flex flex-wrap gap-2 mt-4">
              <span class="px-3 py-1 bg-green-100 text-green-700 text-xs font-medium rounded-full">Technical SEO</span>
              <span class="px-3 py-1 bg-green-100 text-green-700 text-xs font-medium rounded-full">Link Building</span>
              <span class="px-3 py-1 bg-green-100 text-green-700 text-xs font-medium rounded-full">Content Strategy</span>
            </div>
          </div>
        </div>

        <div class="flex items-center space-x-4 mt-6 lg:mt-0 lg:ml-6">
          <button 
            class="learn-more-btn opacity-0 group-hover:opacity-100 bg-gradient-to-r from-primary to-primary-light text-white px-6 py-3 font-semibold rounded-xl transition-all duration-500 transform group-hover:scale-105 hover:shadow-lg"
            @click.stop="navigateToService('seo-optimization')"
          >
            Learn More
          </button>
          <svg class="w-6 h-6 text-primary group-hover:text-secondary transition-all duration-300 transform group-hover:translate-x-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
          </svg>
        </div>

        <div class="absolute inset-0 bg-gradient-to-r from-green-500/5 to-transparent rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"></div>
      </div>

      <!-- Service Card 3: Social Media Marketing -->
      <div 
        class="service-card-enhanced group bg-gradient-to-r from-white/95 to-white/90 backdrop-blur-lg border border-white/20 p-8 flex flex-col lg:flex-row items-start lg:items-center justify-between transition-all duration-700 hover:shadow-2xl hover:shadow-secondary/20 cursor-pointer rounded-2xl"
        @click="navigateToService('social-media-marketing')"
        @mouseenter="playCardHover"
      >
        <div class="flex items-start space-x-6 flex-1">
          <div class="service-icon bg-gradient-to-br from-pink-400 to-purple-500 p-4 rounded-xl shadow-lg group-hover:scale-110 group-hover:rotate-6 transition-all duration-500">
            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 4V2a1 1 0 011-1h3a1 1 0 011 1v2h4a1 1 0 011 1v3a1 1 0 01-1 1h-4v10a1 1 0 01-1 1H8a1 1 0 01-1-1V9H3a1 1 0 01-1-1V5a1 1 0 011-1h4z"></path>
            </svg>
          </div>
          
          <div class="text-left flex-1">
            <h3 class="text-2xl font-bold text-primary mb-3 group-hover:text-secondary transition-colors duration-300">
              Social Media Marketing
            </h3>
            <p class="text-gray-700 text-base leading-relaxed max-w-2xl">
              Build vibrant online communities and drive viral growth through strategic social campaigns.
            </p>
            
            <div class="flex flex-wrap gap-2 mt-4">
              <span class="px-3 py-1 bg-pink-100 text-pink-700 text-xs font-medium rounded-full">Community Building</span>
              <span class="px-3 py-1 bg-pink-100 text-pink-700 text-xs font-medium rounded-full">Content Creation</span>
              <span class="px-3 py-1 bg-pink-100 text-pink-700 text-xs font-medium rounded-full">Influencer Partnerships</span>
            </div>
          </div>
        </div>

        <div class="flex items-center space-x-4 mt-6 lg:mt-0 lg:ml-6">
          <button 
            class="learn-more-btn opacity-0 group-hover:opacity-100 bg-gradient-to-r from-primary to-primary-light text-white px-6 py-3 font-semibold rounded-xl transition-all duration-500 transform group-hover:scale-105 hover:shadow-lg"
            @click.stop="navigateToService('social-media-marketing')"
          >
            Learn More
          </button>
          <svg class="w-6 h-6 text-primary group-hover:text-secondary transition-all duration-300 transform group-hover:translate-x-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
          </svg>
        </div>

        <div class="absolute inset-0 bg-gradient-to-r from-pink-500/5 to-transparent rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"></div>
      </div>

      <!-- Service Card 4: Data Analytics -->
      <div 
        class="service-card-enhanced group bg-gradient-to-r from-white/95 to-white/90 backdrop-blur-lg border border-white/20 p-8 flex flex-col lg:flex-row items-start lg:items-center justify-between transition-all duration-700 hover:shadow-2xl hover:shadow-secondary/20 cursor-pointer rounded-2xl"
        @click="navigateToService('data-analytics')"
        @mouseenter="playCardHover"
      >
        <div class="flex items-start space-x-6 flex-1">
          <div class="service-icon bg-gradient-to-br from-blue-400 to-indigo-500 p-4 rounded-xl shadow-lg group-hover:scale-110 group-hover:rotate-6 transition-all duration-500">
            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
            </svg>
          </div>
          
          <div class="text-left flex-1">
            <h3 class="text-2xl font-bold text-primary mb-3 group-hover:text-secondary transition-colors duration-300">
              Data Analytics
            </h3>
            <p class="text-gray-700 text-base leading-relaxed max-w-2xl">
              Transform raw data into strategic intelligence that fuels precision-targeted growth.
            </p>
            
            <div class="flex flex-wrap gap-2 mt-4">
              <span class="px-3 py-1 bg-blue-100 text-blue-700 text-xs font-medium rounded-full">Performance Tracking</span>
              <span class="px-3 py-1 bg-blue-100 text-blue-700 text-xs font-medium rounded-full">Predictive Analytics</span>
              <span class="px-3 py-1 bg-blue-100 text-blue-700 text-xs font-medium rounded-full">Custom Dashboards</span>
            </div>
          </div>
        </div>

        <div class="flex items-center space-x-4 mt-6 lg:mt-0 lg:ml-6">
          <button 
            class="learn-more-btn opacity-0 group-hover:opacity-100 bg-gradient-to-r from-primary to-primary-light text-white px-6 py-3 font-semibold rounded-xl transition-all duration-500 transform group-hover:scale-105 hover:shadow-lg"
            @click.stop="navigateToService('data-analytics')"
          >
            Learn More
          </button>
          <svg class="w-6 h-6 text-primary group-hover:text-secondary transition-all duration-300 transform group-hover:translate-x-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
          </svg>
        </div>

        <div class="absolute inset-0 bg-gradient-to-r from-blue-500/5 to-transparent rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"></div>
      </div>

      <!-- Additional Services Placeholder -->
      <div class="text-center mt-8">
        <p class="text-white/70 text-sm mb-4">+ 4 more specialized services</p>
        <div class="flex justify-center space-x-2">
          <div class="w-2 h-2 bg-secondary/30 rounded-full animate-pulse"></div>
          <div class="w-2 h-2 bg-secondary/50 rounded-full animate-pulse animation-delay-200"></div>
          <div class="w-2 h-2 bg-secondary/70 rounded-full animate-pulse animation-delay-400"></div>
        </div>
      </div>
    </div>

    <!-- Enhanced CTA Button -->
    <div class="mt-16" ref="ctaSection">
      <a 
        href="/services" 
        class="group inline-flex items-center space-x-3 bg-gradient-to-r from-secondary via-secondary-light to-secondary text-primary font-bold py-4 px-8 rounded-2xl shadow-2xl hover:shadow-secondary/50 transition-all duration-500 transform hover:scale-105 hover:-translate-y-2 relative overflow-hidden"
      >
        <!-- Background Animation -->
        <div class="absolute inset-0 bg-gradient-to-r from-white/0 via-white/20 to-white/0 transform -translate-x-full group-hover:translate-x-full transition-transform duration-1000"></div>
        
        <!-- Content -->
        <span class="relative z-10">Explore all services in detail</span>
        <svg class="w-5 h-5 transform group-hover:translate-x-1 transition-transform duration-300 relative z-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
        </svg>
        
        <!-- Glow Effect -->
        <div class="absolute inset-0 bg-secondary/30 rounded-2xl blur-xl opacity-0 group-hover:opacity-100 transition-opacity duration-500 -z-10"></div>
      </a>
    </div>
  </div>
</template>

<script setup>
import { ref, onMounted } from 'vue';
import { router } from '@inertiajs/vue3';
import { useScrollReveal } from '@/utils/scrollReveal';

// Refs for animation
const headerSection = ref(null);
const servicesContainer = ref(null);
const ctaSection = ref(null);

// Initialize scroll reveal
const { reveal, revealBatch } = useScrollReveal();

// Navigation handler
const navigateToService = (serviceId) => {
  router.visit(`/services?service=${serviceId}`);
};

// Card hover sound effect (optional)
const playCardHover = () => {
  // Optional: Add subtle sound feedback
  // const audio = new Audio('/assets/sounds/card-hover.mp3');
  // audio.volume = 0.05;
  // audio.play().catch(() => {});
};

onMounted(() => {
  // Initialize scroll reveal animations
  reveal(headerSection.value, {
    distance: '50px',
    duration: 800,
    delay: 200
  });

  revealBatch('.service-card-enhanced', {
    distance: '80px',
    duration: 1000,
    stagger: 200,
    delay: 400
  });

  reveal(ctaSection.value, {
    distance: '30px',
    duration: 600,
    delay: 800
  });
});
</script>

<style scoped>
/* Enhanced Animations */
@keyframes titleReveal {
  from {
    opacity: 0;
    transform: translateY(30px);
    filter: blur(10px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
    filter: blur(0);
  }
}

@keyframes scaleIn {
  from {
    transform: scaleX(0);
    opacity: 0;
  }
  to {
    transform: scaleX(1);
    opacity: 1;
  }
}

@keyframes fadeInDelayed {
  from {
    opacity: 0;
    transform: translateY(20px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

.animate-title-reveal {
  animation: titleReveal 1s ease-out forwards;
}

.animate-scale-in {
  animation: scaleIn 0.8s ease-out 0.5s forwards;
  transform: scaleX(0);
}

.animate-fade-in-delayed {
  animation: fadeInDelayed 0.8s ease-out 0.8s forwards;
  opacity: 0;
}

/* Service Card Enhancements */
.service-card-enhanced {
  position: relative;
  backdrop-filter: blur(10px);
  -webkit-backdrop-filter: blur(10px);
  will-change: transform;
}

.service-card-enhanced::before {
  content: '';
  position: absolute;
  inset: 0;
  border-radius: 1rem;
  padding: 1px;
  background: linear-gradient(135deg, rgba(250, 203, 36, 0.2), transparent, rgba(250, 203, 36, 0.2));
  mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
  mask-composite: xor;
  -webkit-mask-composite: xor;
  opacity: 0;
  transition: opacity 0.5s ease;
}

.service-card-enhanced:hover::before {
  opacity: 1;
}

.service-icon {
  position: relative;
  will-change: transform;
}

.service-icon::after {
  content: '';
  position: absolute;
  inset: -2px;
  border-radius: inherit;
  background: inherit;
  filter: blur(8px);
  opacity: 0;
  transition: opacity 0.3s ease;
  z-index: -1;
}

.group:hover .service-icon::after {
  opacity: 0.3;
}

/* Button Animations */
.learn-more-btn {
  position: relative;
  overflow: hidden;
}

.learn-more-btn::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
  transform: translateX(-100%);
  transition: transform 0.6s ease;
}

.learn-more-btn:hover::before {
  transform: translateX(100%);
}

/* Animation Delays */
.animation-delay-200 {
  animation-delay: 0.2s;
}

.animation-delay-400 {
  animation-delay: 0.4s;
}

/* Responsive Enhancements */
@media (max-width: 768px) {
  .service-card-enhanced {
    padding: 1.5rem;
  }
  
  .service-card-enhanced .flex {
    flex-direction: column;
    align-items: flex-start;
  }
  
  .service-icon {
    margin-bottom: 1rem;
  }
}

/* Accessibility Improvements */
@media (prefers-reduced-motion: reduce) {
  .service-card-enhanced,
  .service-icon,
  .learn-more-btn {
    transition: none;
  }
  
  .animate-title-reveal,
  .animate-scale-in,
  .animate-fade-in-delayed {
    animation: none;
    opacity: 1;
    transform: none;
  }
}

/* Focus states for accessibility */
.service-card-enhanced:focus,
.learn-more-btn:focus {
  outline: 3px solid var(--cesium-yellow);
  outline-offset: 2px;
}
</style>