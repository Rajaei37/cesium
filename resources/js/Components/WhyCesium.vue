<template>
  <!-- Enhanced Why Cesium Section -->
  <section class="py-20 bg-gradient-to-br from-cesium-light-gray via-gray-50 to-white relative overflow-hidden">
    <!-- Background Decorative Elements -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
      <!-- Floating Particles -->
      <div 
        v-for="(particle, index) in backgroundParticles" 
        :key="index"
        class="absolute w-2 h-2 bg-secondary/10 rounded-full animate-float-particle"
        :style="{
          left: particle.x,
          top: particle.y,
          animationDelay: particle.delay,
          animationDuration: particle.duration
        }"
      ></div>
      
      <!-- Gradient Orbs -->
      <div class="absolute top-20 left-10 w-64 h-64 bg-gradient-to-r from-secondary/5 to-primary/5 rounded-full blur-3xl animate-pulse-slow"></div>
      <div class="absolute bottom-20 right-10 w-80 h-80 bg-gradient-to-r from-primary/5 to-secondary/5 rounded-full blur-3xl animate-pulse-slow animation-delay-1000"></div>
    </div>

    <div class="container mx-auto px-6 text-center relative z-10">
      <!-- Enhanced Header -->
      <div class="mb-16" ref="headerSection">
        <h2 class="text-4xl lg:text-5xl font-normal text-primary mb-4 animate-title-cascade">
          <span class="text-primary font-light opacity-0">Why</span> 
          <span class="text-primary font-extrabold opacity-0 inline-block">Cesium</span>
          <span class="text-secondary opacity-0 inline-block">?</span>
        </h2>
        
        <!-- Animated Subtitle -->
        <p class="text-lg text-gray-600 font-medium mb-8 opacity-0 animate-fade-in-up animation-delay-800">
          Because <span class="text-primary font-bold">Inactive</span> doesn't <span class="text-secondary font-bold">Win</span>.
        </p>

        <!-- Decorative Line -->
        <div class="w-32 h-1 bg-gradient-to-r from-primary via-secondary to-primary mx-auto rounded-full opacity-0 animate-scale-in animation-delay-1000"></div>
      </div>

      <!-- Enhanced Cards Grid -->
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto" ref="cardsContainer">
        <!-- Card 1: Precision-Fueled Reactions -->
        <div 
          class="enhanced-card group relative bg-white/80 backdrop-blur-lg rounded-2xl shadow-xl hover:shadow-2xl p-8 transition-all duration-700 hover:-translate-y-4 hover:scale-105 cursor-pointer overflow-hidden border border-white/50 hover:border-secondary/30"
          style="min-height: 320px;"
          @mouseenter="handleCardHover(0)"
          @mouseleave="handleCardLeave(0)"
        >
          <!-- Background Image with Overlay -->
          <div 
            class="absolute inset-0 bg-cover bg-center opacity-20 group-hover:opacity-30 transition-opacity duration-500"
            style="background-image: url('/assets/images/card1.svg');"
          ></div>
          
          <!-- Gradient Overlay -->
          <div class="absolute inset-0 bg-gradient-to-br from-primary/5 via-transparent to-secondary/5 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
          
          <!-- Content -->
          <div class="relative z-20">
            <!-- Animated Number Badge -->
            <div class="flex justify-start mb-6">
              <div class="number-badge bg-gradient-to-r from-secondary to-secondary-light text-primary font-bold text-3xl w-12 h-12 rounded-full flex items-center justify-center shadow-lg group-hover:scale-110 group-hover:rotate-12 transition-all duration-500">
                1
              </div>
            </div>
            
            <!-- Card Title -->
            <h3 class="text-2xl font-bold text-primary mb-6 leading-tight text-left group-hover:text-secondary transition-colors duration-300">
              Precision-Fueled<br>
              <span class="text-gradient-purple">Reactions</span>
            </h3>
            
            <!-- Card Description -->
            <div class="text-gray-700 text-base leading-relaxed text-left space-y-4">
              <p class="transform group-hover:translate-x-2 transition-transform duration-300">
                Every move we make is based on calibrated data and tested hypotheses.
              </p>
              <p class="transform group-hover:translate-x-2 transition-transform duration-500">
                Our strategies aren't just data-driven, they're <span class="text-secondary font-semibold">reaction-tuned</span> to create maximum market ignition.
              </p>
            </div>

            <!-- Hover Icon -->
            <div class="absolute top-6 right-6 opacity-0 group-hover:opacity-100 transition-all duration-300 transform group-hover:rotate-12">
              <svg class="w-8 h-8 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
              </svg>
            </div>
          </div>

          <!-- Hover Glow Effect -->
          <div class="absolute inset-0 bg-gradient-to-r from-secondary/10 to-primary/10 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500 blur-xl -z-10"></div>
        </div>

        <!-- Card 2: Repeatable Chain Reactions -->
        <div 
          class="enhanced-card group relative bg-white/80 backdrop-blur-lg rounded-2xl shadow-xl hover:shadow-2xl p-8 transition-all duration-700 hover:-translate-y-4 hover:scale-105 cursor-pointer overflow-hidden border border-white/50 hover:border-secondary/30"
          style="min-height: 320px;"
          @mouseenter="handleCardHover(1)"
          @mouseleave="handleCardLeave(1)"
        >
          <div 
            class="absolute inset-0 bg-cover bg-center opacity-20 group-hover:opacity-30 transition-opacity duration-500"
            style="background-image: url('/assets/images/card2.svg');"
          ></div>
          
          <div class="absolute inset-0 bg-gradient-to-br from-green-500/5 via-transparent to-blue-500/5 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
          
          <div class="relative z-20">
            <div class="flex justify-start mb-6">
              <div class="number-badge bg-gradient-to-r from-green-400 to-blue-500 text-white font-bold text-3xl w-12 h-12 rounded-full flex items-center justify-center shadow-lg group-hover:scale-110 group-hover:rotate-12 transition-all duration-500">
                2
              </div>
            </div>
            
            <h3 class="text-2xl font-bold text-primary mb-6 leading-tight text-left group-hover:text-secondary transition-colors duration-300">
              Repeatable Chain<br>
              <span class="text-gradient-purple">Reactions</span>
            </h3>
            
            <p class="text-gray-700 text-base leading-relaxed text-left transform group-hover:translate-x-2 transition-transform duration-300">
              We don't rely on luck. We engineer <span class="text-secondary font-semibold">repeatable systems</span> that spark, scale, and sustain performance — with measurable outcomes at every stage.
            </p>

            <div class="absolute top-6 right-6 opacity-0 group-hover:opacity-100 transition-all duration-300 transform group-hover:rotate-12">
              <svg class="w-8 h-8 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
              </svg>
            </div>
          </div>

          <div class="absolute inset-0 bg-gradient-to-r from-green-500/10 to-blue-500/10 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500 blur-xl -z-10"></div>
        </div>

        <!-- Card 3: Domain Chemistry -->
        <div 
          class="enhanced-card group relative bg-white/80 backdrop-blur-lg rounded-2xl shadow-xl hover:shadow-2xl p-8 transition-all duration-700 hover:-translate-y-4 hover:scale-105 cursor-pointer overflow-hidden border border-white/50 hover:border-secondary/30"
          style="min-height: 320px;"
          @mouseenter="handleCardHover(2)"
          @mouseleave="handleCardLeave(2)"
        >
          <div 
            class="absolute inset-0 bg-cover bg-center opacity-20 group-hover:opacity-30 transition-opacity duration-500"
            style="background-image: url('/assets/images/card3.svg');"
          ></div>
          
          <div class="absolute inset-0 bg-gradient-to-br from-purple-500/5 via-transparent to-pink-500/5 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
          
          <div class="relative z-20">
            <div class="flex justify-start mb-6">
              <div class="number-badge bg-gradient-to-r from-purple-500 to-pink-500 text-white font-bold text-3xl w-12 h-12 rounded-full flex items-center justify-center shadow-lg group-hover:scale-110 group-hover:rotate-12 transition-all duration-500">
                3
              </div>
            </div>
            
            <h3 class="text-2xl font-bold text-primary mb-6 leading-tight text-left group-hover:text-secondary transition-colors duration-300">
              Domain<br>
              <span class="text-gradient-purple">Chemistry</span>
            </h3>
            
            <p class="text-gray-700 text-base leading-relaxed text-left transform group-hover:translate-x-2 transition-transform duration-300">
              We don't just work in your industry — we <span class="text-secondary font-semibold">react with it</span>. Years of deep learning give us the ability to anticipate volatility, exploit opportunity, and maximize momentum.
            </p>

            <div class="absolute top-6 right-6 opacity-0 group-hover:opacity-100 transition-all duration-300 transform group-hover:rotate-12">
              <svg class="w-8 h-8 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path>
              </svg>
            </div>
          </div>

          <div class="absolute inset-0 bg-gradient-to-r from-purple-500/10 to-pink-500/10 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500 blur-xl -z-10"></div>
        </div>
      </div>

      <!-- Call to Action -->
      <div class="mt-16 opacity-0 animate-fade-in-up animation-delay-1200" ref="ctaSection">
        <a 
          href="/contact-us"
          class="group inline-flex items-center space-x-3 bg-gradient-to-r from-primary to-primary-light hover:from-secondary hover:to-secondary-light text-white hover:text-primary font-semibold px-8 py-4 shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:scale-105 hover:-translate-y-1"
          style="border-radius: 0.56px;"
        >
          <span>Experience the Cesium Difference</span>
          <svg class="w-5 h-5 transform group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
          </svg>
        </a>
      </div>
    </div>
  </section>
