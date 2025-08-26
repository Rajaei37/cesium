<template>
  <!-- ENHANCED HERO SECTION -->
  <section
    id="home"
    class="relative bg-gradient-to-br from-[#362869] via-[#4a3b82] to-[#2a1d4f] text-white pt-24 pb-16 min-h-screen flex items-center overflow-hidden"
  >
    <!-- Animated Particle Background -->
    <div ref="particleContainer" class="absolute inset-0 w-full h-full z-0"></div>

    <!-- Enhanced Yellow Vector Background with Parallax -->
    <div 
      ref="vectorBackground" 
      class="absolute inset-0 w-full h-full overflow-hidden z-5"
      :style="{ transform: `translateY(${scrollY * 0.3}px)` }"
    >
      <img
        src="/assets/images/Vector.svg"
        alt="Background Vector"
        class="absolute inset-0 w-full h-full object-cover opacity-80 lg:opacity-90 animate-float-enhanced"
      />
    </div>

    <!-- Gradient Overlay with Dynamic Opacity -->
    <div 
      class="absolute inset-0 bg-gradient-to-t from-[#140c2b]/40 via-transparent to-[#140c2b]/40 z-10 pointer-events-none transition-opacity duration-700"
      :style="{ opacity: 0.6 + (scrollY * 0.001) }"
    ></div>

    <!-- Floating Geometric Shapes -->
    <div class="absolute inset-0 overflow-hidden z-5 pointer-events-none">
      <div 
        v-for="(shape, index) in floatingShapes" 
        :key="index"
        class="absolute animate-float-shape opacity-10"
        :style="{
          left: shape.x,
          top: shape.y,
          animationDelay: shape.delay,
          animationDuration: shape.duration
        }"
      >
        <div 
          :class="shape.class"
          class="bg-secondary/20 backdrop-blur-sm"
        ></div>
      </div>
    </div>

    <!-- Hero Content with Enhanced Animations -->
    <div class="container mx-auto px-4 sm:px-6 relative z-20 grid grid-cols-1 lg:grid-cols-2 gap-10 items-center py-10">
      <!-- Left: Text Content -->
      <div class="text-center lg:text-left">
        <!-- Main Title with Enhanced Animation -->
        <div 
          ref="titleContainer"
          class="flex flex-col lg:flex-row justify-center lg:justify-start items-center lg:items-baseline gap-x-3 mb-6"
        >
          <h1 
            ref="mainTitle"
            class="text-5xl sm:text-6xl md:text-7xl lg:text-8xl font-bold leading-tight bg-gradient-to-r from-white via-secondary to-white bg-clip-text text-transparent animate-title-glow"
          >
            Cesium
          </h1>
          <span 
            ref="subtitle"
            class="text-secondary text-xl sm:text-2xl md:text-3xl lg:text-4xl font-medium mt-2 lg:mt-0 animate-pulse-gentle"
          >
            is Active by nature
          </span>
        </div>

        <!-- Description with Typewriter Effect -->
        <div class="space-y-3 text-left max-w-xl lg:max-w-none mx-auto lg:mx-0 mb-8">
          <p 
            ref="desc1"
            class="text-lg sm:text-xl font-medium opacity-0 transform translate-y-4"
          >
            Cesium isn't a marketing agency.
          </p>
          <p 
            ref="desc2"
            class="text-base sm:text-lg opacity-0 transform translate-y-4"
          >
            It's a high-energy force designed to react with your business
          </p>
          <p 
            ref="desc3"
            class="text-base sm:text-lg opacity-0 transform translate-y-4"
          >
            sparking momentum, amplifying results, and scaling with precision.
          </p>
          <p 
            ref="desc4"
            class="text-base sm:text-lg opacity-0 transform translate-y-4"
          >
            we catalyze your brand's trajectory.
          </p>
        </div>

        <!-- Enhanced CTA Button -->
        <Link
          ref="ctaButton"
          href="/contact-us"
          class="group inline-flex items-center gap-3 bg-gradient-to-r from-secondary via-secondary-light to-secondary text-primary font-bold py-4 px-8 rounded-xl shadow-2xl hover:shadow-secondary/50 transition-all duration-500 transform hover:scale-105 hover:-translate-y-1 opacity-0 translate-y-4"
        >
          <span class="relative z-10">Request Strategy Call</span>
          <svg 
            class="w-5 h-5 transform group-hover:translate-x-1 transition-transform duration-300" 
            fill="none" 
            stroke="currentColor" 
            viewBox="0 0 24 24"
          >
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
          </svg>
          
          <!-- Button Glow Effect -->
          <div class="absolute inset-0 bg-gradient-to-r from-secondary/50 to-transparent rounded-xl blur-xl opacity-0 group-hover:opacity-100 transition-opacity duration-500 -z-10"></div>
        </Link>
      </div>

      <!-- Right: Enhanced Slot Machine -->
      <div 
        ref="slotMachine"
        class="flex justify-center lg:justify-end opacity-0 transform translate-x-8 mt-10 lg:mt-0"
      >
        <div class="relative">
          <MiniSlotMachine class="w-full max-w-[320px] sm:max-w-[360px] md:max-w-[420px] lg:max-w-[460px] transform hover:scale-105 transition-transform duration-500" />
          
          <!-- Glow Effect Around Slot Machine -->
          <div class="absolute inset-0 bg-gradient-to-r from-secondary/20 to-primary/20 rounded-3xl blur-3xl opacity-50 animate-pulse-slow -z-10"></div>
        </div>
      </div>
    </div>

    <!-- Scroll Indicator -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 z-20 animate-bounce-gentle">
      <div class="flex flex-col items-center text-white/70 hover:text-white transition-colors duration-300 cursor-pointer group" @click="scrollToNext">
        <span class="text-sm mb-2 group-hover:text-secondary transition-colors duration-300">Discover More</span>
        <svg class="w-6 h-6 animate-bounce" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
        </svg>
      </div>
    </div>
  </section>
