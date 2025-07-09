<template>
  <div class="min-h-screen bg-[#f2f2f2] text-[#362869]">
    <!-- Loading Overlay -->
    <div v-if="isLoading" class="fixed inset-0 bg-white/90 flex items-center justify-center z-50">
      <div class="animate-spin rounded-full h-32 w-32 border-b-2 border-[#362869]"></div>
    </div>

    <!-- Hero Section -->
    <section class="max-w-7xl mx-auto flex flex-col md:flex-row items-center justify-between py-20 px-6" v-scroll-reveal>
      <div class="md:w-1/2 space-y-6">
        <img 
          src="/assets/logo-main.svg" 
          alt="Cesium Marketing Logo" 
          class="h-12 mb-4"
          @error="handleImageError"
          loading="lazy"
        />
        <h1 class="text-5xl font-extrabold leading-tight text-[#362869] animate-fade-in-up">
          Launch & Scale Your Online Casino
        </h1>
        <p class="text-lg text-[#5f4b8b] typing-text">
          We help casino operators grow faster with data-driven acquisition, retention & branding strategies.
        </p>
        <button 
          @click="scrollToContact"
          class="inline-block px-8 py-3 bg-[#facb24] text-[#362869] rounded-full font-bold shadow hover:bg-yellow-400 transition hover:scale-105 focus:outline-none focus:ring-2 focus:ring-[#facb24] focus:ring-offset-2"
          aria-label="Request Strategy Call"
        >
          Request Strategy Call
        </button>
      </div>
      <div class="md:w-1/2 flex justify-center">
        <div 
          ref="lottieMan" 
          class="w-96 h-96"
          :class="{ 'opacity-50': lottieError }"
          role="img"
          aria-label="Animated slot machine illustration"
        ></div>
        <div v-if="lottieError" class="w-96 h-96 flex items-center justify-center bg-gray-100 rounded-lg">
          <span class="text-gray-500">🎰 Animation unavailable</span>
        </div>
      </div>
    </section>

    <!-- Services Section -->
    <section class="max-w-7xl mx-auto py-24 px-6" v-scroll-reveal>
      <h2 class="text-3xl font-bold text-center mb-12">What We Offer</h2>
      <div class="grid md:grid-cols-3 gap-10">
        <FeatureCard 
          v-for="service in services" 
          :key="service.id"
          :icon="service.icon" 
          :title="service.title" 
          :desc="service.desc" 
        />
      </div>
    </section>

    <!-- KPI Section -->
    <section class="bg-[#362869] text-[#f2f2f2] py-20 px-6" v-scroll-reveal>
      <div class="max-w-5xl mx-auto flex justify-around text-center flex-wrap gap-8">
        <KpiCard 
          v-for="kpi in kpis" 
          :key="kpi.id"
          :icon="kpi.icon" 
          :value="kpi.value" 
          :label="kpi.label" 
        />
      </div>
    </section>

    <!-- Case Studies -->
    <section class="max-w-6xl mx-auto py-24 px-6" v-scroll-reveal>
      <h2 class="text-3xl font-bold text-center mb-12">Casino Brands We've Powered</h2>
      <div class="flex justify-center gap-12 flex-wrap">
        <img 
          v-for="partner in partners" 
          :key="partner.id"
          :src="partner.logo" 
          :alt="partner.name"
          class="h-16 opacity-70 hover:opacity-100 transition-opacity"
          @error="handleImageError"
          loading="lazy"
        />
      </div>
    </section>

    <!-- Mini Game -->
    <section class="py-24 bg-gradient-to-br from-[#facb24] to-[#f2f2f2]" v-scroll-reveal>
      <MiniSlotMachine />
    </section>

    <!-- Team -->
    <section class="max-w-6xl mx-auto py-24 px-6" v-scroll-reveal>
      <h2 class="text-3xl font-bold text-center mb-12">Meet the Pros</h2>
      <div class="grid md:grid-cols-3 gap-8 text-center">
        <TeamCard 
          v-for="member in team" 
          :key="member.id"
          :name="member.name" 
          :role="member.role" 
          :photo="member.photo" 
        />
      </div>
    </section>

    <!-- Insights / Blog -->
    <section class="max-w-6xl mx-auto py-24 px-6" v-scroll-reveal>
      <h2 class="text-3xl font-bold text-center mb-12">Latest Insights</h2>
      <div class="grid md:grid-cols-3 gap-10">
        <BlogCard 
          v-for="post in blogPosts" 
          :key="post.id"
          :title="post.title" 
          :desc="post.desc" 
        />
      </div>
    </section>

    <!-- FAQ -->
    <section class="bg-[#362869] text-[#f2f2f2] py-20 px-6" v-scroll-reveal>
      <div class="max-w-4xl mx-auto">
        <h2 class="text-3xl font-bold mb-10 text-center">FAQs</h2>
        <div class="space-y-6">
          <div 
            v-for="faq in faqs" 
            :key="faq.id"
            class="border-b border-gray-600 pb-4"
          >
            <button
              @click="toggleFaq(faq.id)"
              class="w-full text-left flex justify-between items-center py-2 focus:outline-none focus:ring-2 focus:ring-[#facb24] rounded"
              :aria-expanded="faq.isOpen"
            >
              <strong class="text-lg">{{ faq.question }}</strong>
              <span class="text-2xl transition-transform" :class="{ 'rotate-180': faq.isOpen }">
                ▼
              </span>
            </button>
            <div 
              v-show="faq.isOpen"
              class="mt-2 text-gray-300 transition-all duration-300"
            >
              {{ faq.answer }}
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Contact -->
    <section id="contact" class="max-w-4xl mx-auto py-24 px-6 text-center" v-scroll-reveal>
      <h2 class="text-3xl font-bold mb-4">Let's Build Your Winning Brand</h2>
      <p class="mb-6 text-[#5f4b8b]">Contact us to schedule your free strategy call.</p>
      
      <form @submit.prevent="submitForm" class="grid gap-4 max-w-md mx-auto">
        <div class="relative">
          <input 
            v-model="form.name"
            type="text" 
            placeholder="Your Name" 
            class="w-full p-3 rounded border focus:outline-none focus:ring-2 focus:ring-[#362869]"
            :class="{ 'border-red-500': errors.name }"
            required
            aria-label="Your Name"
          />
          <span v-if="errors.name" class="text-red-500 text-sm absolute -bottom-5 left-0">{{ errors.name }}</span>
        </div>
        
        <div class="relative">
          <input 
            v-model="form.email"
            type="email" 
            placeholder="Email" 
            class="w-full p-3 rounded border focus:outline-none focus:ring-2 focus:ring-[#362869]"
            :class="{ 'border-red-500': errors.email }"
            required
            aria-label="Email Address"
          />
          <span v-if="errors.email" class="text-red-500 text-sm absolute -bottom-5 left-0">{{ errors.email }}</span>
        </div>
        
        <div class="relative">
          <textarea 
            v-model="form.message"
            placeholder="Message" 
            class="w-full p-3 rounded border focus:outline-none focus:ring-2 focus:ring-[#362869] min-h-[100px]"
            :class="{ 'border-red-500': errors.message }"
            required
            aria-label="Your Message"
          ></textarea>
          <span v-if="errors.message" class="text-red-500 text-sm absolute -bottom-5 left-0">{{ errors.message }}</span>
        </div>
        
        <button 
          type="submit"
          class="bg-[#facb24] text-[#362869] px-6 py-3 rounded-full font-bold hover:scale-105 transition focus:outline-none focus:ring-2 focus:ring-[#facb24] focus:ring-offset-2 disabled:opacity-50"
          :disabled="isSubmitting"
        >
          {{ isSubmitting ? 'Sending...' : 'Send Message' }}
        </button>
        
        <div v-if="submitMessage" class="mt-4 p-3 rounded" :class="submitSuccess ? 'bg-green-100 text-green-700' : 'bg-red-100 text-red-700'">
          {{ submitMessage }}
        </div>
      </form>
    </section>

    <!-- Footer -->
    <footer class="bg-[#f2f2f2] text-center py-12">
      <img 
        src="/assets/logo-main.svg" 
        class="h-8 mx-auto mb-4" 
        alt="Cesium Marketing Logo"
        @error="handleImageError"
        loading="lazy"
      />
      <div class="text-[#5f4b8b]">© 2025 Cesium Marketing. All rights reserved.</div>
      <div class="mt-2 text-sm text-gray-500">
        <a href="#" class="hover:text-[#362869] mx-2">Privacy Policy</a>
        <a href="#" class="hover:text-[#362869] mx-2">Terms of Service</a>
      </div>
    </footer>
  </div>
