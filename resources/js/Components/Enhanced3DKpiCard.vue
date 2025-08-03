<template>
  <div 
    class="enhanced-kpi-card"
    :class="{ 'is-hovered': isHovered }"
    @mouseenter="handleMouseEnter"
    @mouseleave="handleMouseLeave"
    @mousemove="handleMouseMove"
    ref="cardRef"
    role="region"
    :aria-labelledby="`kpi-label-${id}`"
  >
    <!-- 3D Card Container -->
    <div class="card-3d-container" ref="cardContainer">
      <!-- Background with gradient and glow effect -->
      <div class="card-background"></div>
      
      <!-- Icon with 3D effect -->
      <div class="icon-container">
        <div class="icon-3d-wrapper" ref="iconWrapper">
          <component 
            :is="getIconComponent()" 
            class="kpi-icon"
            :aria-label="`${label} icon`"
          />
        </div>
      </div>
      
      <!-- Animated counter with enhanced styling -->
      <div 
        ref="counterRef" 
        class="counter-display"
        :aria-live="isAnimating ? 'polite' : 'off'"
        :aria-label="`${formattedValue} ${label}`"
      >
        {{ displayValue }}
      </div>
      
      <!-- Label with subtle animation -->
      <p 
        :id="`kpi-label-${id}`"
        class="kpi-label"
      >
        {{ label }}
      </p>
      
      <!-- Description with subtle animation -->
      <p 
        v-if="description"
        class="kpi-description"
      >
        {{ description }}
      </p>
      
      <!-- Floating particles effect -->
      <div class="particles-container" ref="particlesRef">
        <canvas ref="particlesCanvas" class="particles-canvas"></canvas>
      </div>
      
      <!-- Subtle glow overlay -->
      <div class="glow-overlay"></div>
    </div>
  </div>
</template>

<script setup>
import { onMounted, ref, computed, watch } from 'vue'
import gsap from 'gsap'
import { TrendingUp, Target, DollarSign, BarChart3 } from 'lucide-vue-next'

// Props
const props = defineProps({
  id: {
    type: [String, Number],
    default: () => Math.random().toString(36).substr(2, 9)
  },
  icon: {
    type: String,
    required: true
  },
  value: {
    type: [String, Number],
    required: true
  },
  suffix: {
    type: String,
    default: ''
  },
  label: {
    type: String,
    required: true
  },
  description: {
    type: String,
    default: ''
  },
  animationDuration: {
    type: Number,
    default: 2
  },
  startAnimation: {
    type: Boolean,
    default: true
  }
})

// Emits
const emit = defineEmits(["animation-complete"])

// Refs
const cardRef = ref(null)
const cardContainer = ref(null)
const counterRef = ref(null)
const particlesRef = ref(null)
const particlesCanvas = ref(null)
const iconWrapper = ref(null)

// State
const isHovered = ref(false)
const isAnimating = ref(false)
const displayValue = ref("0")
const currentValue = ref(0)

// Particles system
let particlesCtx = null
let particles = []
let particlesAnimationId = null

// Computed
const finalValue = computed(() => Number(props.value) || 0)
const formattedValue = computed(() => {
  const num = finalValue.value
  if (props.suffix) {
    return `${num}${props.suffix}`
  }
  return formatNumber(num)
})

// Methods
const getIconComponent = () => {
  const iconMap = {
    'chart-line': TrendingUp,
    'trending-up': TrendingUp,
    'target': Target,
    'dollar-sign': DollarSign,
    'bar-chart': BarChart3
  }
  
  return iconMap[props.icon] || BarChart3
}

const formatNumber = (num) => {
  const n = Number(num)
  if (n >= 1_000_000) return `${(n / 1_000_000).toFixed(1)}M+`
  if (n >= 1_000) return `${Math.round(n / 1_000)}K+`
  return n.toString()
}

