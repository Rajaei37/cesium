<template>
  <!-- Enhanced After the Cesium Reaction Section -->
  <section class="py-20 bg-gradient-to-br from-primary via-primary-dark to-primary-darker relative overflow-hidden">
    <!-- Animated Background Elements -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
      <!-- Molecular Structure Background -->
      <div class="absolute inset-0 opacity-10">
        <svg class="w-full h-full" viewBox="0 0 1200 800" fill="none" xmlns="http://www.w3.org/2000/svg">
          <!-- Animated molecular connections -->
          <g class="animate-pulse-slow">
            <circle cx="200" cy="150" r="4" fill="currentColor" class="text-secondary animate-float-molecule">
              <animate attributeName="r" values="4;6;4" dur="3s" repeatCount="indefinite"/>
            </circle>
            <circle cx="400" cy="200" r="3" fill="currentColor" class="text-secondary animate-float-molecule animation-delay-500">
              <animate attributeName="r" values="3;5;3" dur="2.5s" repeatCount="indefinite"/>
            </circle>
            <circle cx="800" cy="100" r="5" fill="currentColor" class="text-secondary animate-float-molecule animation-delay-1000">
              <animate attributeName="r" values="5;7;5" dur="4s" repeatCount="indefinite"/>
            </circle>
            <line x1="200" y1="150" x2="400" y2="200" stroke="currentColor" stroke-width="1" class="text-secondary/30 animate-pulse"/>
            <line x1="400" y1="200" x2="800" y2="100" stroke="currentColor" stroke-width="1" class="text-secondary/30 animate-pulse animation-delay-1000"/>
          </g>
        </svg>
      </div>
      
      <!-- Floating Particles -->
      <div 
        v-for="(particle, index) in floatingParticles" 
        :key="index"
        class="absolute w-1 h-1 bg-secondary/30 rounded-full animate-float-particle"
        :style="{
          left: particle.x,
          top: particle.y,
          animationDelay: particle.delay,
          animationDuration: particle.duration
        }"
      ></div>
      
      <!-- Gradient Orbs -->
      <div class="absolute top-10 right-20 w-96 h-96 bg-gradient-to-r from-secondary/10 to-transparent rounded-full blur-3xl animate-pulse-slow"></div>
      <div class="absolute bottom-10 left-20 w-80 h-80 bg-gradient-to-r from-secondary/5 to-primary/10 rounded-full blur-3xl animate-pulse-slow animation-delay-2000"></div>
    </div>

    <div class="container mx-auto px-6 text-center relative z-10">
      <!-- Enhanced Header -->
      <div class="mb-16" ref="headerSection">
        <h2 class="text-4xl lg:text-5xl font-bold mb-4 text-white animate-title-glow">
          After the Cesium Reaction
        </h2>
        <p class="text-xl opacity-90 mb-8 font-light max-w-3xl mx-auto text-white animate-fade-in-up animation-delay-500">
          Real numbers. Real ignition. Measurable explosions in growth and performance.
        </p>
        
        <!-- Decorative Line -->
        <div class="w-32 h-1 bg-gradient-to-r from-secondary via-secondary-light to-secondary mx-auto opacity-0 animate-scale-in animation-delay-800" style="border-radius: 0.56px;"></div>
      </div>
      
      <!-- Enhanced Stats Grid -->
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 max-w-6xl mx-auto" ref="statsContainer">
        <!-- Stat 1: 180% -->
        <div 
          class="enhanced-stat-card group relative bg-white/5 backdrop-blur-lg p-8 transition-all duration-700 hover:-translate-y-4 hover:scale-105 cursor-pointer overflow-hidden border border-white/10 hover:border-secondary/30"
          style="border-radius: 0.56px;"
          @mouseenter="handleStatHover(0)"
        >
          <!-- Background Glow -->
          <div class="absolute inset-0 bg-gradient-to-br from-secondary/5 via-transparent to-secondary/10 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
          
          <!-- Content -->
          <div class="relative z-10 text-center">
            <!-- Animated Number -->
            <div 
              class="text-5xl lg:text-6xl font-bold text-secondary mb-2 group-hover:scale-110 transition-transform duration-500"
              ref="stat1"
            >
              180%
            </div>
            
            <!-- Title -->
            <div class="text-lg font-semibold mb-3 text-white group-hover:text-secondary transition-colors duration-300">
              Combustion Boost
            </div>
            
            <!-- Description -->
            <p class="text-sm opacity-80 leading-relaxed text-white group-hover:opacity-100 transition-opacity duration-300">
              Your ROI doesn't just increase - it combusts. After exposure to Cesium's reaction chain, clients average over 180% growth in returns.
            </p>
          </div>

          <!-- Hover Effect -->
          <div class="absolute inset-0 bg-gradient-to-r from-secondary/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 blur-xl -z-10" style="border-radius: 0.56px;"></div>
        </div>
        
        <!-- Stat 2: 250+ -->
        <div 
          class="enhanced-stat-card group relative bg-white/5 backdrop-blur-lg p-8 transition-all duration-700 hover:-translate-y-4 hover:scale-105 cursor-pointer overflow-hidden border border-white/10 hover:border-secondary/30"
          style="border-radius: 0.56px;"
          @mouseenter="handleStatHover(1)"
        >
          <div class="absolute inset-0 bg-gradient-to-br from-green-500/5 via-transparent to-blue-500/10 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
          
          <div class="relative z-10 text-center">
            <div 
              class="text-5xl lg:text-6xl font-bold text-secondary mb-2 group-hover:scale-110 transition-transform duration-500"
              ref="stat2"
            >
              250+
            </div>
            
            <div class="text-lg font-semibold mb-3 text-white group-hover:text-secondary transition-colors duration-300">
              Ignitions Triggered
            </div>
            
            <p class="text-sm opacity-80 leading-relaxed text-white group-hover:opacity-100 transition-opacity duration-300">
              That's how many successful campaigns have already run on our reactor — each designed to launch performance at scale.
            </p>
          </div>

          <div class="absolute inset-0 bg-gradient-to-r from-green-500/10 to-blue-500/10 opacity-0 group-hover:opacity-100 transition-opacity duration-500 blur-xl -z-10" style="border-radius: 0.56px;"></div>
        </div>
        
        <!-- Stat 3: 97% -->
        <div 
          class="enhanced-stat-card group relative bg-white/5 backdrop-blur-lg p-8 transition-all duration-700 hover:-translate-y-4 hover:scale-105 cursor-pointer overflow-hidden border border-white/10 hover:border-secondary/30"
          style="border-radius: 0.56px;"
          @mouseenter="handleStatHover(2)"
        >
          <div class="absolute inset-0 bg-gradient-to-br from-purple-500/5 via-transparent to-pink-500/10 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
          
          <div class="relative z-10 text-center">
            <div 
              class="text-5xl lg:text-6xl font-bold text-secondary mb-2 group-hover:scale-110 transition-transform duration-500"
              ref="stat3"
            >
              97%
            </div>
            
            <div class="text-lg font-semibold mb-3 text-white group-hover:text-secondary transition-colors duration-300">
              Stable Reaction Rate
            </div>
            
            <p class="text-sm opacity-80 leading-relaxed text-white group-hover:opacity-100 transition-opacity duration-300">
              We don't flash and fade. Our systems are engineered for long-term performance — and clients stay with us because the results are repeatable.
            </p>
          </div>

          <div class="absolute inset-0 bg-gradient-to-r from-purple-500/10 to-pink-500/10 opacity-0 group-hover:opacity-100 transition-opacity duration-500 blur-xl -z-10" style="border-radius: 0.56px;"></div>
        </div>
        
        <!-- Stat 4: -35% -->
        <div 
          class="enhanced-stat-card group relative bg-white/5 backdrop-blur-lg p-8 transition-all duration-700 hover:-translate-y-4 hover:scale-105 cursor-pointer overflow-hidden border border-white/10 hover:border-secondary/30"
          style="border-radius: 0.56px;"
          @mouseenter="handleStatHover(3)"
        >
          <div class="absolute inset-0 bg-gradient-to-br from-orange-500/5 via-transparent to-red-500/10 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
          
          <div class="relative z-10 text-center">
            <div 
              class="text-5xl lg:text-6xl font-bold text-secondary mb-2 group-hover:scale-110 transition-transform duration-500"
              ref="stat4"
            >
              -35%
            </div>
            
            <div class="text-lg font-semibold mb-3 text-white group-hover:text-secondary transition-colors duration-300">
              Cost-to-Acquisition Drop
            </div>
            
            <p class="text-sm opacity-80 leading-relaxed text-white group-hover:opacity-100 transition-opacity duration-300">
              Your ROI doesn't just decrease - it combusts. After exposure to Cesium's traction formula, clients average over 35% growth in revenue.
            </p>
          </div>

          <div class="absolute inset-0 bg-gradient-to-r from-orange-500/10 to-red-500/10 opacity-0 group-hover:opacity-100 transition-opacity duration-500 blur-xl -z-10" style="border-radius: 0.56px;"></div>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
