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

    <!-- Header -->
    <AppHeader current-page="home" />

    <section
    id="home"
    class="relative bg-gradient-to-br from-[#2E1E60] via-[#3B1E60] to-[#4B2D83] text-white pt-24 pb-16 min-h-screen flex items-center overflow-hidden"
  >
    <!-- Yellow Vector Background -->
    <img
      src="/assets/images/Vector.svg"
      alt="Background Vector"
      class="absolute top-0 left-0 w-full h-full object-cover opacity-80 lg:opacity-90 animate-float-subtle"
      style="z-index: 1"
    />

    <!-- Optional gradient overlay for better text contrast -->
    <div class="absolute inset-0 bg-gradient-to-t from-[#140c2b] via-transparent to-[#140c2b] opacity-40 z-0 pointer-events-none"></div>

    <!-- Hero Content -->
    <div class="container mx-auto px-4 sm:px-6 relative z-10 grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">
      <!-- Left: Text Content -->
      <div class="text-center lg:text-left">
        <div class="flex flex-wrap justify-center lg:justify-start items-center gap-x-3 mb-4 animate-fade-in-up">
          <h1 class="text-5xl sm:text-6xl md:text-7xl lg:text-8xl font-bold leading-tight">Cesium</h1>
          <span class="text-secondary text-xl md:text-2xl lg:text-3xl font-medium">is Active by nature</span>
        </div>

        <div class="space-y-3 text-left">
          <p class="text-lg sm:text-xl font-medium animate-fade-in-up animation-delay-200">
            Cesium isn’t a marketing agency.
          </p>
          <p class="text-base sm:text-lg opacity-90 animate-fade-in-up animation-delay-300">
            It’s a high-energy force designed to react with your business
          </p>
          <p class="text-base sm:text-lg opacity-90 animate-fade-in-up animation-delay-400">
            sparking momentum, amplifying results, and scaling with precision.
          </p>
          <p class="text-base sm:text-lg opacity-90 animate-fade-in-up animation-delay-500">
            we catalyze your brand’s trajectory.
          </p>
        </div>

        <!-- CTA Button -->
        <Link
          href="/contact-us"
          class="mt-6 inline-block bg-secondary text-primary font-bold py-3 px-6 sm:py-4 sm:px-8 rounded-full shadow-lg hover:bg-secondary-dark transition duration-300 transform hover:scale-105 animate-fade-in-up animation-delay-600"
        >
          Request Strategy Call
        </Link>
      </div>

      <!-- Right: Slot Machine -->
      <div class="flex justify-center lg:justify-end animate-fade-in-up animation-delay-600">
        <MiniSlotMachine class="w-full max-w-[320px] sm:max-w-[360px] md:max-w-[420px] lg:max-w-[460px]" />
      </div>
    </div>
  </section>

    <!-- Why Cesium Section -->
    <section class="py-20 bg-gray-100 relative overflow-hidden">
      <!-- Molecular Background Elements -->
      <div class="absolute inset-0 overflow-hidden">
        <img src="/assets/images/Group22.svg" alt="Molecular Element" class="absolute top-10 left-10 w-16 h-16 opacity-30" />
        <img src="/assets/images/Group23.svg" alt="Molecular Element" class="absolute top-20 right-20 w-20 h-20 opacity-30" />
        <img src="/assets/images/Group24.svg" alt="Molecular Element" class="absolute bottom-20 left-20 w-18 h-18 opacity-30" />
        <img src="/assets/images/Group25.svg" alt="Molecular Element" class="absolute bottom-10 right-10 w-16 h-16 opacity-30" />
      </div>
      
      <div class="container mx-auto px-6 text-center relative z-10">
        <!-- Main Title -->
        <h2 class="text-5xl lg:text-6xl font-bold text-primary mb-4">
          Why <span class="text-primary">Cesium</span>?
        </h2>
        <!-- Subtitle -->
        <p class="text-xl text-gray-600 mb-16 font-medium">
          Because Inactive Doesn't Win.
        </p>
        
        <!-- Three Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto">
          <!-- Card 1: Precision-Fueled Reactions -->
          <div class="bg-white rounded-xl shadow-lg p-8 relative overflow-hidden">
            <!-- Large Background Number -->
            <div class="absolute top-4 right-4 text-8xl font-bold text-gray-100 opacity-30">1</div>
            <!-- Yellow Number Badge -->
            <div class="inline-flex items-center justify-center w-12 h-12 bg-secondary rounded-full text-primary font-bold text-xl mb-6">
              1)
            </div>
            <!-- Card Title -->
            <h3 class="text-2xl font-bold text-primary mb-4 leading-tight">
              Precision-Fueled<br>Reactions
            </h3>
            <!-- Card Description -->
            <p class="text-gray-600 text-sm leading-relaxed">
              Every move we make is based on calculated data and tested hypotheses.<br><br>
              Our strategies aren't just data-driven, they're reaction-tuned to create maximum market ignition.
            </p>
          </div>

          <!-- Card 2: Repeatable Chain Reactions -->
          <div class="bg-white rounded-xl shadow-lg p-8 relative overflow-hidden">
            <!-- Large Background Number -->
            <div class="absolute top-4 right-4 text-8xl font-bold text-gray-100 opacity-30">2</div>
            <!-- Yellow Number Badge -->
            <div class="inline-flex items-center justify-center w-12 h-12 bg-secondary rounded-full text-primary font-bold text-xl mb-6">
              2)
            </div>
            <!-- Card Title -->
            <h3 class="text-2xl font-bold text-primary mb-4 leading-tight">
              Repeatable Chain<br>Reactions
            </h3>
            <!-- Card Description -->
            <p class="text-gray-600 text-sm leading-relaxed">
              We don't rely on luck. We engineer repeatable systems that spark, scale, and sustain performance — with measurable outcomes at every stage.
            </p>
          </div>

          <!-- Card 3: Domain Chemistry -->
          <div class="bg-white rounded-xl shadow-lg p-8 relative overflow-hidden">
            <!-- Large Background Number -->
            <div class="absolute top-4 right-4 text-8xl font-bold text-gray-100 opacity-30">3</div>
            <!-- Yellow Number Badge -->
            <div class="inline-flex items-center justify-center w-12 h-12 bg-secondary rounded-full text-primary font-bold text-xl mb-6">
              3)
            </div>
            <!-- Card Title -->
            <h3 class="text-2xl font-bold text-primary mb-4 leading-tight">
              Domain<br>Chemistry
            </h3>
            <!-- Card Description -->
            <p class="text-gray-600 text-sm leading-relaxed">
              We don't just work in your industry — we react with it. Years of deep learning give us the ability to anticipate volatility, exploit opportunity, and maximize momentum.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- After the Cesium Reaction Section -->
    <section class="py-20 bg-primary text-white relative overflow-hidden">
      <!-- Background Elements -->
      <div class="absolute inset-0 overflow-hidden">
        <img src="/assets/images/Group26.svg" alt="Molecular Element" class="absolute top-10 left-10 w-20 h-20 opacity-20" />
        <img src="/assets/images/Group27.svg" alt="Molecular Element" class="absolute top-20 right-20 w-24 h-24 opacity-20" />
        <img src="/assets/images/Group28.svg" alt="Molecular Element" class="absolute bottom-20 left-20 w-18 h-18 opacity-20" />
        <img src="/assets/images/Group29.svg" alt="Molecular Element" class="absolute bottom-10 right-10 w-20 h-20 opacity-20" />
      </div>
      
      <div class="container mx-auto px-6 text-center relative z-10">
        <!-- Main Title -->
        <h2 class="text-4xl lg:text-5xl font-bold mb-4">
          After the Cesium Reaction
        </h2>
        <!-- Subtitle -->
        <p class="text-xl opacity-90 mb-16 font-light max-w-3xl mx-auto">
          Real numbers. Real ignition. Measurable explosions in growth and performance.
        </p>
        
        <!-- Enhanced KPI Cards Grid with Sparkling Effects -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-4 gap-8 max-w-6xl mx-auto">
          <Enhanced3DKpiCard
            icon="trending-up"
            value="180"
            suffix="%"
            label="Combustion Boost"
            description="Your ROI doesn't just increase — it combusts. After exposure to Cesium's reaction chain, clients average over 180% growth in returns."
            class="animate-fade-in-up"
            style="animation-delay: 0ms"
          />
          <Enhanced3DKpiCard
            icon="target"
            value="250"
            suffix="+"
            label="Ignitions Triggered"
            description="That's how many successful campaigns have already run through our reactor — each designed to launch performance at scale."
            class="animate-fade-in-up"
            style="animation-delay: 200ms"
          />
          <Enhanced3DKpiCard
            icon="bar-chart"
            value="97"
            suffix="%"
            label="Stable Reaction Rate"
            description="We don't flash and fade. Our systems are engineered for long-term performance — and clients stay with us because the results are repeatable."
            class="animate-fade-in-up"
            style="animation-delay: 400ms"
          />
          <Enhanced3DKpiCard
            icon="dollar-sign"
            value="-35"
            suffix="%"
            label="Cost-to-Acquisition Drop"
            description="Your ROI doesn't just increase — it combusts. After exposure to Cesium's reaction chain, clients average over 180% growth in returns."
            class="animate-fade-in-up"
            style="animation-delay: 600ms"
          />
        </div>
      </div>
    </section>

    <!-- What We Offer Section -->
    <section id="services" class="py-20 bg-white relative overflow-hidden">
      <!-- Molecular Background Elements -->
      <div class="absolute inset-0 overflow-hidden">
        <img src="/assets/images/Group30.svg" alt="Molecular Element" class="absolute top-10 left-10 w-16 h-16 opacity-20" />
        <img src="/assets/images/Group31.svg" alt="Molecular Element" class="absolute top-20 right-20 w-20 h-20 opacity-20" />
        <img src="/assets/images/Group32.svg" alt="Molecular Element" class="absolute bottom-20 left-20 w-18 h-18 opacity-20" />
        <img src="/assets/images/Group33.svg" alt="Molecular Element" class="absolute bottom-10 right-10 w-16 h-16 opacity-20" />
      </div>
      
      <div class="container mx-auto px-6 relative z-10">
        <div class="text-center mb-16">
          <h2 class="text-4xl lg:text-5xl font-semibold text-primary mb-4 animate-fade-in-up">
            What We Offer
          </h2>
          <p class="text-xl text-gray-600 max-w-3xl mx-auto animate-fade-in-up animation-delay-200 font-light">
            Comprehensive marketing solutions designed specifically for the iGaming industry
          </p>
        </div>
        
        <!-- Service Cards Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
          <!-- Service Card 1: Paid Media -->
          <div class="bg-secondary rounded-xl shadow-lg p-8 text-center relative overflow-hidden">
            <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center mx-auto mb-6">
              <img src="/assets/images/CS11.svg" alt="Paid Media" class="w-10 h-10" />
            </div>
            <h3 class="text-xl font-bold text-primary mb-4">Paid Media</h3>
            <p class="text-primary text-sm leading-relaxed">
              Strategic advertising campaigns across multiple platforms to maximize your reach and ROI.
            </p>
          </div>

          <!-- Service Card 2: SEO Optimization -->
          <div class="bg-white rounded-xl shadow-lg p-8 text-center relative overflow-hidden border border-gray-100">
            <div class="w-16 h-16 bg-secondary rounded-full flex items-center justify-center mx-auto mb-6">
              <img src="/assets/images/CS2.svg" alt="SEO Optimization" class="w-10 h-10" />
            </div>
            <h3 class="text-xl font-bold text-primary mb-4">SEO Optimization</h3>
            <p class="text-gray-600 text-sm leading-relaxed">
              Improve your search engine rankings and organic visibility with our proven SEO strategies.
            </p>
          </div>

          <!-- Service Card 3: Social Media -->
          <div class="bg-secondary rounded-xl shadow-lg p-8 text-center relative overflow-hidden">
            <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center mx-auto mb-6">
              <img src="/assets/images/CS3.svg" alt="Social Media" class="w-10 h-10" />
            </div>
            <h3 class="text-xl font-bold text-primary mb-4">Social Media</h3>
            <p class="text-primary text-sm leading-relaxed">
              Build and engage your community across all major social media platforms.
            </p>
          </div>

          <!-- Service Card 4: Data Analytics -->
          <div class="bg-white rounded-xl shadow-lg p-8 text-center relative overflow-hidden border border-gray-100">
            <div class="w-16 h-16 bg-secondary rounded-full flex items-center justify-center mx-auto mb-6">
              <img src="/assets/images/CS41.svg" alt="Data Analytics" class="w-10 h-10" />
            </div>
            <h3 class="text-xl font-bold text-primary mb-4">Data Analytics</h3>
            <p class="text-gray-600 text-sm leading-relaxed">
              Make informed decisions with comprehensive data analysis and reporting.
            </p>
          </div>

          <!-- Service Card 5: Content Marketing -->
          <div class="bg-secondary rounded-xl shadow-lg p-8 text-center relative overflow-hidden">
            <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center mx-auto mb-6">
              <img src="/assets/images/CS4.svg" alt="Content Marketing" class="w-10 h-10" />
            </div>
            <h3 class="text-xl font-bold text-primary mb-4">Content Marketing</h3>
            <p class="text-primary text-sm leading-relaxed">
              Create compelling content that resonates with your audience and drives engagement.
            </p>
          </div>

          <!-- Service Card 6: Email Marketing -->
          <div class="bg-white rounded-xl shadow-lg p-8 text-center relative overflow-hidden border border-gray-100">
            <div class="w-16 h-16 bg-secondary rounded-full flex items-center justify-center mx-auto mb-6">
              <img src="/assets/images/CS51.svg" alt="Email Marketing" class="w-10 h-10" />
            </div>
            <h3 class="text-xl font-bold text-primary mb-4">Email Marketing</h3>
            <p class="text-gray-600 text-sm leading-relaxed">
              Nurture leads and retain customers with targeted email campaigns.
            </p>
          </div>
        </div>
        
        <!-- Explore All Services Button -->
        <div class="text-center mt-12">
          <img src="/assets/images/Exploreallservicesindetail.svg" alt="Explore all services in detail" class="mx-auto cursor-pointer hover:scale-105 transition-transform duration-300" />
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
    <AppFooter />
  </div>
