<template>
  <!-- Enhanced Floating Action Buttons -->
  <div class="fixed bottom-6 right-6 z-50 flex flex-col space-y-4">
    <!-- Schedule Time Button -->
    <Transition
      enter-active-class="transition-all duration-500 ease-out"
      enter-from-class="opacity-0 transform translate-x-8 scale-75"
      enter-to-class="opacity-100 transform translate-x-0 scale-100"
      leave-active-class="transition-all duration-300 ease-in"
      leave-from-class="opacity-100 transform translate-x-0 scale-100"
      leave-to-class="opacity-0 transform translate-x-8 scale-75"
    >
      <button
        v-if="showButtons"
        @click="handleScheduleClick"
        class="group relative bg-gradient-to-r from-blue-500 to-blue-600 hover:from-blue-600 hover:to-blue-700 text-white px-6 py-4 rounded-2xl shadow-2xl transition-all duration-500 transform hover:scale-110 hover:-translate-y-2 focus:outline-none focus:ring-4 focus:ring-blue-500/30"
        :class="{ 'animate-pulse-glow': isPulsing }"
      >
        <!-- Background Glow Effect -->
        <div class="absolute inset-0 bg-blue-500/30 rounded-2xl blur-xl opacity-0 group-hover:opacity-100 transition-opacity duration-500 -z-10"></div>
        
        <!-- Button Content -->
        <div class="flex items-center space-x-3">
          <!-- Calendar Icon -->
          <svg class="w-5 h-5 transform group-hover:rotate-12 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
          </svg>
          <span class="font-semibold whitespace-nowrap">Schedule Time</span>
        </div>

        <!-- Ripple Effect -->
        <div 
          v-if="scheduleRipple"
          class="absolute inset-0 bg-white/20 rounded-2xl animate-ping"
          @animationend="scheduleRipple = false"
        ></div>

        <!-- Tooltip -->
        <div class="absolute right-full top-1/2 transform -translate-y-1/2 mr-3 px-3 py-2 bg-gray-900 text-white text-sm rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300 whitespace-nowrap pointer-events-none">
          Book a 15-minute consultation
          <div class="absolute left-full top-1/2 transform -translate-y-1/2 border-4 border-transparent border-l-gray-900"></div>
        </div>
      </button>
    </Transition>

    <!-- Request Call Button -->
    <Transition
      enter-active-class="transition-all duration-500 ease-out"
      enter-from-class="opacity-0 transform translate-x-8 scale-75"
      enter-to-class="opacity-100 transform translate-x-0 scale-100"
      leave-active-class="transition-all duration-300 ease-in"
      leave-from-class="opacity-100 transform translate-x-0 scale-100"
      leave-to-class="opacity-0 transform translate-x-8 scale-75"
    >
      <button
        v-if="showButtons"
        @click="handleCallClick"
        class="group relative bg-gradient-to-r from-secondary to-secondary-light hover:from-secondary-light hover:to-secondary text-primary px-6 py-4 rounded-2xl shadow-2xl transition-all duration-500 transform hover:scale-110 hover:-translate-y-2 focus:outline-none focus:ring-4 focus:ring-secondary/30"
        :class="{ 'animate-bounce-gentle': isAnimating }"
      >
        <!-- Background Glow Effect -->
        <div class="absolute inset-0 bg-secondary/40 rounded-2xl blur-xl opacity-0 group-hover:opacity-100 transition-opacity duration-500 -z-10"></div>
        
        <!-- Button Content -->
        <div class="flex items-center space-x-3">
          <!-- Phone Icon -->
          <svg class="w-5 h-5 transform group-hover:rotate-12 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
          </svg>
          <span class="font-semibold whitespace-nowrap">Request Call</span>
        </div>

        <!-- Ripple Effect -->
        <div 
          v-if="callRipple"
          class="absolute inset-0 bg-white/30 rounded-2xl animate-ping"
          @animationend="callRipple = false"
        ></div>

        <!-- Tooltip -->
        <div class="absolute right-full top-1/2 transform -translate-y-1/2 mr-3 px-3 py-2 bg-gray-900 text-white text-sm rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300 whitespace-nowrap pointer-events-none">
          Get a callback within 2 hours
          <div class="absolute left-full top-1/2 transform -translate-y-1/2 border-4 border-transparent border-l-gray-900"></div>
        </div>
      </button>
    </Transition>

    <!-- Expand/Collapse Toggle -->
    <button
      @click="toggleButtons"
      class="group relative bg-gradient-to-r from-primary to-primary-light hover:from-primary-light hover:to-primary text-white w-14 h-14 rounded-full shadow-2xl transition-all duration-500 transform hover:scale-110 hover:-translate-y-1 focus:outline-none focus:ring-4 focus:ring-primary/30 flex items-center justify-center"
    >
      <!-- Background Glow Effect -->
      <div class="absolute inset-0 bg-primary/30 rounded-full blur-xl opacity-0 group-hover:opacity-100 transition-opacity duration-500 -z-10"></div>
      
      <!-- Toggle Icon -->
      <svg 
        class="w-6 h-6 transition-transform duration-500"
        :class="{ 'rotate-180': showButtons }"
        fill="none" 
        stroke="currentColor" 
        viewBox="0 0 24 24"
      >
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
      </svg>

      <!-- Pulse Ring -->
      <div class="absolute inset-0 border-2 border-primary rounded-full animate-ping opacity-20"></div>
    </button>

    <!-- WhatsApp Quick Access (if collapsed) -->
    <Transition
      enter-active-class="transition-all duration-500 ease-out"
      enter-from-class="opacity-0 transform translate-y-4 scale-75"
      enter-to-class="opacity-100 transform translate-y-0 scale-100"
      leave-active-class="transition-all duration-300 ease-in"
      leave-from-class="opacity-100 transform translate-y-0 scale-100"
      leave-to-class="opacity-0 transform translate-y-4 scale-75"
    >
      <a
        v-if="!showButtons"
        href="https://wa.me/your-whatsapp-number"
        target="_blank"
        class="group relative bg-green-500 hover:bg-green-600 text-white w-12 h-12 rounded-full shadow-lg transition-all duration-300 transform hover:scale-110 hover:-translate-y-1 flex items-center justify-center"
      >
        <!-- WhatsApp Icon -->
        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
          <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.515 3.387"/>
        </svg>
        
        <!-- Tooltip -->
        <div class="absolute right-full top-1/2 transform -translate-y-1/2 mr-3 px-2 py-1 bg-gray-900 text-white text-xs rounded opacity-0 group-hover:opacity-100 transition-opacity duration-300 whitespace-nowrap pointer-events-none">
          Chat on WhatsApp
          <div class="absolute left-full top-1/2 transform -translate-y-1/2 border-2 border-transparent border-l-gray-900"></div>
        </div>
      </a>
    </Transition>
  </div>
