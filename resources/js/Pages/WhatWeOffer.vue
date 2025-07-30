<template>
  <Head title="What We Offer - Cesium Marketing" />

  <div class="min-h-screen bg-cesium-light-gray font-poppins antialiased">
    <!-- Header -->
    <AppHeader current-page="services" />

    <!-- Hero Section with Parallax Effect -->
    <section class="relative bg-primary text-white py-20 pt-28 overflow-hidden">
      <div class="absolute inset-0 bg-gradient-to-br from-primary via-primary-light to-primary opacity-95"></div>
      <!-- Animated Background Elements -->
      <div class="absolute inset-0 overflow-hidden">
        <div class="floating-element absolute top-20 left-10 w-16 h-16 bg-secondary/20 rounded-full animate-float"></div>
        <div class="floating-element absolute top-40 right-20 w-12 h-12 bg-secondary/30 rounded-full animate-float-delayed"></div>
        <div class="floating-element absolute bottom-20 left-1/4 w-20 h-20 bg-secondary/10 rounded-full animate-float-slow"></div>
      </div>
      <div class="container mx-auto px-6 relative z-10 text-center">
        <h1 class="text-5xl lg:text-6xl font-semibold leading-tight mb-6 animate-fade-in-up">
          What We Offer
        </h1>
        <p class="text-xl lg:text-2xl mb-8 opacity-90 animate-fade-in-up animation-delay-200 font-light max-w-3xl mx-auto">
          Comprehensive marketing solutions designed specifically for the iGaming industry.
        </p>
        <!-- Interactive CTA Button -->
        <div class="animate-fade-in-up animation-delay-400">
          <Link href="/contact-us" class="inline-block bg-secondary text-primary font-semibold py-4 px-8 rounded-full shadow-lg hover:bg-secondary-dark transition-all duration-300 transform hover:scale-105 hover:shadow-xl">
            Get Started Today
          </Link>
        </div>
      </div>
    </section>

    <!-- Services Description Section with Enhanced Interactivity -->
    <section class="py-20 bg-white">
      <div class="container mx-auto px-6">
        <h2 class="text-4xl lg:text-5xl font-semibold text-primary mb-12 text-center animate-fade-in-up">
          Our Core Services
        </h2>
        
        <!-- Service 1: Player Acquisition -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center mb-16 service-section">
          <div class="animate-fade-in-up service-image">
            <div class="relative overflow-hidden rounded-xl shadow-lg group">
              <img src="/assets/images/player-acquisition.jpg" alt="Player Acquisition" class="w-full h-auto max-h-80 object-contain transition-transform duration-500 group-hover:scale-110" />
              <div class="absolute inset-0 bg-gradient-to-t from-primary/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
              <div class="absolute bottom-4 left-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                <h4 class="text-lg font-semibold">Drive Quality Traffic</h4>
              </div>
            </div>
          </div>
          <div class="animate-fade-in-up animation-delay-200 service-content">
            <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300">
              <h3 class="text-3xl font-semibold text-primary mb-4 flex items-center">
                <span class="bg-secondary text-primary p-2 rounded-full mr-4">
                  <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                  </svg>
                </span>
                Player Acquisition
              </h3>
              <p class="text-gray-700 text-lg mb-4">
                We specialize in driving high-quality player traffic to your iGaming platforms through a multi-channel approach. Our strategies are designed to attract, engage, and convert potential players into loyal customers.
              </p>
              <div class="space-y-3">
                <div class="flex items-start space-x-3 service-feature" v-for="(feature, index) in playerAcquisitionFeatures" :key="index">
                  <div class="bg-secondary/20 p-1 rounded-full mt-1">
                    <svg class="w-4 h-4 text-secondary" fill="currentColor" viewBox="0 0 20 20">
                      <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                    </svg>
                  </div>
                  <span class="text-gray-600">{{ feature }}</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Service 2: Retention Strategies -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center mb-16 service-section">
          <div class="animate-fade-in-up animation-delay-200 md:order-2 service-image">
            <div class="relative overflow-hidden rounded-xl shadow-lg group">
              <img src="/assets/images/retention-strategies.jpg" alt="Retention Strategies" class="w-full h-auto max-h-80 object-contain transition-transform duration-500 group-hover:scale-110" />
              <div class="absolute inset-0 bg-gradient-to-t from-primary/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
              <div class="absolute bottom-4 left-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                <h4 class="text-lg font-semibold">Build Lasting Relationships</h4>
              </div>
            </div>
          </div>
          <div class="animate-fade-in-up md:order-1 service-content">
            <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300">
              <h3 class="text-3xl font-semibold text-primary mb-4 flex items-center">
                <span class="bg-secondary text-primary p-2 rounded-full mr-4">
                  <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                  </svg>
                </span>
                Retention Strategies
              </h3>
              <p class="text-gray-700 text-lg mb-4">
                Keeping your players engaged and active is crucial for long-term success. We develop sophisticated retention programs that enhance player loyalty and lifetime value.
              </p>
              <div class="space-y-3">
                <div class="flex items-start space-x-3 service-feature" v-for="(feature, index) in retentionFeatures" :key="index">
                  <div class="bg-secondary/20 p-1 rounded-full mt-1">
                    <svg class="w-4 h-4 text-secondary" fill="currentColor" viewBox="0 0 20 20">
                      <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                    </svg>
                  </div>
                  <span class="text-gray-600">{{ feature }}</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Service 3: Brand Building & Reputation Management -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center mb-16 service-section">
          <div class="animate-fade-in-up service-image">
            <div class="relative overflow-hidden rounded-xl shadow-lg group">
              <img src="/assets/images/brand-building.jpg" alt="Brand Building" class="w-full h-auto max-h-80 object-contain transition-transform duration-500 group-hover:scale-110" />
              <div class="absolute inset-0 bg-gradient-to-t from-primary/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
              <div class="absolute bottom-4 left-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                <h4 class="text-lg font-semibold">Build Trust & Recognition</h4>
              </div>
            </div>
          </div>
          <div class="animate-fade-in-up animation-delay-200 service-content">
            <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300">
              <h3 class="text-3xl font-semibold text-primary mb-4 flex items-center">
                <span class="bg-secondary text-primary p-2 rounded-full mr-4">
                  <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                  </svg>
                </span>
                Brand Building & Reputation Management
              </h3>
              <p class="text-gray-700 text-lg mb-4">
                A strong brand is the foundation of trust and recognition. We help you build a compelling brand identity and manage your reputation effectively in the competitive iGaming landscape.
              </p>
              <div class="space-y-3">
                <div class="flex items-start space-x-3 service-feature" v-for="(feature, index) in brandBuildingFeatures" :key="index">
                  <div class="bg-secondary/20 p-1 rounded-full mt-1">
                    <svg class="w-4 h-4 text-secondary" fill="currentColor" viewBox="0 0 20 20">
                      <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                    </svg>
                  </div>
                  <span class="text-gray-600">{{ feature }}</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Service 4: Data Analytics & Reporting -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center service-section">
          <div class="animate-fade-in-up animation-delay-200 md:order-2 service-image">
            <div class="relative overflow-hidden rounded-xl shadow-lg group">
              <img src="/assets/images/data-analytics.jpg" alt="Data Analytics" class="w-full h-auto max-h-80 object-contain transition-transform duration-500 group-hover:scale-110" />
              <div class="absolute inset-0 bg-gradient-to-t from-primary/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
              <div class="absolute bottom-4 left-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                <h4 class="text-lg font-semibold">Data-Driven Decisions</h4>
              </div>
            </div>
          </div>
          <div class="animate-fade-in-up md:order-1 service-content">
            <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300">
              <h3 class="text-3xl font-semibold text-primary mb-4 flex items-center">
                <span class="bg-secondary text-primary p-2 rounded-full mr-4">
                  <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                  </svg>
                </span>
                Data Analytics & Reporting
              </h3>
              <p class="text-gray-700 text-lg mb-4">
                Our data-driven approach is at the heart of everything we do. We provide in-depth analysis and transparent reporting to ensure you always know your ROI and can make informed decisions.
              </p>
              <div class="space-y-3">
                <div class="flex items-start space-x-3 service-feature" v-for="(feature, index) in analyticsFeatures" :key="index">
                  <div class="bg-secondary/20 p-1 rounded-full mt-1">
                    <svg class="w-4 h-4 text-secondary" fill="currentColor" viewBox="0 0 20 20">
                      <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                    </svg>
                  </div>
                  <span class="text-gray-600">{{ feature }}</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Interactive Stats Section -->
    <section class="py-20 bg-primary text-white">
      <div class="container mx-auto px-6">
        <h2 class="text-4xl lg:text-5xl font-semibold mb-12 text-center animate-fade-in-up">
          Why Choose Our Services?
        </h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
          <div v-for="(stat, index) in stats" :key="index" 
               class="text-center p-8 rounded-xl bg-primary-light hover:bg-primary-dark transition-all duration-300 transform hover:scale-105 animate-fade-in-up"
               :style="{ animationDelay: `${200 * index}ms` }">
            <div class="text-5xl font-bold text-secondary mb-4 counter" :data-target="stat.value">0</div>
            <h3 class="text-xl font-semibold mb-2">{{ stat.label }}</h3>
            <p class="text-gray-300">{{ stat.description }}</p>
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
        <div class="flex flex-col sm:flex-row gap-4 justify-center animate-fade-in-up animation-delay-400">
          <Link href="/contact-us" class="inline-block bg-secondary text-primary font-semibold py-4 px-8 rounded-full shadow-lg hover:bg-secondary-dark transition-all duration-300 transform hover:scale-105 hover:shadow-xl">
            Contact Our Team
          </Link>
          <button @click="openScheduleWindow" class="inline-block bg-transparent border-2 border-white text-white font-semibold py-4 px-8 rounded-full hover:bg-white hover:text-primary transition-all duration-300 transform hover:scale-105">
            Schedule a Call
          </button>
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
import ScrollReveal from "scrollreveal";
import AppHeader from "../Components/AppHeader.vue";
import AppFooter from "../Components/AppFooter.vue";

