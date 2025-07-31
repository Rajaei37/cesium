<template>
  <div 
    class="relative group cursor-pointer"
    @mouseenter="$emit('step-focus', stepNumber)"
    @click="$emit('step-focus', stepNumber)"
  >
    <!-- Desktop Layout -->
    <div class="hidden lg:grid lg:grid-cols-12 lg:gap-16 lg:items-center lg:min-h-[400px]">
      <!-- Visual Side -->
      <div class="col-span-5 relative">
        <div 
          class="relative overflow-hidden rounded-3xl transition-all duration-700 transform"
          :class="isActive ? 'scale-105 shadow-2xl' : 'scale-100 shadow-lg opacity-60'"
        >
          <!-- Visual Element -->
          <div 
            class="w-full h-80 bg-gradient-to-br flex items-center justify-center relative"
            :class="getVisualGradient()"
          >
            <!-- Background Pattern -->
            <div class="absolute inset-0 opacity-20">
              <div class="absolute top-8 left-8 w-12 h-12 border-2 border-white rounded-full animate-pulse"></div>
              <div class="absolute top-16 right-12 w-8 h-8 border-2 border-white rounded-full animate-pulse" style="animation-delay: 0.5s;"></div>
              <div class="absolute bottom-12 left-16 w-16 h-16 border-2 border-white rounded-full animate-pulse" style="animation-delay: 1s;"></div>
              <div class="absolute bottom-8 right-8 w-6 h-6 border-2 border-white rounded-full animate-pulse" style="animation-delay: 1.5s;"></div>
            </div>
            
            <!-- Central Visual -->
            <div 
              class="text-8xl text-white transition-all duration-500 transform"
              :class="isActive ? 'scale-110 rotate-12' : 'scale-100 rotate-0'"
            >
              {{ getVisualIcon() }}
            </div>
            
            <!-- Floating Elements -->
            <div 
              class="absolute top-6 right-6 w-4 h-4 bg-white rounded-full transition-all duration-300"
              :class="isActive ? 'animate-bounce' : 'opacity-50'"
            ></div>
            <div 
              class="absolute bottom-6 left-6 w-3 h-3 bg-white rounded-full transition-all duration-300"
              :class="isActive ? 'animate-bounce' : 'opacity-50'"
              style="animation-delay: 0.3s;"
            ></div>
          </div>
        </div>
      </div>

      <!-- Content Side -->
      <div class="col-span-7 relative">
        <!-- Step Index -->
        <div 
          class="text-8xl font-black mb-4 transition-all duration-500 transform"
          :class="isActive ? 'text-secondary scale-110' : 'text-gray-200 scale-100'"
        >
          {{ stepIndex }}
        </div>
        
        <!-- Title -->
        <h3 
          class="text-5xl font-black mb-6 transition-all duration-500 transform"
          :class="isActive ? 'text-primary scale-105' : 'text-gray-400 scale-100'"
        >
          {{ title }}
        </h3>
        
        <!-- Description -->
        <p 
          class="text-xl leading-relaxed font-light transition-all duration-500"
          :class="isActive ? 'text-gray-700' : 'text-gray-400'"
        >
          {{ description }}
        </p>
        
        <!-- Progress Indicator -->
        <div class="mt-8 flex items-center space-x-3">
          <div 
            class="h-1 bg-gradient-to-r from-primary to-secondary rounded-full transition-all duration-700"
            :class="isActive ? 'w-24' : 'w-8'"
          ></div>
          <div 
            class="text-sm font-semibold transition-all duration-500"
            :class="isActive ? 'text-primary' : 'text-gray-400'"
          >
            Step {{ stepNumber }} of 5
          </div>
        </div>
      </div>
    </div>

    <!-- Mobile Layout -->
    <div class="lg:hidden">
      <div 
        class="bg-white rounded-3xl shadow-xl p-8 transition-all duration-500 transform"
        :class="isActive ? 'scale-105 shadow-2xl' : 'scale-100 shadow-lg'"
      >
        <!-- Mobile Header -->
        <div class="flex items-center justify-between mb-6">
          <div 
            class="text-4xl font-black transition-all duration-500"
            :class="isActive ? 'text-secondary' : 'text-gray-300'"
          >
            {{ stepIndex }}
          </div>
          <div 
            class="text-4xl transition-all duration-500 transform"
            :class="isActive ? 'scale-110' : 'scale-100'"
          >
            {{ getVisualIcon() }}
          </div>
        </div>
        
        <!-- Mobile Title -->
        <h3 
          class="text-3xl font-black mb-4 transition-all duration-500"
          :class="isActive ? 'text-primary' : 'text-gray-400'"
        >
          {{ title }}
        </h3>
        
        <!-- Mobile Description -->
        <p 
          class="text-lg leading-relaxed font-light transition-all duration-500"
          :class="isActive ? 'text-gray-700' : 'text-gray-400'"
        >
          {{ description }}
        </p>
        
        <!-- Mobile Visual Element -->
        <div class="mt-6 h-32 rounded-2xl bg-gradient-to-r flex items-center justify-center relative overflow-hidden" :class="getVisualGradient()">
          <div class="absolute inset-0 opacity-20">
            <div class="absolute top-2 left-2 w-6 h-6 border border-white rounded-full"></div>
            <div class="absolute top-4 right-4 w-4 h-4 border border-white rounded-full"></div>
            <div class="absolute bottom-2 left-6 w-8 h-8 border border-white rounded-full"></div>
          </div>
          <div class="text-4xl text-white opacity-80">{{ getVisualIcon() }}</div>
        </div>
      </div>
    </div>

    <!-- Active Step Indicator -->
    <div 
      class="absolute -left-4 top-1/2 transform -translate-y-1/2 w-2 h-16 bg-gradient-to-b from-primary to-secondary rounded-full transition-all duration-500 hidden lg:block"
      :class="isActive ? 'opacity-100 scale-110' : 'opacity-0 scale-100'"
    ></div>
  </div>
</template>

<script setup>
import { defineProps, defineEmits } from 'vue';

const props = defineProps({
  stepNumber: {
    type: Number,
    required: true
  },
  stepIndex: {
    type: String,
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
  visualType: {
    type: String,
    required: true
  },
  isActive: {
    type: Boolean,
    default: false
  }
});

const emit = defineEmits(['step-focus']);

// Get visual icon based on type
const getVisualIcon = () => {
  const icons = {
    atom: '⚛️',
    balance: '⚖️',
    catalyst: '🧪',
    rocket: '🚀',
    wave: '📊'
  };
  return icons[props.visualType] || '⚛️';
};

// Get visual gradient based on type
const getVisualGradient = () => {
  const gradients = {
    atom: 'from-blue-500 to-purple-600',
    balance: 'from-green-500 to-teal-600',
    catalyst: 'from-orange-500 to-red-600',
    rocket: 'from-purple-500 to-pink-600',
    wave: 'from-indigo-500 to-blue-600'
  };
  return gradients[props.visualType] || 'from-blue-500 to-purple-600';
};
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

/* Typography enhancements */
.font-black {
  font-weight: 900;
}

.font-light {
  font-weight: 300;
}

/* Smooth transitions for all elements */
* {
  transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
}

/* Enhanced hover effects */
.group:hover .group-hover\:scale-110 {
  transform: scale(1.1);
}

.group:hover .group-hover\:rotate-12 {
  transform: rotate(12deg);
}
</style>

