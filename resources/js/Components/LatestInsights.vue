<template>
  <!-- Cesium Insights Section -->
  <section class="py-20 bg-white">
    <div class="container mx-auto px-6">
      <div class="text-center mb-16">
        <h2 class="text-4xl lg:text-5xl font-bold text-primary mb-4">Cesium Insights</h2>
        <p class="text-xl text-gray-600 max-w-3xl mx-auto font-light">
          Quick takes on trends, tools, and tactics that are moving the iGaming world.
        </p>
      </div>

      <!-- Featured Article -->
      <div class="mb-12">
        <div class="bg-white rounded-xl shadow-xl overflow-hidden">
          <div class="md:flex">
            <div class="md:w-1/2">
              <img src="/assets/blog-placeholder.jpg" alt="Featured Article" class="w-full h-64 md:h-full object-cover" loading="lazy" decoding="async" />
            </div>
            <div class="md:w-1/2 p-8 text-gray-800">
              <div class="text-sm text-[#facb24] font-semibold mb-2">02 DEC 2025</div>
              <h3 class="text-2xl font-bold text-[#362869] mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit</h3>
              <p class="text-gray-600 mb-6">
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
              </p>
              <div class="flex items-center justify-between">
                <div class="flex items-center space-x-4 text-sm text-gray-500">
                  <span>Cesium Team</span>
                  <span>5 min read</span>
                </div>
                <a href="/blog" class="text-[#facb24] font-semibold">Read More →</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Blog Grid -->
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
        <!-- Blog Post 1 -->
        <article class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition">
          <img src="/assets/blog-placeholder.jpg" alt="Blog Post" class="w-full h-48 object-cover" loading="lazy" decoding="async" />
          <div class="p-6">
            <div class="text-sm text-[#facb24] font-semibold mb-2">06 JUN 2025</div>
            <h3 class="text-lg font-bold text-[#362869] mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit</h3>
            <p class="text-gray-600 text-sm mb-4">
              sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
            </p>
            <div class="flex items-center justify-between text-sm text-gray-500">
              <span>Cesium Team</span>
              <span>3 min read</span>
            </div>
          </div>
        </article>

        <!-- Blog Post 2 -->
        <article class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition">
          <img src="/assets/blog-placeholder.jpg" alt="Blog Post" class="w-full h-48 object-cover" loading="lazy" decoding="async" />
          <div class="p-6">
            <div class="text-sm text-[#facb24] font-semibold mb-2">20 AUG 2025</div>
            <h3 class="text-lg font-bold text-[#362869] mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit</h3>
            <p class="text-gray-600 text-sm mb-4">
              sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
            </p>
            <div class="flex items-center justify-between text-sm text-gray-500">
              <span>Cesium Team</span>
              <span>4 min read</span>
            </div>
          </div>
        </article>

        <!-- Blog Post 3 -->
        <article class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition">
          <img src="/assets/blog-placeholder.jpg" alt="Blog Post" class="w-full h-48 object-cover" loading="lazy" decoding="async" />
          <div class="p-6">
            <div class="text-sm text-[#facb24] font-semibold mb-2">02 DEC 2025</div>
            <h3 class="text-lg font-bold text-[#362869] mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit</h3>
            <p class="text-gray-600 text-sm mb-4">
              sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
            </p>
            <div class="flex items-center justify-between text-sm text-gray-500">
              <span>Cesium Team</span>
              <span>6 min read</span>
            </div>
          </div>
        </article>
      </div>

      <!-- View All Button -->
      <div class="text-center">
        <a href="/blog" class="inline-block bg-[#facb24] text-[#362869] font-semibold py-4 px-8 rounded-full shadow-lg hover:bg-[#FFD300] transition transform hover:scale-105">
          View all
        </a>
      </div>
    </div>
  </section>
</template>

<script setup>
// Props can be added later for dynamic blog posts
const props = defineProps({
  blogPosts: { type: Array, default: () => [] },
});
</script>

