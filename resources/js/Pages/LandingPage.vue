<template>
  <div class="min-h-screen bg-gradient-to-br from-purple-900 via-indigo-900 to-blue-900 flex flex-col">
    <!-- Header -->
    <header class="w-full max-w-6xl mx-auto py-8 flex justify-between items-center">
      <div class="flex items-center space-x-3">
        <!-- Example casino logo from online source -->
        <img src="https://cdn-icons-png.flaticon.com/512/1047/1047711.png" alt="Cesium Casino Logo" class="h-12 w-12" />
        <span class="text-3xl font-extrabold text-yellow-400 tracking-tight font-serif">Cesium</span>
      </div>
      <nav class="space-x-8 text-lg font-medium">
        <a href="#features" class="text-yellow-300 hover:underline">Features</a>
        <a href="#about" class="text-yellow-300 hover:underline">About</a>
        <a href="#contact" class="text-yellow-300 hover:underline">Contact</a>
      </nav>
    </header>

    <!-- Hero Section -->
    <section class="flex-1 flex flex-col md:flex-row items-center justify-center max-w-6xl mx-auto px-4 py-12 gap-12">
      <div class="flex-1" data-aos="fade-right">
        <h1 class="text-5xl md:text-6xl font-extrabold text-yellow-300 mb-6 leading-tight font-serif drop-shadow-lg">
          Launch & Grow Your <span class="text-white">Casino Business</span> with Cesium
        </h1>
        <p class="text-xl text-gray-200 mb-8 max-w-xl">
          The all-in-one marketing and launchpad solution for online casinos, betting, and gambling platforms. From branding to player acquisition, we help you win big!
        </p>
        <a href="#contact" class="inline-block px-10 py-4 bg-yellow-400 text-purple-900 rounded-full shadow-lg text-lg font-bold hover:bg-yellow-300 transition">
          Get Started
        </a>
      </div>
      <div class="flex-1 flex justify-center" data-aos="fade-left">
        <!-- Casino illustration from undraw.co -->
        <img src="https://undraw.co/api/illustrations/1b1e1e1e-1b1e-1b1e-1b1e-1b1e1b1e1b1e" alt="Casino Illustration" class="w-80 h-80 object-contain rounded-xl shadow-2xl bg-white/10" />
      </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="w-full max-w-6xl mx-auto py-20 grid md:grid-cols-3 gap-10">
      <div class="bg-white/90 rounded-2xl shadow-lg p-8 text-center hover:shadow-2xl transition" data-aos="zoom-in">
        <img src="https://cdn-icons-png.flaticon.com/512/1047/1047711.png" class="mx-auto mb-4 w-14 h-14" alt="Branding" />
        <h3 class="text-2xl font-bold mb-2 text-purple-900">Casino Branding</h3>
        <p class="text-gray-700">Custom logos, themes, and brand kits tailored for the gambling industry.</p>
      </div>
      <div class="bg-white/90 rounded-2xl shadow-lg p-8 text-center hover:shadow-2xl transition" data-aos="zoom-in" data-aos-delay="100">
        <img src="https://cdn-icons-png.flaticon.com/512/1047/1047735.png" class="mx-auto mb-4 w-14 h-14" alt="Player Acquisition" />
        <h3 class="text-2xl font-bold mb-2 text-purple-900">Player Acquisition</h3>
        <p class="text-gray-700">SEO, influencer marketing, and affiliate programs to attract high-value players.</p>
      </div>
      <div class="bg-white/90 rounded-2xl shadow-lg p-8 text-center hover:shadow-2xl transition" data-aos="zoom-in" data-aos-delay="200">
        <img src="https://cdn-icons-png.flaticon.com/512/1047/1047736.png" class="mx-auto mb-4 w-14 h-14" alt="Launchpad" />
        <h3 class="text-2xl font-bold mb-2 text-purple-900">Casino Launchpad</h3>
        <p class="text-gray-700">End-to-end support for launching your online casino, from licensing to go-live.</p>
      </div>
    </section>

    <!-- About Section -->
    <section id="about" class="w-full max-w-6xl mx-auto py-16 flex flex-col md:flex-row items-center gap-12">
      <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=400&q=80" alt="Team" class="rounded-lg shadow-lg w-full md:w-1/2" />
      <div>
        <h2 class="text-3xl font-bold mb-4 text-yellow-300 font-serif">About Cesium</h2>
        <p class="text-gray-200 mb-4">
          Cesium is a team of casino marketing experts, designers, and strategists. We've helped launch and grow dozens of successful online gambling brands worldwide. Our mission: make your casino the next big winner!
        </p>
        <a href="#contact" class="text-yellow-300 font-semibold hover:underline">Learn more about our story &rarr;</a>
      </div>
    </section>

    <!-- Stats Section -->
    <section class="w-full max-w-6xl mx-auto py-12 flex flex-wrap justify-center gap-12" data-aos="fade-up">
      <div class="text-center">
        <div class="text-4xl font-bold text-yellow-300">50+</div>
        <div class="text-gray-200">Casinos Launched</div>
      </div>
      <div class="text-center">
        <div class="text-4xl font-bold text-yellow-300">100K+</div>
        <div class="text-gray-200">Players Acquired</div>
      </div>
      <div class="text-center">
        <div class="text-4xl font-bold text-yellow-300">24/7</div>
        <div class="text-gray-200">Support</div>
      </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="w-full max-w-4xl mx-auto py-16 text-center" data-aos="zoom-in">
      <h2 class="text-4xl font-bold mb-4 text-yellow-300 font-serif">Ready to launch your casino?</h2>
      <p class="text-gray-200 mb-8">Contact us for a free consultation and let's build your winning brand together.</p>
      <form class="max-w-xl mx-auto grid gap-4">
        <input type="text" placeholder="Your Name" class="p-3 rounded border border-gray-300 focus:outline-none focus:ring-2 focus:ring-yellow-200" />
        <input type="email" placeholder="Your Email" class="p-3 rounded border border-gray-300 focus:outline-none focus:ring-2 focus:ring-yellow-200" />
        <textarea placeholder="Your Message" class="p-3 rounded border border-gray-300 focus:outline-none focus:ring-2 focus:ring-yellow-200"></textarea>
        <button type="submit" class="px-8 py-3 bg-yellow-400 text-purple-900 rounded-full font-semibold hover:bg-yellow-300 transition">Send Message</button>
      </form>
    </section>

    <!-- Footer -->
    <footer class="w-full max-w-6xl mx-auto py-8 text-center text-gray-400 flex flex-col items-center border-t mt-12">
      <img src="https://cdn-icons-png.flaticon.com/512/1047/1047711.png" alt="Cesium Logo" class="h-8 w-8 mb-2" />
      <div class="mb-2">&copy; 2024 Cesium. All rights reserved.</div>
      <div class="space-x-4">
        <a href="#" class="hover:underline">Privacy Policy</a>
        <a href="#" class="hover:underline">Terms of Use</a>
      </div>
    </footer>

    <!-- 3D Lottie Animation -->
    <div ref="slotContainer" class="w-64 h-64 mx-auto my-8"></div>
    <!-- Mini Slot Machine Game -->
    <MiniSlotMachine />

    <model-viewer
      src="https://modelviewer.dev/shared-assets/models/Astronaut.glb"
      alt="A 3D model of a casino chip"
      auto-rotate
      camera-controls
      style="width: 300px; height: 300px; background: transparent;">
    </model-viewer>

    <div class="flex flex-col items-center my-12">
      <h2 class="text-3xl font-bold text-yellow-300 mb-4 font-serif">Try Your Luck!</h2>
      <div class="bg-white/90 rounded-2xl shadow-lg p-8 flex flex-col items-center">
        <div class="flex space-x-4 text-5xl font-mono mb-4">
          <span :class="getColor(slots[0])">{{ slots[0] }}</span>
          <span :class="getColor(slots[1])">{{ slots[1] }}</span>
          <span :class="getColor(slots[2])">{{ slots[2] }}</span>
        </div>
        <button
          @click="spin"
          class="px-8 py-3 bg-yellow-400 text-purple-900 rounded-full font-semibold hover:bg-yellow-300 transition mb-2"
          :disabled="spinning"
        >
          {{ spinning ? 'Spinning...' : 'Spin' }}
        </button>
        <div v-if="result" class="mt-2 text-lg font-bold" :class="result === '🎉 Jackpot! 🎉' ? 'text-green-600' : 'text-purple-900'">
          {{ result }}
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import { onMounted, ref } from 'vue'
import AOS from 'aos'
import 'aos/dist/aos.css'
import lottie from 'lottie-web'

