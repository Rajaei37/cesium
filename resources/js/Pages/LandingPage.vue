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
          class="mt-6 inline-block bg-secondary text-primary font-bold py-3 px-6 sm:py-4 sm:px-8 rounded-[0.56px] shadow-lg hover:bg-secondary-dark transition duration-300 transform hover:scale-105 animate-fade-in-up animation-delay-600"
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
  <div class="container mx-auto px-6 text-center relative z-10">
    <!-- Main Title -->
    <h2 class="text-3xl lg:text-4xl font-normal text-primary mb-0">
      <span class="text-primary font-light">Why</span> <span class="text-primary font-extrabold">Cesium</span>?
    </h2>
    <!-- Subtitle -->
    <p class="text-base text-gray-600 font-normal mb-8">
      Because Inactive Doesn't Win.
    </p>
        <!-- Service Cards -->rizontal layout -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto">
      <!-- Card 1: Precision-Fueled Reactions -->
      <div class="bg-white rounded-[0.56px] shadow-lg p-6 relative overflow-hidden w-full" style="background-image: url('/assets/images/card1.svg'); background-size: cover; background-position: center; min-height: 280px;">
        <!-- Yellow Number Badge -->
        <div class="flex justify-start mb-4 relative z-20">
          <span class="text-yellow-400 font-bold text-2xl">1)</span>
        </div>
        <!-- Card Title -->
        <h3 class="text-xl font-bold text-primary mb-4 leading-tight text-left relative z-20">
          Precision-Fueled<br>Reactions
        </h3>
        <!-- Card Description -->
        <div class="text-gray-700 text-sm leading-relaxed text-left relative z-20">
          <p class="mb-3">
            Every move we make is based on calibrated data and tested hypotheses.
          </p>
          <p>
            Our strategies aren't just data-driven, they're reaction-tuned to create maximum market ignition.
          </p>
        </div>
      </div>

      <!-- Card 2: Repeatable Chain Reactions -->
      <div class="bg-white rounded-[0.56px] shadow-lg p-6 relative overflow-hidden w-full" style="background-image: url('/assets/images/card2.svg'); background-size: cover; background-position: center; min-height: 280px;">
        <!-- Yellow Number Badge -->
        <div class="flex justify-start mb-4 relative z-20">
          <span class="text-yellow-400 font-bold text-2xl">2)</span>
        </div>
        <!-- Card Title -->
        <h3 class="text-xl font-bold text-primary mb-4 leading-tight text-left relative z-20">
          Repeatable Chain<br>Reactions
        </h3>
        <!-- Card Description -->
        <p class="text-gray-700 text-sm leading-relaxed text-left relative z-20">
          We don't rely on luck. We engineer repeatable systems that spark, scale, and sustain performance — with measurable outcomes at every stage.        </p>
      </div>

      <!-- Card 3: Domain Chemistry -->
      <div class="bg-white rounded-[0.56px] shadow-lg p-6 relative overflow-hidden w-full" style="background-image: url('/assets/images/card3.svg'); background-size: cover; background-position: center; min-height: 280px;">
        <!-- Yellow Number Badge -->
        <div class="flex justify-start mb-4 relative z-20">
          <span class="text-yellow-400 font-bold text-2xl">3)</span>
        </div>
        <!-- Card Title -->
        <h3 class="text-xl font-bold text-primary mb-4 leading-tight text-left relative z-20">
          Domain<br>Chemistry
        </h3>
        <!-- Card Description -->
        <p class="text-gray-700 text-sm leading-relaxed text-left relative z-20">
          We don't just work in your industry — we react with it. Years of deep learning give us the ability to anticipate volatility, exploit opportunity, and maximize momentum.
        </p>
      </div>
    </div>
  </div>
