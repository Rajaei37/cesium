<template>
  <div class="min-h-screen bg-cesium-light-gray font-poppins antialiased">
    <!-- Floating Action Buttons -->
    <div class="fixed bottom-6 right-6 z-50 flex flex-col space-y-4">
      <!-- Schedule Time Button -->
      <button 
        @click="openScheduleWindow"
        class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-6 rounded-full shadow-lg transition duration-300 transform hover:scale-105 flex items-center space-x-2"
      >
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
        </svg>
        <span>Schedule Time</span>
      </button>
      
      <!-- Request Strategy Call Button -->
      <Link href="/contact-us" class="bg-secondary hover:bg-secondary-dark text-primary font-semibold py-3 px-6 rounded-full shadow-lg transition duration-300 transform hover:scale-105 flex items-center space-x-2">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
        </svg>
        <span>Request Call</span>
      </Link>
    </div>

    <!-- Schedule Modal - Removed as we are opening a new window -->

    <!-- Sticky Navigation Header -->
    <nav class="fixed top-0 left-0 right-0 bg-white/95 backdrop-blur-sm shadow-lg z-50 transition-all duration-300" :class="{ 'shadow-xl': scrolled }">
      <div class="container mx-auto px-6 py-4 flex items-center justify-between">
        <!-- Logo -->
        <div class="flex-shrink-0">
          <img src="/assets/logos/logo-main.svg" alt="Cesium Marketing Logo" class="h-10" />
        </div>

        <!-- Navigation Menu -->
        <div class="hidden md:flex items-center space-x-8">
          <Link href="/" class="text-primary hover:text-secondary transition-colors duration-300 font-medium">Home</Link>
          <Link href="/what-we-offer" class="text-primary hover:text-secondary transition-colors duration-300 font-medium">Services</Link>
          <a href="#results" class="text-primary hover:text-secondary transition-colors duration-300 font-medium">Results</a>
          <a href="#affiliate-marketing" class="text-primary hover:text-secondary transition-colors duration-300 font-medium">Affiliate</a>
          <a href="#blog" class="text-primary hover:text-secondary transition-colors duration-300 font-medium">Insights</a>
          <Link href="/contact-us" class="text-primary hover:text-secondary transition-colors duration-300 font-medium">Contact</Link>

          <Link href="/join-our-team" class="text-primary hover:text-secondary transition-colors duration-300 font-medium">Join Our Team</Link>
        </div>

        <!-- CTA Button -->
        <div class="flex items-center space-x-4">
          <!-- Mobile Menu Button -->
          <button @click="toggleMobileMenu" class="md:hidden text-primary hover:text-secondary transition-colors duration-300">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
          </button>
        </div>
      </div>

      <!-- Mobile Menu -->
      <div v-if="mobileMenuOpen" class="md:hidden bg-white border-t border-gray-200">
        <div class="px-6 py-4 space-y-4">
          <Link href="/" @click="closeMobileMenu" class="block text-primary hover:text-secondary transition-colors duration-300 font-medium">Home</Link>
          <Link href="/what-we-offer" @click="closeMobileMenu" class="block text-primary hover:text-secondary transition-colors duration-300 font-medium">Services</Link>
          <a href="#results" @click="closeMobileMenu" class="block text-primary hover:text-secondary transition-colors duration-300 font-medium">Results</a>
          <a href="#affiliate-marketing" @click="closeMobileMenu" class="block text-primary hover:text-secondary transition-colors duration-300 font-medium">Affiliate</a>
          <a href="#blog" @click="closeMobileMenu" class="block text-primary hover:text-secondary transition-colors duration-300 font-medium">Insights</a>
          <Link href="/contact-us" @click="closeMobileMenu" class="block text-primary hover:text-secondary transition-colors duration-300 font-medium">Contact</Link>
          <Link href="/join-our-team" @click="closeMobileMenu" class="block text-primary hover:text-secondary transition-colors duration-300 font-medium">Join Our Team</Link>
          <Link href="/join-our-team" @click="closeMobileMenu" class="block text-primary hover:text-secondary transition-colors duration-300 font-medium">Join Our Team</Link>
        </div>
      </div>
    </nav>

    <!-- Header Section (Hero Section modified to include header elements) -->
    <section id="home" class="relative bg-primary text-white py-6 overflow-hidden mt-20">
      <div class="container mx-auto px-6 relative z-10 flex items-center justify-between">
        <!-- Social Media Icons -->
        <div class="flex items-center space-x-4 ml-auto">
          <a href="https://www.tiktok.com/" target="_blank" class="text-white hover:text-secondary transition-colors duration-300">
            <i class="fab fa-tiktok text-2xl"></i>
          </a>
          <a href="https://www.instagram.com/" target="_blank" class="text-white hover:text-secondary transition-colors duration-300">
            <i class="fab fa-instagram text-2xl"></i>
          </a>
          <a href="https://www.facebook.com/" target="_blank" class="text-white hover:text-secondary transition-colors duration-300">
            <i class="fab fa-facebook-f text-2xl"></i>
          </a>
          <a href="https://www.linkedin.com/" target="_blank" class="text-white hover:text-secondary transition-colors duration-300">
            <i class="fab fa-linkedin-in text-2xl"></i>
          </a>
        </div>
      </div>
    </section>

    <!-- Hero Content Section -->
    <section class="relative bg-primary text-white py-20 overflow-hidden">
      <div class="absolute inset-0 bg-gradient-to-br from-primary via-primary-light to-primary opacity-95"></div>
      <div class="container mx-auto px-6 relative z-10 flex flex-col lg:flex-row items-center justify-between">
        <div class="lg:w-1/2 text-center lg:text-left mb-10 lg:mb-0">
          <h1 class="text-5xl lg:text-6xl font-semibold leading-tight mb-6 animate-fade-in-up">
            Launch & Scale Your iGaming Business
          </h1>
          <p class="text-xl lg:text-2xl mb-8 opacity-90 animate-fade-in-up animation-delay-200 font-light">
            We help iGaming operators grow faster with data-driven acquisition, retention, and brand building.
          </p>
          <Link href="/contact-us" class="inline-block bg-secondary text-primary font-medium py-4 px-8 rounded-full shadow-lg hover:bg-secondary-dark transition duration-300 transform hover:scale-105 animate-fade-in-up animation-delay-400">
            Request Strategy Call
          </Link>
        </div>
        <div class="lg:w-1/2 flex justify-center lg:justify-end animate-fade-in-up animation-delay-600">
          <MiniSlotMachine class="w-full max-w-md" />
        </div>
      </div>
    </section>

    <!-- Benefits Section -->
    <section class="py-20 bg-white">
      <div class="container mx-auto px-6 text-center">
        <h2 class="text-4xl lg:text-5xl font-semibold text-primary mb-8 animate-fade-in-up">
          Why Partner with Cesium Marketing?
        </h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
          <div class="animate-fade-in-up bg-cesium-light-gray p-8 rounded-xl shadow-lg" style="animation-delay: 0.1s;">
            <h3 class="text-2xl font-semibold text-primary mb-4">Data-Driven Strategies</h3>
            <p class="text-gray-700 font-light">Our decisions are backed by extensive data analysis, ensuring optimal performance and measurable ROI for your iGaming business.</p>
          </div>
          <div class="animate-fade-in-up bg-cesium-light-gray p-8 rounded-xl shadow-lg" style="animation-delay: 0.3s;">
            <h3 class="text-2xl font-semibold text-primary mb-4">Industry Expertise</h3>
            <p class="text-gray-700 font-light">With years of experience in the iGaming sector, we understand the unique challenges and opportunities in this dynamic industry.</p>
          </div>
          <div class="animate-fade-in-up bg-cesium-light-gray p-8 rounded-xl shadow-lg" style="animation-delay: 0.5s;">
            <h3 class="text-2xl font-semibold text-primary mb-4">Proven Results</h3>
            <p class="text-gray-700 font-light">Our track record speaks for itself - we've helped numerous iGaming businesses achieve significant growth and market success.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- What We Offer Section -->
    <section id="services" class="py-20 bg-white">
      <div class="container mx-auto px-6">
        <div class="text-center mb-16">
          <h2 class="text-4xl lg:text-5xl font-semibold text-primary mb-4 animate-fade-in-up">
            What We Offer
          </h2>
          <p class="text-xl text-gray-600 max-w-3xl mx-auto animate-fade-in-up animation-delay-200 font-light">
            Comprehensive marketing solutions designed specifically for the iGaming industry
          </p>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
          <FeatureCard
            v-for="(feature, index) in features"
            :key="index"
            :icon="feature.icon"
            :title="feature.title"
            :desc="feature.desc"
            :long_desc="feature.long_desc"
            class="animate-fade-in-up bg-white rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 border border-gray-100"
            :style="{ animationDelay: `${200 * index}ms` }"
          />
        </div>
      </div>
    </section>

    <!-- KPI Section -->
    <section id="results" class="py-20 bg-primary text-white">
      <div class="container mx-auto px-6">
        <div class="text-center mb-16">
          <h2 class="text-4xl lg:text-5xl font-semibold mb-4 animate-fade-in-up">
            Proven Results
          </h2>
          <p class="text-xl opacity-90 max-w-3xl mx-auto animate-fade-in-up animation-delay-200 font-light">
            Our data-driven approach delivers measurable growth for iGaming operators
          </p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
          <KpiCard
            v-for="(kpi, index) in kpis"
            :key="index"
            :icon="kpi.icon"
            :value="kpi.number"
            :label="kpi.label"
            class="animate-fade-in-up bg-primary-light rounded-xl p-8 border border-primary-light hover:bg-primary-dark transition-all duration-300"
            :style="{ animationDelay: `${200 * index}ms` }"
          />
        </div>
      </div>
    </section>



    <!-- Latest Insights Section -->
    <section id="blog" class="py-20 bg-primary-dark text-white">
      <div class="container mx-auto px-6">
        <div class="text-center mb-16">
          <h2 class="text-4xl lg:text-5xl font-semibold mb-4 animate-fade-in-up">
            Latest Insights
          </h2>
          <p class="text-xl opacity-90 max-w-3xl mx-auto animate-fade-in-up animation-delay-200 font-light">
            Stay ahead with our expert insights and industry analysis
          </p>
        </div>

        <!-- Featured Blog Post -->
        <div v-if="blogPosts && blogPosts.length > 0" class="mb-12">
          <div class="bg-white rounded-xl shadow-xl overflow-hidden animate-fade-in-up">
            <div class="md:flex">
              <div class="md:w-1/2">
                <img :src="blogPosts[0].image" :alt="blogPosts[0].title" class="w-full h-64 md:h-full object-cover" />
              </div>
              <div class="md:w-1/2 p-8">
                <div class="text-sm text-secondary font-semibold mb-2">FEATURED ARTICLE</div>
                <h3 class="text-2xl font-bold text-primary mb-4">{{ blogPosts[0].title }}</h3>
                <p class="text-gray-600 mb-6">{{ blogPosts[0].excerpt }}</p>
                <div class="flex items-center justify-between">
                  <div class="flex items-center space-x-4">
                    <span class="text-sm text-gray-500">{{ blogPosts[0].author }}</span>
                    <span class="text-sm text-gray-500">{{ blogPosts[0].date }}</span>
                    <span class="text-sm text-gray-500">{{ blogPosts[0].read_time }}</span>
                  </div>
                  <a :href="blogPosts[0].url" class="text-secondary hover:text-secondary-dark font-semibold">Read More →</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Blog Posts Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
          <BlogCard
            v-for="(post, index) in blogPosts.slice(1, 4)"
            :key="index"
            :title="post.title"
            :excerpt="post.excerpt"
            :author="post.author"
            :date="post.date"
            :read_time="post.read_time"
            :image="post.image"
            :url="post.url"
            :tags="post.tags"
            class="animate-fade-in-up"
            :style="{ animationDelay: `${200 * (index + 1)}ms` }"
          />
        </div>

        <!-- View All Blog Posts -->
        <div class="text-center">
          <a href="/blog" class="inline-block bg-secondary text-primary font-semibold py-4 px-8 rounded-full shadow-lg hover:bg-secondary-dark transition duration-300 transform hover:scale-105">
            View All Insights
          </a>
        </div>
      </div>
    </section>



    <!-- Interactive Calculator Section -->
    <section id="calculator" class="py-20 bg-white">
      <div class="container mx-auto px-6">
        <div class="text-center mb-16">
          <h2 class="text-4xl lg:text-5xl font-semibold text-primary mb-4 animate-fade-in-up">
            Calculate Your Growth Potential
          </h2>
          <p class="text-xl text-gray-600 max-w-3xl mx-auto animate-fade-in-up animation-delay-200 font-light">
            Use our interactive calculator to estimate your potential ROI with our marketing strategies
          </p>
        </div>
        <div class="max-w-4xl mx-auto">
          <InteractiveCalculator class="animate-fade-in-up animation-delay-400" />
        </div>
      </div>
    </section>

    <!-- Trust Badges Section -->
    <section class="py-20 bg-cesium-light-gray">
      <div class="container mx-auto px-6">
        <div class="text-center mb-16">
          <h2 class="text-4xl lg:text-5xl font-semibold text-primary mb-4 animate-fade-in-up">
            Trusted by Industry Leaders
          </h2>
          <p class="text-xl text-gray-600 max-w-3xl mx-auto animate-fade-in-up animation-delay-200 font-light">
            Join the ranks of successful iGaming operators who trust us with their growth
          </p>
        </div>
        <TrustBadges class="animate-fade-in-up animation-delay-400" />
      </div>
    </section>

    <!-- Contact Section - Replaced with link to dedicated Contact Us page -->
    <section class="py-20 bg-primary text-white text-center">
      <div class="container mx-auto px-6">
        <h2 class="text-4xl lg:text-5xl font-semibold mb-4 animate-fade-in-up">
          Ready to Transform Your iGaming Business?
        </h2>
        <p class="text-xl opacity-90 max-w-3xl mx-auto mb-8 animate-fade-in-up animation-delay-200 font-light">
          Get in touch with our experts to discuss your custom growth strategy.
        </p>
        <Link href="/contact-us" class="inline-block bg-secondary text-primary font-semibold py-4 px-8 rounded-full shadow-lg hover:bg-secondary-dark transition duration-300 transform hover:scale-105 animate-fade-in-up animation-delay-400">
          Contact Our Team
        </Link>
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
              <a href="https://www.tiktok.com/" target="_blank" class="text-gray-300 hover:text-secondary transition-colors duration-300">
                <i class="fab fa-tiktok text-xl"></i>
              </a>
              <a href="https://www.instagram.com/" target="_blank" class="text-gray-300 hover:text-secondary transition-colors duration-300">
                <i class="fab fa-instagram text-xl"></i>
              </a>
              <a href="https://www.facebook.com/" target="_blank" class="text-gray-300 hover:text-secondary transition-colors duration-300">
                <i class="fab fa-facebook-f text-xl"></i>
              </a>
              <a href="https://www.linkedin.com/" target="_blank" class="text-gray-300 hover:text-secondary transition-colors duration-300">
                <i class="fab fa-linkedin-in text-xl"></i>
              </a>
            </div>
          </div>

          <!-- Latest Insights -->
          <div>
            <h3 class="text-xl font-semibold mb-6">Latest Insights</h3>
            <div class="space-y-4">
              <div v-for="(post, index) in blogPosts.slice(0, 3)" :key="index" class="border-b border-gray-600 pb-4 last:border-b-0">
                <a :href="post.url" class="text-gray-300 hover:text-white transition-colors duration-300 font-medium">
                  {{ post.title }}
                </a>
                <p class="text-sm text-gray-400 mt-1">{{ post.date }}</p>
              </div>
            </div>
          </div>

          <!-- Apply Now Section -->
          <div>
            <h3 class="text-xl font-semibold mb-6">Ready to Scale Your Business?</h3>
            <p class="text-gray-300 mb-6 font-light">
              Join successful iGaming operators who have transformed their growth with our proven strategies.
            </p>
            <a href="https://forms.google.com/your-form-link" target="_blank" class="inline-block bg-secondary text-primary font-semibold py-3 px-6 rounded-full shadow-lg hover:bg-secondary-dark transition duration-300 transform hover:scale-105">
              Apply Now
            </a>
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
import { ref, onMounted, onUnmounted } from "vue";
import { Link } from "@inertiajs/vue3";
import ScrollReveal from "scrollreveal";
import FeatureCard from "../Components/FeatureCard.vue";
import KpiCard from "../Components/KpiCard.vue";
import CaseStudyCard from "../Components/CaseStudyCard.vue";
import TeamCard from "../Components/TeamCard.vue";
import BlogCard from "../Components/BlogCard.vue";
import TrustBadges from "../Components/TrustBadges.vue";
import InteractiveCalculator from "../Components/InteractiveCalculator.vue";
import MiniSlotMachine from "../Components/MiniSlotMachine.vue";

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