</template>

<script setup>
import { ref, onMounted, onUnmounted } from 'vue';
import { Link } from '@inertiajs/vue3';
import MiniSlotMachine from '@/Components/MiniSlotMachine.vue';
import { useIntersectionObserver } from '@vueuse/core';

// Refs for animations
const titleContainer = ref(null);
const mainTitle = ref(null);
const subtitle = ref(null);
const desc1 = ref(null);
const desc2 = ref(null);
const desc3 = ref(null);
const desc4 = ref(null);
const ctaButton = ref(null);
const slotMachine = ref(null);
const particleContainer = ref(null);
const vectorBackground = ref(null);

// Scroll state for parallax
const scrollY = ref(0);

// Floating shapes data
const floatingShapes = ref([
  { x: '10%', y: '20%', delay: '0s', duration: '6s', class: 'w-16 h-16 rounded-full' },
  { x: '85%', y: '15%', delay: '1s', duration: '8s', class: 'w-12 h-12 rounded-lg rotate-45' },
  { x: '15%', y: '70%', delay: '2s', duration: '7s', class: 'w-20 h-20 rounded-full' },
  { x: '80%', y: '75%', delay: '3s', duration: '9s', class: 'w-14 h-14 rounded-lg rotate-12' },
  { x: '50%', y: '85%', delay: '4s', duration: '6s', class: 'w-10 h-10 rounded-full' },
]);

// Scroll handler for parallax effect
const handleScroll = () => {
  scrollY.value = window.scrollY;
};

// Scroll to next section
const scrollToNext = () => {
  const nextSection = document.querySelector('#home').nextElementSibling;
  if (nextSection) {
    nextSection.scrollIntoView({ behavior: 'smooth' });
  }
};

