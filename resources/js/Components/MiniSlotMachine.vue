<template>
  <div 
    class="w-full flex flex-col items-center justify-center py-16" 
    id="slot-machine"
    role="region"
    aria-labelledby="slot-machine-title"
  >
    <h2 
      id="slot-machine-title"
      class="text-4xl font-extrabold text-[#facb24] mb-6 font-serif animate-pulse text-center"
    >
      Try Your Luck for a Discount!
    </h2>
    
    <div class="relative flex flex-col items-center">
      <!-- Confetti Container -->
      <div 
        v-if="showConfetti" 
        ref="confettiContainer" 
        class="absolute inset-0 pointer-events-none z-10"
        aria-hidden="true"
      ></div>
      
      <!-- Slot Machine Container -->
      <div
        :class="[
          'bg-white/90 rounded-2xl shadow-2xl p-8 flex flex-col items-center border-4 relative',
          spinning ? 'border-[#facb24] animate-shake' : 'border-[#362869]',
          jackpot ? 'ring-4 ring-green-400 ring-offset-2' : ''
        ]"
        style="width: 340px; min-height: 220px; transition: box-shadow 0.3s;"
        role="application"
        aria-label="Slot machine game"
      >
        <!-- Loading overlay for spinning -->
        <div 
          v-if="spinning"
          class="absolute inset-0 bg-white/20 rounded-2xl flex items-center justify-center z-5"
          aria-hidden="true"
        >
          <div class="animate-spin rounded-full h-8 w-8 border-b-2 border-[#362869]"></div>
        </div>

        <!-- Slot Display -->
        <div 
          class="flex space-x-4 text-6xl font-mono mb-4 select-none"
          role="img"
          :aria-label="`Current slots: ${slots.map(s => s.name).join(', ')}`"
        >
          <span 
            v-for="(symbol, i) in slots" 
            :key="i" 
            :class="[
              'transition-transform duration-300 flex items-center justify-center w-16 h-16 rounded-lg',
              symbol.colorClass,
              spinning ? 'animate-spin-slot' : '',
              jackpot && symbol.name === slots[0].name ? 'animate-jackpot-glow' : ''
            ]"
            :style="{ animationDelay: `${i * 0.1}s` }"
          >
            <img :src="symbol.path" :alt="symbol.name" class="w-12 h-12" />
          </span>
        </div>

        <!-- Spin Button -->
        <button
          @click="spin"
          class="px-10 py-4 bg-[#facb24] text-[#362869] rounded-full font-bold text-xl shadow-lg hover:bg-yellow-300 transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-[#facb24] focus:ring-offset-2 disabled:opacity-50 disabled:cursor-not-allowed"
          :disabled="spinning || cooldown"
          :aria-label="spinning ? 'Spinning in progress' : 'Spin the slot machine'"
        >
          {{ getButtonText() }}
        </button>

        <!-- Cooldown indicator -->
        <div 
          v-if="cooldown && !spinning"
          class="mt-2 text-sm text-gray-500"
          role="status"
          aria-live="polite"
        >
          Wait {{ cooldownTime }}s before next spin
        </div>

        <!-- Result Display -->
        <div 
          v-if="result" 
          class="mt-4 text-lg font-bold text-center transition-all duration-300" 
          :class="jackpot ? 'text-green-600 animate-pulse-strong' : 'text-[#362869]'"
          role="status"
          aria-live="assertive"
        >
          {{ result }}
        </div>

        <!-- Discount Code Display -->
        <div 
          v-if="discount" 
          class="mt-2 text-2xl font-bold text-green-700 text-center"
          role="status"
          aria-live="assertive"
        >
           Your Discount Code: 
          <span 
            class="underline cursor-pointer hover:text-green-800 transition-colors"
            @click="copyDiscountCode"
            :title="copied ? 'Copied!' : 'Click to copy'"
          >
            {{ discount }}
          </span>
          <span v-if="copied" class="text-sm text-green-600 ml-2">✓ Copied!</span>
        </div>

        <!-- Call to Action for Discount -->
        <div v-if="discount" class="mt-4">
          <a href="/contact-us" class="inline-block bg-blue-600 text-white font-semibold py-2 px-4 rounded-full shadow-lg hover:bg-blue-700 transition duration-300 transform hover:scale-105">
            Claim Your Discount Now!
          </a>
        </div>

        <!-- Fun Message -->
        <div 
          v-if="funMessage" 
          class="mt-2 text-sm text-gray-500 italic text-center max-w-xs"
        >
          {{ funMessage }}
        </div>

        <!-- Game Stats (optional) -->
        <div 
          v-if="showStats && gameStats.totalSpins > 0"
          class="mt-4 text-xs text-gray-400 text-center border-t pt-3 w-full"
        >
          <div class="flex justify-between">
            <span>Spins: {{ gameStats.totalSpins }}</span>
            <span>Wins: {{ gameStats.wins }}</span>
            <span>Win Rate: {{ winRate }}%</span>
          </div>
        </div>
      </div>

      <!-- Instructions -->
      <div class="mt-6 text-center text-sm text-black-600 max-w-md">
        <p> Match 3 symbols for JACKPOT (30% off)</p>
        <p> Match 2 symbols for 20% off</p>
        <p> Any spin gets you 10% off</p>
      </div>
    </div>
  </div>
