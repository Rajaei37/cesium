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
    <section class="flex-1 flex flex-col md:flex-row items-center justify-center max-w-6xl mx-auto px-4 py-12 gap-12 relative">
      <div class="absolute inset-0 bg-gradient-to-br from-purple-900/80 via-indigo-900/60 to-blue-900/80 pointer-events-none z-0"></div>
      <div class="flex-1 z-10" data-aos="fade-right">
        <h1 class="text-5xl md:text-6xl font-extrabold text-yellow-300 mb-6 leading-tight font-serif drop-shadow-lg animate-pulse">
          Launch & Grow Your <span class="text-white">Casino Business</span> with Cesium
        </h1>
        <p class="text-xl text-gray-200 mb-8 max-w-xl">
          The all-in-one marketing and launchpad solution for online casinos, betting, and gambling platforms. From branding to player acquisition, we help you win big!
        </p>
        <a href="#slot-machine" class="inline-block px-10 py-4 bg-yellow-400 text-purple-900 rounded-full shadow-lg text-lg font-bold hover:bg-yellow-300 transition animate-bounce">
          Get Started
        </a>
      </div>
      <div class="flex-1 flex justify-center z-10" data-aos="fade-left">
        <!-- Lottie Animation: Man working on computer -->
        <div ref="lottieMan" class="w-80 h-80"></div>
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

    <!-- Slot Machine Section -->
    <section id="slot-machine" class="w-full flex flex-col items-center justify-center py-16" style="background: radial-gradient(circle at 50% 30%, #fff3 0%, #0000 70%);">
      <h2 class="text-4xl font-extrabold text-yellow-300 mb-6 font-serif animate-pulse">Try Your Luck for a Discount!</h2>
      <div class="relative flex flex-col items-center">
        <!-- Confetti animation (Lottie) -->
        <div v-if="showConfetti" ref="confettiContainer" class="absolute inset-0 pointer-events-none z-10"></div>
        <div :class="['bg-white/90 rounded-2xl shadow-2xl p-8 flex flex-col items-center border-4',
          spinning ? 'border-yellow-400 animate-shake' : 'border-yellow-300',
          jackpot ? 'ring-4 ring-green-400 ring-offset-2' : '']"
          style="width: 340px; min-height: 220px; transition: box-shadow 0.3s;">
          <div class="flex space-x-4 text-6xl font-mono mb-4 select-none">
            <span v-for="(symbol, i) in slots" :key="i" :class="['transition-transform duration-300', getColor(symbol)]">
              {{ symbol }}
            </span>
          </div>
          <button
            @click="spin"
            class="px-10 py-4 bg-yellow-400 text-purple-900 rounded-full font-bold text-xl shadow-lg hover:bg-yellow-300 transition animate-bounce"
            :disabled="spinning"
          >
            {{ spinning ? 'Spinning...' : 'Spin for Discount' }}
          </button>
          <div v-if="result" class="mt-4 text-lg font-bold text-center" :class="jackpot ? 'text-green-600 animate-pulse' : 'text-purple-900'">
            {{ result }}
          </div>
          <div v-if="discount" class="mt-2 text-2xl font-bold text-green-700">
            🎁 Your Discount Code: <span class="underline">{{ discount }}</span>
          </div>
          <div v-if="funMessage" class="mt-2 text-sm text-gray-500 italic">{{ funMessage }}</div>
        </div>
      </div>
    </section>

    <div ref="lottieCasino" class="w-80 h-80 mx-auto"></div>

    <!-- How It Works Section -->
    <section class="w-full max-w-6xl mx-auto py-16">
      <h2 class="text-3xl font-bold text-yellow-300 text-center mb-10">How It Works</h2>
      <div class="grid md:grid-cols-4 gap-8">
        <div class="bg-white/90 rounded-xl shadow-lg p-6 flex flex-col items-center" data-aos="fade-up">
          <span class="text-4xl mb-2">🎨</span>
          <div class="font-bold mb-1">Branding</div>
          <div class="text-gray-600 text-center">Custom casino branding and design.</div>
        </div>
        <div class="bg-white/90 rounded-xl shadow-lg p-6 flex flex-col items-center" data-aos="fade-up" data-aos-delay="100">
          <span class="text-4xl mb-2">🚀</span>
          <div class="font-bold mb-1">Launch</div>
          <div class="text-gray-600 text-center">Fast, compliant casino launchpad.</div>
        </div>
        <div class="bg-white/90 rounded-xl shadow-lg p-6 flex flex-col items-center" data-aos="fade-up" data-aos-delay="200">
          <span class="text-4xl mb-2">🎯</span>
          <div class="font-bold mb-1">Player Acquisition</div>
          <div class="text-gray-600 text-center">SEO, affiliates, and influencer marketing.</div>
        </div>
        <div class="bg-white/90 rounded-xl shadow-lg p-6 flex flex-col items-center" data-aos="fade-up" data-aos-delay="300">
          <span class="text-4xl mb-2">📈</span>
          <div class="font-bold mb-1">Growth</div>
          <div class="text-gray-600 text-center">Analytics and ongoing support.</div>
        </div>
      </div>
    </section>
  </div>
