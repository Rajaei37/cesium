<template>
  <section class="py-24 bg-gradient-to-br from-[#362869] to-[#5f4b8b] relative overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-10">
      <div class="absolute top-10 left-10 w-32 h-32 border border-white/20 rounded-full"></div>
      <div class="absolute bottom-20 right-20 w-24 h-24 border border-white/20 rounded-full"></div>
      <div class="absolute top-1/2 left-1/4 w-16 h-16 border border-white/20 rounded-full"></div>
    </div>

    <div class="max-w-7xl mx-auto px-6 relative z-10">
      <!-- Section Header -->
      <div class="text-center mb-16">
        <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">
          What Our Clients Say
        </h2>
        <p class="text-xl text-white/80 max-w-3xl mx-auto">
          Don't just take our word for it. Hear from casino operators who've transformed their business with our proven strategies.
        </p>
      </div>

      <!-- Testimonial Carousel -->
      <div class="relative">
        <!-- Main Testimonial Display -->
        <div class="bg-white/10 backdrop-blur-lg rounded-3xl p-8 md:p-12 border border-white/20 shadow-2xl">
          <div class="flex flex-col lg:flex-row items-center gap-8">
            <!-- Client Photo and Info -->
            <div class="flex-shrink-0 text-center lg:text-left">
              <div class="relative mb-6">
                <img
                  v-if="!currentTestimonial.imageError"
                  :src="currentTestimonial.photo"
                  :alt="`${currentTestimonial.name} photo`"
                  class="w-24 h-24 lg:w-32 lg:h-32 rounded-full object-cover border-4 border-[#facb24] shadow-lg mx-auto lg:mx-0"
                  @error="handleImageError(currentTestimonial)"
                  loading="lazy"
                />
                <div 
                  v-else
                  class="w-24 h-24 lg:w-32 lg:h-32 rounded-full bg-[#facb24] flex items-center justify-center text-[#362869] text-2xl font-bold border-4 border-[#facb24] shadow-lg mx-auto lg:mx-0"
                >
                  {{ getInitials(currentTestimonial.name) }}
                </div>
                
                <!-- Trust Badge -->
                <div class="absolute -bottom-2 -right-2 bg-green-500 rounded-full p-2 shadow-lg">
                  <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                  </svg>
                </div>
              </div>
              
              <h4 class="text-xl font-bold text-white mb-1">{{ currentTestimonial.name }}</h4>
              <p class="text-[#facb24] font-medium mb-2">{{ currentTestimonial.position }}</p>
              <p class="text-white/70 text-sm">{{ currentTestimonial.company }}</p>
              
              <!-- Company Logo -->
              <div v-if="currentTestimonial.companyLogo" class="mt-4">
                <img
                  :src="currentTestimonial.companyLogo"
                  :alt="`${currentTestimonial.company} logo`"
                  class="h-8 mx-auto lg:mx-0 opacity-80"
                  loading="lazy"
                />
              </div>
            </div>

            <!-- Testimonial Content -->
            <div class="flex-1">
              <!-- Quote Icon -->
              <div class="mb-6">
                <svg class="w-12 h-12 text-[#facb24] opacity-80" fill="currentColor" viewBox="0 0 24 24">
                  <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h4v10h-10z"/>
                </svg>
              </div>

              <!-- Testimonial Text -->
              <blockquote class="text-lg md:text-xl text-white leading-relaxed mb-6">
                {{ currentTestimonial.quote }}
              </blockquote>

              <!-- Results/Metrics -->
              <div v-if="currentTestimonial.metrics" class="grid grid-cols-2 md:grid-cols-3 gap-4 mb-6">
                <div 
                  v-for="metric in currentTestimonial.metrics" 
                  :key="metric.label"
                  class="text-center bg-white/10 rounded-lg p-3 border border-white/20"
                >
                  <div class="text-2xl font-bold text-[#facb24] mb-1">{{ metric.value }}</div>
                  <div class="text-sm text-white/80">{{ metric.label }}</div>
                </div>
              </div>

              <!-- Star Rating -->
              <div class="flex items-center gap-2 mb-4">
                <div class="flex">
                  <svg 
                    v-for="star in 5" 
                    :key="star"
                    class="w-5 h-5 text-[#facb24]" 
                    fill="currentColor" 
                    viewBox="0 0 20 20"
                  >
                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                  </svg>
                </div>
                <span class="text-white/80 text-sm ml-2">5.0 out of 5</span>
              </div>

              <!-- Service Tags -->
              <div v-if="currentTestimonial.services" class="flex flex-wrap gap-2">
                <span 
                  v-for="service in currentTestimonial.services" 
                  :key="service"
                  class="px-3 py-1 bg-[#facb24]/20 text-[#facb24] rounded-full text-sm font-medium border border-[#facb24]/30"
                >
                  {{ service }}
                </span>
              </div>
            </div>
          </div>
        </div>

        <!-- Navigation Controls -->
        <div class="flex items-center justify-between mt-8">
          <!-- Previous Button -->
          <button
            @click="previousTestimonial"
            class="flex items-center gap-2 px-6 py-3 bg-white/10 hover:bg-white/20 text-white rounded-full transition-all duration-300 backdrop-blur-lg border border-white/20 hover:border-white/40"
            :disabled="isAnimating"
          >
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
            <span class="hidden sm:inline">Previous</span>
          </button>

          <!-- Dots Indicator -->
          <div class="flex gap-3">
            <button
              v-for="(testimonial, index) in testimonials"
              :key="testimonial.id"
              @click="goToTestimonial(index)"
              class="w-3 h-3 rounded-full transition-all duration-300"
              :class="index === currentIndex ? 'bg-[#facb24] scale-125' : 'bg-white/40 hover:bg-white/60'"
              :disabled="isAnimating"
            ></button>
          </div>

          <!-- Next Button -->
          <button
            @click="nextTestimonial"
            class="flex items-center gap-2 px-6 py-3 bg-white/10 hover:bg-white/20 text-white rounded-full transition-all duration-300 backdrop-blur-lg border border-white/20 hover:border-white/40"
            :disabled="isAnimating"
          >
            <span class="hidden sm:inline">Next</span>
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
          </button>
        </div>

        <!-- Auto-play Progress Bar -->
        <div v-if="autoPlay" class="mt-6">
          <div class="w-full bg-white/20 rounded-full h-1 overflow-hidden">
            <div 
              class="h-full bg-[#facb24] transition-all duration-100 ease-linear"
              :style="{ width: `${progressPercentage}%` }"
            ></div>
          </div>
        </div>
      </div>

      <!-- Video Testimonials Section -->
      <div v-if="videoTestimonials.length" class="mt-16">
        <h3 class="text-2xl font-bold text-white text-center mb-8">Video Testimonials</h3>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
          <div 
            v-for="video in videoTestimonials" 
            :key="video.id"
            class="bg-white/10 rounded-xl overflow-hidden border border-white/20 hover:border-white/40 transition-all duration-300 cursor-pointer group"
            @click="playVideo(video)"
          >
            <div class="relative">
              <img 
                :src="video.thumbnail" 
                :alt="`${video.clientName} video testimonial`"
                class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-300"
              />
              <div class="absolute inset-0 bg-black/40 flex items-center justify-center group-hover:bg-black/30 transition-colors duration-300">
                <div class="w-16 h-16 bg-[#facb24] rounded-full flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                  <svg class="w-8 h-8 text-[#362869] ml-1" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M8 5v14l11-7z"/>
                  </svg>
                </div>
              </div>
            </div>
            <div class="p-4">
              <h4 class="font-bold text-white mb-1">{{ video.clientName }}</h4>
              <p class="text-[#facb24] text-sm mb-2">{{ video.company }}</p>
              <p class="text-white/70 text-sm">{{ video.preview }}</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Call to Action -->
      <div class="text-center mt-16">
        <p class="text-xl text-white/80 mb-6">Ready to join our success stories?</p>
        <button
          @click="$emit('cta-click', 'testimonials')"
          class="px-8 py-4 bg-[#facb24] text-[#362869] rounded-full font-bold text-lg hover:bg-yellow-400 transition-all duration-300 hover:scale-105 shadow-lg hover:shadow-xl"
        >
          Start Your Success Story
        </button>
      </div>
    </div>

    <!-- Video Modal -->
    <div 
      v-if="selectedVideo"
      class="fixed inset-0 bg-black/80 flex items-center justify-center z-50 p-4"
      @click="closeVideo"
    >
      <div class="bg-white rounded-xl overflow-hidden max-w-4xl w-full" @click.stop>
        <div class="relative">
          <video 
            ref="videoPlayer"
            :src="selectedVideo.videoUrl"
            controls
            autoplay
            class="w-full h-auto"
          ></video>
          <button
            @click="closeVideo"
            class="absolute top-4 right-4 w-10 h-10 bg-black/50 text-white rounded-full flex items-center justify-center hover:bg-black/70 transition-colors"
          >
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
        <div class="p-6">
          <h3 class="text-xl font-bold text-[#362869] mb-2">{{ selectedVideo.clientName }}</h3>
          <p class="text-[#5f4b8b] mb-4">{{ selectedVideo.company }}</p>
          <p class="text-gray-600">{{ selectedVideo.fullTestimonial }}</p>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
import { ref, computed, onMounted, onUnmounted } from 'vue'

// Props
const props = defineProps({
  autoPlay: {
    type: Boolean,
    default: true
  },
  autoPlayInterval: {
    type: Number,
    default: 8000
  }
})

// Emits
const emit = defineEmits(['cta-click'])

// State
const currentIndex = ref(0)
const isAnimating = ref(false)
const autoPlayTimer = ref(null)
const progressTimer = ref(null)
const progressPercentage = ref(0)
const selectedVideo = ref(null)
const videoPlayer = ref(null)

// Sample testimonials data
const testimonials = ref([
  {
    id: 1,
    name: "Marcus Rodriguez",
    position: "CEO & Founder",
    company: "Royal Vegas Casino",
    companyLogo: "/assets/clients/royal-vegas-logo.svg",
    photo: "/assets/testimonials/marcus-rodriguez.jpg",
    quote: "Cesium Marketing transformed our player acquisition strategy completely. Within 6 months, we saw a 340% increase in high-value players and our retention rates improved dramatically. Their data-driven approach and deep understanding of the casino industry is unmatched.",
    metrics: [
      { label: "Player Growth", value: "+340%" },
      { label: "Revenue Increase", value: "+280%" },
      { label: "Retention Rate", value: "+65%" }
    ],
    services: ["Player Acquisition", "CRM Strategy", "Brand Development"],
    imageError: false
  },
  {
    id: 2,
    name: "Sarah Chen",
    position: "Marketing Director",
    company: "Diamond Spins",
    companyLogo: "/assets/clients/diamond-spins-logo.svg",
    photo: "/assets/testimonials/sarah-chen.jpg",
    quote: "The team at Cesium Marketing doesn't just deliver campaigns, they deliver results. Our cost per acquisition dropped by 45% while our player lifetime value increased by 120%. They truly understand what drives success in the competitive casino market.",
    metrics: [
      { label: "CPA Reduction", value: "-45%" },
      { label: "LTV Increase", value: "+120%" },
      { label: "ROAS", value: "4.8x" }
    ],
    services: ["Paid Media", "SEO Strategy", "Conversion Optimization"],
    imageError: false
  },
  {
    id: 3,
    name: "James Mitchell",
    position: "Operations Manager",
    company: "Lucky Strike Gaming",
    companyLogo: "/assets/clients/lucky-strike-logo.svg",
    photo: "/assets/testimonials/james-mitchell.jpg",
    quote: "Working with Cesium Marketing was a game-changer for our business. Their compliance expertise and innovative marketing strategies helped us expand into three new markets while maintaining full regulatory compliance. Exceptional results and professional service.",
    metrics: [
      { label: "Market Expansion", value: "3 States" },
      { label: "Compliance Score", value: "100%" },
      { label: "Revenue Growth", value: "+195%" }
    ],
    services: ["Compliance Marketing", "Market Expansion", "Regulatory Strategy"],
    imageError: false
  }
])

// Video testimonials data
const videoTestimonials = ref([
  {
    id: 1,
    clientName: "Alexandra Thompson",
    company: "Platinum Casino Group",
    thumbnail: "/assets/video-testimonials/alexandra-thumbnail.jpg",
    videoUrl: "/assets/video-testimonials/alexandra-testimonial.mp4",
    preview: "How Cesium Marketing helped us achieve 400% growth in 12 months",
    fullTestimonial: "Cesium Marketing's strategic approach and deep industry knowledge helped us achieve unprecedented growth while maintaining the highest standards of compliance and customer satisfaction."
  },
  {
    id: 2,
    clientName: "Robert Kim",
    company: "Golden Gate Gaming",
    thumbnail: "/assets/video-testimonials/robert-thumbnail.jpg",
    videoUrl: "/assets/video-testimonials/robert-testimonial.mp4",
    preview: "The partnership that transformed our digital presence",
    fullTestimonial: "The team's expertise in both traditional and digital marketing channels created a comprehensive strategy that delivered exceptional results across all our properties."
  }
])

// Computed
const currentTestimonial = computed(() => testimonials.value[currentIndex.value])

// Methods
const handleImageError = (testimonial) => {
  testimonial.imageError = true
}

const getInitials = (name) => {
  return name.split(' ').map(word => word.charAt(0)).join('').substring(0, 2)
}

const nextTestimonial = () => {
  if (isAnimating.value) return
  
  isAnimating.value = true
  currentIndex.value = (currentIndex.value + 1) % testimonials.value.length
  resetAutoPlay()
  
  setTimeout(() => {
    isAnimating.value = false
  }, 500)
}

const previousTestimonial = () => {
  if (isAnimating.value) return
  
  isAnimating.value = true
  currentIndex.value = currentIndex.value === 0 ? testimonials.value.length - 1 : currentIndex.value - 1
  resetAutoPlay()
  
  setTimeout(() => {
    isAnimating.value = false
  }, 500)
}

const goToTestimonial = (index) => {
  if (isAnimating.value || index === currentIndex.value) return
  
  isAnimating.value = true
  currentIndex.value = index
  resetAutoPlay()
  
  setTimeout(() => {
    isAnimating.value = false
  }, 500)
}

const startAutoPlay = () => {
  if (!props.autoPlay) return
  
  autoPlayTimer.value = setInterval(() => {
    nextTestimonial()
  }, props.autoPlayInterval)
  
  startProgressTimer()
}

const stopAutoPlay = () => {
  if (autoPlayTimer.value) {
    clearInterval(autoPlayTimer.value)
    autoPlayTimer.value = null
  }
  
  if (progressTimer.value) {
    clearInterval(progressTimer.value)
    progressTimer.value = null
  }
  
  progressPercentage.value = 0
}

const resetAutoPlay = () => {
  stopAutoPlay()
  startAutoPlay()
}

const startProgressTimer = () => {
  progressPercentage.value = 0
  const interval = 100 // Update every 100ms
  const increment = (interval / props.autoPlayInterval) * 100
  
  progressTimer.value = setInterval(() => {
    progressPercentage.value += increment
    if (progressPercentage.value >= 100) {
      progressPercentage.value = 100
    }
  }, interval)
}

const playVideo = (video) => {
  selectedVideo.value = video
  document.body.style.overflow = 'hidden'
}

const closeVideo = () => {
  selectedVideo.value = null
  document.body.style.overflow = 'auto'
  
  if (videoPlayer.value) {
    videoPlayer.value.pause()
  }
}

// Lifecycle
onMounted(() => {
  startAutoPlay()
})

onUnmounted(() => {
  stopAutoPlay()
  document.body.style.overflow = 'auto'
})

// Expose methods for parent component
defineExpose({
  nextTestimonial,
  previousTestimonial,
  goToTestimonial,
  stopAutoPlay,
  startAutoPlay
})
</script>

<style scoped>
/* Smooth transitions for testimonial changes */
.testimonial-enter-active,
.testimonial-leave-active {
  transition: all 0.5s ease-in-out;
}

.testimonial-enter-from {
  opacity: 0;
  transform: translateX(50px);
}

.testimonial-leave-to {
  opacity: 0;
  transform: translateX(-50px);
}

/* Custom scrollbar for video modal */
.video-modal::-webkit-scrollbar {
  width: 8px;
}

.video-modal::-webkit-scrollbar-track {
  background: #f1f1f1;
  border-radius: 4px;
}

.video-modal::-webkit-scrollbar-thumb {
  background: #362869;
  border-radius: 4px;
}

.video-modal::-webkit-scrollbar-thumb:hover {
  background: #5f4b8b;
}

/* Accessibility improvements */
@media (prefers-reduced-motion: reduce) {
  .transition-all,
  .transition-transform,
  .transition-colors {
    transition: none;
  }
  
  .group-hover\:scale-105,
  .hover\:scale-105,
  .group-hover\:scale-110 {
    transform: none;
  }
}

/* Focus styles for better accessibility */
button:focus-visible {
  outline: 2px solid #facb24;
  outline-offset: 2px;
}

/* Enhanced hover effects */
.backdrop-blur-lg {
  backdrop-filter: blur(16px);
}

/* Custom animations */
@keyframes float {
  0%, 100% {
    transform: translateY(0px);
  }
  50% {
    transform: translateY(-10px);
  }
}

.float-animation {
  animation: float 6s ease-in-out infinite;
}
</style>