</template>

<script setup>
import { ref, onMounted, onUnmounted } from 'vue';

// Component state
const showButtons = ref(false);
const isPulsing = ref(false);
const isAnimating = ref(false);
const scheduleRipple = ref(false);
const callRipple = ref(false);

// Auto-show buttons after delay
let autoShowTimer = null;

const toggleButtons = () => {
  showButtons.value = !showButtons.value;
  
  // Clear auto-show timer if user manually toggles
  if (autoShowTimer) {
    clearTimeout(autoShowTimer);
    autoShowTimer = null;
  }
};

const handleScheduleClick = () => {
  scheduleRipple.value = true;
  isPulsing.value = true;
  
  // Here you would integrate with your scheduling system
  // For now, we'll redirect to a contact form or calendar booking system
  window.open('https://calendly.com/your-calendar-link', '_blank');
  
  // Reset pulse animation
  setTimeout(() => {
    isPulsing.value = false;
  }, 2000);
};

const handleCallClick = () => {
  callRipple.value = true;
  isAnimating.value = true;
  
  // Here you would integrate with your call request system
  // For now, we'll redirect to contact form
  window.location.href = '/contact-us';
  
  // Reset animation
  setTimeout(() => {
    isAnimating.value = false;
  }, 2000);
};

// Auto-show buttons after user has been on page for a while
const startAutoShowTimer = () => {
  autoShowTimer = setTimeout(() => {
    if (!showButtons.value) {
      showButtons.value = true;
      
      // Add a subtle bounce animation to draw attention
      setTimeout(() => {
        isAnimating.value = true;
        setTimeout(() => {
          isAnimating.value = false;
        }, 2000);
      }, 500);
    }
  }, 5000); // Show after 5 seconds
};

// Handle scroll behavior - hide on scroll, show when stopped
let scrollTimer = null;
const handleScroll = () => {
  // Temporarily hide buttons during scroll for better UX
  document.querySelector('.floating-buttons')?.classList.add('opacity-50');
  
  clearTimeout(scrollTimer);
  scrollTimer = setTimeout(() => {
    document.querySelector('.floating-buttons')?.classList.remove('opacity-50');
  }, 150);
};

onMounted(() => {
  // Add class for scroll handling
  const floatingContainer = document.querySelector('.fixed.bottom-6.right-6');
  if (floatingContainer) {
    floatingContainer.classList.add('floating-buttons');
  }
  
  // Start auto-show timer
  startAutoShowTimer();
  
  // Add scroll listener
  window.addEventListener('scroll', handleScroll, { passive: true });
});

onUnmounted(() => {
  if (autoShowTimer) {
    clearTimeout(autoShowTimer);
  }
  if (scrollTimer) {
    clearTimeout(scrollTimer);
  }
  window.removeEventListener('scroll', handleScroll);
});
</script>

<style scoped>
/* Enhanced animations */
@keyframes pulseGlow {
  0%, 100% {
    box-shadow: 0 0 20px rgba(59, 130, 246, 0.4);
  }
  50% {
    box-shadow: 0 0 40px rgba(59, 130, 246, 0.8), 0 0 60px rgba(59, 130, 246, 0.4);
  }
}

@keyframes bounceGentle {
  0%, 20%, 50%, 80%, 100% {
    transform: translateY(0) scale(1);
  }
  40% {
    transform: translateY(-8px) scale(1.05);
  }
  60% {
    transform: translateY(-4px) scale(1.02);
  }
}

.animate-pulse-glow {
  animation: pulseGlow 2s ease-in-out infinite;
}

.animate-bounce-gentle {
  animation: bounceGentle 2s infinite;
}

/* Mobile responsiveness */
@media (max-width: 768px) {
  .floating-buttons {
    bottom: 1rem !important;
    right: 1rem !important;
  }
  
  .floating-buttons button {
    padding: 0.75rem 1rem;
    font-size: 0.875rem;
  }
  
  .floating-buttons .w-14.h-14 {
    width: 3rem;
    height: 3rem;
  }
  
  .floating-buttons .w-12.h-12 {
    width: 2.75rem;
    height: 2.75rem;
  }
}

/* Smooth transitions for all states */
.floating-buttons {
  transition: opacity 0.3s ease;
}

/* Focus indicators for accessibility */
button:focus-visible {
  ring-offset-2: rgba(255, 255, 255, 0.8);
}
</style>