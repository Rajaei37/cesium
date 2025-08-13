<template>
  <footer class="bg-[#4A248C] text-white py-16">
    <div class="container mx-auto px-6">
      <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
        <!-- Company Info -->
        <div class="text-center md:text-left">
          <img src="/assets/logos/logo-main.svg" alt="Cesium Marketing Logo" class="h-12 mb-6 mx-auto md:mx-0" />
          <p class="text-gray-300 mb-6 font-light leading-relaxed">
            Cesium Marketing specializes in data-driven growth strategies for iGaming operators. We help businesses scale faster with proven acquisition, retention, and brand building techniques.
          </p>
        </div>

        <!-- Quick Links -->
        <div class="text-center md:text-left">
          <h3 class="text-xl font-semibold mb-6 text-[#FFD700]">Quick Links</h3>
          <div class="space-y-3">
            <Link href="/" class="block text-gray-300 hover:text-white transition-colors duration-300 font-medium">Home</Link>
            <Link href="/services" class="block text-gray-300 hover:text-white transition-colors duration-300 font-medium">Services</Link>
            <Link href="/our-process" class="block text-gray-300 hover:text-white transition-colors duration-300 font-medium">Our process</Link>
            <Link href="/blog" class="block text-gray-300 hover:text-white transition-colors duration-300 font-medium">News</Link>
            <Link href="/contact-us" class="block text-gray-300 hover:text-white transition-colors duration-300 font-medium">Contact</Link>
            <Link href="/join-our-team" class="block text-gray-300 hover:text-white transition-colors duration-300 font-medium">Join Our Team</Link>
          </div>
        </div>

        <!-- Apply Now Section -->
        <div class="text-center md:text-left">
          <h3 class="text-xl font-semibold mb-6 text-[#FFD700]">Ready to Scale Your Business?</h3>
          <p class="text-gray-300 mb-6 font-light leading-relaxed">
            Join successful iGaming operators who have transformed their growth with our proven strategies.
          </p>
          <a href="/contact-us" class="inline-block bg-[#FFD700] text-[#4A248C] font-bold py-3 px-6 shadow-lg hover:bg-yellow-500 transition duration-300 transform hover:scale-105">
            Apply Now
          </a>
        </div>
      </div>

      <div class="border-t border-gray-600 mt-12 pt-8 text-center">
        <p class="text-gray-400 font-light">
          © {{ new Date().getFullYear() }} Cesium Marketing. All rights reserved. | 
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