</template>

<script setup>
import { ref, onMounted } from 'vue';
import { useScrollReveal } from '@/utils/scrollReveal';

// Refs for animation
const headerSection = ref(null);
const cardsContainer = ref(null);
const ctaSection = ref(null);

// Background particles data
const backgroundParticles = ref([
  { x: '10%', y: '20%', delay: '0s', duration: '4s' },
  { x: '20%', y: '80%', delay: '1s', duration: '5s' },
  { x: '80%', y: '30%', delay: '2s', duration: '6s' },
  { x: '70%', y: '70%', delay: '3s', duration: '4s' },
  { x: '40%', y: '10%', delay: '1.5s', duration: '5.5s' },
  { x: '90%', y: '90%', delay: '2.5s', duration: '4.5s' },
]);

// Initialize scroll reveal
const { reveal, revealBatch } = useScrollReveal();

// Card interaction handlers
const handleCardHover = (cardIndex) => {
  // Optional: Add sound effect or haptic feedback
  console.log(`Card ${cardIndex + 1} hovered`);
};

const handleCardLeave = (cardIndex) => {
  // Optional: Reset any hover-specific states
  console.log(`Card ${cardIndex + 1} unhovered`);
};

onMounted(() => {
  // Initialize scroll reveal animations
  reveal(headerSection.value, {
    distance: '50px',
    duration: 800,
    delay: 200
  });

  revealBatch('.enhanced-card', {
    distance: '100px',
    duration: 1000,
    stagger: 300,
    delay: 600
  });

  reveal(ctaSection.value, {
    distance: '30px',
    duration: 600,
    delay: 1000
  });

  // Animate title cascade
  setTimeout(() => {
    const titleSpans = document.querySelectorAll('.animate-title-cascade span');
    titleSpans.forEach((span, index) => {
      setTimeout(() => {
        span.style.opacity = '1';
        span.style.transform = 'translateY(0)';
        span.style.filter = 'blur(0)';
      }, index * 200);
    });
  }, 300);
});
</script>