</template>

<script setup>
import { ref, computed, onMounted, onUnmounted } from 'vue'
import lottie from 'lottie-web'

// Audio objects
// Audio objects
// const spinSound = new Audio("/assets/audio/slotmachine/spin_sound.wav")
// const winSound = new Audio("/assets/audio/slotmachine/win_sound.wav")
// const loseSound = new Audio("/assets/audio/slotmachine/lose_sound.wav")

// Emits
const emit = defineEmits(['discount-won', 'spin-complete'])

// State
const slots = ref([])
const spinning = ref(false)
const result = ref('')
const showConfetti = ref(false)
const jackpot = ref(false)
const funMessage = ref('')
const discount = ref('')
const confettiContainer = ref(null)
const copied = ref(false)
const cooldown = ref(false)
const cooldownTime = ref(0)
const showStats = ref(false)

// Game statistics
const gameStats = ref({
  totalSpins: 0,
  wins: 0,
  jackpots: 0,
  lastWin: null
})

// Constants
const symbols = [
  { name: 'cherry', path: '/assets/icons/slotmachine/Cherry.svg', colorClass: 'bg-red-50' },
  { name: 'lemon', path: '/assets/icons/slotmachine/Lemon.svg', colorClass: 'bg-yellow-50' },
  { name: 'bell', path: '/assets/icons/slotmachine/Bell.svg', colorClass: 'bg-gray-50' },
  { name: 'seven', path: '/assets/icons/slotmachine/NumberSeven.svg', colorClass: 'bg-red-50' },
  { name: 'clover', path: '/assets/icons/slotmachine/Four-leafClover.svg', colorClass: 'bg-green-50' },
  { name: 'diamond', path: '/assets/icons/slotmachine/Diamond.svg', colorClass: 'bg-blue-50' },
  { name: 'horseshoe', path: '/assets/icons/slotmachine/horseshoe.svg', colorClass: 'bg-orange-50' }
]

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

const discountCodes = {
  jackpot: 'CesiumPlatinum30-884695',
  match: 'CesiumGold20-1529',
  consolation: 'CesiumSilver10'
}

// Computed
const winRate = computed(() => {
  if (gameStats.value.totalSpins === 0) return 0
  return Math.round((gameStats.value.wins / gameStats.value.totalSpins) * 100)
})

// Methods
const getColor = (symbol) => {
  // The color is now part of the symbol object itself, applied as a background class
  return symbol.colorClass || 'bg-gray-50'
}

const getButtonText = () => {
  if (spinning.value) return 'Spinning...'
  if (cooldown.value) return `Wait ${cooldownTime.value}s`
  return 'Spin for Discount'
}

const copyDiscountCode = async () => {
  if (!discount.value) return
  
  try {
    await navigator.clipboard.writeText(discount.value)
    copied.value = true
    setTimeout(() => {
      copied.value = false
    }, 2000)
  } catch (error) {
    console.warn('Failed to copy discount code:', error)
    // Fallback for older browsers
    const textArea = document.createElement('textarea')
    textArea.value = discount.value
    document.body.appendChild(textArea)
    textArea.select()
    document.execCommand('copy')
    document.body.removeChild(textArea)
    copied.value = true
    setTimeout(() => {
      copied.value = false
    }, 2000)
  }
}

