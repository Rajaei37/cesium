<template>
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
            <Link href="/" class="block text-gray-300 hover:text-white transition-colors duration-300 font-medium">Home</Link>
            <Link href="/services" class="block text-gray-300 hover:text-white transition-colors duration-300 font-medium">Services</Link>
            <Link href="/#results" class="block text-gray-300 hover:text-white transition-colors duration-300 font-medium">Results</Link>
            <Link href="/#blog" class="block text-gray-300 hover:text-white transition-colors duration-300 font-medium">Insights</Link>
            <Link href="/contact-us" class="block text-gray-300 hover:text-white transition-colors duration-300 font-medium">Contact</Link>
            <Link href="/join-our-team" class="block text-gray-300 hover:text-white transition-colors duration-300 font-medium">Join Our Team</Link>
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
</template>

<script setup>
import { Link } from "@inertiajs/vue3";
</script>