const handleMouseEnter = () => {
  isHovered.value = true
  
  // Kill any existing animations to ensure fresh start
  gsap.killTweensOf(cardContainer.value)
  gsap.killTweensOf(iconWrapper.value)
  gsap.killTweensOf(currentValue)
  
  // Stop and clear any existing particles
  stopParticles()
  
  // Reset to initial state before starting new animations
  gsap.set(cardContainer.value, {
    rotationX: 0,
    rotationY: 0,
    z: 0
  })
  
  gsap.set(iconWrapper.value, {
    scale: 1,
    rotationZ: 0
  })
  
  // Start fresh 3D tilt effect
  gsap.to(cardContainer.value, {
    duration: 0.3,
    rotationX: -5,
    rotationY: 5,
    z: 20,
    ease: "power2.out"
  })
  
  // Start fresh icon bounce - targeting individual icon
  gsap.to(iconWrapper.value, {
    duration: 0.3,
    scale: 1.1,
    rotationZ: 5,
    ease: "back.out(1.7)"
  })
  
  // Start fresh particles
  startParticles()
  
  // Remove counter animation - display static value
  displayValue.value = formattedValue.value
}

const handleMouseLeave = () => {
  isHovered.value = false
  
  // Kill all animations immediately for clean reset
  gsap.killTweensOf(cardContainer.value)
  gsap.killTweensOf(iconWrapper.value)
  gsap.killTweensOf(currentValue)
  
  // Stop and completely clear particles
  stopParticles()
  particles = [] // Clear particles array
  if (particlesCanvas.value) {
    const ctx = particlesCanvas.value.getContext("2d")
    if (ctx) ctx.clearRect(0, 0, particlesCanvas.value.width, particlesCanvas.value.height)
  }
  
  // Reset to neutral state
  gsap.to(cardContainer.value, {
    duration: 0.3,
    rotationX: 0,
    rotationY: 0,
    z: 0,
    ease: "power2.out"
  })
  
  // Reset individual icon to neutral state
  gsap.to(iconWrapper.value, {
    duration: 0.3,
    scale: 1,
    rotationZ: 0,
    ease: "power2.out"
  })
}

const handleMouseMove = (event) => {
  if (!cardRef.value) return
  
  const rect = cardRef.value.getBoundingClientRect()
  const x = event.clientX - rect.left
  const y = event.clientY - rect.top
  const centerX = rect.width / 2
  const centerY = rect.height / 2
  
  const rotateX = (y - centerY) / centerY * -10
  const rotateY = (x - centerX) / centerX * 10
  
  gsap.to(cardContainer.value, {
    duration: 0.1,
    rotationX: rotateX,
    rotationY: rotateY,
    ease: "power2.out"
  })
}

const animateCounter = () => {
  if (!counterRef.value || !props.startAnimation) {
    displayValue.value = formattedValue.value
    return
  }

  isAnimating.value = true
  currentValue.value = 0
  displayValue.value = props.suffix ? `0${props.suffix}` : '0'

  gsap.to(currentValue, {
    value: finalValue.value,
    duration: props.animationDuration,
    ease: 'power2.out',
    onUpdate: () => {
      const currentNum = Math.round(currentValue.value)
      displayValue.value = props.suffix ? `${currentNum}${props.suffix}` : formatNumber(currentNum)
    },
    onComplete: () => {
      isAnimating.value = false
      displayValue.value = formattedValue.value
      emit('animation-complete', {
        id: props.id,
        value: finalValue.value,
        formattedValue: formattedValue.value
      })
    }
  })
}

// Particles system
class Particle {
  constructor(x, y) {
    this.x = x
    this.y = y
    this.vx = (Math.random() - 0.5) * 2
    this.vy = (Math.random() - 0.5) * 2
    this.life = 1
    this.decay = Math.random() * 0.02 + 0.01
    this.size = Math.random() * 3 + 1
  }
  