// Enhanced GSAP animations
const animateElements = () => {
  // Import GSAP dynamically
  import('gsap').then(({ gsap }) => {
    const tl = gsap.timeline();

    // Animate main title with stagger
    tl.to(mainTitle.value, {
      opacity: 1,
      y: 0,
      duration: 1,
      ease: "back.out(1.7)",
    })
    .to(subtitle.value, {
      opacity: 1,
      y: 0,
      duration: 0.8,
      ease: "power3.out",
    }, "-=0.5")
    .to([desc1.value, desc2.value, desc3.value, desc4.value], {
      opacity: 1,
      y: 0,
      duration: 0.6,
      ease: "power2.out",
      stagger: 0.2,
    }, "-=0.3")
    .to(ctaButton.value, {
      opacity: 1,
      y: 0,
      duration: 0.8,
      ease: "back.out(1.7)",
    }, "-=0.4")
    .to(slotMachine.value, {
      opacity: 1,
      x: 0,
      duration: 1,
      ease: "power3.out",
    }, "-=0.6");

    // Continuous animations
    gsap.to(mainTitle.value, {
      textShadow: "0 0 20px rgba(250, 203, 36, 0.5)",
      duration: 2,
      repeat: -1,
      yoyo: true,
      ease: "power2.inOut",
    });
  });
};

// Initialize particles (simple version)
const initParticles = () => {
  if (!particleContainer.value) return;

  for (let i = 0; i < 50; i++) {
    const particle = document.createElement('div');
    particle.className = 'absolute w-1 h-1 bg-secondary/20 rounded-full animate-particle';
    particle.style.left = Math.random() * 100 + '%';
    particle.style.top = Math.random() * 100 + '%';
    particle.style.animationDelay = Math.random() * 4 + 's';
    particle.style.animationDuration = (Math.random() * 3 + 2) + 's';
    particleContainer.value.appendChild(particle);
  }
};

onMounted(() => {
  // Initialize animations
  setTimeout(animateElements, 300);
  
  // Initialize particles
  initParticles();
  
  // Add scroll listener for parallax
  window.addEventListener('scroll', handleScroll);
});

onUnmounted(() => {
  window.removeEventListener('scroll', handleScroll);
});
</script>

<style scoped>
/* Enhanced Animations */
@keyframes floatEnhanced {
  0%, 100% { 
    transform: translateY(0px) rotate(0deg); 
  }
  25% { 
    transform: translateY(-8px) rotate(1deg); 
  }
  50% { 
    transform: translateY(-15px) rotate(0deg); 
  }
  75% { 
    transform: translateY(-8px) rotate(-1deg); 
  }
}

@keyframes floatShape {
  0%, 100% { 
    transform: translateY(0px) rotate(0deg) scale(1); 
    opacity: 0.1;
  }
  50% { 
    transform: translateY(-20px) rotate(180deg) scale(1.1); 
    opacity: 0.3;
  }
}

@keyframes particle {
  0% { 
    transform: translateY(0px) scale(0);
    opacity: 0;
  }
  10% {
    opacity: 1;
    transform: scale(1);
  }
  90% {
    opacity: 1;
  }
  100% { 
    transform: translateY(-100vh) scale(0);
    opacity: 0;
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

@keyframes pulseGentle {
  0%, 100% { 
    opacity: 1;
    transform: scale(1);
  }
  50% { 
    opacity: 0.8;
    transform: scale(1.05);
  }
}

@keyframes pulseSlow {
  0%, 100% { 
    opacity: 0.5;
  }
  50% { 
    opacity: 0.8;
  }
}

@keyframes bounceGentle {
  0%, 20%, 50%, 80%, 100% {
    transform: translateY(0);
  }
  40% {
    transform: translateY(-8px);
  }
  60% {
    transform: translateY(-4px);
  }
}

.animate-float-enhanced {
  animation: floatEnhanced 4s ease-in-out infinite;
}

.animate-float-shape {
  animation: floatShape 8s ease-in-out infinite;
}

.animate-particle {
  animation: particle linear infinite;
}

.animate-title-glow {
  animation: titleGlow 3s ease-in-out infinite;
}

.animate-pulse-gentle {
  animation: pulseGentle 3s ease-in-out infinite;
}

.animate-pulse-slow {
  animation: pulseSlow 4s ease-in-out infinite;
}

.animate-bounce-gentle {
  animation: bounceGentle 2s infinite;
}

/* Interactive hover effects */
.group:hover .animate-float-enhanced {
  animation-duration: 2s;
}

/* Responsive adjustments */
@media (max-width: 768px) {
  .animate-float-shape {
    display: none;
  }
}
</style>