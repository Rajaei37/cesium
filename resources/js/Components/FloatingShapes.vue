<template>
  <div class="floating-shapes-container" ref="containerRef">
    <canvas ref="canvasRef" class="floating-shapes-canvas"></canvas>
  </div>
</template>

<script setup>
import { ref, onMounted, onUnmounted } from 'vue'

const containerRef = ref(null)
const canvasRef = ref(null)
let animationId = null
let shapes = []
let mouse = { x: 0, y: 0 }
let canvas = null
let ctx = null

// Brand colors
const colors = {
  primary: '#362869',
  accent: '#facb24',
  light: '#f2f2f2'
}

class Shape {
  constructor(x, y, size, type, color) {
    this.x = x
    this.y = y
    this.size = size
    this.type = type
    this.color = color
    this.vx = (Math.random() - 0.5) * 0.5
    this.vy = (Math.random() - 0.5) * 0.5
    this.rotation = 0
    this.rotationSpeed = (Math.random() - 0.5) * 0.02
    this.opacity = 0.7 + Math.random() * 0.3
    this.originalX = x
    this.originalY = y
  }

  update() {
    // Gentle floating motion
    this.x += this.vx
    this.y += this.vy
    this.rotation += this.rotationSpeed

    // Mouse interaction - subtle attraction
    const dx = mouse.x - this.x
    const dy = mouse.y - this.y
    const distance = Math.sqrt(dx * dx + dy * dy)
    
    if (distance < 150) {
      const force = (150 - distance) / 150 * 0.01
      this.x += dx * force
      this.y += dy * force
    }

    // Boundary check with gentle bounce
    if (this.x < 0 || this.x > canvas.width) this.vx *= -1
    if (this.y < 0 || this.y > canvas.height) this.vy *= -1

    // Keep within bounds
    this.x = Math.max(0, Math.min(canvas.width, this.x))
    this.y = Math.max(0, Math.min(canvas.height, this.y))
  }

  draw() {
    ctx.save()
    ctx.translate(this.x, this.y)
    ctx.rotate(this.rotation)
    ctx.globalAlpha = this.opacity

    switch (this.type) {
      case 'circle':
        this.drawCircle()
        break
      case 'square':
        this.drawSquare()
        break
      case 'triangle':
        this.drawTriangle()
        break
      case 'hexagon':
        this.drawHexagon()
        break
    }

    ctx.restore()
  }

  drawCircle() {
    const gradient = ctx.createRadialGradient(0, 0, 0, 0, 0, this.size)
    gradient.addColorStop(0, this.color + '80')
    gradient.addColorStop(1, this.color + '20')
    
    ctx.fillStyle = gradient
    ctx.beginPath()
    ctx.arc(0, 0, this.size, 0, Math.PI * 2)
    ctx.fill()
    
    // Subtle stroke
    ctx.strokeStyle = this.color + '40'
    ctx.lineWidth = 1
    ctx.stroke()
  }

  drawSquare() {
    const gradient = ctx.createLinearGradient(-this.size/2, -this.size/2, this.size/2, this.size/2)
    gradient.addColorStop(0, this.color + '80')
    gradient.addColorStop(1, this.color + '20')
    
    ctx.fillStyle = gradient
    ctx.fillRect(-this.size/2, -this.size/2, this.size, this.size)
    
    ctx.strokeStyle = this.color + '40'
    ctx.lineWidth = 1
    ctx.strokeRect(-this.size/2, -this.size/2, this.size, this.size)
  }

  drawTriangle() {
    const gradient = ctx.createLinearGradient(0, -this.size/2, 0, this.size/2)
    gradient.addColorStop(0, this.color + '80')
    gradient.addColorStop(1, this.color + '20')
    
    ctx.fillStyle = gradient
    ctx.beginPath()
    ctx.moveTo(0, -this.size/2)
    ctx.lineTo(-this.size/2, this.size/2)
    ctx.lineTo(this.size/2, this.size/2)
    ctx.closePath()
    ctx.fill()
    
    ctx.strokeStyle = this.color + '40'
    ctx.lineWidth = 1
    ctx.stroke()
  }

