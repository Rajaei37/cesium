<template>
  <div class="min-h-screen bg-gray-50">
    <!-- Header -->
    <AppHeader current-page="blog" />

    <!-- Breadcrumb -->
    <div class="bg-white border-b pt-20">
      <div class="container mx-auto px-6 py-4">
        <nav class="flex items-center space-x-2 text-sm">
          <Link href="/" class="text-gray-500 hover:text-primary">Home</Link>
          <span class="text-gray-400">/</span>
          <Link href="/blog" class="text-gray-500 hover:text-primary">Blog</Link>
          <span class="text-gray-400">/</span>
          <span class="text-gray-900">{{ post.title }}</span>
        </nav>
      </div>
    </div>

    <!-- Article Content -->
    <article class="py-12">
      <div class="container mx-auto px-6">
        <div class="max-w-4xl mx-auto">
          <!-- Article Header -->
          <header class="mb-12">
            <div class="flex items-center space-x-4 mb-6">
              <span class="bg-secondary text-primary px-4 py-2 rounded-full text-sm font-medium">{{ post.category }}</span>
              <span class="text-gray-500">{{ formatDate(post.date) }}</span>
              <span class="text-gray-500">{{ post.readTime }} read</span>
            </div>
            <h1 class="text-4xl lg:text-5xl font-bold text-primary mb-6 leading-tight">{{ post.title }}</h1>
            <p class="text-xl text-gray-600 leading-relaxed mb-8">{{ post.excerpt }}</p>
            
            <!-- Author Info -->
            <div class="flex items-center justify-between border-t border-b border-gray-200 py-6">
              <div class="flex items-center space-x-4">
                <img :src="post.author.avatar" :alt="post.author.name" class="w-16 h-16 rounded-full" />
                <div>
                  <h3 class="font-bold text-gray-900">{{ post.author.name }}</h3>
                  <p class="text-gray-600">{{ post.author.title }}</p>
                  <p class="text-sm text-gray-500">{{ post.author.bio }}</p>
                </div>
              </div>
              
              <!-- Social Share -->
              <div class="flex items-center space-x-3">
                <span class="text-sm text-gray-500 mr-2">Share:</span>
                <button @click="shareOnTwitter" class="p-2 bg-blue-500 text-white rounded-full hover:bg-blue-600 transition-colors">
                  <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                  </svg>
                </button>
                <button @click="shareOnLinkedIn" class="p-2 bg-blue-700 text-white rounded-full hover:bg-blue-800 transition-colors">
                  <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                  </svg>
                </button>
                <button @click="shareOnFacebook" class="p-2 bg-blue-600 text-white rounded-full hover:bg-blue-700 transition-colors">
                  <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                  </svg>
                </button>
              </div>
            </div>
          </header>

          <!-- Featured Image -->
          <div class="mb-12">
            <img :src="post.image" :alt="post.title" class="w-full h-96 object-cover rounded-2xl shadow-lg" />
          </div>

          <!-- Article Content -->
          <div class="prose prose-lg max-w-none mb-12" v-html="post.content"></div>

          <!-- Tags -->
          <div class="flex flex-wrap gap-2 mb-12">
            <span 
              v-for="tag in post.tags" 
              :key="tag"
              class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full text-sm hover:bg-gray-200 transition-colors cursor-pointer"
            >
              #{{ tag }}
            </span>
          </div>

          <!-- Author Bio -->
          <div class="bg-white p-8 rounded-2xl shadow-lg mb-12">
            <div class="flex items-start space-x-6">
              <img :src="post.author.avatar" :alt="post.author.name" class="w-20 h-20 rounded-full flex-shrink-0" />
              <div class="flex-1">
                <h3 class="text-2xl font-bold text-primary mb-2">{{ post.author.name }}</h3>
                <p class="text-gray-600 mb-4">{{ post.author.title }}</p>
                <p class="text-gray-700 leading-relaxed mb-4">{{ post.author.fullBio }}</p>
                <div class="flex space-x-4">
                  <a :href="post.author.social.twitter" class="text-blue-500 hover:text-blue-600">Twitter</a>
                  <a :href="post.author.social.linkedin" class="text-blue-700 hover:text-blue-800">LinkedIn</a>
                </div>
              </div>
            </div>
          </div>

          <!-- Comments Section -->
          <div class="bg-white p-8 rounded-2xl shadow-lg mb-12">
            <h3 class="text-2xl font-bold text-primary mb-6">Comments ({{ comments.length }})</h3>
            
            <!-- Comment Form -->
            <form @submit.prevent="submitComment" class="mb-8">
              <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                <input 
                  v-model="newComment.name"
                  type="text" 
                  placeholder="Your Name"
                  class="px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent"
                  required
                />
                <input 
                  v-model="newComment.email"
                  type="email" 
                  placeholder="Your Email"
                  class="px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent"
                  required
                />
              </div>
              <textarea 
                v-model="newComment.message"
                placeholder="Your Comment"
                rows="4"
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent mb-4"
                required
              ></textarea>
              <button 
                type="submit"
                class="bg-primary text-white px-6 py-3 rounded-lg hover:bg-primary-dark transition-colors font-medium"
              >
                Post Comment
              </button>
            </form>

            <!-- Comments List -->
            <div class="space-y-6">
              <div 
                v-for="comment in comments" 
                :key="comment.id"
                class="border-b border-gray-200 pb-6 last:border-b-0"
              >
                <div class="flex items-start space-x-4">
                  <div class="w-12 h-12 bg-primary text-white rounded-full flex items-center justify-center font-bold">
                    {{ comment.name.charAt(0).toUpperCase() }}
                  </div>
                  <div class="flex-1">
                    <div class="flex items-center space-x-2 mb-2">
                      <h4 class="font-bold text-gray-900">{{ comment.name }}</h4>
                      <span class="text-gray-500 text-sm">{{ formatDate(comment.date) }}</span>
                    </div>
                    <p class="text-gray-700 leading-relaxed">{{ comment.message }}</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Related Posts -->
          <div class="bg-white p-8 rounded-2xl shadow-lg">
            <h3 class="text-2xl font-bold text-primary mb-6">Related Articles</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
              <article 
                v-for="relatedPost in relatedPosts" 
                :key="relatedPost.id"
                class="group cursor-pointer"
              >
                <Link :href="`/blog/${relatedPost.slug}`" class="block">
                  <img :src="relatedPost.image" :alt="relatedPost.title" class="w-full h-32 object-cover rounded-lg mb-3 group-hover:opacity-90 transition-opacity" />
                  <h4 class="font-bold text-gray-900 group-hover:text-primary transition-colors mb-2">{{ relatedPost.title }}</h4>
                  <p class="text-gray-600 text-sm">{{ relatedPost.excerpt.substring(0, 100) }}...</p>
                </Link>
              </article>
            </div>
          </div>
        </div>
      </div>
    </article>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
      <div class="container mx-auto px-6 text-center">
        <div class="flex items-center justify-center space-x-2 mb-4">
          <img src="/assets/logos/logo-main.svg" alt="Cesium Marketing" class="h-8 w-auto" />
          <span class="text-xl font-bold">Cesium Marketing</span>
        </div>
        <p class="text-gray-400 mb-6">Transforming iGaming businesses through innovative marketing strategies.</p>
        <div class="flex justify-center space-x-6">
          <Link href="/" class="text-gray-400 hover:text-white transition-colors">Home</Link>
          <Link href="/#services" class="text-gray-400 hover:text-white transition-colors">Services</Link>
          <Link href="/#about" class="text-gray-400 hover:text-white transition-colors">About</Link>
          <Link href="/blog" class="text-gray-400 hover:text-white transition-colors">Blog</Link>
          <Link href="/#contact" class="text-gray-400 hover:text-white transition-colors">Contact</Link>
        </div>
        <div class="mt-8 pt-8 border-t border-gray-800 text-gray-400 text-sm">
          <p>&copy; 2024 Cesium Marketing. All rights reserved.</p>
        </div>
      </div>
    </footer>
  </div>
