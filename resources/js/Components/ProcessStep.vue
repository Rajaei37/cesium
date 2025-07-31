<template>
  <div class="relative">
    <!-- Desktop Layout -->
    <div class="hidden lg:flex items-center" :class="isLeft ? 'flex-row' : 'flex-row-reverse'">
      <!-- Content Side -->
      <div class="w-5/12" :class="isLeft ? 'pr-16' : 'pl-16'">
        <div 
          class="bg-white rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-500 p-8 transform hover:scale-105 border border-gray-100"
          :class="isLeft ? 'text-right' : 'text-left'"
        >
          <!-- Step Number -->
          <div 
            class="inline-flex items-center justify-center w-12 h-12 rounded-full text-white font-bold text-lg mb-4"
            :class="`bg-gradient-to-r ${color}`"
          >
            {{ stepNumber }}
          </div>
          
          <!-- Title -->
          <h3 class="text-3xl font-bold text-primary mb-4">{{ title }}</h3>
          
          <!-- Description -->
          <p class="text-gray-600 text-lg leading-relaxed">{{ description }}</p>
          
          <!-- Decorative Elements -->
          <div class="mt-6 flex" :class="isLeft ? 'justify-end' : 'justify-start'">
            <div class="flex space-x-2">
              <div class="w-2 h-2 bg-secondary rounded-full animate-pulse"></div>
              <div class="w-2 h-2 bg-primary rounded-full animate-pulse" style="animation-delay: 0.2s;"></div>
              <div class="w-2 h-2 bg-secondary rounded-full animate-pulse" style="animation-delay: 0.4s;"></div>
            </div>
          </div>
        </div>
      </div>

      <!-- Central Icon -->
      <div class="w-2/12 flex justify-center relative z-10">
        <div 
          class="w-24 h-24 rounded-full bg-white shadow-2xl flex items-center justify-center text-4xl transform hover:rotate-12 transition-all duration-500 border-4 border-gray-100 hover:border-secondary"
        >
          {{ icon }}
        </div>
        
        <!-- Connecting Lines -->
        <div class="absolute top-1/2 left-0 w-full h-0.5 bg-gradient-to-r from-transparent via-gray-300 to-transparent -z-10"></div>
      </div>

      <!-- Visual Side -->
      <div class="w-5/12" :class="isLeft ? 'pl-16' : 'pr-16'">
        <div class="relative">
          <!-- Main Visual Element -->
          <div 
            class="w-80 h-64 rounded-2xl bg-gradient-to-br shadow-xl transform hover:scale-105 transition-all duration-500 flex items-center justify-center relative overflow-hidden"
            :class="color"
          >
            <!-- Background Pattern -->
            <div class="absolute inset-0 opacity-20">
              <div class="absolute top-4 left-4 w-8 h-8 border-2 border-white rounded-full"></div>
              <div class="absolute top-12 right-8 w-6 h-6 border-2 border-white rounded-full"></div>
              <div class="absolute bottom-8 left-12 w-10 h-10 border-2 border-white rounded-full"></div>
              <div class="absolute bottom-4 right-4 w-4 h-4 border-2 border-white rounded-full"></div>
            </div>
            
            <!-- Central Icon Large -->
            <div class="text-8xl text-white opacity-80">{{ icon }}</div>
            
            <!-- Floating Elements -->
            <div class="absolute top-6 right-6 w-3 h-3 bg-white rounded-full animate-bounce"></div>
            <div class="absolute bottom-6 left-6 w-2 h-2 bg-white rounded-full animate-bounce" style="animation-delay: 0.5s;"></div>
          </div>
          
          <!-- Additional Visual Elements -->
          <div class="absolute -top-4 -right-4 w-16 h-16 bg-secondary/20 rounded-full blur-xl animate-pulse"></div>
          <div class="absolute -bottom-4 -left-4 w-12 h-12 bg-primary/20 rounded-full blur-lg animate-pulse" style="animation-delay: 1s;"></div>
        </div>
      </div>
    </div>

    <!-- Mobile Layout -->
    <div class="lg:hidden">
      <div class="bg-white rounded-2xl shadow-xl p-6 mx-4 transform hover:scale-105 transition-all duration-300">
        <!-- Step Header -->
        <div class="flex items-center mb-4">
          <div 
            class="w-12 h-12 rounded-full text-white font-bold text-lg flex items-center justify-center mr-4"
            :class="`bg-gradient-to-r ${color}`"
          >
            {{ stepNumber }}
          </div>
          <div class="text-4xl">{{ icon }}</div>
        </div>
        
        <!-- Title -->
        <h3 class="text-2xl font-bold text-primary mb-3">{{ title }}</h3>
        
        <!-- Description -->
        <p class="text-gray-600 leading-relaxed">{{ description }}</p>
        
        <!-- Mobile Visual Element -->
        <div class="mt-6 h-32 rounded-xl bg-gradient-to-r flex items-center justify-center relative overflow-hidden" :class="color">
          <div class="absolute inset-0 opacity-20">
            <div class="absolute top-2 left-2 w-4 h-4 border border-white rounded-full"></div>
            <div class="absolute top-4 right-4 w-3 h-3 border border-white rounded-full"></div>
            <div class="absolute bottom-2 left-6 w-5 h-5 border border-white rounded-full"></div>
          </div>
          <div class="text-4xl text-white opacity-80">{{ icon }}</div>
        </div>
      </div>
      
      <!-- Mobile Connector -->
      <div v-if="stepNumber < 5" class="flex justify-center py-6">
        <div class="w-1 h-12 bg-gradient-to-b from-primary to-secondary rounded-full"></div>
      </div>
    </div>
  </div>
</template>

<script setup>
import { defineProps } from 'vue';

const props = defineProps({
  stepNumber: {
    type: Number,
    required: true
  },
  title: {
    type: String,
    required: true
  },
  description: {
    type: String,
    required: true
  },
  isLeft: {
    type: Boolean,
    default: true
  },
  icon: {
    type: String,
    required: true
  },
  color: {
    type: String,
    default: 'from-primary to-primary-dark'
  }
});
</script>

<style scoped>
/* Custom animations */
@keyframes float {
  0%, 100% { transform: translateY(0px); }
  50% { transform: translateY(-10px); }
}

@keyframes pulse-glow {
  0%, 100% { box-shadow: 0 0 20px rgba(54, 40, 105, 0.3); }
  50% { box-shadow: 0 0 40px rgba(250, 203, 36, 0.5); }
}

.animate-float {
  animation: float 3s ease-in-out infinite;
}

.animate-pulse-glow {
  animation: pulse-glow 2s ease-in-out infinite;
}

/* Hover effects */
.group:hover .group-hover\:scale-110 {
  transform: scale(1.1);
}

.group:hover .group-hover\:rotate-12 {
  transform: rotate(12deg);
}

/* Gradient text */
.gradient-text {
  background: linear-gradient(135deg, #362869, #facb24);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
}
</style>