import { ref, onMounted } from 'vue';
import { useScrollReveal } from '@/utils/scrollReveal';

// Refs for animation
const headerSection = ref(null);
const statsContainer = ref(null);
const stat1 = ref(null);
const stat2 = ref(null);
const stat3 = ref(null);
const stat4 = ref(null);

// Floating particles data
const floatingParticles = ref([
  { x: '15%', y: '25%', delay: '0s', duration: '6s' },
  { x: '85%', y: '15%', delay: '1s', duration: '8s' },
  { x: '25%', y: '75%', delay: '2s', duration: '7s' },
  { x: '75%', y: '85%', delay: '3s', duration: '9s' },
  { x: '45%', y: '35%', delay: '1.5s', duration: '5s' },
  { x: '65%', y: '65%', delay: '2.5s', duration: '6.5s' },
  { x: '5%', y: '55%', delay: '4s', duration: '8s' },
  { x: '95%', y: '45%', delay: '0.5s', duration: '7.5s' },
]);

// Initialize scroll reveal
const { reveal, revealBatch } = useScrollReveal();

// Stat interaction handlers
const handleStatHover = (statIndex) => {
  // Optional: Add sound effect or additional animations
  console.log(`Stat ${statIndex + 1} hovered`);
};

// Counter animation function
const animateCounter = (element, target, duration = 2000) => {
  if (!element) return;
  
  const start = 0;
  const increment = target / (duration / 16);
  let current = start;
  
  const timer = setInterval(() => {
    current += increment;
    if (current >= target) {
      current = target;
      clearInterval(timer);
    }
    
    // Format the number based on the target
    if (target.toString().includes('%')) {
      element.textContent = Math.floor(current) + '%';
    } else if (target.toString().includes('+')) {
      element.textContent = Math.floor(current) + '+';
    } else if (target.toString().includes('-')) {
      element.textContent = '-' + Math.floor(Math.abs(current)) + '%';
    } else {
      element.textContent = Math.floor(current);
    }
  }, 16);
};