</section>

    <!-- After the Cesium Reaction Section -->
    <section class="py-20 bg-[#2C1C59] text-white relative overflow-hidden">
      <!-- Background Vector -->
      <div class="absolute inset-0 overflow-hidden">
        <img 
          src="/assets/long-cesium-vector.svg" 
          alt="Cesium Vector" 
          class="absolute top-0 left-0 w-full h-full object-cover opacity-60 z-0"
          style="mix-blend-mode: overlay;"
        />
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
        
        <!-- Stats Section -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 max-w-6xl mx-auto mb-20">
          <!-- Stat 1 -->
          <div class="text-center">
            <div class="text-5xl lg:text-6xl font-bold text-[#FFD300] mb-2">180%</div>
            <div class="text-lg font-semibold mb-3">Combustion Boost</div>
            <p class="text-sm opacity-80 leading-relaxed">
              Your cost-to-deposit increase = combustion. After exposure to Cesium's ignition formula, clients average over 180% growth in volume.
            </p>
          </div>
          
          <!-- Stat 2 -->
          <div class="text-center">
            <div class="text-5xl lg:text-6xl font-bold text-[#FFD300] mb-2">250+</div>
            <div class="text-lg font-semibold mb-3">Ignitions Triggered</div>
            <p class="text-sm opacity-80 leading-relaxed">
              That's how many successful campaigns we've run worldwide — each designed to spark performance at scale.
            </p>
          </div>
          
          <!-- Stat 3 -->
          <div class="text-center">
            <div class="text-5xl lg:text-6xl font-bold text-[#FFD300] mb-2">97%</div>
            <div class="text-lg font-semibold mb-3">Stable Reaction Rate</div>
            <p class="text-sm opacity-80 leading-relaxed">
              We don't burn out fast. Our systems are engineered for long-term performance, and 97% stay with us because the returns are repeatable.
            </p>
          </div>
          
          <!-- Stat 4 -->
          <div class="text-center">
            <div class="text-5xl lg:text-6xl font-bold text-[#FFD300] mb-2">-35%</div>
            <div class="text-lg font-semibold mb-3">Cost-to-Acquisition Drop</div>
            <p class="text-sm opacity-80 leading-relaxed">
              Your cost-to-deposit decrease = explosion. After exposure to Cesium's traction formula, clients average over 35% growth in revenue.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- What We Offer Section - Updated with new design -->
    <section id="services" class="py-20 bg-purple-800 text-white relative overflow-hidden">
      <!-- Yellow curved accent element -->
      <div class="absolute left-0 top-0 bottom-0 w-24 bg-yellow-400 transform -skew-x-12 origin-left"></div>
      
      <div class="container mx-auto px-6 relative z-10">
        <!-- Section Header -->
        <div class="text-center mb-16">
          <h2 class="text-4xl lg:text-5xl font-semibold mb-4 animate-fade-in-up">
            What We Offer
          </h2>
          <p class="text-xl opacity-90 max-w-3xl mx-auto animate-fade-in-up animation-delay-200 font-light">
            Custom-formulated marketing solutions that ignite iGaming growth.<br>
            Each service is engineered to spark action and scale performance.
          </p>
        </div>
        
        <!-- Service Cards List -->
        <div class="max-w-4xl mx-auto space-y-4">
          <!-- Service Card 1: Paid Media -->
          <div class="service-card group bg-gray-100 text-gray-800 p-6 flex items-center justify-between transition-all duration-300 hover:bg-yellow-400 hover:transform hover:scale-105 cursor-pointer" style="border-radius: 0.56px;">
            <div class="flex-1">
              <h3 class="text-2xl font-bold text-purple-800 mb-2">Paid Media</h3>
              <p class="text-gray-700 text-sm">Launch high-voltage ad campaigns across top platforms to drive instant results.</p>
            </div>
            <div class="flex items-center space-x-4">
              <a href="https://odin-recharge-bot.online/what-we-offer" class="learn-more-btn opacity-0 group-hover:opacity-100 bg-purple-800 text-white px-4 py-2 font-semibold transition-all duration-300" style="border-radius: 0.56px;">
                Learn More
              </a>
              <svg class="w-6 h-6 text-purple-800" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
              </svg>
            </div>
          </div>

          <!-- Service Card 2: SEO Optimization -->
          <div class="service-card group bg-gray-100 text-gray-800 p-6 flex items-center justify-between transition-all duration-300 hover:bg-yellow-400 hover:transform hover:scale-105 cursor-pointer" style="border-radius: 0.56px;">
            <div class="flex-1">
              <h3 class="text-2xl font-bold text-purple-800 mb-2">SEO Optimization</h3>
              <p class="text-gray-700 text-sm">Climb search rankings and sustain long-term organic traffic reactions.</p>
            </div>
            <div class="flex items-center space-x-4">
              <a href="https://odin-recharge-bot.online/what-we-offer" class="learn-more-btn opacity-0 group-hover:opacity-100 bg-purple-800 text-white px-4 py-2 font-semibold transition-all duration-300" style="border-radius: 0.56px;">
                Learn More
              </a>
              <svg class="w-6 h-6 text-purple-800" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
              </svg>
            </div>
          </div>

          <!-- Service Card 3: Social Media Marketing -->
          <div class="service-card group bg-gray-100 text-gray-800 p-6 flex items-center justify-between transition-all duration-300 hover:bg-yellow-400 hover:transform hover:scale-105 cursor-pointer" style="border-radius: 0.56px;">
            <div class="flex-1">
              <h3 class="text-2xl font-bold text-purple-800 mb-2">Social Media Marketing</h3>
              <p class="text-gray-700 text-sm">Climb search rankings and sustain long-term organic traffic reactions.</p>
            </div>
            <div class="flex items-center space-x-4">
              <a href="https://odin-recharge-bot.online/what-we-offer" class="learn-more-btn opacity-0 group-hover:opacity-100 bg-purple-800 text-white px-4 py-2 font-semibold transition-all duration-300" style="border-radius: 0.56px;">
                Learn More
              </a>
              <svg class="w-6 h-6 text-purple-800" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
              </svg>
            </div>
          </div>

          <!-- Service Card 4: Data Analytics -->
          <div class="service-card group bg-gray-100 text-gray-800 p-6 flex items-center justify-between transition-all duration-300 hover:bg-yellow-400 hover:transform hover:scale-105 cursor-pointer" style="border-radius: 0.56px;">
            <div class="flex-1">
              <h3 class="text-2xl font-bold text-purple-800 mb-2">Data Analytics</h3>
              <p class="text-gray-700 text-sm">Climb search rankings and sustain long-term organic traffic reactions.</p>
            </div>
            <div class="flex items-center space-x-4">
              <a href="https://odin-recharge-bot.online/what-we-offer" class="learn-more-btn opacity-0 group-hover:opacity-100 bg-purple-800 text-white px-4 py-2 font-semibold transition-all duration-300" style="border-radius: 0.56px;">
                Learn More
              </a>
              <svg class="w-6 h-6 text-purple-800" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
              </svg>
            </div>
          </div>

          <!-- Service Card 5: Content Marketing -->
          <div class="service-card group bg-gray-100 text-gray-800 p-6 flex items-center justify-between transition-all duration-300 hover:bg-yellow-400 hover:transform hover:scale-105 cursor-pointer" style="border-radius: 0.56px;">
            <div class="flex-1">
              <h3 class="text-2xl font-bold text-purple-800 mb-2">Content Marketing</h3>
              <p class="text-gray-700 text-sm">Climb search rankings and sustain long-term organic traffic reactions.</p>
            </div>
            <div class="flex items-center space-x-4">
              <a href="https://odin-recharge-bot.online/what-we-offer" class="learn-more-btn opacity-0 group-hover:opacity-100 bg-purple-800 text-white px-4 py-2 font-semibold transition-all duration-300" style="border-radius: 0.56px;">
                Learn More
              </a>
              <svg class="w-6 h-6 text-purple-800" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
              </svg>
            </div>
          </div>

          <!-- Service Card 6: Email Marketing -->
          <div class="service-card group bg-gray-100 text-gray-800 p-6 flex items-center justify-between transition-all duration-300 hover:bg-yellow-400 hover:transform hover:scale-105 cursor-pointer" style="border-radius: 0.56px;">
            <div class="flex-1">
              <h3 class="text-2xl font-bold text-purple-800 mb-2">Email Marketing</h3>
              <p class="text-gray-700 text-sm">Climb search rankings and sustain long-term organic traffic reactions.</p>
            </div>
            <div class="flex items-center space-x-4">
              <a href="https://odin-recharge-bot.online/what-we-offer" class="learn-more-btn opacity-0 group-hover:opacity-100 bg-purple-800 text-white px-4 py-2 font-semibold transition-all duration-300" style="border-radius: 0.56px;">
                Learn More
              </a>
              <svg class="w-6 h-6 text-purple-800" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
              </svg>
            </div>
          </div>
        </div>

        <!-- CTA Button -->
        <div class="text-center mt-12">
          <a href="https://odin-recharge-bot.online/what-we-offer" class="inline-block bg-yellow-400 text-purple-800 font-bold py-4 px-8 shadow-lg hover:bg-yellow-300 transition duration-300 transform hover:scale-105" style="border-radius: 0.56px;">
            Explore all services in detail
          </a>
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
          <div class="bg-white rounded-[0.56px] shadow-xl overflow-hidden animate-fade-in-up">
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

        <!-- View All Posts Button -->
        <div class="text-center">
          <Link href="/blog" class="inline-block bg-secondary text-primary font-bold py-3 px-8 rounded-[0.56px] shadow-lg hover:bg-secondary-dark transition duration-300 transform hover:scale-105">
            View All Posts
          </Link>
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

@keyframes float-subtle {
  0%, 100% {
    transform: translateY(0);
  }
  50% {
    transform: translateY(-8px);
  }
}
.animate-float-subtle {
  animation: float-subtle 6s ease-in-out infinite;
}
</style>

