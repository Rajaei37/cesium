<template>
  <Head title="Join Our Team - Cesium Marketing" />

  <div class="min-h-screen bg-cesium-light-gray font-poppins antialiased">
    <!-- Navigation Header -->
    <nav class="bg-white/95 backdrop-blur-sm shadow-lg sticky top-0 z-50">
      <div class="container mx-auto px-6 py-4 flex items-center justify-between">
        <!-- Logo -->
        <div class="flex-shrink-0">
          <Link href="/">
            <img src="/assets/logos/logo-main.svg" alt="Cesium Marketing Logo" class="h-10 transition-transform duration-300 hover:scale-105" />
          </Link>
        </div>

        <!-- Navigation Menu -->
        <div class="hidden md:flex items-center space-x-8">
          <Link href="/" class="text-primary hover:text-secondary transition-colors duration-300 font-medium relative group">
            Home
            <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-secondary transition-all duration-300 group-hover:w-full"></span>
          </Link>
          <Link href="/what-we-offer" class="text-primary hover:text-secondary transition-colors duration-300 font-medium relative group">
            Services
            <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-secondary transition-all duration-300 group-hover:w-full"></span>
          </Link>
          <Link href="/#results" class="text-primary hover:text-secondary transition-colors duration-300 font-medium relative group">
            Results
            <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-secondary transition-all duration-300 group-hover:w-full"></span>
          </Link>
          <Link href="/blog" class="text-primary hover:text-secondary transition-colors duration-300 font-medium relative group">
            Insights
            <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-secondary transition-all duration-300 group-hover:w-full"></span>
          </Link>
          <Link href="/contact-us" class="text-primary hover:text-secondary transition-colors duration-300 font-medium relative group">
            Contact
            <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-secondary transition-all duration-300 group-hover:w-full"></span>
          </Link>
          <Link href="/join-our-team" class="text-secondary font-medium relative">
            Join Our Team
            <span class="absolute bottom-0 left-0 w-full h-0.5 bg-secondary"></span>
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
      <div v-if="mobileMenuOpen" class="md:hidden bg-white border-t border-gray-200 animate-slide-down">
        <div class="px-6 py-4 space-y-4">
          <Link href="/" @click="closeMobileMenu" class="block text-primary hover:text-secondary transition-colors duration-300 font-medium">Home</Link>
          <Link href="/what-we-offer" @click="closeMobileMenu" class="block text-primary hover:text-secondary transition-colors duration-300 font-medium">Services</Link>
          <Link href="/#results" @click="closeMobileMenu" class="block text-primary hover:text-secondary transition-colors duration-300 font-medium">Results</Link>
          <Link href="/blog" @click="closeMobileMenu" class="block text-primary hover:text-secondary transition-colors duration-300 font-medium">Insights</Link>
          <Link href="/contact-us" @click="closeMobileMenu" class="block text-primary hover:text-secondary transition-colors duration-300 font-medium">Contact</Link>
          <Link href="/join-our-team" @click="closeMobileMenu" class="block text-secondary font-medium">Join Our Team</Link>
        </div>
      </div>
    </nav>

    <!-- Hero Section -->
    <section class="relative bg-primary text-white py-20 overflow-hidden">
      <div class="absolute inset-0 bg-gradient-to-br from-primary via-primary-light to-primary opacity-95"></div>
      <div class="container mx-auto px-6 relative z-10 text-center">
        <h1 class="text-5xl lg:text-6xl font-semibold leading-tight mb-6 animate-fade-in-up">
          Join Our Team
        </h1>
        <p class="text-xl lg:text-2xl mb-8 opacity-90 animate-fade-in-up animation-delay-200 font-light max-w-3xl mx-auto">
          Grow With Us. Launch Your Creativity. Build the Future.
        </p>
      </div>
    </section>

    <!-- Content Section -->
    <section class="py-20 bg-white">
      <div class="container mx-auto px-6 max-w-4xl">
        <p class="text-gray-700 text-lg mb-6">
          At Cesium Marketing, we’re not just offering jobs — we’re offering a place to thrive.
        </p>
        <p class="text-gray-700 text-lg mb-6">
          We believe in the power of bold ideas, passionate collaboration, and shared success. Whether you're a creative visionary, a marketing mastermind, or a tech-savvy problem-solver, we want to empower you to grow beyond limits, create without boundaries, and be part of a team that feels like family.
        </p>
        <blockquote class="border-l-4 border-secondary pl-4 py-2 mb-6 italic text-gray-800">
          <p class="text-xl">🚀 This is more than a career — it’s a launchpad for your ambition.</p>
        </blockquote>

        <h2 class="text-3xl font-semibold text-primary mb-6">What You Can Expect:</h2>
        <ul class="list-none space-y-4 mb-8">
          <li class="flex items-start text-lg text-gray-700">
            <span class="bg-secondary text-primary p-2 rounded-full mr-4 mt-1">
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
              </svg>
            </span>
            <p><span class="font-semibold">Creative Freedom</span> — We encourage innovative thinking and out-of-the-box ideas.</p>
          </li>
          <li class="flex items-start text-lg text-gray-700">
            <span class="bg-secondary text-primary p-2 rounded-full mr-4 mt-1">
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
              </svg>
            </span>
            <p><span class="font-semibold">Growth Opportunities</span> — Learn, evolve, and take your skills to the next level.</p>
          </li>
          <li class="flex items-start text-lg text-gray-700">
            <span class="bg-secondary text-primary p-2 rounded-full mr-4 mt-1">
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
              </svg>
            </span>
            <p><span class="font-semibold">Supportive Culture</span> — Collaboration, mentorship, and mutual respect at every level.</p>
          </li>
          <li class="flex items-start text-lg text-gray-700">
            <span class="bg-secondary text-primary p-2 rounded-full mr-4 mt-1">
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
              </svg>
            </span>
            <p><span class="font-semibold">Remote Flexibility</span> — Work from where you’re most inspired.</p>
          </li>
          <li class="flex items-start text-lg text-gray-700">
            <span class="bg-secondary text-primary p-2 rounded-full mr-4 mt-1">
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
              </svg>
            </span>
            <p><span class="font-semibold">Real Impact</span> — Your work will shape campaigns for top-tier clients in the online gaming space.</p>
          </li>
        </ul>

        <p class="text-gray-700 text-lg mb-8">
          If you’re ready to turn your passion into progress, your creativity into campaigns, and your potential into purpose — let’s talk.
        </p>
        <div class="text-center">
          <Link href="/contact-us" class="inline-block bg-secondary text-primary font-semibold py-4 px-8 rounded-full shadow-lg hover:bg-secondary-dark transition-all duration-300 transform hover:scale-105 hover:shadow-xl">
            Apply now and be part of the Cesium journey.
          </Link>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class="bg-primary-dark text-white py-16">
      <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
          <!-- Company Info -->
          <div>
            <img src="/assets/logos/logo-main.svg" alt="Cesium Marketing Logo" class="h-12 mb-6" />
            <p class="text-gray-300 mb-6 font-light">
              Cesium Marketing specializes in data-driven growth strategies for iGaming operators. We help businesses scale faster with proven acquisition, retention, and brand building techniques.
            </p>
            <div class="flex space-x-4">
              <a href="https://www.tiktok.com/" target="_blank" class="text-gray-300 hover:text-secondary transition-colors duration-300 transform hover:scale-110">
                <i class="fab fa-tiktok text-xl"></i>
              </a>
              <a href="https://www.instagram.com/" target="_blank" class="text-gray-300 hover:text-secondary transition-colors duration-300 transform hover:scale-110">
                <i class="fab fa-instagram text-xl"></i>
              </a>
              <a href="https://www.facebook.com/" target="_blank" class="text-gray-300 hover:text-secondary transition-colors duration-300 transform hover:scale-110">
                <i class="fab fa-facebook-f text-xl"></i>
              </a>
              <a href="https://www.linkedin.com/" target="_blank" class="text-gray-300 hover:text-secondary transition-colors duration-300 transform hover:scale-110">
                <i class="fab fa-linkedin-in text-xl"></i>
              </a>
            </div>
          </div>

          <!-- Quick Links -->
          <div>
            <h3 class="text-xl font-semibold mb-6">Quick Links</h3>
            <div class="space-y-3">
              <Link href="/" class="block text-gray-300 hover:text-white transition-colors duration-300 hover:translate-x-2 transform">Home</Link>
              <Link href="/what-we-offer" class="block text-gray-300 hover:text-white transition-colors duration-300 hover:translate-x-2 transform">Services</Link>
              <a href="/#results" class="block text-gray-300 hover:text-white transition-colors duration-300 hover:translate-x-2 transform">Results</a>
              <a href="/#blog" class="block text-gray-300 hover:text-white transition-colors duration-300 hover:translate-x-2 transform">Insights</a>
              <Link href="/contact-us" class="block text-gray-300 hover:text-white transition-colors duration-300 hover:translate-x-2 transform">Contact</Link>
              <Link href="/join-our-team" class="block text-gray-300 hover:text-white transition-colors duration-300 hover:translate-x-2 transform">Join Our Team</Link>
            </div>
          </div>

          <!-- Contact Info -->
          <div>
            <h3 class="text-xl font-semibold mb-6">Contact Information</h3>
            <div class="space-y-3 text-gray-300">
              <p class="hover:text-white transition-colors duration-300">123 Marketing Lane, Suite 400</p>
              <p class="hover:text-white transition-colors duration-300">Business City, BC 12345</p>
              <p>
                <a href="tel:+1234567890" class="hover:text-white transition-colors duration-300 hover:underline">+1 (234) 567-890</a>
              </p>
              <p>
                <a href="mailto:info@cesiummarketing.com" class="hover:text-white transition-colors duration-300 hover:underline">info@cesiummarketing.com</a>
              </p>
            </div>
          </div>
        </div>

        <div class="border-t border-gray-600 mt-12 pt-8 text-center">
          <p class="text-gray-400 font-light">
            © 2024 Cesium Marketing. All rights reserved. | 
            <a href="/privacy" class="hover:text-white transition-colors duration-300">Privacy Policy</a> | 
            <a href="/terms" class="hover:text-white transition-colors duration-300">Terms of Service</a>
          </p>
        </div>
      </div>
    </footer>
  </div>
