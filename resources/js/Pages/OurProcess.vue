<template>
  <AppHeader currentPage="our-process" />
  
  <div class="min-h-screen bg-white">
    <!-- Hero Section -->
    <section class="relative pt-32 pb-16 overflow-hidden">
      <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-6xl md:text-7xl lg:text-8xl font-black text-primary mb-8 tracking-tight">
          Our <span class="text-secondary">Process</span>
        </h1>
        <p class="text-xl md:text-2xl text-gray-600 max-w-2xl mx-auto leading-relaxed font-light">
          Five scientific steps that transform your business into a market leader
        </p>
      </div>
    </section>

    <!-- Process Steps Section -->
    <section class="py-20 relative">
      <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="space-y-32">
          <!-- Step 1: Ionization -->
          <ProcessStep 
            :step-number="1"
            step-index="01"
            title="Ionization"
            description="We isolate your business essence, define your brand identity, and give it the atomic charge it needs to interact with its market."
            visual-type="atom"
            :is-active="activeStep === 1"
            @step-focus="setActiveStep"
          />

          <!-- Step 2: Stabilization -->
          <ProcessStep 
            :step-number="2"
            step-index="02"
            title="Stabilization"
            description="We analyze your business model and market to identify friction points and ensure your foundation is optimized before ignition."
            visual-type="balance"
            :is-active="activeStep === 2"
            @step-focus="setActiveStep"
          />

          <!-- Step 3: Catalysis -->
          <ProcessStep 
            :step-number="3"
            step-index="03"
            title="Catalysis"
            description="We engineer tailored go-to-market strategies — modular, scalable, and performance-tuned to your specific vertical."
            visual-type="catalyst"
            :is-active="activeStep === 3"
            @step-focus="setActiveStep"
          />

          <!-- Step 4: Activation -->
          <ProcessStep 
            :step-number="4"
            step-index="04"
            title="Activation"
            description="We launch and react: campaigns, funnels, content, bonuses, and behavioral triggers — all executed with precision and control."
            visual-type="rocket"
            :is-active="activeStep === 4"
            @step-focus="setActiveStep"
          />

          <!-- Step 5: Oscillation -->
          <ProcessStep 
            :step-number="5"
            step-index="05"
            title="Oscillation"
            description="Post-launch, we track signals and market feedback to recalibrate. Bonuses evolve. Campaigns adapt. Growth compounds."
            visual-type="wave"
            :is-active="activeStep === 5"
            @step-focus="setActiveStep"
          />
        </div>
      </div>
    </section>

    <!-- CTA Section -->
    <section class="py-24 bg-primary relative overflow-hidden">
      <div class="absolute inset-0 bg-gradient-to-br from-primary via-primary-dark to-primary opacity-90"></div>
      
      <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-5xl md:text-6xl font-black text-white mb-8 tracking-tight">
          Ready to <span class="text-secondary">Transform?</span>
        </h2>
        <p class="text-xl text-gray-200 mb-12 max-w-2xl mx-auto font-light">
          Let's apply our scientific methodology to accelerate your business growth
        </p>
        <Link 
          href="/contact-us" 
          class="inline-flex items-center bg-secondary hover:bg-yellow-400 text-primary font-bold px-12 py-6 rounded-full text-xl shadow-2xl hover:shadow-3xl transition-all duration-500 transform hover:scale-105 hover:-translate-y-1"
        >
          Begin Your Process
          <svg class="ml-3 w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
          </svg>
        </Link>
      </div>
    </section>
  </div>
  
  <AppFooter />
</template>

<script setup>
import { ref, onMounted, onUnmounted } from 'vue';
import { Head, Link } from '@inertiajs/vue3';
import ProcessStep from '../Components/ProcessStep.vue';
import AppHeader from '../Components/AppHeader.vue';
import AppFooter from '../Components/AppFooter.vue';

// Page metadata
defineProps({
  title: {
    type: String,
    default: 'Our Process - Cesium Marketing'
  }
});

// Active step state
const activeStep = ref(1);

// Set active step
const setActiveStep = (stepNumber) => {
  activeStep.value = stepNumber;
};

// Auto-cycle through steps
let intervalId = null;

onMounted(() => {
  // Auto-cycle through steps every 5 seconds
  intervalId = setInterval(() => {
    activeStep.value = activeStep.value === 5 ? 1 : activeStep.value + 1;
  }, 5000);
});

onUnmounted(() => {
  if (intervalId) {
    clearInterval(intervalId);
  }
});
</script>

<style scoped>
/* Custom animations and effects */
.hover\:shadow-3xl:hover {
  box-shadow: 0 35px 60px -12px rgba(0, 0, 0, 0.25);
}

/* Smooth transitions */
* {
  transition: all 0.3s ease;
}

/* Typography enhancements */
.font-black {
  font-weight: 900;
}

.tracking-tight {
  letter-spacing: -0.025em;
}

.font-light {
  font-weight: 300;
}
</style>

<style scoped>
/* Custom animations and effects */
.hover\:shadow-3xl:hover {
  box-shadow: 0 35px 60px -12px rgba(0, 0, 0, 0.25);
}

/* Gradient text effect */
.gradient-text {
  background: linear-gradient(135deg, #362869, #facb24);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
}

/* Floating animation for background elements */
@keyframes float {
  0%, 100% { transform: translateY(0px); }
  50% { transform: translateY(-20px); }
}

.animate-float {
  animation: float 6s ease-in-out infinite;
}

.animate-float-delayed {
  animation: float 6s ease-in-out infinite;
  animation-delay: 2s;
}

.animate-float-slow {
  animation: float 8s ease-in-out infinite;
  animation-delay: 4s;
}
</style>