<style scoped>
/* Enhanced Animations */
@keyframes floatParticle {
  0%, 100% {
    transform: translateY(0px) rotate(0deg);
    opacity: 0.3;
  }
  50% {
    transform: translateY(-20px) rotate(180deg);
    opacity: 0.8;
  }
}

@keyframes titleCascade {
  from {
    opacity: 0;
    transform: translateY(30px);
    filter: blur(5px);
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

@keyframes fadeInUp {
  from {
    opacity: 0;
    transform: translateY(30px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

@keyframes pulseSlow {
  0%, 100% {
    opacity: 0.3;
    transform: scale(1);
  }
  50% {
    opacity: 0.6;
    transform: scale(1.05);
  }
}

/* Animation Classes */
.animate-float-particle {
  animation: floatParticle linear infinite;
}

.animate-title-cascade span {
  display: inline-block;
  opacity: 0;
  transform: translateY(30px);
  filter: blur(5px);
  transition: all 0.8s cubic-bezier(0.25, 0.46, 0.45, 0.94);
}

.animate-scale-in {
  animation: scaleIn 0.8s ease-out forwards;
  transform: scaleX(0);
}

.animate-fade-in-up {
  animation: fadeInUp 0.8s ease-out forwards;
}

.animate-pulse-slow {
  animation: pulseSlow 4s ease-in-out infinite;
}

/* Enhanced Card Styles */
.enhanced-card {
  backdrop-filter: blur(16px);
  -webkit-backdrop-filter: blur(16px);
  will-change: transform;
  position: relative;
}

.enhanced-card::before {
  content: '';
  position: absolute;
  inset: -2px;
  border-radius: 1rem;
  background: linear-gradient(135deg, 
    transparent 25%, 
    rgba(250, 203, 36, 0.1) 50%, 
    transparent 75%
  );
  opacity: 0;
  transition: opacity 0.5s ease;
  z-index: -1;
}

.enhanced-card:hover::before {
  opacity: 1;
}

.number-badge {
  position: relative;
  will-change: transform;
  box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
}

.number-badge::after {
  content: '';
  position: absolute;
  inset: -2px;
  border-radius: inherit;
  background: inherit;
  filter: blur(10px);
  opacity: 0;
  transition: opacity 0.3s ease;
  z-index: -1;
}

.group:hover .number-badge::after {
  opacity: 0.4;
}

/* Animation Delays */
.animation-delay-800 {
  animation-delay: 0.8s;
}

.animation-delay-1000 {
  animation-delay: 1s;
}

.animation-delay-1200 {
  animation-delay: 1.2s;
}

/* Responsive Design */
@media (max-width: 768px) {
  .enhanced-card {
    padding: 1.5rem;
  }
  
  .number-badge {
    width: 2.5rem;
    height: 2.5rem;
    font-size: 1.25rem;
  }
  
  .enhanced-card h3 {
    font-size: 1.5rem;
  }
}

/* Accessibility */
@media (prefers-reduced-motion: reduce) {
  .enhanced-card,
  .number-badge,
  .animate-title-cascade span {
    transition: none;
    animation: none;
  }
  
  .animate-float-particle,
  .animate-pulse-slow {
    animation: none;
  }
  
  .animate-scale-in,
  .animate-fade-in-up {
    animation: none;
    opacity: 1;
    transform: none;
  }
}

/* Focus states */
.enhanced-card:focus {
  outline: 3px solid var(--cesium-yellow);
  outline-offset: 2px;
}
</style>