</template>

<script setup>
import { Head, Link } from "@inertiajs/vue3";
import { ref, onMounted, onUnmounted } from "vue";

// Mobile menu state
const mobileMenuOpen = ref(false);

// Mobile menu methods
const toggleMobileMenu = () => {
  mobileMenuOpen.value = !mobileMenuOpen.value;
};

const closeMobileMenu = () => {
  mobileMenuOpen.value = false;
};

// Cleanup on unmount
onUnmounted(() => {
  // Clean up any event listeners if needed
});
</script>

<style scoped>
/* Custom animation delays for staggered effects */
.animation-delay-200 {
  animation-delay: 0.2s;
}
.animation-delay-400 {
  animation-delay: 0.4s;
}

/* Floating animations */
@keyframes float {
  0%, 100% { transform: translateY(0px); }
  50% { transform: translateY(-20px); }
}

@keyframes float-delayed {
  0%, 100% { transform: translateY(0px); }
  50% { transform: translateY(-15px); }
}

@keyframes float-slow {
  0%, 100% { transform: translateY(0px); }
  50% { transform: translateY(-10px); }
}

.animate-float {
  animation: float 6s ease-in-out infinite;
}

.animate-float-delayed {
  animation: float-delayed 8s ease-in-out infinite;
  animation-delay: 2s;
}