onMounted(() => {
  // Initialize scroll reveal animations
  reveal(headerSection.value, {
    distance: '50px',
    duration: 800,
    delay: 200
  });

  revealBatch('.enhanced-stat-card', {
    distance: '100px',
    duration: 1000,
    stagger: 200,
    delay: 600
  });

  // Animate counters when they come into view
  setTimeout(() => {
    animateCounter(stat1.value, 180);
    animateCounter(stat2.value, 250);
    animateCounter(stat3.value, 97);
    animateCounter(stat4.value, -35);
  }, 1000);
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
    transform: translateY(-30px) rotate(180deg);
    opacity: 0.8;
  }
}

@keyframes floatMolecule {
  0%, 100% {
    transform: translateY(0px) scale(1);
  }
  50% {
    transform: translateY(-10px) scale(1.1);
  }
}

@keyframes titleGlow {
  0%, 100% {
    text-shadow: 0 0 10px rgba(250, 203, 36, 0.3);
  }
  50% {
    text-shadow: 0 0 20px rgba(250, 203, 36, 0.6), 0 0 30px rgba(250, 203, 36, 0.4);
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

.animate-float-molecule {
  animation: floatMolecule 4s ease-in-out infinite;
}

.animate-title-glow {
  animation: titleGlow 3s ease-in-out infinite;
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

/* Enhanced Stat Card Styles */
.enhanced-stat-card {
  backdrop-filter: blur(16px);
  -webkit-backdrop-filter: blur(16px);
  will-change: transform;
  position: relative;
}

.enhanced-stat-card::before {
  content: '';
  position: absolute;
  inset: -2px;
  background: linear-gradient(135deg, 
    transparent 25%, 
    rgba(250, 203, 36, 0.1) 50%, 
    transparent 75%
  );
  opacity: 0;
  transition: opacity 0.5s ease;
  z-index: -1;
  border-radius: 0.56px;
}

.enhanced-stat-card:hover::before {
  opacity: 1;
}

/* Animation Delays */
.animation-delay-500 {
  animation-delay: 0.5s;
}

.animation-delay-800 {
  animation-delay: 0.8s;
}

.animation-delay-1000 {
  animation-delay: 1s;
}

.animation-delay-2000 {
  animation-delay: 2s;
}

/* Responsive Design */
@media (max-width: 768px) {
  .enhanced-stat-card {
    padding: 1.5rem;
  }
  
  .enhanced-stat-card .text-5xl {
    font-size: 2.5rem;
  }
}

/* Accessibility */
@media (prefers-reduced-motion: reduce) {
  .enhanced-stat-card,
  .animate-title-glow,
  .animate-float-particle,
  .animate-float-molecule,
  .animate-pulse-slow {
    animation: none;
    transition: none;
  }
  
  .animate-scale-in,
  .animate-fade-in-up {
    animation: none;
    opacity: 1;
    transform: none;
  }
}
</style>


