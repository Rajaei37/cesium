<template>
  <div class="min-h-screen bg-white font-poppins antialiased">
    <!-- Floating Action Buttons -->
    <FloatingButtons />

    <!-- Header -->
    <AppHeader current-page="home" />

    <!-- Main Content -->
    <main>
      <!-- Hero Section -->
      <HeroSection />

      <!-- Why Cesium Section -->
      <WhyCesium />

      <!-- Combined Cesium Reaction and Services Section -->
      <CesiumReaction />
      <ServicesSection />

      <!-- Latest Insights Section -->
      <LatestInsights :blog-posts="blogPosts" />

      <!-- Interactive Calculator (if exists) -->
      <InteractiveCalculator v-if="showCalculator" />
    </main>

    <!-- Footer -->
    <AppFooter />
  </div>
</template>

<script setup>
import { ref } from 'vue'
import { Head } from '@inertiajs/vue3'
import AppHeader from '@/Components/AppHeader.vue'
import AppFooter from '@/Components/AppFooter.vue'
import FloatingButtons from '@/Components/FloatingButtons.vue'
import HeroSection from '@/Components/HeroSection.vue'
import WhyCesium from '@/Components/WhyCesium.vue'
import CesiumReaction from '@/Components/CesiumReaction.vue'
import ServicesSection from '@/Components/ServicesSection.vue'
import LatestInsights from '@/Components/LatestInsights.vue'
import InteractiveCalculator from '@/Components/InteractiveCalculator.vue'

// Props
const props = defineProps({
  blogPosts: {
    type: Array,
    default: () => []
  },
  showCalculator: {
    type: Boolean,
    default: false
  }
})

// Default blog posts if none provided
const blogPosts = props.blogPosts.length > 0 ? props.blogPosts : [
  {
    title: "The Future of iGaming Marketing",
    excerpt: "Exploring the latest trends and technologies shaping the industry.",
    image: "/assets/blog-placeholder.jpg",
    author: "Cesium Team",
    date: "Dec 15, 2024",
    read_time: "5 min read",
    url: "/blog/future-igaming-marketing",
    category: "TRENDS"
  },
  {
    title: "Data-Driven Growth Strategies",
    excerpt: "How to leverage analytics for maximum ROI in your campaigns.",
    image: "/assets/blog-placeholder.jpg",
    author: "Cesium Team",
    date: "Dec 10, 2024",
    read_time: "7 min read",
    url: "/blog/data-driven-growth",
    category: "STRATEGY"
  },
  {
    title: "Social Media Best Practices",
    excerpt: "Building engaged communities in the digital age.",
    image: "/assets/blog-placeholder.jpg",
    author: "Cesium Team",
    date: "Dec 5, 2024",
    read_time: "4 min read",
    url: "/blog/social-media-best-practices",
    category: "SOCIAL"
  },
  {
    title: "Email Marketing Automation",
    excerpt: "Streamline your campaigns for better conversion rates.",
    image: "/assets/blog-placeholder.jpg",
    author: "Cesium Team",
    date: "Nov 30, 2024",
    read_time: "6 min read",
    url: "/blog/email-automation",
    category: "EMAIL"
  }
]
</script>

<style scoped>
/* Any additional page-specific styles can go here */
</style>

