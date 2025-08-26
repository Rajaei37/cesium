<template>
  <nav :class="[
    'fixed top-0 left-0 right-0 z-50 transition-all duration-500 w-full max-w-full overflow-x-hidden backdrop-blur-md',
    scrolled ? 'bg-primary/95 shadow-2xl py-2 border-b border-secondary/20' : 'bg-gradient-to-b from-primary/90 via-primary/70 to-transparent py-4'
  ]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 py-4 flex items-center justify-between w-full">
      <!-- Enhanced Logo with Animation -->
      <div class="flex-shrink-0 group">
        <Link href="/" class="block">
          <img 
            src="/assets/logos/Asset31.svg" 
            alt="Cesium Marketing Logo" 
            class="h-10 transition-all duration-500 group-hover:scale-110 group-hover:drop-shadow-lg filter group-hover:brightness-110" 
          />
          <!-- Logo Glow Effect -->
          <div class="absolute inset-0 bg-secondary/20 rounded-lg blur-lg opacity-0 group-hover:opacity-100 transition-opacity duration-500 -z-10"></div>
        </Link>
      </div>

      <!-- Enhanced Navigation Menu (Desktop) -->
      <div class="hidden md:flex items-center space-x-8">
        <NavLink 
          href="/" 
          :active="currentPage === 'home'"
          @mouseenter="playHoverSound"
        >
          Home
        </NavLink>
        <NavLink 
          href="/services" 
          :active="currentPage === 'services'"
          @mouseenter="playHoverSound"
        >
          Services
        </NavLink>
        <NavLink 
          href="/our-process" 
          :active="currentPage === 'our-process'"
          @mouseenter="playHoverSound"
        >
          Our process
        </NavLink>
        <NavLink 
          href="/blog" 
          :active="currentPage === 'blog'"
          @mouseenter="playHoverSound"
        >
          News
        </NavLink>
        <NavLink 
          href="/contact-us" 
          :active="currentPage === 'contact'"
          @mouseenter="playHoverSound"
        >
          Contact
        </NavLink>
      </div>

      <!-- Enhanced CTA Buttons and Social Media Icons (Desktop) -->
      <div class="hidden md:flex items-center space-x-4">
        <!-- Join Team Button -->
        <Link 
          href="/join-our-team" 
          class="group relative text-white hover:text-secondary transition-all duration-300 font-medium px-6 py-2 border border-white/30 hover:border-secondary/70 backdrop-blur-sm hover:backdrop-blur-md overflow-hidden"
          style="border-radius: 0.56px;"
          :class="{ 'text-secondary border-secondary': currentPage === 'join-team' }"
        >
          <span class="relative z-10">Join our Team</span>
          <!-- Button Background Animation -->
          <div class="absolute inset-0 bg-gradient-to-r from-secondary/0 to-secondary/20 transform -translate-x-full group-hover:translate-x-0 transition-transform duration-500" style="border-radius: 0.56px;"></div>
        </Link>

        <!-- Contact CTA Button -->
        <Link 
          href="/contact-us" 
          class="group relative bg-gradient-to-r from-secondary via-secondary-light to-secondary text-primary font-semibold px-6 py-2 shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:scale-105 hover:-translate-y-0.5 overflow-hidden"
          style="border-radius: 0.56px;"
        >
          <span class="relative z-10">contact us</span>
          <!-- Shimmer Effect -->
          <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/20 to-transparent transform -skew-x-12 -translate-x-full group-hover:translate-x-full transition-transform duration-1000"></div>
          <!-- Button Glow -->
          <div class="absolute inset-0 bg-secondary/50 blur-lg opacity-0 group-hover:opacity-100 transition-opacity duration-500 -z-10" style="border-radius: 0.56px;"></div>
        </Link>
        
        <!-- Enhanced Social Media Icons -->
        <div class="flex items-center space-x-3 ml-4">
          <SocialIcon 
            href="https://www.linkedin.com/company/cesium-agency/" 
            platform="linkedin"
            :icon="linkedinIcon"
          />
          <SocialIcon 
            href="https://www.tiktok.com/@cesiumagency" 
            platform="tiktok"
            image="/assets/social-icons/tiktok.svg"
          />
          <SocialIcon 
            href="https://www.instagram.com/cesiumagency/" 
            platform="instagram"
            image="/assets/social-icons/instagram.svg"
          />
          <SocialIcon 
            href="https://www.facebook.com/cesiumagency/" 
            platform="facebook"
            image="/assets/social-icons/facebook.svg"
          />
        </div>
      </div>

        <!-- Enhanced Mobile Menu Button -->
      <div class="flex items-center space-x-4">
        <button 
          @click="toggleMobileMenu" 
          class="md:hidden relative group p-2 text-white hover:text-secondary transition-all duration-300 hover:bg-white/10"
          style="border-radius: 0.56px;"
          :class="{ 'text-secondary': mobileMenuOpen }"
        >
          <!-- Animated Hamburger Icon -->
          <div class="relative w-6 h-6">
            <span 
              class="absolute block w-6 h-0.5 bg-current transform transition-all duration-300"
              :class="mobileMenuOpen ? 'rotate-45 translate-y-2.5' : 'translate-y-0'"
            ></span>
            <span 
              class="absolute block w-6 h-0.5 bg-current transform transition-all duration-300 translate-y-2"
              :class="mobileMenuOpen ? 'opacity-0' : 'opacity-100'"
            ></span>
            <span 
              class="absolute block w-6 h-0.5 bg-current transform transition-all duration-300"
              :class="mobileMenuOpen ? '-rotate-45 translate-y-2.5' : 'translate-y-4'"
            ></span>
          </div>
        </button>
      </div>
    </div>

    <!-- Enhanced Mobile Menu -->
    <Transition
      enter-active-class="transition-all duration-300 ease-out"
      enter-from-class="opacity-0 transform -translate-y-4"
      enter-to-class="opacity-100 transform translate-y-0"
      leave-active-class="transition-all duration-200 ease-in"
      leave-from-class="opacity-100 transform translate-y-0"
      leave-to-class="opacity-0 transform -translate-y-4"
    >
      <div v-if="mobileMenuOpen" class="absolute top-full left-0 right-0 bg-primary/95 backdrop-blur-lg shadow-2xl border-t border-secondary/20 md:hidden z-40">
        <div class="px-4 py-6 space-y-4 w-full">
          <MobileNavLink href="/" @click="closeMobileMenu">Home</MobileNavLink>
          <MobileNavLink href="/services" @click="closeMobileMenu">Services</MobileNavLink>
          <MobileNavLink href="/our-process" @click="closeMobileMenu">Our process</MobileNavLink>
          <MobileNavLink href="/blog" @click="closeMobileMenu">News</MobileNavLink>
          <MobileNavLink href="/contact-us" @click="closeMobileMenu">Contact</MobileNavLink>
          
          <!-- Mobile CTA Buttons -->
          <div class="pt-4 border-t border-white/10 space-y-3">
            <Link 
              href="/join-our-team" 
              @click="closeMobileMenu" 
              class="block w-full text-center text-white hover:text-secondary transition-colors duration-300 font-medium py-3 border border-white/30 hover:border-secondary/70 backdrop-blur-sm"
              style="border-radius: 0.56px;"
            >
              Join our Team
            </Link>
            <Link 
              href="/contact-us" 
              @click="closeMobileMenu" 
              class="block w-full bg-gradient-to-r from-secondary via-secondary-light to-secondary text-primary font-semibold py-3 text-center shadow-lg transition-all duration-300 transform hover:scale-105"
              style="border-radius: 0.56px;"
            >
              contact us
            </Link>
          </div>
          
          <!-- Mobile Social Media Icons -->
          <div class="pt-4 border-t border-white/10">
            <p class="text-white/70 text-sm mb-3 text-center">Follow us:</p>
            <div class="flex items-center justify-center space-x-6">
              <SocialIcon 
                href="https://www.linkedin.com/company/cesium-agency/" 
                platform="linkedin"
                :icon="linkedinIcon"
                size="large"
              />
              <SocialIcon 
                href="https://www.tiktok.com/@cesiumagency" 
                platform="tiktok"
                image="/assets/social-icons/tiktok.svg"
                size="large"
              />
              <SocialIcon 
                href="https://www.instagram.com/cesiumagency/" 
                platform="instagram"
                image="/assets/social-icons/instagram.svg"
                size="large"
              />
              <SocialIcon 
                href="https://www.facebook.com/cesiumagency/" 
                platform="facebook"
                image="/assets/social-icons/facebook.svg"
                size="large"
              />
            </div>
          </div>
        </div>
      </div>
    </Transition>

    <!-- Mobile Menu Backdrop -->
    <Transition
      enter-active-class="transition-opacity duration-300"
      enter-from-class="opacity-0"
      enter-to-class="opacity-100"
      leave-active-class="transition-opacity duration-200"
      leave-from-class="opacity-100"
      leave-to-class="opacity-0"
    >
      <div 
        v-if="mobileMenuOpen" 
        class="fixed inset-0 bg-black/50 backdrop-blur-sm z-30 md:hidden" 
        @click="closeMobileMenu"
      ></div>
    </Transition>
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

