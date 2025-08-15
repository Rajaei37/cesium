<template>
  <!-- Cesium Insights Section -->
  <section class="py-20 bg-[#4A248C] relative overflow-hidden">
    <!-- Background molecular graphics -->
    <img src="/assets/Asset2.svg" alt="Molecular Graphic" class="absolute top-0 left-0 w-1/3 h-auto opacity-30 z-0" />
    <img src="/assets/Asset3.svg" alt="Molecular Graphic" class="absolute bottom-0 right-0 w-1/3 h-auto opacity-20 z-0" />
    
    <div class="container mx-auto px-6 relative z-10">
      <!-- Header -->
      <div class="flex justify-between items-center mb-12">
        <div>
          <h2 class="text-4xl lg:text-5xl font-bold text-white mb-4">
            Cesium Insights
          </h2>
          <p class="text-lg text-white opacity-90">
            Quick takes on trends, tools, and tactics that are moving the iGaming world.
          </p>
        </div>
        <div>
          <a href="/blog" class="inline-flex items-center justify-center px-6 py-3 border-2 border-white text-white font-semibold hover:bg-white hover:text-[#4A248C] transition duration-300" style="border-radius: 0.56px;">
            <svg class="mr-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
            </svg>
            View all
          </a>
        </div>
      </div>

      <!-- Blog Posts Grid -->
      <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <!-- First 3 posts in smaller cards -->
        <div v-for="(post, index) in posts.slice(0, 3)" :key="post.id" class="group cursor-pointer">
          <div class="bg-gradient-to-br from-yellow-400 to-yellow-500 rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1" style="border-radius: 0.56px;">
            <!-- Featured Image -->
            <div class="relative h-48 overflow-hidden">
              <img 
                :src="post.featured_image ? `/storage/${post.featured_image}` : '/assets/default-blog-image.jpg'" 
                :alt="post.title"
                class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105"
              />
              <!-- Date overlay -->
              <div class="absolute bottom-4 right-4 bg-black bg-opacity-70 text-white px-3 py-1 text-sm font-medium" style="border-radius: 0.56px;">
                {{ formatDate(post.published_at) }}
              </div>
            </div>
            
            <!-- Content -->
            <div class="p-6">
              <h3 class="text-xl font-bold text-[#4A248C] mb-3 line-clamp-2">
                {{ post.title }}
              </h3>
              <p class="text-[#4A248C] opacity-80 text-sm leading-relaxed line-clamp-3">
                {{ post.excerpt || 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.' }}
              </p>
            </div>
          </div>
        </div>
      </div>

      <!-- Featured Post (4th post) -->
      <div v-if="posts.length > 3" class="mt-8">
        <div class="bg-gradient-to-br from-yellow-400 to-yellow-500 rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-all duration-300 cursor-pointer group" style="border-radius: 0.56px;">
          <div class="flex flex-col lg:flex-row">
            <!-- Featured Image -->
            <div class="lg:w-1/2 relative h-64 lg:h-auto overflow-hidden">
              <img 
                :src="posts[3].featured_image ? `/storage/${posts[3].featured_image}` : '/assets/default-blog-image.jpg'" 
                :alt="posts[3].title"
                class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105"
              />
              <!-- Date overlay -->
              <div class="absolute bottom-4 right-4 bg-black bg-opacity-70 text-white px-3 py-1 text-sm font-medium" style="border-radius: 0.56px;">
                {{ formatDate(posts[3].published_at) }}
              </div>
            </div>
            
            <!-- Content -->
            <div class="lg:w-1/2 p-8 flex flex-col justify-center">
              <h3 class="text-2xl lg:text-3xl font-bold text-[#4A248C] mb-4">
                {{ posts[3].title }}
              </h3>
              <p class="text-[#4A248C] opacity-80 leading-relaxed">
                {{ posts[3].excerpt || 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.' }}
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
import { ref, onMounted } from 'vue'

const posts = ref([])

const formatDate = (dateString) => {
  const date = new Date(dateString)
  return date.toLocaleDateString('en-US', { 
    day: '2-digit', 
    month: 'short', 
    year: 'numeric' 
  }).toUpperCase()
}

const fetchPosts = async () => {
  try {
    const response = await fetch('/api/blog-posts/latest')
    if (response.ok) {
      posts.value = await response.json()
    } else {
      console.error('Failed to fetch posts')
    }
  } catch (error) {
    console.error('Error fetching posts:', error)
  }
}

onMounted(() => {
  fetchPosts()
})
</script>

<style scoped>
.line-clamp-2 {
  display: -webkit-box;
  -webkit-line-clamp: 2;
  -webkit-box-orient: vertical;
  overflow: hidden;
}

.line-clamp-3 {
  display: -webkit-box;
  -webkit-line-clamp: 3;
  -webkit-box-orient: vertical;
  overflow: hidden;
}
</style>