</template>

<script setup>
import { onMounted, ref, nextTick, reactive } from 'vue'
import lottie from 'lottie-web'
import ScrollReveal from 'scrollreveal'

import MiniSlotMachine from '@/Components/MiniSlotMachine.vue'
import FeatureCard from '@/Components/FeatureCard.vue'
import KpiCard from '@/Components/KpiCard.vue'
import TeamCard from '@/Components/TeamCard.vue'
import BlogCard from '@/Components/BlogCard.vue'

// Constants
const SITE_TITLE = 'Cesium – Online Casino Marketing Experts'

// Reactive state
const lottieMan = ref(null)
const isLoading = ref(true)
const lottieError = ref(false)
const isSubmitting = ref(false)
const submitMessage = ref('')
const submitSuccess = ref(false)

// Form data and validation
const form = reactive({
  name: '',
  email: '',
  message: ''
})

const errors = reactive({
  name: '',
  email: '',
  message: ''
})

// Data arrays
const services = ref([
  { id: 1, icon: "/assets/rocket.svg", title: "Casino Launchpad", desc: "End-to-end guidance for new operators — from licensing to go-live." },
  { id: 2, icon: "/assets/seo.svg", title: "SEO & Content Strategy", desc: "Rank higher, get discovered faster with industry-driven SEO." },
  { id: 3, icon: "/assets/programmatic.svg", title: "Media Buying", desc: "Programmatic, social & influencer campaigns tailored to your market." },
  { id: 4, icon: "/assets/crm.svg", title: "CRM & Retention", desc: "Lifecycle email, loyalty, reactivation & more to keep players loyal." },
  { id: 5, icon: "/assets/compliance.svg", title: "Compliance Support", desc: "We ensure marketing adheres to legal and responsible gaming standards." },
  { id: 6, icon: "/assets/branding.svg", title: "Brand Identity", desc: "Custom logos, visual kits and tone-of-voice guides that convert." }
])

