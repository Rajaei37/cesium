<template>
  <div class="min-h-screen bg-cesium-light-gray font-poppins antialiased">
    <!-- Floating Action Buttons -->
    <FloatingButtons />

    <!-- Header -->
    <AppHeader current-page="home" />

    <!-- Hero Section -->
    <HeroSection />

    <!-- Why Cesium Section -->
    <WhyCesium />

    <!-- Combined Background Section -->
    <BackgroundSection>
      <!-- After the Cesium Reaction Section -->
      <CesiumReaction />

      <!-- What We Offer Section -->
      <ServicesSection />
    </BackgroundSection>

    <!-- We Trigger the Reaction Section -->
    <WeTriggerReaction />

    <!-- Cesium Insights Section -->
    <CesiumInsights />

    <!-- Footer -->
    <AppFooter />
  </div>
</template>

<script setup>
import { Head } from '@inertiajs/vue3';
import AppHeader from '@/Components/AppHeader.vue';
import AppFooter from '@/Components/AppFooter.vue';
import FloatingButtons from '@/Components/FloatingButtons.vue';
import HeroSection from '@/Components/HeroSection.vue';
import WhyCesium from '@/Components/WhyCesium.vue';
import CesiumReaction from '@/Components/CesiumReaction.vue';
import ServicesSection from '@/Components/ServicesSection.vue';
import WeTriggerReaction from '@/Components/WeTriggerReaction.vue';
import CesiumInsights from '@/Components/CesiumInsights.vue';
import BackgroundSection from '@/Components/BackgroundSection.vue';
</script>