  drawHexagon() {
    const gradient = ctx.createRadialGradient(0, 0, 0, 0, 0, this.size)
    gradient.addColorStop(0, this.color + '80')
    gradient.addColorStop(1, this.color + '20')
    
    ctx.fillStyle = gradient
    ctx.beginPath()
    for (let i = 0; i < 6; i++) {
      const angle = (i * Math.PI) / 3
      const x = Math.cos(angle) * this.size/2
      const y = Math.sin(angle) * this.size/2
      if (i === 0) ctx.moveTo(x, y)
      else ctx.lineTo(x, y)
    }
    ctx.closePath()
    ctx.fill()
    
    ctx.strokeStyle = this.color + '40'
    ctx.lineWidth = 1
    ctx.stroke()
  }
}

const initShapes = () => {
  shapes = []
  const shapeTypes = ['circle', 'square', 'triangle', 'hexagon']
  const colorValues = [colors.primary, colors.accent, colors.light]
  
  // Create fewer shapes for better performance
  const numShapes = Math.min(12, Math.floor(canvas.width * canvas.height / 15000))
  
  for (let i = 0; i < numShapes; i++) {
    const x = Math.random() * canvas.width
    const y = Math.random() * canvas.height
    const size = 20 + Math.random() * 40
    const type = shapeTypes[Math.floor(Math.random() * shapeTypes.length)]
    const color = colorValues[Math.floor(Math.random() * colorValues.length)]
    
    shapes.push(new Shape(x, y, size, type, color))
  }
}

const animate = () => {
  ctx.clearRect(0, 0, canvas.width, canvas.height)
  
  shapes.forEach(shape => {
    shape.update()
    shape.draw()
  })
  
  // Draw subtle connecting lines
  drawConnections()
  
  animationId = requestAnimationFrame(animate)
}

const drawConnections = () => {
  ctx.strokeStyle = colors.accent + '20'
  ctx.lineWidth = 1
  
  for (let i = 0; i < shapes.length; i++) {
    for (let j = i + 1; j < shapes.length; j++) {
      const dx = shapes[i].x - shapes[j].x
      const dy = shapes[i].y - shapes[j].y
      const distance = Math.sqrt(dx * dx + dy * dy)
      
      if (distance < 120) {
        const opacity = (120 - distance) / 120 * 0.3
        ctx.globalAlpha = opacity
        ctx.beginPath()
        ctx.moveTo(shapes[i].x, shapes[i].y)
        ctx.lineTo(shapes[j].x, shapes[j].y)
        ctx.stroke()
        ctx.globalAlpha = 1
      }
    }
  }
}

const handleMouseMove = (event) => {
  const rect = canvas.getBoundingClientRect()
  mouse.x = event.clientX - rect.left
  mouse.y = event.clientY - rect.top
}

const handleResize = () => {
  if (!canvas || !containerRef.value) return
  
  try {
    canvas.width = containerRef.value.offsetWidth
    canvas.height = containerRef.value.offsetHeight
    
    initShapes()
  } catch (error) {
    console.warn('FloatingShapes: Error during resize:', error)
  }
}

onMounted(() => {
  try {
    canvas = canvasRef.value
    if (!canvas) {
      console.warn('FloatingShapes: Canvas element not found')
      return
    }
    
    ctx = canvas.getContext('2d')
    if (!ctx) {
      console.warn('FloatingShapes: Could not get 2D context')
      return
    }
    
    handleResize()
    
    if (canvas) {
      canvas.addEventListener('mousemove', handleMouseMove)
    }
    window.addEventListener('resize', handleResize)
    
    animate()
  } catch (error) {
    console.warn('FloatingShapes: Error during initialization:', error)
  }
})

onUnmounted(() => {
  try {
    if (animationId) {
      cancelAnimationFrame(animationId)
      animationId = null
    }
    
    if (canvas) {
      canvas.removeEventListener('mousemove', handleMouseMove)
    }
    window.removeEventListener('resize', handleResize)
  } catch (error) {
    console.warn('FloatingShapes: Error during cleanup:', error)
  }
})
</script>

<style scoped>
.floating-shapes-container {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  overflow: hidden;
  pointer-events: none;
}

.floating-shapes-canvas {
  width: 100%;
  height: 100%;
  pointer-events: auto;
}
</style>