const kpis = ref([
  { id: 1, icon: "/assets/kpi-player.svg", value: "100000", label: "Players Acquired" },
  { id: 2, icon: "/assets/kpi-spend.svg", value: "10000000", label: "Ad Spend Managed" },
  { id: 3, icon: "/assets/kpi-launches.svg", value: "50", label: "Casinos Launched" }
])

const partners = ref([
  { id: 1, logo: "/assets/placeholder.svg", name: "MGM" },
  { id: 2, logo: "/assets/partner-palms.svg", name: "Palms" },
  { id: 3, logo: "/assets/partner-cocopah.svg", name: "Cocopah" }
])

const team = ref([
  { id: 1, name: "Ray Hammoud", role: "Head of Growth", photo: "/assets/team_member1.jpg" },
  { id: 2, name: "Lisa Vega", role: "Creative Director", photo: "/assets/team_member2.jpg" },
  { id: 3, name: "Jack Brill", role: "Compliance Lead", photo: "/assets/team_member3.jpg" }
])

const blogPosts = ref([
  { id: 1, title: "Top Affiliate Trends in 2025", desc: "Leverage partnerships and CPA models that work." },
  { id: 2, title: "Why CRM is Your Secret Weapon", desc: "Retain 3x more players with smart segmentation." },
  { id: 3, title: "How to Launch in <30 Days", desc: "Speed and compliance in the sweepstakes world." }
])

