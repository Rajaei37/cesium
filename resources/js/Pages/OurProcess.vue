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

    <!-- Circular Menu and Content Display Section -->
    <section class="py-20 relative">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Circular Menu -->
        <div class="flex justify-center mb-16">
          <div class="relative">
            <!-- Central Circle -->
            <div class="w-32 h-32 bg-gradient-to-br from-primary to-primary-dark rounded-full flex items-center justify-center shadow-2xl">
              <div class="text-white text-2xl font-bold">{{ activeStep }}</div>
            </div>
            
            <!-- Process Step Circles -->
            <div class="absolute inset-0">
              <!-- Step 1: Ionization (Top) -->
              <button
                @click="setActiveStep(1)"
                class="absolute w-20 h-20 rounded-full transition-all duration-500 transform hover:scale-110 focus:outline-none"
                :class="activeStep === 1 ? 'bg-secondary shadow-2xl scale-110' : 'bg-gray-200 hover:bg-gray-300'"
                style="top: -60px; left: 50%; transform: translateX(-50%);"
              >
                <img 
                  src="/images/process/ionization.svg" 
                  alt="Ionization" 
                  class="w-12 h-12 mx-auto"
                  :class="activeStep === 1 ? 'filter brightness-0' : 'filter grayscale'"
                />
              </button>
              
              <!-- Step 2: Stabilization (Top Right) -->
              <button
                @click="setActiveStep(2)"
                class="absolute w-20 h-20 rounded-full transition-all duration-500 transform hover:scale-110 focus:outline-none"
                :class="activeStep === 2 ? 'bg-secondary shadow-2xl scale-110' : 'bg-gray-200 hover:bg-gray-300'"
                style="top: -30px; right: -60px;"
              >
                <img 
                  src="/images/process/stabilization.svg" 
                  alt="Stabilization" 
                  class="w-12 h-12 mx-auto"
                  :class="activeStep === 2 ? 'filter brightness-0' : 'filter grayscale'"
                />
              </button>
              
              <!-- Step 3: Catalysis (Bottom Right) -->
              <button
                @click="setActiveStep(3)"
                class="absolute w-20 h-20 rounded-full transition-all duration-500 transform hover:scale-110 focus:outline-none"
                :class="activeStep === 3 ? 'bg-secondary shadow-2xl scale-110' : 'bg-gray-200 hover:bg-gray-300'"
                style="bottom: -30px; right: -60px;"
              >
                <img 
                  src="/images/process/catalysis.svg" 
                  alt="Catalysis" 
                  class="w-12 h-12 mx-auto"
                  :class="activeStep === 3 ? 'filter brightness-0' : 'filter grayscale'"
                />
              </button>
              
              <!-- Step 4: Activation (Bottom Left) -->
              <button
                @click="setActiveStep(4)"
                class="absolute w-20 h-20 rounded-full transition-all duration-500 transform hover:scale-110 focus:outline-none"
                :class="activeStep === 4 ? 'bg-secondary shadow-2xl scale-110' : 'bg-gray-200 hover:bg-gray-300'"
                style="bottom: -30px; left: -60px;"
              >
                <img 
                  src="/images/process/activation.svg" 
                  alt="Activation" 
                  class="w-12 h-12 mx-auto"
                  :class="activeStep === 4 ? 'filter brightness-0' : 'filter grayscale'"
                />
              </button>
              
              <!-- Step 5: Oscillation (Top Left) -->
              <button
                @click="setActiveStep(5)"
                class="absolute w-20 h-20 rounded-full transition-all duration-500 transform hover:scale-110 focus:outline-none"
                :class="activeStep === 5 ? 'bg-secondary shadow-2xl scale-110' : 'bg-gray-200 hover:bg-gray-300'"
                style="top: -30px; left: -60px;"
              >
                <img 
                  src="/images/process/oscillation.svg" 
                  alt="Oscillation" 
                  class="w-12 h-12 mx-auto"
                  :class="activeStep === 5 ? 'filter brightness-0' : 'filter grayscale'"
                />
              </button>
            </div>
            
            <!-- Connecting Lines -->
            <svg class="absolute inset-0 w-full h-full pointer-events-none" viewBox="0 0 200 200">
              <!-- Lines connecting center to each step -->
              <line x1="100" y1="100" x2="100" y2="40" stroke="#362869" stroke-width="2" opacity="0.3" />
              <line x1="100" y1="100" x2="160" y2="70" stroke="#362869" stroke-width="2" opacity="0.3" />
              <line x1="100" y1="100" x2="160" y2="130" stroke="#362869" stroke-width="2" opacity="0.3" />
              <line x1="100" y1="100" x2="40" y2="130" stroke="#362869" stroke-width="2" opacity="0.3" />
              <line x1="100" y1="100" x2="40" y2="70" stroke="#362869" stroke-width="2" opacity="0.3" />
            </svg>
          </div>
        </div>

        <!-- Content Display Area -->
        <div class="max-w-4xl mx-auto">
          <div class="bg-white rounded-3xl shadow-2xl p-12 border border-gray-100 transition-all duration-700">
            <!-- Step Header -->
            <div class="text-center mb-8">
              <div class="text-6xl font-black text-secondary mb-4">
                {{ String(activeStep).padStart(2, '0') }}
              </div>
              <h2 class="text-4xl md:text-5xl font-black text-primary mb-6">
                {{ getStepData(activeStep).title }}
              </h2>
            </div>
            
            <!-- Step Visual -->
            <div class="flex justify-center mb-8">
              <div class="w-32 h-32 bg-gradient-to-br from-primary to-primary-dark rounded-3xl flex items-center justify-center shadow-xl">
                <img 
                  :src="getStepData(activeStep).icon" 
                  :alt="getStepData(activeStep).title" 
                  class="w-20 h-20 filter brightness-0 invert"
                />
              </div>
            </div>
            
            <!-- Step Description -->
            <div class="text-center">
              <p class="text-xl md:text-2xl text-gray-700 leading-relaxed font-light max-w-3xl mx-auto">
                {{ getStepData(activeStep).description }}
              </p>
            </div>
            
            <!-- Progress Indicator -->
            <div class="mt-12 flex justify-center">
              <div class="flex space-x-3">
                <div 
                  v-for="step in 5" 
                  :key="step"
                  class="w-3 h-3 rounded-full transition-all duration-500"
                  :class="step === activeStep ? 'bg-secondary scale-125' : 'bg-gray-300'"
                ></div>
              </div>
            </div>
          </div>
        </div>

        <!-- Mobile Navigation -->
        <div class="lg:hidden mt-12">
          <div class="flex justify-center space-x-4 overflow-x-auto pb-4">
            <button
              v-for="step in 5"
              :key="step"
              @click="setActiveStep(step)"
              class="flex-shrink-0 w-16 h-16 rounded-full transition-all duration-500 transform hover:scale-110 focus:outline-none"
              :class="activeStep === step ? 'bg-secondary shadow-2xl scale-110' : 'bg-gray-200'"
            >
              <img 
                :src="getStepData(step).icon" 
                :alt="getStepData(step).title" 
                class="w-10 h-10 mx-auto"
                :class="activeStep === step ? 'filter brightness-0' : 'filter grayscale'"
              />
            </button>
          </div>
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

