<template>
  <!-- HERO SECTION MATCHING DESIGN -->
  <section
    id="home"
    class="relative bg-gradient-to-br from-[#362869] via-[#4a3575] to-[#362869] text-white pt-20 pb-16 min-h-screen flex items-center overflow-hidden"
  >
    <!-- Golden Vector Background - Multiple Responsive Layers -->
    <div class="absolute inset-0 w-full h-full z-0 pointer-events-none">
      <!-- Main Diagonal Vector - Desktop -->
      <div class="hidden lg:block absolute top-0 left-0 w-full h-full">
        <div 
          class="absolute bg-gradient-to-r from-[#F4D03F] via-[#F7DC6F] to-[#F8C471] opacity-90 transform rotate-12 animate-float-subtle"
          style="
            width: 120%;
            height: 25%;
            top: 15%;
            left: -20%;
            border-radius: 0 0 50px 50px;
            box-shadow: 0 10px 40px rgba(244, 208, 63, 0.3);
          "
        ></div>
        <div 
          class="absolute bg-gradient-to-r from-[#F7DC6F] via-[#F4D03F] to-[#F8C471] opacity-80 transform rotate-12 animate-float-subtle animation-delay-300"
          style="
            width: 100%;
            height: 30%;
            top: 35%;
            left: 10%;
            border-radius: 50px 0 0 50px;
            box-shadow: 0 15px 50px rgba(247, 220, 111, 0.2);
          "
        ></div>
      </div>

      <!-- Tablet Vector -->
      <div class="hidden md:block lg:hidden absolute top-0 left-0 w-full h-full">
        <div 
          class="absolute bg-gradient-to-r from-[#F4D03F] to-[#F7DC6F] opacity-75 transform rotate-8 animate-float-subtle"
          style="
            width: 100%;
            height: 20%;
            top: 20%;
            left: -15%;
            border-radius: 0 0 40px 40px;
          "
        ></div>
        <div 
          class="absolute bg-gradient-to-r from-[#F7DC6F] to-[#F8C471] opacity-70 transform rotate-8 animate-float-subtle animation-delay-400"
          style="
            width: 80%;
            height: 25%;
            top: 40%;
            left: 15%;
            border-radius: 40px 0 0 40px;
          "
        ></div>
      </div>

      <!-- Mobile Vector -->
      <div class="block md:hidden absolute top-0 left-0 w-full h-full">
        <div 
          class="absolute bg-gradient-to-r from-[#F4D03F] to-[#F7DC6F] opacity-60 transform rotate-6 animate-float-subtle"
          style="
            width: 80%;
            height: 15%;
            top: 25%;
            left: -10%;
            border-radius: 0 0 30px 30px;
          "
        ></div>
      </div>
    </div>

    <!-- Content Container -->
    <div class="container mx-auto px-4 sm:px-6 relative z-10">
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center min-h-[70vh]">
        
        <!-- Left Content - Text Section -->
        <div class="lg:col-span-7 text-center lg:text-left">
          <!-- Main Heading -->
          <div class="mb-6 animate-fade-in-up">
            <h1 class="text-5xl sm:text-6xl md:text-7xl lg:text-8xl xl:text-9xl font-bold leading-tight mb-2">
              Cesium
            </h1>
            <div class="text-[#F4D03F] text-xl sm:text-2xl md:text-3xl lg:text-4xl font-medium italic">
              is Active by nature
            </div>
          </div>

          <!-- Description -->
          <div class="space-y-4 mb-8 max-w-lg mx-auto lg:mx-0">
            <p class="text-lg sm:text-xl md:text-2xl font-semibold animate-fade-in-up animation-delay-200">
              Cesium isn\'t a marketing agency.
            </p>
            <p class="text-base sm:text-lg md:text-xl opacity-90 animate-fade-in-up animation-delay-300">
              It\'s a high-energy force designed to react with your business
            </p>
            <p class="text-base sm:text-lg md:text-xl opacity-90 animate-fade-in-up animation-delay-400">
              sparking momentum, amplifying results, and scaling with precision.
            </p>
            <p class="text-base sm:text-lg md:text-xl font-medium animate-fade-in-up animation-delay-500">
              we catalyze your brand\'s trajectory.
            </p>
          </div>

          <!-- CTA Button -->
          <div class="animate-fade-in-up animation-delay-600">
            <Link
              href="/contact-us"
              class="inline-block bg-[#F4D03F] text-[#362869] font-bold py-4 px-8 rounded-lg shadow-lg hover:bg-[#F7DC6F] transition-all duration-300 transform hover:scale-105 hover:shadow-xl text-lg"
            >
              Request Strategy Call
            </Link>
          </div>
        </div>

        <!-- Right Content - Slot Machine Section -->
        <div class="lg:col-span-5 flex justify-center lg:justify-end animate-fade-in-up animation-delay-700">
          <div class="relative">
            <!-- Slot Machine Container -->
            <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 shadow-2xl border border-white/20">
              <div class="text-center mb-4">
                <h3 class="text-[#F4D03F] text-xl font-bold mb-1">Try Your Luck</h3>
                <p class="text-lg font-semibold">for a <span class="text-[#F4D03F]">Discount!</span></p>
              </div>
              
              <!-- Slot Machine Component -->
              <MiniSlotMachine class="w-full max-w-[280px] mx-auto" />
              
              <!-- Spin Button -->
              <button class="w-full mt-4 bg-[#F4D03F] text-[#362869] font-bold py-3 px-6 rounded-lg hover:bg-[#F7DC6F] transition-all duration-300 transform hover:scale-105">
                Spin for Discount!
              </button>
              
              <!-- Rules Text -->
              <div class="text-xs text-center mt-3 opacity-80 space-y-1">
                <p>Match 3 symbols for JACKPOT (30% off)</p>
                <p>Match 2 symbols for 20% off</p>
                <p>Any spin gets you 10% off</p>
              </div>
            </div>
            
            <!-- Floating Elements -->
            <div class="absolute -top-4 -right-4 w-8 h-8 bg-[#F4D03F] rounded-full animate-bounce opacity-80"></div>
            <div class="absolute -bottom-6 -left-6 w-6 h-6 bg-[#F7DC6F] rounded-full animate-pulse opacity-70"></div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
