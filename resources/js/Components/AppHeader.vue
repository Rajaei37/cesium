<template>
  <nav :class="[
    'fixed top-0 left-0 right-0 z-50 transition-all duration-300 w-full max-w-full overflow-x-hidden',
    scrolled ? 'bg-primary bg-opacity-90 shadow-xl py-2' : 'bg-gradient-to-b from-primary via-primary/80 to-transparent py-4'
  ]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 py-4 flex items-center justify-between w-full">
      <!-- Logo -->
      <div class="flex-shrink-0">
        <Link href="/">
          <img src="/assets/logos/Asset31.svg" alt="Cesium Marketing Logo" class="h-10 transition-transform duration-300 hover:scale-105" />
        </Link>
      </div>

      <!-- Navigation Menu (Desktop) -->
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
          href="/services" 
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
          Our process
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
          News
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

      <!-- CTA Buttons and Social Media Icons (Desktop) -->
      <div class="hidden md:flex items-center space-x-4">
        <Link 
          href="/join-our-team" 
          class="text-white hover:text-secondary transition-colors duration-300 font-medium px-6 py-2 border border-white hover:border-secondary"
          :class="{ 'text-secondary border-secondary': currentPage === 'join-team' }"
        >
          Join our Team
        </Link>
        <Link href="/contact-us" class="bg-secondary text-primary font-semibold px-6 py-2 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
          contact us
        </Link>
        
        <!-- Social Media Icons -->
        <div class="flex items-center space-x-3 ml-4">
          <a href="https://www.linkedin.com/company/cesium-agency/" target="_blank" class="text-white hover:text-secondary transition-colors duration-300 flex items-center justify-center">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path d="M20.4491 20.4508H16.8933V14.8808C16.8933 13.5525 16.8708 11.8441 15.0408 11.8441C13.1858 11.8441 12.9083 13.2908 12.9083 14.7841V20.4508H9.35247V8.99748H12.7658V10.5608H12.8158C13.2908 9.66081 14.4491 8.71414 16.1808 8.71414C19.7858 8.71414 20.4508 11.0825 20.4508 14.1658V20.4508H20.4491ZM5.33914 7.43248C4.19581 7.43248 3.27081 6.50581 3.27081 5.36414C3.27081 4.22248 4.19581 3.29581 5.33914 3.29581C6.47914 3.29581 7.40747 4.22248 7.40747 5.36414C7.40747 6.50581 6.47914 7.43248 5.33914 7.43248ZM7.11914 20.4508H3.55581V8.99748H7.11914V20.4508ZM22.2241 0H1.77081C0.792477 0 0 0.774143 0 1.72914V22.2708C0 23.2258 0.792477 24 1.77081 24H22.2241C23.2041 24 24 23.2258 24 22.2708V1.72914C24 0.774143 23.2041 0 22.2241 0Z"/>
            </svg>
          </a>
          <a href="https://www.tiktok.com/@cesiumagency" target="_blank" class="text-white hover:text-secondary transition-colors duration-300 flex items-center justify-center">
            <img src="/assets/social-icons/tiktok.svg" alt="TikTok" class="h-5 w-5 object-contain transition-all duration-300">
          </a>
          <a href="https://www.instagram.com/cesiumagency/" target="_blank" class="text-white hover:text-secondary transition-colors duration-300 flex items-center justify-center">
            <img src="/assets/social-icons/instagram.svg" alt="Instagram" class="h-5 w-5 object-contain filter brightness-0 invert hover:brightness-100 hover:invert-0 transition-all duration-300">
          </a>
          <a href="https://www.facebook.com/cesiumagency/" target="_blank" class="text-white hover:text-secondary transition-colors duration-300 flex items-center justify-center">
            <img src="/assets/social-icons/facebook.svg" alt="Facebook" class="h-5 w-5 object-contain transition-all duration-300">
          </a>
        </div>
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
        <Link href="/services" @click="closeMobileMenu" class="block text-white hover:text-secondary transition-colors duration-300 font-medium text-lg py-2">Services</Link>
        <Link href="/our-process" @click="closeMobileMenu" class="block text-white hover:text-secondary transition-colors duration-300 font-medium text-lg py-2">Our process</Link>
        <Link href="/blog" @click="closeMobileMenu" class="block text-white hover:text-secondary transition-colors duration-300 font-medium text-lg py-2">News</Link>
        <Link href="/contact-us" @click="closeMobileMenu" class="block text-white hover:text-secondary transition-colors duration-300 font-medium text-lg py-2">Contact</Link>
        <Link href="/join-our-team" @click="closeMobileMenu" class="block text-white hover:text-secondary transition-colors duration-300 font-medium text-lg py-2 border border-white text-center rounded-none">Join our Team</Link>
        
        <!-- Mobile CTA -->
        <div class="pt-6 border-t border-gray-200">
          <Link href="/contact-us" @click="closeMobileMenu" class="w-full bg-secondary hover:bg-secondary-dark text-primary font-semibold px-6 py-3 shadow-lg transition-all duration-300 flex items-center justify-center text-lg rounded-none">
            contact us
          </Link>
        </div>
        
        <!-- Mobile Social Media Icons -->
        <div class="pt-6 border-t border-gray-200">
          <p class="text-white text-sm mb-4">Follow us:</p>
          <div class="flex items-center justify-center space-x-6">
          <a href="https://www.linkedin.com/company/cesium-agency/" target="_blank" class="text-white hover:text-secondary transition-colors duration-300 flex items-center justify-center">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path d="M20.4491 20.4508H16.8933V14.8808C16.8933 13.5525 16.8708 11.8441 15.0408 11.8441C13.1858 11.8441 12.9083 13.2908 12.9083 14.7841V20.4508H9.35247V8.99748H12.7658V10.5608H12.8158C13.2908 9.66081 14.4491 8.71414 16.1808 8.71414C19.7858 8.71414 20.4508 11.0825 20.4508 14.1658V20.4508H20.4491ZM5.33914 7.43248C4.19581 7.43248 3.27081 6.50581 3.27081 5.36414C3.27081 4.22248 4.19581 3.29581 5.33914 3.29581C6.47914 3.29581 7.40747 4.22248 7.40747 5.36414C7.40747 6.50581 6.47914 7.43248 5.33914 7.43248ZM7.11914 20.4508H3.55581V8.99748H7.11914V20.4508ZM22.2241 0H1.77081C0.792477 0 0 0.774143 0 1.72914V22.2708C0 23.2258 0.792477 24 1.77081 24H22.2241C23.2041 24 24 23.2258 24 22.2708V1.72914C24 0.774143 23.2041 0 22.2241 0Z"/>
            </svg>
          </a>
          <a href="https://www.tiktok.com/@cesiumagency" target="_blank" class="text-white hover:text-secondary transition-colors duration-300 flex items-center justify-center">
            <img src="/assets/social-icons/tiktok.svg" alt="TikTok" class="h-5 w-5 object-contain transition-all duration-300">
          </a>
          <a href="https://www.instagram.com/cesiumagency/" target="_blank" class="text-white hover:text-secondary transition-colors duration-300 flex items-center justify-center">
            <img src="/assets/social-icons/instagram.svg" alt="Instagram" class="h-5 w-5 object-contain filter brightness-0 invert hover:brightness-100 hover:invert-0 transition-all duration-300">
          </a>
          <a href="https://www.facebook.com/cesiumagency/" target="_blank" class="text-white hover:text-secondary transition-colors duration-300 flex items-center justify-center">
            <img src="/assets/social-icons/facebook.svg" alt="Facebook" class="h-5 w-5 object-contain transition-all duration-300">
          </a>
          </div>
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