  update() {
    this.x += this.vx
    this.y += this.vy
    this.life -= this.decay
    this.vy -= 0.05 // gravity
  }
  
  draw() {
    if (this.life <= 0) return
    
    particlesCtx.save()
    particlesCtx.globalAlpha = this.life
    particlesCtx.fillStyle = '#facb24'
    particlesCtx.beginPath()
    particlesCtx.arc(this.x, this.y, this.size, 0, Math.PI * 2)
    particlesCtx.fill()
    particlesCtx.restore()
  }
}

const startParticles = () => {
  if (!particlesCanvas.value || !cardRef.value) return
  
  try {
    const canvas = particlesCanvas.value
    const rect = cardRef.value.getBoundingClientRect()
    canvas.width = rect.width
    canvas.height = rect.height
    
    particlesCtx = canvas.getContext('2d')
    if (!particlesCtx) {
      console.warn('Enhanced3DKpiCard: Could not get particles context')
      return
    }
    
    particles = []
    
    const animateParticles = () => {
      if (!isHovered.value || !particlesCtx) return
      
      try {
        particlesCtx.clearRect(0, 0, canvas.width, canvas.height)
        
        // Add new particles
        if (Math.random() < 0.3) {
          particles.push(new Particle(
            Math.random() * canvas.width,
            canvas.height
          ))
        }
        
        // Update and draw particles
        particles = particles.filter(particle => {
          particle.update()
          particle.draw()
          return particle.life > 0
        })
        
        particlesAnimationId = requestAnimationFrame(animateParticles)
      } catch (error) {
        console.warn('Enhanced3DKpiCard: Error in particle animation:', error)
      }
    }
    
    animateParticles()
  } catch (error) {
    console.warn('Enhanced3DKpiCard: Error starting particles:', error)
  }
}

const stopParticles = () => {
  try {
    if (particlesAnimationId) {
      cancelAnimationFrame(particlesAnimationId)
      particlesAnimationId = null
    }
    particles = []
  } catch (error) {
    console.warn('Enhanced3DKpiCard: Error stopping particles:', error)
  }
}

// Watchers
watch(() => props.value, () => {
  displayValue.value = formattedValue.value
})

// Lifecycle
onMounted(() => {
  try {
    // Set up 3D perspective
    if (cardContainer.value) {
      gsap.set(cardContainer.value, {
        transformPerspective: 1000,
        transformOrigin: "center center"
      })
    }
    
    // Display static value without animation
    displayValue.value = formattedValue.value
  } catch (error) {
    console.warn('Enhanced3DKpiCard: Error during mount:', error)
    // Fallback to display final value without animation
    displayValue.value = formattedValue.value
  }
})
</script>

<style scoped>
.enhanced-kpi-card {
  position: relative;
  width: 274.48px; /* Fixed width based on user's ratio */
  height: 141.00px; /* Fixed height based on user's ratio */
  cursor: pointer;
  transform-style: preserve-3d;
  perspective: 1000px;
}

.card-3d-container {
  position: relative;
  width: 100%;
  height: 100%;
  border-radius: 0.56px;
  transform-style: preserve-3d;
  transition: all 0.3s ease;
}