// Mobile menu state
const mobileMenuOpen = ref(false);

// Mobile menu methods
const toggleMobileMenu = () => {
  mobileMenuOpen.value = !mobileMenuOpen.value;
};

const closeMobileMenu = () => {
  mobileMenuOpen.value = false;
};

// Service features data
const playerAcquisitionFeatures = ref([
  "SEO & Content Marketing: Ranking high on search engines for relevant keywords",
  "Paid Media Campaigns: Targeted ads on Google, social media, and affiliate networks",
  "Influencer Marketing: Collaborations with iGaming personalities to reach wider audiences",
  "Email Marketing: Building and nurturing leads through compelling email campaigns"
]);

const retentionFeatures = ref([
  "CRM & Loyalty Programs: Personalized communication and reward systems",
  "Gamification: Integrating game-like elements to boost engagement",
  "Customer Support Optimization: Ensuring seamless and effective player assistance",
  "Predictive Analytics: Identifying at-risk players and proactive intervention"
]);

const brandBuildingFeatures = ref([
  "Brand Strategy & Positioning: Defining your unique value proposition",
  "Content Creation: Engaging blogs, videos, and social media content",
  "Public Relations: Managing media relations and crisis communication",
  "Review Management: Monitoring and responding to player feedback"
]);

const analyticsFeatures = ref([
  "Performance Tracking: Real-time monitoring of key metrics",
  "ROI Analysis: Comprehensive reports on campaign effectiveness",
  "Market Research: Identifying trends and opportunities",
  "A/B Testing: Optimizing campaigns for maximum impact"
]);

// Stats data
const stats = ref([
  {
    value: 250,
    label: "Successful Campaigns",
    description: "Delivered across multiple iGaming verticals"
  },
  {
    value: 95,
    label: "Client Satisfaction",
    description: "Average satisfaction rate from our partners"
  },
  {
    value: 180,
    label: "Average ROI Increase",
    description: "Percentage improvement in client performance"
  }
]);

// Counter animation
const animateCounters = () => {
  const counters = document.querySelectorAll('.counter');
  
  counters.forEach(counter => {
    const target = parseInt(counter.getAttribute('data-target'));
    const increment = target / 100;
    let current = 0;
    
    const updateCounter = () => {
      if (current < target) {
        current += increment;
        counter.textContent = Math.ceil(current);
        setTimeout(updateCounter, 20);
      } else {
        counter.textContent = target;
      }
    };
    
    updateCounter();
  });
};

// Schedule window method
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

  // Animate counters when they come into view
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        animateCounters();
        observer.unobserve(entry.target);
      }
    });
  });

  const statsSection = document.querySelector('.counter');
  if (statsSection) {
    observer.observe(statsSection.closest('section'));
  }
});

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