const faqs = ref([
  { 
    id: 1, 
    question: "Do you help with sweepstakes casino licensing?", 
    answer: "Yes. We guide you through licensing & legal structures in all states.",
    isOpen: false
  },
  { 
    id: 2, 
    question: "What's the minimum budget?", 
    answer: "We work with startups and established brands alike — starting at $5K/mo.",
    isOpen: false
  },
  { 
    id: 3, 
    question: "What marketing channels do you specialize in?", 
    answer: "Programmatic, search, social, affiliate, email, influencer.",
    isOpen: false
  }
])

// Methods
const handleImageError = (event) => {
  console.warn('Image failed to load:', event.target.src)
  event.target.style.display = 'none'
}

const scrollToContact = () => {
  document.getElementById('contact')?.scrollIntoView({ behavior: 'smooth' })
}

const toggleFaq = (id) => {
  const faq = faqs.value.find(f => f.id === id)
  if (faq) {
    faq.isOpen = !faq.isOpen
  }
}

const validateForm = () => {
  errors.name = form.name.trim() ? '' : 'Name is required'
  errors.email = /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(form.email) ? '' : 'Valid email is required'
  errors.message = form.message.trim() ? '' : 'Message is required'
  
  return !errors.name && !errors.email && !errors.message
}

const submitForm = async () => {
  if (!validateForm()) return
  
  isSubmitting.value = true
  submitMessage.value = ''
  
  try {
    // Simulate API call
    await new Promise(resolve => setTimeout(resolve, 1000))
    
    // Reset form on success
    Object.keys(form).forEach(key => form[key] = '')
    submitMessage.value = 'Thank you! We\'ll be in touch soon.'
    submitSuccess.value = true
    
    setTimeout(() => {
      submitMessage.value = ''
    }, 5000)
    
  } catch (error) {
    submitMessage.value = 'Something went wrong. Please try again.'
    submitSuccess.value = false
  } finally {
    isSubmitting.value = false
  }
}

// Lifecycle
onMounted(async () => {
  try {
    document.title = SITE_TITLE
    await nextTick()

    // Initialize Lottie animation
    if (lottieMan.value) {
      try {
        lottie.loadAnimation({
          container: lottieMan.value,
          renderer: 'svg',
          loop: true,
          autoplay: true,
          path: '/assets/slot-machine-3d.json',
        })
      } catch (error) {
        console.error('Lottie animation failed:', error)
        lottieError.value = true
      }
    }

    // Initialize ScrollReveal
    ScrollReveal().reveal('[v-scroll-reveal]', {
      origin: 'bottom',
      distance: '30px',
      duration: 700,
      delay: 100,
      easing: 'ease-in-out',
      reset: false,
      interval: 100,
    })

    // Hide loading overlay
    setTimeout(() => {
      isLoading.value = false
    }, 500)

  } catch (error) {
    console.error('Mounted hook error:', error)
    isLoading.value = false
    lottieError.value = true
  }
})
</script>

<style scoped>
input, textarea {
  background: #fff;
  border: 1px solid #ccc;
}

input:focus, textarea:focus {
  border-color: #362869;
}

@keyframes fade-in-up {
  from {
    opacity: 0;
    transform: translateY(20px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

.animate-fade-in-up {
  animation: fade-in-up 0.6s ease-out forwards;
}

.typing-text {
  white-space: nowrap;
  overflow: hidden;
  border-right: 2px solid #5f4b8b;
  animation: typing 3s steps(60, end), blink 0.75s step-end infinite;
}

@keyframes typing {
  from { width: 0 }
  to { width: 100% }
}

@keyframes blink {
  50% { border-color: transparent }
}

@media (max-width: 768px) {
  .typing-text {
    white-space: normal;
    border-right: none;
    animation: none;
  }
}
</style>