// Floating button methods
const openScheduleWindow = () => {
  const width = 800;
  const height = 700;
  const left = (window.screen.width / 2) - (width / 2);
  const top = (window.screen.height / 2) - (height / 2);
  window.open(
    'https://calendly.com/ragaee37/30min',
    'Calendly',
    `width=${width},height=${height},top=${top},left=${left},toolbar=no,menubar=no,location=no,status=no`
  );
};

const scrollToContact = () => {
  router.visit("/contact-us");
};

// Scroll detection for sticky header
const handleScroll = () => {
  scrolled.value = window.scrollY > 50;
};

// Props
const props = defineProps({
  features: Array,
  kpis: Array,
  caseStudies: Array,
  teamMembers: Array,
  blogPosts: Array,
});

onMounted(() => {
  // Initialize ScrollReveal with enhanced settings
  ScrollReveal().reveal(".animate-fade-in-up", {
    delay: 100,
    distance: "60px",
    origin: "bottom",
    opacity: 0,
    easing: "cubic-bezier(0.25, 0.46, 0.45, 0.94)",
    interval: 150,
    reset: false,
  });

  // Add scroll event listener for sticky header
  window.addEventListener('scroll', handleScroll);
  
  // Add keyboard event listener for modal
  window.addEventListener('keydown', handleKeydown);
});

// Cleanup on unmount
onUnmounted(() => {
  window.removeEventListener('scroll', handleScroll);
  window.removeEventListener('keydown', handleKeydown);
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
.animation-delay-600 {
  animation-delay: 0.6s;
}

/* Enhanced hover effects */
.hover\:shadow-xl:hover {
  box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
}

/* Smooth transitions for all interactive elements */
* {
  transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;
  transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
  transition-duration: 300ms;
}

/* Floating buttons responsive design */
@media (max-width: 768px) {
  .fixed.bottom-6.right-6 {
    bottom: 1rem;
    right: 1rem;
  }
  
  .fixed.bottom-6.right-6 button {
    padding: 0.75rem 1rem;
    font-size: 0.875rem;
  }
  
  .fixed.bottom-6.right-6 button span {
    display: none;
  }
  
  .fixed.bottom-6.right-6 button svg {
    width: 1.25rem;
    height: 1.25rem;
  }
}
</style>


