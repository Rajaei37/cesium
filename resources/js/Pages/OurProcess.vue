<template>
  <div class="min-h-screen bg-gradient-to-br from-gray-50 to-white">
    <!-- Hero Section -->
    <section class="relative pt-32 pb-20 overflow-hidden">
      <!-- Background Elements -->
      <div class="absolute inset-0 overflow-hidden">
        <div class="absolute top-20 left-10 w-32 h-32 bg-secondary/10 rounded-full blur-xl"></div>
        <div class="absolute top-40 right-20 w-24 h-24 bg-primary/10 rounded-full blur-lg"></div>
        <div class="absolute bottom-20 left-1/3 w-40 h-40 bg-secondary/5 rounded-full blur-2xl"></div>
      </div>
      
      <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-5xl md:text-6xl lg:text-7xl font-bold text-primary mb-6">
          Our <span class="text-secondary">Process</span>
        </h1>
        <p class="text-xl md:text-2xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
          A scientific approach to digital marketing that transforms your business through 
          <span class="text-primary font-semibold">precision</span>, 
          <span class="text-secondary font-semibold">innovation</span>, and 
          <span class="text-primary font-semibold">results</span>
        </p>
      </div>
    </section>

    <!-- Process Steps Section -->
    <section class="py-20 relative">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Process Timeline -->
        <div class="relative">
          <!-- Central Timeline Line -->
          <div class="absolute left-1/2 transform -translate-x-1/2 w-1 bg-gradient-to-b from-primary via-secondary to-primary h-full hidden lg:block"></div>
          
          <!-- Process Steps -->
          <div class="space-y-24">
            <!-- Step 1: Ionization -->
            <ProcessStep 
              :step-number="1"
              title="Ionization"
              description="We isolate your business essence, define your brand identity, and give it the atomic charge it needs to interact with its market."
              :is-left="true"
              icon="⚛️"
              color="from-blue-500 to-purple-600"
            />

            <!-- Step 2: Stabilization -->
            <ProcessStep 
              :step-number="2"
              title="Stabilization"
              description="We analyze your business model and market to identify friction points and ensure your foundation is optimized before ignition."
              :is-left="false"
              icon="⚖️"
              color="from-green-500 to-teal-600"
            />

            <!-- Step 3: Catalysis -->
            <ProcessStep 
              :step-number="3"
              title="Catalysis"
              description="We engineer tailored go-to-market strategies — modular, scalable, and performance-tuned to your specific vertical."
              :is-left="true"
              icon="🧪"
              color="from-orange-500 to-red-600"
            />

            <!-- Step 4: Activation -->
            <ProcessStep 
              :step-number="4"
              title="Activation"
              description="We launch and react: campaigns, funnels, content, bonuses, and behavioral triggers — all executed with precision and control."
              :is-left="false"
              icon="🚀"
              color="from-purple-500 to-pink-600"
            />

            <!-- Step 5: Oscillation -->
            <ProcessStep 
              :step-number="5"
              title="Oscillation"
              description="Post-launch, we track signals and market feedback to recalibrate. Bonuses evolve. Campaigns adapt. Growth compounds."
              :is-left="true"
              icon="📊"
              color="from-indigo-500 to-blue-600"
            />
          </div>
        </div>
      </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-gradient-to-r from-primary to-primary-dark relative overflow-hidden">
      <!-- Background Pattern -->
      <div class="absolute inset-0 opacity-10">
        <div class="absolute top-10 left-10 w-20 h-20 border-2 border-white rounded-full"></div>
        <div class="absolute top-32 right-20 w-16 h-16 border-2 border-secondary rounded-full"></div>
        <div class="absolute bottom-20 left-1/4 w-24 h-24 border-2 border-white rounded-full"></div>
        <div class="absolute bottom-32 right-1/3 w-12 h-12 border-2 border-secondary rounded-full"></div>
      </div>
      
      <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">
          Ready to Start Your <span class="text-secondary">Transformation?</span>
        </h2>
        <p class="text-xl text-gray-200 mb-8 max-w-2xl mx-auto">
          Let's apply our scientific approach to accelerate your business growth and market dominance.
        </p>
        <Link 
          href="/contact-us" 
          class="inline-flex items-center bg-secondary hover:bg-secondary-dark text-primary font-bold px-8 py-4 rounded-full text-lg shadow-2xl hover:shadow-3xl transition-all duration-300 transform hover:scale-105"
        >
          Begin Your Process
          <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
          </svg>
        </Link>
      </div>
    </section>
  </div>
</template>

<script setup>
import { Head, Link } from '@inertiajs/vue3';
import ProcessStep from '../Components/ProcessStep.vue';

// Page metadata
defineProps({
  title: {
    type: String,
    default: 'Our Process - Cesium Marketing'
  }
});
</script>

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