const startCooldown = () => {
  cooldown.value = true
  cooldownTime.value = 3
  
  const interval = setInterval(() => {
    cooldownTime.value--
    if (cooldownTime.value <= 0) {
      cooldown.value = false
      clearInterval(interval)
    }
  }, 1000)
}

const updateGameStats = (isWin, isJackpot = false) => {
  gameStats.value.totalSpins++
  if (isWin) {
    gameStats.value.wins++
    gameStats.value.lastWin = new Date()
  }
  if (isJackpot) {
    gameStats.value.jackpots++
  }
  
  // Save to localStorage
  try {
    localStorage.setItem('slotMachineStats', JSON.stringify(gameStats.value))
  } catch (error) {
    console.warn('Failed to save game stats:', error)
  }
}

const loadGameStats = () => {
  try {
    const saved = localStorage.getItem('slotMachineStats')
    if (saved) {
      gameStats.value = { ...gameStats.value, ...JSON.parse(saved) }
    }
  } catch (error) {
    console.warn('Failed to load game stats:', error)
  }
}

const spin = () => {
  if (spinning.value || cooldown.value) return
  
  spinning.value = true
  result.value = ''
  showConfetti.value = false
  jackpot.value = false
  discount.value = ''
  copied.value = false
  funMessage.value = funMessages[Math.floor(Math.random() * funMessages.length)]

  // Play spin sound
  // spinSound.play()

  let spins = 0
  const spinDuration = 20 + Math.floor(Math.random() * 10) // 20-30 spins
  
  const interval = setInterval(() => {
    slots.value = [
      symbols[Math.floor(Math.random() * symbols.length)],
      symbols[Math.floor(Math.random() * symbols.length)],
      symbols[Math.floor(Math.random() * symbols.length)],
    ]
    spins++

    if (spins > spinDuration) {
      clearInterval(interval)
      spinning.value = false
      evaluateResult()
      startCooldown()
    }
  }, 90)
}

const evaluateResult = () => {
  const [first, second, third] = slots.value
  let isWin = false
  let isJackpotWin = false
  
  if (first.name === second.name && second.name === third.name) {
    // Jackpot - all three match
    result.value = ' JACKPOT! '
    jackpot.value = true
    showConfetti.value = true
    discount.value = discountCodes.jackpot
    isWin = true
    isJackpotWin = true
    winSound.play()
    
    // Show confetti animation
    setTimeout(() => {
      if (confettiContainer.value) {
        try {
          lottie.loadAnimation({
            container: confettiContainer.value,
            renderer: 'svg',
            loop: false,
            autoplay: true,
            path: '/assets/confetti.json'
          })
        } catch (error) {
          console.warn('Confetti animation failed:', error)
        }
      }
    }, 100)

    setTimeout(() => {
      showConfetti.value = false
    }, 3000)
    
  } else if (first.name === second.name || second.name === third.name || first.name === third.name) {
    // Partial match - two symbols match
    result.value = 'Nice! You got a match! '
    discount.value = discountCodes.match
    isWin = true
    winSound.play()
    
  } else {
    // No match - consolation prize
    result.value = 'Try again! '
    discount.value = discountCodes.consolation
    loseSound.play()
  }
  
  // Update statistics
  updateGameStats(isWin, isJackpotWin)
}

// Lifecycle
onMounted(() => {
  loadGameStats()
  
  // Show stats after first spin
  if (gameStats.value.totalSpins > 0) {
    showStats.value = true
  }
  // Initialize slots with random symbols on mount
  slots.value = [
    symbols[Math.floor(Math.random() * symbols.length)],
    symbols[Math.floor(Math.random() * symbols.length)],
    symbols[Math.floor(Math.random() * symbols.length)],
  ]
})

onUnmounted(() => {
  // Clean up any running intervals
  if (showConfetti.value) {
    showConfetti.value = false
  }
})

