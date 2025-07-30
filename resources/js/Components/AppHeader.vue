<template>
  <nav class="fixed top-0 left-0 right-0 bg-white shadow-xl z-50 transition-all duration-300">
    <div class="container mx-auto px-6 py-4 flex items-center justify-between">
      <!-- Logo -->
      <div class="flex-shrink-0">
        <Link href="/">
          <img src="/assets/logos/logo-main.svg" alt="Cesium Marketing Logo" class="h-10 transition-transform duration-300 hover:scale-105" />
        </Link>
      </div>

      <!-- Navigation Menu -->
      <div class="hidden md:flex items-center space-x-8">
        <Link 
          href="/" 
          class="text-primary hover:text-secondary transition-colors duration-300 font-medium relative group"
          :class="{ 'text-secondary': currentPage === 'home' }"
        >
          Home
          <span 
            class="absolute bottom-0 left-0 h-0.5 bg-secondary transition-all duration-300"
            :class="currentPage === 'home' ? 'w-full' : 'w-0 group-hover:w-full'"
          ></span>
        </Link>
        <Link 
          href="/what-we-offer" 
          class="text-primary hover:text-secondary transition-colors duration-300 font-medium relative group"
          :class="{ 'text-secondary': currentPage === 'services' }"
        >
          Services
          <span 
            class="absolute bottom-0 left-0 h-0.5 bg-secondary transition-all duration-300"
            :class="currentPage === 'services' ? 'w-full' : 'w-0 group-hover:w-full'"
          ></span>
        </Link>
        <Link 
          href="/#results" 
          class="text-primary hover:text-secondary transition-colors duration-300 font-medium relative group"
        >
          Results
          <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-secondary transition-all duration-300 group-hover:w-full"></span>
        </Link>
        <Link 
          href="/blog" 
          class="text-primary hover:text-secondary transition-colors duration-300 font-medium relative group"
          :class="{ 'text-secondary': currentPage === 'blog' }"
        >
          Insights
          <span 
            class="absolute bottom-0 left-0 h-0.5 bg-secondary transition-all duration-300"
            :class="currentPage === 'blog' ? 'w-full' : 'w-0 group-hover:w-full'"
          ></span>
        </Link>
        <Link 
          href="/contact-us" 
          class="text-primary hover:text-secondary transition-colors duration-300 font-medium relative group"
          :class="{ 'text-secondary': currentPage === 'contact' }"
        >
          Contact
          <span 
            class="absolute bottom-0 left-0 h-0.5 bg-secondary transition-all duration-300"
            :class="currentPage === 'contact' ? 'w-full' : 'w-0 group-hover:w-full'"
          ></span>
        </Link>
        <Link 
          href="/join-our-team" 
          class="text-primary hover:text-secondary transition-colors duration-300 font-medium relative group"
          :class="{ 'text-secondary': currentPage === 'join-team' }"
        >
          Join Our Team
          <span 
            class="absolute bottom-0 left-0 h-0.5 bg-secondary transition-all duration-300"
            :class="currentPage === 'join-team' ? 'w-full' : 'w-0 group-hover:w-full'"
          ></span>
        </Link>
      </div>

      <!-- CTA Button -->
      <div class="hidden md:flex items-center space-x-4">
        <Link href="/contact-us" class="bg-secondary hover:bg-secondary-dark text-primary font-semibold px-6 py-2.5 rounded-full shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
          Get Started
        </Link>
      </div>

      <!-- Mobile Menu Button -->
      <div class="flex items-center space-x-4">
        <button @click="toggleMobileMenu" class="md:hidden text-primary hover:text-secondary transition-colors duration-300">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
          </svg>
        </button>
      </div>
    </div>

    <!-- Mobile Menu -->
    <div v-if="mobileMenuOpen" class="md:hidden bg-white border-t border-gray-200 shadow-lg animate-slide-down">
      <div class="px-6 py-4 space-y-4">
        <Link href="/" @click="closeMobileMenu" class="block text-primary hover:text-secondary transition-colors duration-300 font-medium">Home</Link>
        <Link href="/what-we-offer" @click="closeMobileMenu" class="block text-primary hover:text-secondary transition-colors duration-300 font-medium">Services</Link>
        <Link href="/#results" @click="closeMobileMenu" class="block text-primary hover:text-secondary transition-colors duration-300 font-medium">Results</Link>
        <Link href="/blog" @click="closeMobileMenu" class="block text-primary hover:text-secondary transition-colors duration-300 font-medium">Insights</Link>
        <Link href="/contact-us" @click="closeMobileMenu" class="block text-primary hover:text-secondary transition-colors duration-300 font-medium">Contact</Link>
        <Link href="/join-our-team" @click="closeMobileMenu" class="block text-primary hover:text-secondary transition-colors duration-300 font-medium">Join Our Team</Link>
        
        <!-- Mobile CTA -->
        <div class="pt-4 border-t border-gray-200">
          <Link href="/contact-us" @click="closeMobileMenu" class="w-full bg-secondary hover:bg-secondary-dark text-primary font-semibold px-6 py-3 rounded-full shadow-lg transition-all duration-300 flex items-center justify-center">
            Get Started
          </Link>
        </div>
      </div>
    </div>
  </nav>
</template>

<script setup>
import { ref, onMounted, onUnmounted } from "vue";
import { Link } from "@inertiajs/vue3";

// Props
const props = defineProps({
  currentPage: {
    type: String,
    default: 'home'
  }
});

// Mobile menu state
const mobileMenuOpen = ref(false);
const scrolled = ref(false);

// Mobile menu methods
const toggleMobileMenu = () => {
  mobileMenuOpen.value = !mobileMenuOpen.value;
};

const closeMobileMenu = () => {
  mobileMenuOpen.value = false;
};

// Scroll detection for sticky header
const handleScroll = () => {
  scrolled.value = window.scrollY > 50;
};

onMounted(() => {
  // Add scroll event listener for sticky header
  window.addEventListener('scroll', handleScroll);
});

// Cleanup on unmount
onUnmounted(() => {
  window.removeEventListener('scroll', handleScroll);
});
</script>

<style scoped>
/* Animation for mobile menu */
.animate-slide-down {
  animation: slideDown 0.3s ease-out;
}

@keyframes slideDown {
  from {
    opacity: 0;
    transform: translateY(-10px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}
</style>