</template>

<script setup>
import { ref, onMounted, onUnmounted } from "vue";
import { Link, router } from "@inertiajs/vue3";
import ScrollReveal from "scrollreveal";
import FeatureCard from "../Components/FeatureCard.vue";
import KpiCard from "../Components/KpiCard.vue";
import Enhanced3DKpiCard from "../Components/Enhanced3DKpiCard.vue";
import FloatingShapes from "../Components/FloatingShapes.vue";
import CaseStudyCard from "../Components/CaseStudyCard.vue";
import TeamCard from "../Components/TeamCard.vue";
import BlogCard from "../Components/BlogCard.vue";
import TrustBadges from "../Components/TrustBadges.vue";
import InteractiveCalculator from "../Components/InteractiveCalculator.vue";
import MiniSlotMachine from "../Components/MiniSlotMachine.vue";
import AppHeader from "../Components/AppHeader.vue";
import AppFooter from "../Components/AppFooter.vue";

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
.hover\\:shadow-xl:hover {
  box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
}

/* Floating animation for logo */
@keyframes float {
  0%, 100% {
    transform: translateY(0px);
  }
  50% {
    transform: translateY(-20px);
  }
}

.animate-float {
  animation: float 6s ease-in-out infinite;
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

/* Hero section mobile optimizations */
@media (max-width: 640px) {
  #home {
    padding-top: 6rem;
    padding-bottom: 3rem;
    min-height: 100vh;
  }
  
  #home h1 {
    font-size: 3rem;
    line-height: 1.1;
    margin-bottom: 1.5rem;
  }
  
  #home .space-y-3 {
    margin-bottom: 2rem;
  }
  
  #home .container {
    padding-left: 1rem;
    padding-right: 1rem;
  }
}

@media (max-width: 480px) {
  #home h1 {
    font-size: 2.5rem;
  }
  
  #home .text-secondary {
    font-size: 0.875rem;
  }
}
</style>