// Expose methods for parent component
defineExpose({
  spin,
  resetStats: () => {
    gameStats.value = { totalSpins: 0, wins: 0, jackpots: 0, lastWin: null }
    localStorage.removeItem('slotMachineStats')
    showStats.value = false
  }
})
</script>

<style scoped>
/* Shake animation for spinning */
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

/* Bounce animation for slots */
@keyframes bounce {
  0%, 20%, 53%, 80%, 100% {
    animation-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
    transform: translate3d(0,0,0);
  }
  40%, 43% {
    animation-timing-function: cubic-bezier(0.755, 0.050, 0.855, 0.060);
    transform: translate3d(0, -30px, 0);
  }
  70% {
    animation-timing-function: cubic-bezier(0.755, 0.050, 0.855, 0.060);
    transform: translate3d(0, -15px, 0);
  }
  90% {
    transform: translate3d(0,-4px,0);
  }
}

.animate-bounce {
  animation: bounce 1s infinite;
}

/* Pulse animation for title and jackpot */
@keyframes pulse {
  0%, 100% {
    opacity: 1;
  }
  50% {
    opacity: 0.7;
  }
}

.animate-pulse {
  animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
}

/* Spin animation for loading */
@keyframes spin {
  to {
    transform: rotate(360deg);
  }
}

.animate-spin {
  animation: spin 1s linear infinite;
}

/* Enhanced button effects */
button:hover:not(:disabled) {
  transform: translateY(-2px);
  box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
}

button:active:not(:disabled) {
  transform: translateY(0);
}

/* Accessibility improvements */
@media (prefers-reduced-motion: reduce) {
  .animate-shake,
  .animate-bounce,
  .animate-pulse,
  .animate-spin {
    animation: none;
  }
  
  .transition-all,
  .transition-colors,
  .transition-transform {
    transition: none;
  }
  
  button:hover:not(:disabled) {
    transform: none;
  }
}

/* Focus styles */
button:focus-visible {
  outline: 2px solid #362869;
  outline-offset: 2px;
}

/* Responsive adjustments */
@media (max-width: 640px) {
  .text-4xl {
    font-size: 2rem;
  }
  
  .text-6xl {
    font-size: 3rem;
  }
  
  .px-10 {
    padding-left: 2rem;
    padding-right: 2rem;
  }
  
  .py-4 {
    padding-top: 0.75rem;
    padding-bottom: 0.75rem;
  }
}

/* Custom scrollbar for stats */
.overflow-x-auto::-webkit-scrollbar {
  height: 4px;
}

.overflow-x-auto::-webkit-scrollbar-track {
  background: #f1f1f1;
  border-radius: 2px;
}

.overflow-x-auto::-webkit-scrollbar-thumb {
  background: #888;
  border-radius: 2px;
}

.overflow-x-auto::-webkit-scrollbar-thumb:hover {
  background: #555;
}
</style>




@keyframes spin-slot {
  0% { transform: translateY(0) scaleY(1); opacity: 1; }
  50% { transform: translateY(50%) scaleY(0.1); opacity: 0; }
  51% { transform: translateY(-50%) scaleY(0.1); opacity: 0; }
  100% { transform: translateY(0) scaleY(1); opacity: 1; }
}

.animate-spin-slot {
  animation: spin-slot 0.1s linear infinite;
}

/* Jackpot glow animation */
@keyframes jackpot-glow {
  0%, 100% {
    box-shadow: 0 0 5px rgba(255, 215, 0, 0.4), 0 0 10px rgba(255, 215, 0, 0.4), 0 0 15px rgba(255, 215, 0, 0.4);
  }
  50% {
    box-shadow: 0 0 20px rgba(255, 215, 0, 0.8), 0 0 30px rgba(255, 215, 0, 0.8), 0 0 40px rgba(255, 215, 0, 0.8);
  }
}

.animate-jackpot-glow {
  animation: jackpot-glow 1.5s infinite alternate;
}

/* Stronger pulse for jackpot text */
@keyframes pulse-strong {
  0%, 100% {
    transform: scale(1);
    opacity: 1;
  }
  50% {
    transform: scale(1.05);
    opacity: 0.8;
  }
}

.animate-pulse-strong {
  animation: pulse-strong 1s cubic-bezier(0.4, 0, 0.6, 1) infinite;
}


