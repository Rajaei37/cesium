<template>
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
</template>

<script setup>
import { Link } from '@inertiajs/vue3';
import MiniSlotMachine from '@/Components/MiniSlotMachine.vue';
</script>

<style scoped>
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