// LinkedIn icon SVG
const linkedinIcon = `<path d="M20.4491 20.4508H16.8933V14.8808C16.8933 13.5525 16.8708 11.8441 15.0408 11.8441C13.1858 11.8441 12.9083 13.2908 12.9083 14.7841V20.4508H9.35247V8.99748H12.7658V10.5608H12.8158C13.2908 9.66081 14.4491 8.71414 16.1808 8.71414C19.7858 8.71414 20.4508 11.0825 20.4508 14.1658V20.4508H20.4491ZM5.33914 7.43248C4.19581 7.43248 3.27081 6.50581 3.27081 5.36414C3.27081 4.22248 4.19581 3.29581 5.33914 3.29581C6.47914 3.29581 7.40747 4.22248 7.40747 5.36414C7.40747 6.50581 6.47914 7.43248 5.33914 7.43248ZM7.11914 20.4508H3.55581V8.99748H7.11914V20.4508ZM22.2241 0H1.77081C0.792477 0 0 0.774143 0 1.72914V22.2708C0 23.2258 0.792477 24 1.77081 24H22.2241C23.2041 24 24 23.2258 24 22.2708V1.72914C24 0.774143 23.2041 0 22.2241 0Z"/>`;

// Sound effect for hover (optional)
const playHoverSound = () => {
  // Optional: Add subtle sound feedback
  // const audio = new Audio('/assets/sounds/hover.mp3');
  // audio.volume = 0.1;
  // audio.play().catch(() => {});
};

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
  document.body.style.overflow = '';
};

