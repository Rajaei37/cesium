<template>
  <Head title="What We Offer - Cesium Marketing" />

  <div class="min-h-screen bg-cesium-light-gray font-poppins antialiased">
    <!-- Navigation Header -->
    <nav class="bg-white/95 backdrop-blur-sm shadow-lg">
      <div class="container mx-auto px-6 py-4 flex items-center justify-between">
        <!-- Logo -->
        <div class="flex-shrink-0">
          <Link href="/">
            <img src="/assets/logos/logo-main.svg" alt="Cesium Marketing Logo" class="h-10" />
          </Link>
        </div>

        <!-- Navigation Menu -->
        <div class="hidden md:flex items-center space-x-8">
          <Link href="/" class="text-primary hover:text-secondary transition-colors duration-300 font-medium">Home</Link>
          <Link href="/what-we-offer" class="text-secondary font-medium">Services</Link>
          <Link href="/#results" class="text-primary hover:text-secondary transition-colors duration-300 font-medium">Results</Link>
          <Link href="/blog" class="text-primary hover:text-secondary transition-colors duration-300 font-medium">Insights</Link>
          <Link href="/contact-us" class="text-primary hover:text-secondary transition-colors duration-300 font-medium">Contact</Link>
        </div>

        <!-- CTA Button -->
        <div class="flex items-center space-x-4">
          <!-- Mobile Menu Button (if applicable, add mobile menu toggle here) -->
        </div>
      </div>
    </nav>

    <!-- Hero Section -->
    <section class="relative bg-primary text-white py-20 overflow-hidden">
      <div class="absolute inset-0 bg-gradient-to-br from-primary via-primary-light to-primary opacity-95"></div>
      <div class="container mx-auto px-6 relative z-10 text-center">
        <h1 class="text-5xl lg:text-6xl font-semibold leading-tight mb-6 animate-fade-in-up">
          What We Offer
        </h1>
        <p class="text-xl lg:text-2xl mb-8 opacity-90 animate-fade-in-up animation-delay-200 font-light max-w-3xl mx-auto">
          Comprehensive marketing solutions designed specifically for the iGaming industry.
        </p>
      </div>
    </section>

    <!-- Services Description Section -->
    <section class="py-20 bg-white">
      <div class="container mx-auto px-6">
        <h2 class="text-4xl lg:text-5xl font-semibold text-primary mb-12 text-center animate-fade-in-up">
          Our Core Services
        </h2>
        
        <!-- Service 1: Player Acquisition -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center mb-16">
          <div class="animate-fade-in-up">
            <img src="/assets/images/player-acquisition.jpg" alt="Player Acquisition" class="rounded-xl shadow-lg w-full" />
          </div>
          <div class="animate-fade-in-up animation-delay-200">
            <h3 class="text-3xl font-semibold text-primary mb-4">Player Acquisition</h3>
            <p class="text-gray-700 text-lg mb-4">
              We specialize in driving high-quality player traffic to your iGaming platforms through a multi-channel approach. Our strategies are designed to attract, engage, and convert potential players into loyal customers.
            </p>
            <ul class="list-disc list-inside text-gray-600 space-y-2">
              <li>SEO & Content Marketing: Ranking high on search engines for relevant keywords.</li>
              <li>Paid Media Campaigns: Targeted ads on Google, social media, and affiliate networks.</li>
              <li>Influencer Marketing: Collaborations with iGaming personalities to reach wider audiences.</li>
              <li>Email Marketing: Building and nurturing leads through compelling email campaigns.</li>
            </ul>
          </div>
        </div>

        <!-- Service 2: Retention Strategies -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center mb-16">
          <div class="animate-fade-in-up animation-delay-200 md:order-2">
            <img src="/assets/images/retention-strategies.jpg" alt="Retention Strategies" class="rounded-xl shadow-lg w-full" />
          </div>
          <div class="animate-fade-in-up md:order-1">
            <h3 class="text-3xl font-semibold text-primary mb-4">Retention Strategies</h3>
            <p class="text-gray-700 text-lg mb-4">
              Keeping your players engaged and active is crucial for long-term success. We develop sophisticated retention programs that enhance player loyalty and lifetime value.
            </p>
            <ul class="list-disc list-inside text-gray-600 space-y-2">
              <li>CRM & Loyalty Programs: Personalized communication and reward systems.</li>
              <li>Gamification: Integrating game-like elements to boost engagement.</li>
              <li>Customer Support Optimization: Ensuring seamless and effective player assistance.</li>
              <li>Predictive Analytics: Identifying at-risk players and proactive intervention.</li>
            </ul>
          </div>
        </div>

        <!-- Service 3: Brand Building & Reputation Management -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center mb-16">
          <div class="animate-fade-in-up">
            <img src="/assets/images/brand-building.jpg" alt="Brand Building" class="rounded-xl shadow-lg w-full" />
          </div>
          <div class="animate-fade-in-up animation-delay-200">
            <h3 class="text-3xl font-semibold text-primary mb-4">Brand Building & Reputation Management</h3>
            <p class="text-gray-700 text-lg mb-4">
              A strong brand is the foundation of trust and recognition. We help you build a compelling brand identity and manage your reputation effectively in the competitive iGaming landscape.
            </p>
            <ul class="list-disc list-inside text-gray-600 space-y-2">
              <li>Brand Strategy & Positioning: Defining your unique value proposition.</li>
              <li>Content Creation: Engaging blogs, videos, and social media content.</li>
              <li>Public Relations: Managing media relations and crisis communication.</li>
              <li>Review Management: Monitoring and responding to player feedback.</li>
            </ul>
          </div>
        </div>

        <!-- Service 4: Data Analytics & Reporting -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
          <div class="animate-fade-in-up animation-delay-200 md:order-2">
            <img src="/assets/images/data-analytics.jpg" alt="Data Analytics" class="rounded-xl shadow-lg w-full" />
          </div>
          <div class="animate-fade-in-up md:order-1">
            <h3 class="text-3xl font-semibold text-primary mb-4">Data Analytics & Reporting</h3>
            <p class="text-gray-700 text-lg mb-4">
              Our data-driven approach is at the heart of everything we do. We provide in-depth analysis and transparent reporting to ensure you always know your ROI and can make informed decisions.
            </p>
            <ul class="list-disc list-inside text-gray-600 space-y-2">
              <li>Performance Tracking: Real-time monitoring of key metrics.</li>
              <li>ROI Analysis: Comprehensive reports on campaign effectiveness.</li>
              <li>Market Research: Identifying trends and opportunities.</li>
              <li>A/B Testing: Optimizing campaigns for maximum impact.</li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!-- Call to Action Section -->
    <section class="py-20 bg-primary text-white">
      <div class="container mx-auto px-6 text-center">
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

          <!-- Quick Links -->
          <div>
            <h3 class="text-xl font-semibold mb-6">Quick Links</h3>
            <div class="space-y-3">
              <Link href="/" class="block text-gray-300 hover:text-white transition-colors duration-300">Home</Link>
              <Link href="/what-we-offer" class="block text-gray-300 hover:text-white transition-colors duration-300">Services</Link>
              <a href="/#results" class="block text-gray-300 hover:text-white transition-colors duration-300">Results</a>
              <a href="/#blog" class="block text-gray-300 hover:text-white transition-colors duration-300">Insights</a>
              <Link href="/contact-us" class="block text-gray-300 hover:text-white transition-colors duration-300">Contact</Link>
            </div>
          </div>

          <!-- Contact Info -->
          <div>
            <h3 class="text-xl font-semibold mb-6">Contact Information</h3>
            <div class="space-y-3 text-gray-300">
              <p>123 Marketing Lane, Suite 400</p>
              <p>Business City, BC 12345</p>
              <p>
                <a href="tel:+1234567890" class="hover:text-white transition-colors duration-300">+1 (234) 567-890</a>
              </p>
              <p>
                <a href="mailto:info@cesiummarketing.com" class="hover:text-white transition-colors duration-300">info@cesiummarketing.com</a>
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
import ScrollReveal from "scrollreveal";
import { onMounted } from "vue";

onMounted(() => {
  ScrollReveal().reveal(".animate-fade-in-up", {
    delay: 100,
    distance: "60px",
    origin: "bottom",
    opacity: 0,
    easing: "cubic-bezier(0.25, 0.46, 0.45, 0.94)",
    interval: 150,
    reset: false,
  });
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
</style>


