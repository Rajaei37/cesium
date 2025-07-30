<template>
  <div class="min-h-screen bg-cesium-light-gray font-poppins antialiased">
    <!-- Header -->
    <AppHeader current-page="blog" />

    <!-- Hero Section -->
    <section class="bg-primary text-white py-20 pt-28">
      <div class="container mx-auto px-6 text-center">
        <h1 class="text-4xl lg:text-6xl font-bold mb-6 animate-fade-in-up">
          Latest Insights
        </h1>
        <p class="text-xl opacity-90 max-w-3xl mx-auto animate-fade-in-up animation-delay-200">
          Stay ahead of the curve with expert insights, industry trends, and proven strategies for iGaming marketing success.
        </p>
      </div>
    </section>

    <!-- Blog Posts Grid -->
    <section class="py-20">
      <div class="container mx-auto px-6">
        <!-- Featured Post -->
        <div v-if="featuredPost" class="mb-16">
          <h2 class="text-3xl font-bold text-primary mb-8 text-center">Featured Article</h2>
          <div class="bg-white rounded-2xl shadow-xl overflow-hidden hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1">
            <div class="md:flex">
              <div class="md:w-1/2">
                <img :src="featuredPost.image" :alt="featuredPost.title" class="w-full h-64 md:h-full object-cover" />
              </div>
              <div class="md:w-1/2 p-8 md:p-12 flex flex-col justify-center">
                <div class="flex items-center space-x-4 mb-4">
                  <span class="bg-secondary text-primary px-3 py-1 rounded-full text-sm font-medium">{{ featuredPost.category }}</span>
                  <span class="text-gray-500 text-sm">{{ formatDate(featuredPost.date) }}</span>
                </div>
                <h3 class="text-2xl md:text-3xl font-bold text-primary mb-4 leading-tight">{{ featuredPost.title }}</h3>
                <p class="text-gray-600 mb-6 leading-relaxed">{{ featuredPost.excerpt }}</p>
                <div class="flex items-center justify-between">
                  <div class="flex items-center space-x-3">
                    <img :src="featuredPost.author.avatar" :alt="featuredPost.author.name" class="w-10 h-10 rounded-full" />
                    <div>
                      <p class="font-medium text-gray-900">{{ featuredPost.author.name }}</p>
                      <p class="text-sm text-gray-500">{{ featuredPost.readTime }} read</p>
                    </div>
                  </div>
                  <Link :href="`/blog/${featuredPost.slug}`" class="bg-primary text-white px-6 py-3 rounded-full hover:bg-primary-dark transition-colors font-medium">
                    Read Article
                  </Link>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Filter Tabs -->
        <div class="flex flex-wrap justify-center mb-12 space-x-2 space-y-2">
          <button 
            @click="activeCategory = 'all'"
            :class="[
              'px-6 py-3 rounded-full font-medium transition-all duration-300',
              activeCategory === 'all' 
                ? 'bg-primary text-white shadow-lg' 
                : 'bg-white text-gray-600 hover:bg-gray-100'
            ]"
          >
            All Posts
          </button>
          <button 
            v-for="category in categories"
            :key="category"
            @click="activeCategory = category"
            :class="[
              'px-6 py-3 rounded-full font-medium transition-all duration-300',
              activeCategory === category 
                ? 'bg-primary text-white shadow-lg' 
                : 'bg-white text-gray-600 hover:bg-gray-100'
            ]"
          >
            {{ category }}
          </button>
        </div>

        <!-- Blog Posts Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
          <article 
            v-for="post in filteredPosts" 
            :key="post.id"
            class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 group"
          >
            <div class="relative overflow-hidden">
              <img :src="post.image" :alt="post.title" class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-300" />
              <div class="absolute top-4 left-4">
                <span class="bg-secondary text-primary px-3 py-1 rounded-full text-sm font-medium">{{ post.category }}</span>
              </div>
            </div>
            <div class="p-6">
              <div class="flex items-center space-x-4 mb-3">
                <span class="text-gray-500 text-sm">{{ formatDate(post.date) }}</span>
                <span class="text-gray-500 text-sm">{{ post.readTime }} read</span>
              </div>
              <h3 class="text-xl font-bold text-primary mb-3 leading-tight group-hover:text-primary-dark transition-colors">{{ post.title }}</h3>
              <p class="text-gray-600 mb-4 leading-relaxed">{{ post.excerpt }}</p>
              <div class="flex items-center justify-between">
                <div class="flex items-center space-x-3">
                  <img :src="post.author.avatar" :alt="post.author.name" class="w-8 h-8 rounded-full" />
                  <span class="text-sm font-medium text-gray-700">{{ post.author.name }}</span>
                </div>
                <Link :href="`/blog/${post.slug}`" class="text-primary hover:text-primary-dark font-medium text-sm transition-colors">
                  Read More →
                </Link>
              </div>
            </div>
          </article>
        </div>

        <!-- Load More Button -->
        <div v-if="hasMorePosts" class="text-center mt-12">
          <button 
            @click="loadMorePosts"
            class="bg-primary text-white px-8 py-4 rounded-full hover:bg-primary-dark transition-colors font-medium shadow-lg hover:shadow-xl"
          >
            Load More Articles
          </button>
        </div>
      </div>
    </section>

    <!-- Newsletter Signup -->
    <section class="bg-primary text-white py-20">
      <div class="container mx-auto px-6 text-center">
        <h2 class="text-3xl lg:text-4xl font-bold mb-4">Stay Updated</h2>
        <p class="text-xl opacity-90 mb-8 max-w-2xl mx-auto">
          Get the latest iGaming marketing insights delivered straight to your inbox.
        </p>
        <form @submit.prevent="subscribeNewsletter" class="max-w-md mx-auto flex">
          <input 
            v-model="newsletterEmail"
            type="email" 
            placeholder="Enter your email"
            class="flex-1 px-6 py-4 rounded-l-full text-gray-900 focus:outline-none focus:ring-2 focus:ring-secondary"
            required
          />
          <button 
            type="submit"
            class="bg-secondary text-primary px-8 py-4 rounded-r-full hover:bg-secondary-dark transition-colors font-medium"
          >
            Subscribe
          </button>
        </form>
      </div>
    </section>

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

    <!-- Footer -->
    <AppFooter />
  </div>