const slotContainer = ref(null)

onMounted(() => {
  AOS.init()
  lottie.loadAnimation({
    container: slotContainer.value,
    renderer: 'svg',
    loop: true,
    autoplay: true,
    path: 'https://lottie.host/1b1e1e1e-1b1e-1b1e-1b1e-1b1e1b1e1b1e/slot-machine.json' // Replace with actual Lottie URL
  })
})

const symbols = ['🍒', '🍋', '🔔', '7️⃣', '🍀', '💎']
const slots = ref(['🍒', '🍋', '🔔'])
const spinning = ref(false)
const result = ref('')

function getColor(symbol) {
  if (symbol === '7️⃣') return 'text-red-600'
  if (symbol === '💎') return 'text-blue-600'
  return 'text-purple-900'
}

function spin() {
  spinning.value = true
  result.value = ''
  let spins = 0
  const interval = setInterval(() => {
    slots.value = [
      symbols[Math.floor(Math.random() * symbols.length)],
      symbols[Math.floor(Math.random() * symbols.length)],
      symbols[Math.floor(Math.random() * symbols.length)],
    ]
    spins++
    if (spins > 15) {
      clearInterval(interval)
      spinning.value = false
      if (slots.value[0] === slots.value[1] && slots.value[1] === slots.value[2]) {
        result.value = '🎉 Jackpot! 🎉'
      } else {
        result.value = 'Try again!'
      }
    }
  }, 100)
}
</script>

<style scoped>
/* Add custom styles or use Tailwind classes */
</style>
