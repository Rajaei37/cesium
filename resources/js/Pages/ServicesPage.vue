<template>
  <div class="min-h-screen bg-cesium-light-gray font-poppins antialiased">
    <AppHeader current-page="services" />
    <ServicesHeroSection />
    <ServicesMainSection />
    <ServicesWhyCesium />
    <AppFooter />
  </div>
</template>

<script setup>
import AppHeader from "../Components/AppHeader.vue";
import AppFooter from "../Components/AppFooter.vue";
import ServicesHeroSection from "../Components/ServicesHeroSection.vue";
import ServicesMainSection from "../Components/ServicesMainSection.vue";
import ServicesWhyCesium from "../Components/ServicesWhyCesium.vue";
</script>