// Enhanced scroll detection
const handleScroll = () => {
  const scrollTop = window.scrollY;
  scrolled.value = scrollTop > 50;
};

onMounted(() => {
  window.addEventListener('scroll', handleScroll, { passive: true });
});

onUnmounted(() => {
  window.removeEventListener('scroll', handleScroll);
  document.body.style.overflow = '';
});
</script>

<!-- Child Components -->
<script>
// NavLink Component
const NavLink = {
  props: ['href', 'active'],
  emits: ['mouseenter'],
  template: `
    <Link 
      :href="href"
      @mouseenter="$emit('mouseenter')"
      class="relative text-white hover:text-secondary transition-all duration-300 font-medium group py-2 px-1"
      :class="{ 'text-secondary': active }"
    >
      <slot></slot>
      <!-- Enhanced Underline Animation -->
      <span 
        class="absolute bottom-0 left-0 h-0.5 bg-gradient-to-r from-secondary to-secondary-light transition-all duration-500 ease-out"
        :class="active ? 'w-full shadow-lg shadow-secondary/50' : 'w-0 group-hover:w-full'"
      ></span>
      <!-- Hover Glow Effect -->
      <div class="absolute inset-0 bg-secondary/10 rounded-md opacity-0 group-hover:opacity-100 transition-opacity duration-300 -z-10"></div>
    </Link>
  `,
  components: { Link }
};

// MobileNavLink Component
const MobileNavLink = {
  props: ['href'],
  emits: ['click'],
  template: `
    <Link 
      :href="href"
      @click="$emit('click')"
      class="group block text-white hover:text-secondary transition-all duration-300 font-medium text-lg py-3 px-4 hover:bg-white/5 relative overflow-hidden"
      style="border-radius: 0.56px;"
    >
      <span class="relative z-10">
        <slot></slot>
      </span>
      <!-- Mobile link animation -->
      <div class="absolute inset-0 bg-gradient-to-r from-secondary/0 to-secondary/10 transform -translate-x-full group-hover:translate-x-0 transition-transform duration-500"></div>
    </Link>
  `,
  components: { Link }
};

// SocialIcon Component
const SocialIcon = {
  props: ['href', 'platform', 'icon', 'image', 'size'],
  template: `
    <a 
      :href="href" 
      target="_blank" 
      class="group relative text-white hover:text-secondary transition-all duration-300 p-2 hover:bg-white/10 hover:shadow-lg hover:shadow-secondary/20 transform hover:scale-110"
      style="border-radius: 0.56px;"
      :class="size === 'large' ? 'p-3' : 'p-2'"
    >
      <!-- SVG Icon -->
      <svg 
        v-if="icon"
        :class="size === 'large' ? 'w-6 h-6' : 'w-5 h-5'"
        viewBox="0 0 24 24" 
        fill="currentColor" 
        xmlns="http://www.w3.org/2000/svg"
        v-html="icon"
      ></svg>
      
      <!-- Image Icon -->
      <img 
        v-else-if="image"
        :src="image" 
        :alt="platform" 
        :class="[
          size === 'large' ? 'h-6 w-6' : 'h-5 w-5',
          'object-contain transition-all duration-300',
          platform === 'instagram' ? 'filter brightness-0 invert group-hover:brightness-100 group-hover:invert-0' : ''
        ]"
      />
      
      <!-- Hover Glow Effect -->
      <div class="absolute inset-0 bg-secondary/20 blur-md opacity-0 group-hover:opacity-100 transition-opacity duration-300 -z-10" style="border-radius: 0.56px;"></div>
    </a>
  `
};

export default {
  components: {
    NavLink,
    MobileNavLink,
    SocialIcon
  }
};
</script>

<style scoped>
/* Enhanced hover effects */
@keyframes shimmer {
  0% { transform: translateX(-100%) skewX(-12deg); }
  100% { transform: translateX(200%) skewX(-12deg); }
}

.shimmer-effect {
  animation: shimmer 2s ease-in-out infinite;
}

/* Custom backdrop blur for better performance */
.backdrop-blur-enhanced {
  backdrop-filter: blur(12px) saturate(1.5);
  -webkit-backdrop-filter: blur(12px) saturate(1.5);
}

/* Smooth transitions for all interactive elements */
* {
  transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;
}
</style>