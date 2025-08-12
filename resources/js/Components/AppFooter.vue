<template>
  <footer class="bg-primary-dark text-white py-16">
    <div class="container mx-auto px-6">
      <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
        <!-- Company Info -->
        <div class="text-center md:text-left">
          <img src="/assets/logos/logo-main.svg" alt="Cesium Marketing Logo" class="h-12 mb-6 mx-auto md:mx-0" />
          <p class="text-gray-300 mb-6 font-light leading-relaxed">
            Cesium Marketing specializes in data-driven growth strategies for iGaming operators. We help businesses scale faster with proven acquisition, retention, and brand building techniques.
          </p>
          <div class="flex justify-center md:justify-start space-x-4">
            <a href="https://www.tiktok.com/@cesiumagency" target="_blank" class="text-gray-300 hover:text-secondary transition-colors duration-300">
              <img src="/assets/social-icons/tiktok.svg" alt="TikTok" class="h-6 w-6 object-contain transition-all duration-300 filter brightness-0 invert hover:brightness-100 hover:invert-0">
            </a>
            <a href="https://www.instagram.com/cesiumagency/" target="_blank" class="text-gray-300 hover:text-secondary transition-colors duration-300">
              <img src="/assets/social-icons/instagram.svg" alt="Instagram" class="h-6 w-6 object-contain transition-all duration-300 filter brightness-0 invert hover:brightness-100 hover:invert-0">
            </a>
            <a href="https://www.facebook.com/cesiumagency/" target="_blank" class="text-gray-300 hover:text-secondary transition-colors duration-300">
              <img src="/assets/social-icons/facebook.svg" alt="Facebook" class="h-6 w-6 object-contain transition-all duration-300 filter brightness-0 invert hover:brightness-100 hover:invert-0">
            </a>
            <a href="https://www.linkedin.com/company/cesium-agency/" target="_blank" class="text-gray-300 hover:text-secondary transition-colors duration-300">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path d="M20.4491 20.4508H16.8933V14.8808C16.8933 13.5525 16.8708 11.8441 15.0408 11.8441C13.1858 11.8441 12.9083 13.2908 12.9083 14.7841V20.4508H9.35247V8.99748H12.7658V10.5608H12.8158C13.2908 9.66081 14.4491 8.71414 16.1808 8.71414C19.7858 8.71414 20.4508 11.0825 20.4508 14.1658V20.4508H20.4491ZM5.33914 7.43248C4.19581 7.43248 3.27081 6.50581 3.27081 5.36414C3.27081 4.22248 4.19581 3.29581 5.33914 3.29581C6.47914 3.29581 7.40747 4.22248 7.40747 5.36414C7.40747 6.50581 6.47914 7.43248 5.33914 7.43248ZM7.11914 20.4508H3.55581V8.99748H7.11914V20.4508ZM22.2241 0H1.77081C0.792477 0 0 0.774143 0 1.72914V22.2708C0 23.2258 0.792477 24 1.77081 24H22.2241C23.2041 24 24 23.2258 24 22.2708V1.72914C24 0.774143 23.2041 0 22.2241 0Z"/>
              </svg>
            </a>
          </div>
        </div>

        <!-- Quick Links -->
        <div class="text-center md:text-left">
          <h3 class="text-xl font-semibold mb-6">Quick Links</h3>
          <div class="space-y-3">
            <Link href="/" class="block text-gray-300 hover:text-white transition-colors duration-300 font-medium">Home</Link>
            <Link href="/what-we-offer" class="block text-gray-300 hover:text-white transition-colors duration-300 font-medium">Services</Link>
            <Link href="/#results" class="block text-gray-300 hover:text-white transition-colors duration-300 font-medium">Results</Link>
            <Link href="/#blog" class="block text-gray-300 hover:text-white transition-colors duration-300 font-medium">Insights</Link>
            <Link href="/contact-us" class="block text-gray-300 hover:text-white transition-colors duration-300 font-medium">Contact</Link>
            <Link href="/join-our-team" class="block text-gray-300 hover:text-white transition-colors duration-300 font-medium">Join Our Team</Link>
          </div>
        </div>

        <!-- Apply Now Section -->
        <div class="text-center md:text-left">
          <h3 class="text-xl font-semibold mb-6">Ready to Scale Your Business?</h3>
          <p class="text-gray-300 mb-6 font-light leading-relaxed">
            Join successful iGaming operators who have transformed their growth with our proven strategies.
          </p>
          <a href="/contact-us" class="inline-block bg-secondary text-primary font-bold py-3 px-6 rounded-[0.56px] shadow-lg hover:bg-yellow-500 transition duration-300 transform hover:scale-105">
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