.animate-float-slow {
  animation: float-slow 10s ease-in-out infinite;
  animation-delay: 4s;
}

/* Slide down animation for mobile menu */
@keyframes slide-down {
  from {
    opacity: 0;
    transform: translateY(-10px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

.animate-slide-down {
  animation: slide-down 0.3s ease-out;
}

/* Enhanced hover effects */
.hover\:shadow-xl:hover {
  box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
}

/* Service section transitions */
.service-section {
  transition: all 0.3s ease;
}

.service-image, .service-content {
  transition: transform 0.3s ease;
}

/* Smooth transitions for all interactive elements */
* {
  transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;
  transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
  transition-duration: 300ms;
}

/* Navigation underline animation */
.group:hover .absolute {
  width: 100%;
}

/* Button hover effects */
button:hover, .inline-block:hover {
  transform: translateY(-2px);
}

/* Responsive design adjustments */
@media (max-width: 768px) {
  .floating-element {
    display: none;
  }
  
  .grid-cols-1.md\\:grid-cols-2 {
    grid-template-columns: 1fr;
  }
  
  .service-section .md\\:order-2 {
    order: 1;
  }
  
  .service-section .md\\:order-1 {
    order: 2;
  }
}

/* Counter styling */
.counter {
  font-family: 'Poppins', sans-serif;
  font-weight: 700;
}

/* Service feature animations */
.service-feature {
  opacity: 0;
  animation: fadeInUp 0.6s ease forwards;
}

.service-feature:nth-child(1) { animation-delay: 0.1s; }
.service-feature:nth-child(2) { animation-delay: 0.2s; }
.service-feature:nth-child(3) { animation-delay: 0.3s; }
.service-feature:nth-child(4) { animation-delay: 0.4s; }

@keyframes fadeInUp {
  from {
    opacity: 0;
    transform: translateY(20px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}
</style>

