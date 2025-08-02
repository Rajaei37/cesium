<template>
  <nav :class="[
    'fixed top-0 left-0 right-0 z-50 transition-all duration-300 w-full max-w-full overflow-x-hidden',
    scrolled ? 'bg-primary bg-opacity-90 shadow-xl py-2' : 'bg-primary bg-opacity-0 py-4'
  ]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 py-4 flex items-center justify-between w-full">
      <!-- Logo -->
      <div class="flex-shrink-0">
        <Link href="/">
          <img src="/assets/logos/Asset31.svg" alt="Cesium Marketing Logo" class="h-10 transition-transform duration-300 hover:scale-105" />
        </Link>
      </div>

      <!-- Navigation Menu -->
      <div class="hidden md:flex items-center space-x-8">
        <Link 
          href="/" 
          class="text-white hover:text-secondary transition-colors duration-300 font-medium relative group"
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
          class="text-white hover:text-secondary transition-colors duration-300 font-medium relative group"
          :class="{ 'text-secondary': currentPage === 'services' }"
        >
          Services
          <span 
            class="absolute bottom-0 left-0 h-0.5 bg-secondary transition-all duration-300"
            :class="currentPage === 'services' ? 'w-full' : 'w-0 group-hover:w-full'"
          ></span>
        </Link>

        <Link 
          href="/our-process" 
          class="text-white hover:text-secondary transition-colors duration-300 font-medium relative group"
          :class="{ 'text-secondary': currentPage === 'our-process' }"
        >
          Our Process
          <span 
            class="absolute bottom-0 left-0 h-0.5 bg-secondary transition-all duration-300"
            :class="currentPage === 'our-process' ? 'w-full' : 'w-0 group-hover:w-full'"
          ></span>
        </Link>
        <Link 
          href="/blog" 
          class="text-white hover:text-secondary transition-colors duration-300 font-medium relative group"
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
          class="text-white hover:text-secondary transition-colors duration-300 font-medium relative group"
          :class="{ 'text-secondary': currentPage === 'contact' }"
        >
          Contact
          <span 
            class="absolute bottom-0 left-0 h-0.5 bg-secondary transition-all duration-300"
            :class="currentPage === 'contact' ? 'w-full' : 'w-0 group-hover:w-full'"
          ></span>
        </Link>
      </div>

      <!-- CTA Buttons and Social Media Icons -->
      <div class="hidden md:flex items-center space-x-4">
        <!-- Social Media Icons -->
        <div class="flex items-center space-x-3 mr-4">
          <a href="https://www.linkedin.com/" target="_blank" class="text-white hover:text-secondary transition-colors duration-300">
            <i class="fab fa-linkedin-in text-lg"></i>
          </a>
          <a href="https://www.tiktok.com/" target="_blank" class="text-white hover:text-secondary transition-colors duration-300">
            <i class="fab fa-tiktok text-lg"></i>
          </a>
          <a href="https://www.instagram.com/" target="_blank" class="text-white hover:text-secondary transition-colors duration-300">
            <i class="fab fa-instagram text-lg"></i>
          </a>
          <a href="https://www.facebook.com/" target="_blank" class="text-white hover:text-secondary transition-colors duration-300">
            <i class="fab fa-facebook-f text-lg"></i>
          </a>
        </div>
        <Link 
          href="/join-our-team" 
          class="text-white hover:text-secondary transition-colors duration-300 font-medium px-4 py-2 border border-white hover:border-secondary"
          :class="{ 'text-secondary border-secondary': currentPage === 'join-team' }"
        >
          Join Our Team
        </Link>
        <Link href="/contact-us" class="bg-secondary text-primary font-semibold px-6 py-2.5 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
          contact us
        </Link>
      </div>

      <!-- Mobile Menu Button -->
      <div class="flex items-center space-x-4">
        <button @click="toggleMobileMenu" class="md:hidden text-white hover:text-secondary transition-colors duration-300">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
          </svg>
        </button>
      </div>
    </div>

    <!-- Mobile Menu Backdrop -->
    <div v-if="mobileMenuOpen" class="fixed inset-0 bg-black bg-opacity-50 z-[9998] md:hidden" @click="closeMobileMenu"></div>

    <!-- Mobile Menu -->
    <div v-if="mobileMenuOpen" class="fixed top-20 left-0 right-0 bottom-0 bg-primary text-white shadow-lg animate-slide-down z-[9999] md:hidden overflow-y-auto">
      <div class="px-4 py-6 space-y-6 w-full">
        <Link href="/" @click="closeMobileMenu" class="block text-white hover:text-secondary transition-colors duration-300 font-medium text-lg py-2">Home</Link>
        <Link href="/what-we-offer" @click="closeMobileMenu" class="block text-white hover:text-secondary transition-colors duration-300 font-medium text-lg py-2">Services</Link>

        <Link href="/our-process" @click="closeMobileMenu" class="block text-white hover:text-secondary transition-colors duration-300 font-medium text-lg py-2">Our Process</Link>
        <Link href="/blog" @click="closeMobileMenu" class="block text-white hover:text-secondary transition-colors duration-300 font-medium text-lg py-2">Insights</Link>
        <Link href="/contact-us" @click="closeMobileMenu" class="block text-white hover:text-secondary transition-colors duration-300 font-medium text-lg py-2">Contact</Link>
        <Link href="/join-our-team" @click="closeMobileMenu" class="block text-white hover:text-secondary transition-colors duration-300 font-medium text-lg py-2 border border-white rounded-full text-center">Join Our Team</Link>
        
        <!-- Mobile CTA -->
        <div class="pt-6 border-t border-gray-200">
          <Link href="/contact-us" @click="closeMobileMenu" class="w-full bg-secondary hover:bg-secondary-dark text-primary font-semibold px-6 py-3 rounded-full shadow-lg transition-all duration-300 flex items-center justify-center text-lg">
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
  
  // Prevent body scroll when menu is open
  if (mobileMenuOpen.value) {
    document.body.style.overflow = 'hidden';
  } else {
    document.body.style.overflow = '';
  }
};

const closeMobileMenu = () => {
  mobileMenuOpen.value = false;
  // Re-enable body scroll
  document.body.style.overflow = '';
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
  // Ensure body scroll is re-enabled on component unmount
  document.body.style.overflow = '';
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

/* Mobile Menu Specific Styles */
.mobile-menu-container {
  width: 100vw;
  max-width: 100vw;
  left: 0;
  right: 0;
  overflow-x: hidden;
  box-sizing: border-box;
}

/* Ensure mobile menu content doesn't overflow */
@media (max-width: 768px) {
  .mobile-menu-container {
    position: absolute;
    top: 100%;
    left: 0;
    width: 100vw;
    max-width: 100vw;
    overflow-x: hidden;
  }
  
  .mobile-menu-content {
    width: 100%;
    max-width: 100%;
    padding-left: 1rem;
    padding-right: 1rem;
    box-sizing: border-box;
  }
  
  /* Prevent any element from causing horizontal overflow */
  .mobile-menu-container * {
    max-width: 100%;
    box-sizing: border-box;
  }
}
</style>