</template>

<script setup>
import { onMounted, ref } from 'vue'
import AOS from 'aos'
import 'aos/dist/aos.css'
import lottie from 'lottie-web'
import MiniSlotMachine from '@/Components/MiniSlotMachine.vue'

const slotContainer = ref(null)
const lottieCasino = ref(null)
const lottieMan = ref(null)
const confettiContainer = ref(null)

onMounted(() => {
  AOS.init()
  lottie.loadAnimation({
    container: slotContainer.value,
    renderer: 'svg',
    loop: true,
    autoplay: true,
    path: '/lottie/slot-machine.json' // Replace with actual Lottie URL
  })
  lottie.loadAnimation({
    container: lottieCasino.value,
    renderer: 'svg',
    loop: true,
    autoplay: true,
    path: '/lottie/slot-machine.json'
  })
  lottie.loadAnimation({
    container: lottieMan.value,
    renderer: 'svg',
    loop: true,
    autoplay: true,
    path: 'https://assets2.lottiefiles.com/packages/lf20_2LdLki.json' // Example: man working on computer
  })
})

const symbols = ['🍒', '🍋', '🔔', '7️⃣', '🍀', '💎']
const funMessages = [
  'Luck is just a spin away!',
  'Feeling lucky today?',
  'Big wins start with bold moves!',
  'The reels are hot!',
  'Try again, fortune favors the brave!',
  'Jackpot dreams!',
  'Spin to win!',
  'May the odds be ever in your favor!',
  'Every spin is a new chance!',
  'Go for gold!'
]
const slots = ref(['🍒', '🍋', '🔔'])
const spinning = ref(false)
const result = ref('')
const showConfetti = ref(false)
const jackpot = ref(false)
const funMessage = ref('')
const discount = ref('')

function getColor(symbol) {
  if (symbol === '7️⃣') return 'text-red-600 drop-shadow-lg'
  if (symbol === '💎') return 'text-blue-600 drop-shadow-lg'
  if (symbol === '🍀') return 'text-green-600 drop-shadow-lg'
  return 'text-purple-900'
}

function spin() {
  spinning.value = true
  result.value = ''
  showConfetti.value = false
  jackpot.value = false
  discount.value = ''
  funMessage.value = funMessages[Math.floor(Math.random() * funMessages.length)]
  let spins = 0
  const interval = setInterval(() => {
    slots.value = [
      symbols[Math.floor(Math.random() * symbols.length)],
      symbols[Math.floor(Math.random() * symbols.length)],
      symbols[Math.floor(Math.random() * symbols.length)],
    ]
    spins++
    if (spins > 18) {
      clearInterval(interval)
      spinning.value = false
      // Discount logic
      if (slots.value[0] === slots.value[1] && slots.value[1] === slots.value[2]) {
        result.value = '🎉 Jackpot! 🎉'
        jackpot.value = true
        showConfetti.value = true
        // Big win discount
        discount.value = 'CASINO50' // 50% off
        setTimeout(() => {
          if (confettiContainer.value) {
            lottie.loadAnimation({
              container: confettiContainer.value,
              renderer: 'svg',
              loop: false,
              autoplay: true,
              path: '/lottie/slot-machine.json'
            })
          }
        }, 100)
        setTimeout(() => showConfetti.value = false, 3000)
      } else if (slots.value[0] === slots.value[1] || slots.value[1] === slots.value[2] || slots.value[0] === slots.value[2]) {
        result.value = 'Nice! You got a match!'
        discount.value = 'CASINO20' // 20% off
      } else {
        result.value = 'Try again!'
        discount.value = 'CASINO10' // 10% off
      }
    }
  }, 90)
}
</script>

<style>
@keyframes shake {
  0% { transform: translateX(0); }
  20% { transform: translateX(-8px); }
  40% { transform: translateX(8px); }
  60% { transform: translateX(-8px); }
  80% { transform: translateX(8px); }
  100% { transform: translateX(0); }
}
.animate-shake {
  animation: shake 0.6s cubic-bezier(.36,.07,.19,.97) both;
}
</style>