.card-background {
  position: absolute;
  inset: 0;
  background: linear-gradient(135deg, #362869 0%, #4a3a7a 100%);
  border-radius: 0.56px;
  box-shadow: 
    0 4px 20px rgba(54, 40, 105, 0.3),
    0 1px 3px rgba(0, 0, 0, 0.1);
  transition: all 0.3s ease;
}

.enhanced-kpi-card.is-hovered .card-background {
  box-shadow: 
    0 8px 40px rgba(54, 40, 105, 0.4),
    0 2px 6px rgba(0, 0, 0, 0.15),
    0 0 0 1px rgba(250, 203, 36, 0.2);
}

.icon-container {
  position: absolute;
  top: 10px;
  left: 10px;
  transform: none;
  z-index: 3;
}

.counter-display {
  position: absolute;
  top: 25px;
  left: 50%;
  transform: translateX(-50%);
  font-size: 2.2rem;
  font-weight: 800;
  color: #facb24;
  text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
  font-variant-numeric: tabular-nums;
  letter-spacing: -0.025em;
  z-index: 2;
}

.kpi-label {
  position: absolute;
  top: calc(25px + 40px); /* Adjusted position */
  left: 50%;
  transform: translateX(-50%);
  font-size: 0.8rem;
  font-weight: 600;
  color: white;
  text-align: center;
  margin: 0;
  opacity: 0.9;
  z-index: 2;
}

.kpi-description {
  position: absolute;
  top: calc(25px + 70px); /* Adjusted position below label */
  left: 50%;
  transform: translateX(-50%);
  font-size: 0.65rem; /* Smaller font size for elegance */
  line-height: 1.3; /* Tighter line spacing for elegance */
  max-height: 50px; /* Reduced max-height for better proportions */
  overflow: hidden; /* Hide overflow instead of scrolling */
  text-overflow: ellipsis; /* Add ellipsis for overflow */
  white-space: normal; /* Allow text to wrap */
  word-wrap: break-word; /* Break long words */
  text-align: center; /* Center align the text */
  opacity: 0.8; /* Slightly more subtle */
  transition: opacity 0.3s ease; /* Smooth transition for opacity */
  color: rgba(255, 255, 255, 0.9); /* Slightly transparent white for elegance */
  width: 90%; /* Increased width for better proportions */
  padding: 4px 8px; /* Better padding for elegant spacing */
  background: rgba(255, 255, 255, 0.05); /* Subtle background for definition */
  border-radius: 6px; /* Subtle rounded corners */
  backdrop-filter: blur(4px); /* Subtle blur effect for elegance */
}

.particles-container {
  position: absolute;
  inset: 0;
  border-radius: 0.56px;
  overflow: hidden;
  pointer-events: none;
  z-index: 1;
}

.particles-canvas {
  width: 100%;
  height: 100%;
}

.glow-overlay {
  position: absolute;
  inset: 0;
  border-radius: 0.56px;
  background: radial-gradient(circle at center, rgba(250, 203, 36, 0.1) 0%, transparent 70%);
  opacity: 0;
  transition: opacity 0.3s ease;
  pointer-events: none;
  z-index: 1;
}

.enhanced-kpi-card.is-hovered .glow-overlay {
  opacity: 1;
}

/* Responsive adjustments */
@media (max-width: 768px) {
  .enhanced-kpi-card {
    width: 100%; /* Allow full width on mobile */
    height: auto; /* Allow height to adjust dynamically */
    max-width: 274.48px; /* Maintain aspect ratio on smaller screens */
    margin: 0 auto; /* Center the card */
  }
  
  .counter-display {
    font-size: 1.8rem;
    top: 20px;
  }
  
  .icon-container {
    top: 5px;
    left: 5px;
  }
  
  .icon-3d-wrapper {
    width: 36px;
    height: 36px;
  }
  
  .kpi-icon {
    width: 18px;
    height: 18px;
  }
  
  .kpi-label {
    top: calc(20px + 40px);
    font-size: 0.7rem;
  }
  
  .kpi-description {
    font-size: 0.6rem;
    top: calc(20px + 70px);
    max-height: 60px;
  }
}

/* Accessibility improvements */
@media (prefers-reduced-motion: reduce) {
  .enhanced-kpi-card,
  .card-3d-container,
  .card-background,
  .icon-3d-wrapper,
  .glow-overlay {
    transition: none;
  }
  
  .enhanced-kpi-card:hover .card-3d-container {
    transform: none;
  }
}

/* Focus styles for accessibility */
.enhanced-kpi-card:focus-visible {
  outline: 2px solid #facb24;
  outline-offset: 2px;
  border-radius: 0.56px;
}
</style>
