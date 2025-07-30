<template>
  <Head title="Contact Us - Cesium Marketing" />

  <div class="min-h-screen bg-cesium-light-gray font-poppins antialiased">
    <!-- Header -->
    <AppHeader current-page="contact" />

    <!-- Hero Section -->
    <section class="relative bg-primary text-white py-20 pt-28 overflow-hidden">
      <div class="absolute inset-0 bg-gradient-to-br from-primary via-primary-light to-primary opacity-95"></div>
      <div class="container mx-auto px-6 relative z-10 text-center">
        <h1 class="text-5xl lg:text-6xl font-semibold leading-tight mb-6 animate-fade-in-up">
          Get in Touch
        </h1>
        <p class="text-xl lg:text-2xl mb-8 opacity-90 animate-fade-in-up animation-delay-200 font-light max-w-3xl mx-auto">
          Ready to transform your iGaming business? Let's discuss your custom growth strategy.
        </p>
      </div>
    </section>

    <!-- Contact Content Section -->
    <section class="py-20 bg-white">
      <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
          <!-- Contact Information -->
          <div class="animate-fade-in-up">
            <h2 class="text-4xl font-semibold text-primary mb-8">Let's Start the Conversation</h2>
            <p class="text-xl text-gray-600 mb-8 font-light">
              Have questions about our iGaming marketing services? Want to discuss your specific growth challenges? Our team of experts is here to help you scale your business.
            </p>
            
            <!-- Contact Details -->
            <div class="space-y-6 mb-12">
              <div class="flex items-center space-x-4">
                <div class="bg-secondary p-3 rounded-full">
                  <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                  </svg>
                </div>
                <div>
                  <h3 class="text-lg font-semibold text-primary">Email</h3>
                  <a href="mailto:info@cesiummarketing.com" class="text-gray-600 hover:text-secondary transition-colors duration-300">info@cesiummarketing.com</a>
                </div>
              </div>
              
              <div class="flex items-center space-x-4">
                <div class="bg-secondary p-3 rounded-full">
                  <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                  </svg>
                </div>
                <div>
                  <h3 class="text-lg font-semibold text-primary">Phone</h3>
                  <a href="tel:+1234567890" class="text-gray-600 hover:text-secondary transition-colors duration-300">+1 (234) 567-890</a>
                </div>
              </div>
              
              <div class="flex items-center space-x-4">
                <div class="bg-secondary p-3 rounded-full">
                  <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                  </svg>
                </div>
                <div>
                  <h3 class="text-lg font-semibold text-primary">Office</h3>
                  <p class="text-gray-600">123 Marketing Lane, Suite 400<br>Business City, BC 12345</p>
                </div>
              </div>
            </div>

            <!-- Social Media -->
            <div>
              <h3 class="text-lg font-semibold text-primary mb-4">Follow Us</h3>
              <div class="flex space-x-4">
                <a href="https://www.linkedin.com/" target="_blank" class="bg-primary text-white p-3 rounded-full hover:bg-primary-light transition-colors duration-300">
                  <i class="fab fa-linkedin-in text-lg"></i>
                </a>
                <a href="https://www.facebook.com/" target="_blank" class="bg-primary text-white p-3 rounded-full hover:bg-primary-light transition-colors duration-300">
                  <i class="fab fa-facebook-f text-lg"></i>
                </a>
                <a href="https://www.instagram.com/" target="_blank" class="bg-primary text-white p-3 rounded-full hover:bg-primary-light transition-colors duration-300">
                  <i class="fab fa-instagram text-lg"></i>
                </a>
                <a href="https://www.tiktok.com/" target="_blank" class="bg-primary text-white p-3 rounded-full hover:bg-primary-light transition-colors duration-300">
                  <i class="fab fa-tiktok text-lg"></i>
                </a>
              </div>
            </div>
          </div>

          <!-- Contact Form -->
          <div class="animate-fade-in-up animation-delay-200">
            <div class="bg-white p-8 rounded-xl shadow-xl border border-gray-100">
              <h2 class="text-3xl font-semibold text-primary mb-6">Send Us a Message</h2>
              <form @submit.prevent="submitForm" class="space-y-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                  <div>
                    <label for="name" class="block text-primary text-sm font-semibold mb-2">Full Name *</label>
                    <input
                      type="text"
                      id="name"
                      v-model="form.name"
                      class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-secondary focus:border-transparent transition duration-300"
                      placeholder="Your full name"
                      required
                    />
                  </div>
                  <div>
                    <label for="email" class="block text-primary text-sm font-semibold mb-2">Email Address *</label>
                    <input
                      type="email"
                      id="email"
                      v-model="form.email"
                      class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-secondary focus:border-transparent transition duration-300"
                      placeholder="your@email.com"
                      required
                    />
                  </div>
                </div>
                
                <div>
                  <label for="company" class="block text-primary text-sm font-semibold mb-2">Company Name</label>
                  <input
                    type="text"
                    id="company"
                    v-model="form.company"
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-secondary focus:border-transparent transition duration-300"
                    placeholder="Your company name"
                  />
                </div>
                
                <div>
                  <label for="subject" class="block text-primary text-sm font-semibold mb-2">Subject *</label>
                  <select
                    id="subject"
                    v-model="form.subject"
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-secondary focus:border-transparent transition duration-300"
                    required
                  >
                    <option value="">Select a subject</option>
                    <option value="strategy-consultation">Strategy Consultation</option>
                    <option value="player-acquisition">Player Acquisition</option>
                    <option value="brand-building">Brand Building</option>
                    <option value="retention-strategies">Retention Strategies</option>
                    <option value="general-inquiry">General Inquiry</option>
                  </select>
                </div>
                
                <div>
                  <label for="message" class="block text-primary text-sm font-semibold mb-2">Message *</label>
                  <textarea
                    id="message"
                    v-model="form.message"
                    rows="5"
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-secondary focus:border-transparent transition duration-300 resize-none"
                    placeholder="Tell us about your iGaming business and how we can help you grow..."
                    required
                  ></textarea>
                </div>
                
                <div class="flex items-center justify-between">
                  <button
                    type="submit"
                    class="bg-secondary text-primary font-semibold py-4 px-8 rounded-full shadow-lg hover:bg-secondary-dark transition duration-300 transform hover:scale-105 flex items-center space-x-2"
                    :disabled="isSubmitting"
                  >
                    <span v-if="!isSubmitting">Send Message</span>
                    <span v-else>Sending...</span>
                    <svg v-if="!isSubmitting" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                    </svg>
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Call to Action Section -->
    <section class="py-20 bg-primary text-white">
      <div class="container mx-auto px-6 text-center">
        <h2 class="text-4xl lg:text-5xl font-semibold mb-4 animate-fade-in-up">
          Ready to Scale Your iGaming Business?
        </h2>
        <p class="text-xl opacity-90 max-w-3xl mx-auto mb-8 animate-fade-in-up animation-delay-200 font-light">
          Join successful iGaming operators who have transformed their growth with our proven strategies.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center animate-fade-in-up animation-delay-400">
          <button 
            @click="openScheduleWindow"
            class="bg-secondary text-primary font-semibold py-4 px-8 rounded-full shadow-lg hover:bg-secondary-dark transition duration-300 transform hover:scale-105"
          >
            Schedule Strategy Call
          </button>
          <a href="tel:+1234567890" class="bg-transparent border-2 border-white text-white font-semibold py-4 px-8 rounded-full hover:bg-white hover:text-primary transition duration-300 transform hover:scale-105">
            Call Now
          </a>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <AppFooter />
  </div>
</template>

<script setup>
import { ref, onMounted } from 'vue';
import { Head, Link, router } from '@inertiajs/vue3';
import ScrollReveal from "scrollreveal";
import AppHeader from "../Components/AppHeader.vue";
import AppFooter from "../Components/AppFooter.vue";

const form = ref({
  name: '',
  email: '',
  company: '',
  subject: '',
  message: '',
});

const isSubmitting = ref(false);

const submitForm = async () => {
  isSubmitting.value = true;
  
  // Simulate form submission
  setTimeout(() => {
    alert('Thank you for your message! We will get back to you within 24 hours.');
    form.value = {
      name: '',
      email: '',
      company: '',
      subject: '',
      message: '',
    };
    isSubmitting.value = false;
  }, 1000);
};

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

/* Form focus states */
input:focus, textarea:focus, select:focus {
  box-shadow: 0 0 0 3px rgba(255, 193, 7, 0.1);
}

/* Button hover effects */
button:hover {
  transform: translateY(-2px);
}

/* Responsive design adjustments */
@media (max-width: 768px) {
  .grid-cols-1.md\\:grid-cols-2 {
    grid-template-columns: 1fr;
  }
}
</style>