import { Link } from '@inertiajs/vue3';
import MiniSlotMachine from '@/Components/MiniSlotMachine.vue';
</script>

<style scoped>
/* Animation Keyframes */
@keyframes fadeIn {
  from { opacity: 0; transform: translateY(30px); }
  to { opacity: 1; transform: translateY(0); }
}

@keyframes floatSubtle {
  0%, 100% { transform: rotate(12deg) translateY(0px); }
  50% { transform: rotate(12deg) translateY(-10px); }
}

@keyframes floatSubtleMd {
  0%, 100% { transform: rotate(8deg) translateY(0px); }
  50% { transform: rotate(8deg) translateY(-8px); }
}

@keyframes floatSubtleSm {
  0%, 100% { transform: rotate(6deg) translateY(0px); }
  50% { transform: rotate(6deg) translateY(-5px); }
}

/* Animation Classes */
.animate-fade-in-up {
  animation: fadeIn 0.8s ease-out forwards;
  opacity: 0;
}

.animate-float-subtle {
  animation: floatSubtle 4s ease-in-out infinite;
}

/* Animation Delays */
.animation-delay-200 { animation-delay: 0.2s; }
.animation-delay-300 { animation-delay: 0.3s; }
.animation-delay-400 { animation-delay: 0.4s; }
.animation-delay-500 { animation-delay: 0.5s; }
.animation-delay-600 { animation-delay: 0.6s; }
.animation-delay-700 { animation-delay: 0.7s; }

/* Responsive Float Animations */
@media (max-width: 1023px) and (min-width: 768px) {
  .animate-float-subtle {
    animation: floatSubtleMd 4s ease-in-out infinite;
  }
}

@media (max-width: 767px) {
  .animate-float-subtle {
    animation: floatSubtleSm 3s ease-in-out infinite;
  }
}

/* Custom Scrollbar for Smooth Experience */
::-webkit-scrollbar {
  width: 8px;
}

::-webkit-scrollbar-track {
  background: rgba(54, 40, 105, 0.1);
}

::-webkit-scrollbar-thumb {
  background: rgba(244, 208, 63, 0.3);
  border-radius: 4px;
}

::-webkit-scrollbar-thumb:hover {
  background: rgba(244, 208, 63, 0.5);
}
</style>