// Process steps data
const processSteps = {
  1: {
    title: 'Ionization',
    description: 'We isolate your business essence, define your brand identity, and give it the atomic charge it needs to interact with its market.',
    icon: '/images/process/ionization.svg'
  },
  2: {
    title: 'Stabilization',
    description: 'We analyze your business model and market to identify friction points and ensure your foundation is optimized before ignition.',
    icon: '/images/process/stabilization.svg'
  },
  3: {
    title: 'Catalysis',
    description: 'We engineer tailored go-to-market strategies — modular, scalable, and performance-tuned to your specific vertical.',
    icon: '/images/process/catalysis.svg'
  },
  4: {
    title: 'Activation',
    description: 'We launch and react: campaigns, funnels, content, bonuses, and behavioral triggers — all executed with precision and control.',
    icon: '/images/process/activation.svg'
  },
  5: {
    title: 'Oscillation',
    description: 'Post-launch, we track signals and market feedback to recalibrate. Bonuses evolve. Campaigns adapt. Growth compounds.',
    icon: '/images/process/oscillation.svg'
  }
};

// Get step data
const getStepData = (stepNumber) => {
  return processSteps[stepNumber];
};

// Set active step
const setActiveStep = (stepNumber) => {
  activeStep.value = stepNumber;
};

// Auto-cycle through steps
let intervalId = null;

onMounted(() => {
  // Auto-cycle through steps every 8 seconds
  intervalId = setInterval(() => {
    activeStep.value = activeStep.value === 5 ? 1 : activeStep.value + 1;
  }, 8000);
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

/* Circular menu positioning */
.absolute {
  position: absolute;
}

/* Filter effects for icons */
.filter {
  filter: grayscale(100%);
}

.filter.brightness-0 {
  filter: brightness(0);
}

.filter.invert {
  filter: invert(1);
}

/* Custom button focus states */
button:focus {
  outline: 2px solid #facb24;
  outline-offset: 2px;
}

/* Responsive adjustments */
@media (max-width: 768px) {
  .absolute[style*="top: -60px"] {
    top: -40px !important;
  }
  
  .absolute[style*="right: -60px"] {
    right: -40px !important;
  }
  
  .absolute[style*="bottom: -30px"] {
    bottom: -20px !important;
  }
  
  .absolute[style*="left: -60px"] {
    left: -40px !important;
  }
  
  .absolute[style*="top: -30px"] {
    top: -20px !important;
  }
}
</style>

