<template>
  <Head title="Join Our Team - Cesium Marketing" />

  <div class="min-h-screen bg-cesium-light-gray font-poppins antialiased">
    <!-- Header -->
    <AppHeader current-page="join-team" />

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
    <AppFooter />
  </div>
</template>

<script setup>
import { Head, Link } from "@inertiajs/vue3";
import { ref, onMounted, onUnmounted } from "vue";
import AppHeader from "../Components/AppHeader.vue";
import AppFooter from "../Components/AppFooter.vue";

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