</template>

<script setup>
import { ref, computed, onMounted } from 'vue'
import { Link } from '@inertiajs/vue3'
import AppHeader from '@/Components/AppHeader.vue'
import AppFooter from '@/Components/AppFooter.vue'

// Props
const props = defineProps({
  posts: Array,
  categories: Array
})

// Reactive data
const activeCategory = ref('all')
const newsletterEmail = ref('')
const currentPage = ref(1)
const postsPerPage = 9

// Methods
const openScheduleWindow = () => {
  window.open('https://calendly.com/cesium-marketing/strategy-call', '_blank', 'width=800,height=600')
}

// Computed properties
const featuredPost = computed(() => props.posts?.[0] || null)

const filteredPosts = computed(() => {
  if (!props.posts) return []
  
  let filtered = props.posts.slice(1) // Exclude featured post
  
  if (activeCategory.value !== 'all') {
    filtered = filtered.filter(post => post.category === activeCategory.value)
  }
  
  return filtered.slice(0, currentPage.value * postsPerPage)
})

const hasMorePosts = computed(() => {
  if (!props.posts) return false
  
  let filtered = props.posts.slice(1)
  if (activeCategory.value !== 'all') {
    filtered = filtered.filter(post => post.category === activeCategory.value)
  }
  
  return filtered.length > currentPage.value * postsPerPage
})

// Methods
const formatDate = (dateString) => {
  const options = { year: 'numeric', month: 'long', day: 'numeric' }
  return new Date(dateString).toLocaleDateString(undefined, options)
}

const loadMorePosts = () => {
  currentPage.value++
}

const subscribeNewsletter = () => {
  // Handle newsletter subscription
  console.log('Newsletter subscription:', newsletterEmail.value)
  // You can implement the actual subscription logic here
  alert('Thank you for subscribing to our newsletter!')
  newsletterEmail.value = ''
}

// Lifecycle
onMounted(() => {
  // Add any initialization logic here
})
</script>

<style scoped>
.animate-fade-in-up {
  animation: fadeInUp 0.6s ease-out;
}

.animation-delay-200 {
  animation-delay: 0.2s;
}

@keyframes fadeInUp {
  from {
    opacity: 0;
    transform: translateY(30px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

/* Custom scrollbar */
::-webkit-scrollbar {
  width: 8px;
}

::-webkit-scrollbar-track {
  background: #f1f1f1;
}

::-webkit-scrollbar-thumb {
  background: #facb24;
  border-radius: 4px;
}

::-webkit-scrollbar-thumb:hover {
  background: #e6b622;
}
</style>

