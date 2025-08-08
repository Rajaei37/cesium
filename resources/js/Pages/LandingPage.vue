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

    <!-- FIXED HERO SECTION -->
    <section
      id="home"
      class="relative bg-[#362869] text-white pt-24 pb-16 min-h-screen flex items-center"
    >
      <!-- Yellow Vector Background - FIXED POSITIONING -->
      <div class="absolute inset-0 w-full h-full overflow-visible z-0">
        <img
          src="/assets/images/Vector.svg"
          alt="Background Vector"
          class="absolute top-0 left-0 w-full h-full object-contain opacity-80 lg:opacity-90 animate-float-subtle"
          style="
            object-position: left center;
            transform: translateX(-10%);
            min-width: 120%;
          "
        />
      </div>

      <!-- Optional gradient overlay for better text contrast -->
      <div class="absolute inset-0 bg-gradient-to-t from-[#140c2b]/40 via-transparent to-[#140c2b]/40 z-5 pointer-events-none"></div>

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
              Cesium isn't a marketing agency.
            </p>
            <p class="text-base sm:text-lg opacity-90 animate-fade-in-up animation-delay-300">
              It's a high-energy force designed to react with your business
            </p>
            <p class="text-base sm:text-lg opacity-90 animate-fade-in-up animation-delay-400">
              sparking momentum, amplifying results, and scaling with precision.
            </p>
            <p class="text-base sm:text-lg opacity-90 animate-fade-in-up animation-delay-500">
              we catalyze your brand's trajectory.
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
              We don't rely on luck. We engineer repeatable systems that spark, scale, and sustain performance — with measurable outcomes at every stage.
            </p>
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
              We don\'t just work in your industry — we react with it. Years of deep learning give us the ability to anticipate volatility, exploit opportunity, and maximize momentum.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- FIXED Combined Section: After the Cesium Reaction & What We Offer -->
    <section class="py-20 bg-[#362869] text-white relative">
      <!-- FIXED Background Vector -->
      <div class="absolute inset-0 w-full h-full">
        <div 
          class="w-full h-full bg-cover bg-center bg-no-repeat opacity-40"
          style="
            background-image: url('/assets/Rectangle8.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
          "
        ></div>
        <div class="absolute inset-0 bg-[#362869]/20 mix-blend-multiply"></div>
      </div>
      
      <div class="container mx-auto px-6 text-center relative z-10">
        <!-- After the Cesium Reaction Content -->
        <h2 class="text-4xl lg:text-5xl font-bold mb-4">
          After the Cesium Reaction
        </h2>
        <p class="text-xl opacity-90 mb-16 font-light max-w-3xl mx-auto">
          Real numbers. Real ignition. Measurable explosions in growth and performance.
        </p>
        
        <!-- Stats Section -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 max-w-6xl mx-auto mb-20">
          <!-- Stat 1 -->
          <div class="text-center">
            <div class="text-5xl lg:text-6xl font-bold text-[#facb24] mb-2">180%</div>
            <div class="text-lg font-semibold mb-3">Combustion Boost</div>
            <p class="text-sm opacity-80 leading-relaxed">
              Your cost-to-deposit increase = combustion. After exposure to Cesium\'s ignition formula, clients average over 180% growth in volume.
            </p>
          </div>
          
          <!-- Stat 2 -->
          <div class="text-center">
            <div class="text-5xl lg:text-6xl font-bold text-[#facb24] mb-2">250+</div>
            <div class="text-lg font-semibold mb-3">Ignitions Triggered</div>
            <p class="text-sm opacity-80 leading-relaxed">
              That\'s how many successful campaigns we\'ve run worldwide — each designed to spark performance at scale.
            </p>
          </div>
          
          <!-- Stat 3 -->
          <div class="text-center">
            <div class="text-5xl lg:text-6xl font-bold text-[#facb24] mb-2">97%</div>
            <div class="text-lg font-semibold mb-3">Stable Reaction Rate</div>
            <p class="text-sm opacity-80 leading-relaxed">
              We don\'t burn out fast. Our systems are engineered for long-term performance, and 97% stay with us because the returns are repeatable.
            </p>
          </div>
          
          <!-- Stat 4 -->
          <div class="text-center">
            <div class="text-5xl lg:text-6xl font-bold text-[#facb24] mb-2">-35%</div>
            <div class="text-lg font-semibold mb-3">Cost-to-Acquisition Drop</div>
            <p class="text-sm opacity-80 leading-relaxed">
              Your cost-to-deposit decrease = explosion. After exposure to Cesium\'s traction formula, clients average over 35% growth in revenue.
            </p>
          </div>
        </div>

        <!-- What We Offer Content -->
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
          <div class="service-card group bg-gray-100 text-gray-800 p-6 flex items-center justify-between transition-all duration-300 hover:bg-[#facb24] hover:transform hover:scale-105 cursor-pointer" style="border-radius: 0.56px;">
            <div class="flex-1">
              <h3 class="text-2xl font-bold text-[#362869] mb-2">Paid Media</h3>
              <p class="text-gray-700 text-sm">Launch high-voltage ad campaigns across top platforms to drive instant results.</p>
            </div>
            <div class="flex items-center space-x-4">
              <a href="https://odin-recharge-bot.online/what-we-offer" class="learn-more-btn opacity-0 group-hover:opacity-100 bg-[#362869] text-white px-4 py-2 font-semibold transition-all duration-300" style="border-radius: 0.56px;">
                Learn More
              </a>
              <svg class="w-6 h-6 text-[#362869]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
              </svg>
            </div>
          </div>

          <!-- Service Card 2: SEO Optimization -->
          <div class="service-card group bg-gray-100 text-gray-800 p-6 flex items-center justify-between transition-all duration-300 hover:bg-[#facb24] hover:transform hover:scale-105 cursor-pointer" style="border-radius: 0.56px;">
            <div class="flex-1">
              <h3 class="text-2xl font-bold text-[#362869] mb-2">SEO Optimization</h3>
              <p class="text-gray-700 text-sm">Climb search rankings and sustain long-term organic traffic reactions.</p>
            </div>
            <div class="flex items-center space-x-4">
              <a href="https://odin-recharge-bot.online/what-we-offer" class="learn-more-btn opacity-0 group-hover:opacity-100 bg-[#362869] text-white px-4 py-2 font-semibold transition-all duration-300" style="border-radius: 0.56px;">
                Learn More
              </a>
              <svg class="w-6 h-6 text-[#362869]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
              </svg>
            </div>
          </div>

          <!-- Service Card 3: Social Media Marketing -->
          <div class="service-card group bg-gray-100 text-gray-800 p-6 flex items-center justify-between transition-all duration-300 hover:bg-[#facb24] hover:transform hover:scale-105 cursor-pointer" style="border-radius: 0.56px;">
            <div class="flex-1">
              <h3 class="text-2xl font-bold text-[#362869] mb-2">Social Media Marketing</h3>
              <p class="text-gray-700 text-sm">Build engaged communities and drive viral growth through strategic social campaigns.</p>
            </div>
            <div class="flex items-center space-x-4">
              <a href="https://odin-recharge-bot.online/what-we-offer" class="learn-more-btn opacity-0 group-hover:opacity-100 bg-[#362869] text-white px-4 py-2 font-semibold transition-all duration-300" style="border-radius: 0.56px;">
                Learn More
              </a>
              <svg class="w-6 h-6 text-[#362869]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
              </svg>
            </div>
          </div>

          <!-- Service Card 4: Data Analytics -->
          <div class="service-card group bg-gray-100 text-gray-800 p-6 flex items-center justify-between transition-all duration-300 hover:bg-[#facb24] hover:transform hover:scale-105 cursor-pointer" style="border-radius: 0.56px;">
            <div class="flex-1">
              <h3 class="text-2xl font-bold text-[#362869] mb-2">Data Analytics</h3>
              <p class="text-gray-700 text-sm">Transform raw data into actionable insights that fuel precision-targeted growth strategies.</p>
            </div>
            <div class="flex items-center space-x-4">
              <a href="https://odin-recharge-bot.online/what-we-offer" class="learn-more-btn opacity-0 group-hover:opacity-100 bg-[#362869] text-white px-4 py-2 font-semibold transition-all duration-300" style="border-radius: 0.56px;">
                Learn More
              </a>
              <svg class="w-6 h-6 text-[#362869]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
              </svg>
            </div>
          </div>

          <!-- Service Card 5: Content Marketing -->
          <div class="service-card group bg-gray-100 text-gray-800 p-6 flex items-center justify-between transition-all duration-300 hover:bg-[#facb24] hover:transform hover:scale-105 cursor-pointer" style="border-radius: 0.56px;">
            <div class="flex-1">
              <h3 class="text-2xl font-bold text-[#362869] mb-2">Content Marketing</h3>
              <p class="text-gray-700 text-sm">Create compelling narratives that resonate with your audience and drive engagement.</p>
            </div>
            <div class="flex items-center space-x-4">
              <a href="https://odin-recharge-bot.online/what-we-offer" class="learn-more-btn opacity-0 group-hover:opacity-100 bg-[#362869] text-white px-4 py-2 font-semibold transition-all duration-300" style="border-radius: 0.56px;">
                Learn More
              </a>
              <svg class="w-6 h-6 text-[#362869]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
              </svg>
            </div>
          </div>

          <!-- Service Card 6: Email Marketing -->
          <div class="service-card group bg-gray-100 text-gray-800 p-6 flex items-center justify-between transition-all duration-300 hover:bg-[#facb24] hover:transform hover:scale-105 cursor-pointer" style="border-radius: 0.56px;">
            <div class="flex-1">
              <h3 class="text-2xl font-bold text-[#362869] mb-2">Email Marketing</h3>
              <p class="text-gray-700 text-sm">Deliver personalized messages that convert prospects into loyal customers.</p>
            </div>
            <div class="flex items-center space-x-4">
              <a href="https://odin-recharge-bot.online/what-we-offer" class="learn-more-btn opacity-0 group-hover:opacity-100 bg-[#362869] text-white px-4 py-2 font-semibold transition-all duration-300" style="border-radius: 0.56px;">
                Learn More
              </a>
              <svg class="w-6 h-6 text-[#362869]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
              </svg>
            </div>
          </div>

          <!-- Service Card 7: Branding & Visual Identity -->
          <div class="service-card group bg-gray-100 text-gray-800 p-6 flex items-center justify-between transition-all duration-300 hover:bg-[#facb24] hover:transform hover:scale-105 cursor-pointer" style="border-radius: 0.56px;">
            <div class="flex-1">
              <h3 class="text-2xl font-bold text-[#362869] mb-2">Branding & Visual Identity</h3>
              <p class="text-gray-700 text-sm">Craft a powerful brand presence that resonates with your target audience.</p>
            </div>
            <div class="flex items-center space-x-4">
              <a href="https://odin-recharge-bot.online/what-we-offer" class="learn-more-btn opacity-0 group-hover:opacity-100 bg-[#362869] text-white px-4 py-2 font-semibold transition-all duration-300" style="border-radius: 0.56px;">
                Learn More
              </a>
              <svg class="w-6 h-6 text-[#362869]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
              </svg>
            </div>
          </div>
        </div>

        <!-- Explore All Services Button -->
        <div class="mt-12">
          <a href="https://odin-recharge-bot.online/what-we-offer" class="inline-flex items-center bg-[#facb24] text-primary font-bold py-3 px-6 rounded-[0.56px] shadow-lg hover:bg-yellow-500 transition duration-300 transform hover:scale-105">
            Explore all services in detail
          </a>
        </div>
      </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-20 bg-gray-100">
      <div class="container mx-auto px-6 text-center">
        <h2 class="text-3xl lg:text-4xl font-bold text-primary mb-12">
          What Our Clients Say
        </h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
          <!-- Testimonial 1 -->
          <div class="bg-white p-8 rounded-lg shadow-md">
            <p class="text-gray-700 mb-4">
              “Cesium transformed our marketing strategy. Their data-driven approach and innovative solutions led to a significant increase in our ROI. Highly recommend!”
            </p>
            <p class="font-semibold text-primary">— Jane Doe, Marketing Director</p>
          </div>
          <!-- Testimonial 2 -->
          <div class="bg-white p-8 rounded-lg shadow-md">
            <p class="text-gray-700 mb-4">
              “The team at Cesium is incredibly knowledgeable and responsive. They helped us navigate complex market challenges and achieve remarkable growth.”
            </p>
            <p class="font-semibold text-primary">— John Smith, CEO</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <AppFooter />
  </div>
</template>

<script setup>
import { Head, Link } from '@inertiajs/vue3';
import AppHeader from '@/Components/AppHeader.vue';
import AppFooter from '@/Components/AppFooter.vue';
import MiniSlotMachine from '@/Components/MiniSlotMachine.vue';

const openScheduleWindow = () => {
  // Logic to open scheduling window/modal
  alert('Schedule Time button clicked!');
};
</script>

<style scoped>
.service-card {
  position: relative;
  z-index: 1;
}

.service-card::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #f0f0f0; /* Default gray background */
  border-radius: 0.56px;
  z-index: -1;
  transition: all 0.3s ease;
}

.service-card:hover::before {
  background-color: #facb24; /* Yellow background on hover */
  transform: scale(1.05); /* 5% scale increase on hover */
}

.learn-more-btn {
  opacity: 0;
  transition: opacity 0.3s ease;
}

.group:hover .learn-more-btn {
  opacity: 1;
}

/* Animations */
@keyframes fadeIn {
  from { opacity: 0; transform: translateY(20px); }
  to { opacity: 1; transform: translateY(0); }
}

.animate-fade-in-up {
  animation: fadeIn 0.6s ease-out forwards;
  opacity: 0; /* Start invisible */
}

.animation-delay-200 { animation-delay: 0.2s; }
.animation-delay-300 { animation-delay: 0.3s; }
.animation-delay-400 { animation-delay: 0.4s; }
.animation-delay-500 { animation-delay: 0.5s; }
.animation-delay-600 { animation-delay: 0.6s; }

@keyframes floatSubtle {
  0% { transform: translateY(0px); }
  50% { transform: translateY(-5px); }
  100% { transform: translateY(0px); }
}

.animate-float-subtle {
  animation: floatSubtle 3s ease-in-out infinite;
}
</style>