</template>

<script setup>
import { ref, onMounted } from 'vue'
import { Link } from '@inertiajs/vue3'
import AppHeader from '@/Components/AppHeader.vue'

// Props
const props = defineProps({
  post: Object,
  relatedPosts: Array
})

// Reactive data
const comments = ref([
  {
    id: 1,
    name: 'Sarah Johnson',
    email: 'sarah@example.com',
    message: 'Great insights! This really helped me understand the current trends in iGaming marketing.',
    date: '2024-01-15'
  },
  {
    id: 2,
    name: 'Mike Chen',
    email: 'mike@example.com',
    message: 'Excellent article. The data-driven approach you mentioned is exactly what we need in our campaigns.',
    date: '2024-01-16'
  }
])

const newComment = ref({
  name: '',
  email: '',
  message: ''
})

// Methods
const formatDate = (dateString) => {
  const options = { year: 'numeric', month: 'long', day: 'numeric' }
  return new Date(dateString).toLocaleDateString(undefined, options)
}

const submitComment = () => {
  const comment = {
    id: comments.value.length + 1,
    name: newComment.value.name,
    email: newComment.value.email,
    message: newComment.value.message,
    date: new Date().toISOString().split('T')[0]
  }
  
  comments.value.push(comment)
  
  // Reset form
  newComment.value = {
    name: '',
    email: '',
    message: ''
  }
  
  // You can implement actual comment submission to backend here
  console.log('Comment submitted:', comment)
}

const shareOnTwitter = () => {
  const url = encodeURIComponent(window.location.href)
  const text = encodeURIComponent(props.post.title)
  window.open(`https://twitter.com/intent/tweet?url=${url}&text=${text}`, '_blank')
}

const shareOnLinkedIn = () => {
  const url = encodeURIComponent(window.location.href)
  window.open(`https://www.linkedin.com/sharing/share-offsite/?url=${url}`, '_blank')
}

const shareOnFacebook = () => {
  const url = encodeURIComponent(window.location.href)
  window.open(`https://www.facebook.com/sharer/sharer.php?u=${url}`, '_blank')
}

// Lifecycle
onMounted(() => {
  // Add any initialization logic here
})
</script>

<style scoped>
.prose {
  color: #374151;
  line-height: 1.75;
}

.prose h2 {
  font-size: 1.875rem;
  font-weight: 700;
  color: #362869;
  margin-top: 2rem;
  margin-bottom: 1rem;
}

.prose h3 {
  font-size: 1.5rem;
  font-weight: 600;
  color: #362869;
  margin-top: 1.5rem;
  margin-bottom: 0.75rem;
}

.prose p {
  margin-bottom: 1.25rem;
}

.prose ul, .prose ol {
  margin-bottom: 1.25rem;
  padding-left: 1.5rem;
}

.prose li {
  margin-bottom: 0.5rem;
}

.prose blockquote {
  border-left: 4px solid #facb24;
  padding-left: 1rem;
  margin: 1.5rem 0;
  font-style: italic;
  color: #6b7280;
}

.prose code {
  background-color: #f3f4f6;
  padding: 0.25rem 0.5rem;
  border-radius: 0.25rem;
  font-size: 0.875rem;
}

.prose pre {
  background-color: #1f2937;
  color: #f9fafb;
  padding: 1rem;
  border-radius: 0.5rem;
  overflow-x: auto;
  margin: 1.5rem 0;
}
</style>

