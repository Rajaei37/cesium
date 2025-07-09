<template>
  <section class="py-24 bg-gradient-to-br from-[#f8fafc] to-[#e2e8f0] relative overflow-hidden">
    <!-- Background Elements -->
    <div class="absolute inset-0 opacity-5">
      <div class="absolute top-20 left-20 w-64 h-64 bg-[#362869] rounded-full blur-3xl"></div>
      <div class="absolute bottom-20 right-20 w-48 h-48 bg-[#facb24] rounded-full blur-3xl"></div>
    </div>

    <div class="max-w-6xl mx-auto px-6 relative z-10">
      <!-- Section Header -->
      <div class="text-center mb-16">
        <h2 class="text-4xl md:text-5xl font-bold text-[#362869] mb-6">
          ROI Calculator
        </h2>
        <p class="text-xl text-gray-600 max-w-3xl mx-auto">
          Discover your potential return on investment with our data-driven marketing strategies. 
          Get personalized projections based on your current metrics.
        </p>
      </div>

      <div class="grid lg:grid-cols-2 gap-12 items-start">
        <!-- Calculator Form -->
        <div class="bg-white rounded-3xl shadow-2xl p-8 border border-gray-100">
          <div class="mb-8">
            <h3 class="text-2xl font-bold text-[#362869] mb-2">Calculate Your Potential</h3>
            <p class="text-gray-600">Enter your current metrics to see projected improvements</p>
          </div>

          <!-- Step Indicator -->
          <div class="mb-8">
            <div class="flex items-center justify-between mb-4">
              <div 
                v-for="(step, index) in steps" 
                :key="step.id"
                class="flex items-center"
                :class="{ 'flex-1': index < steps.length - 1 }"
              >
                <div 
                  class="w-10 h-10 rounded-full flex items-center justify-center text-sm font-bold transition-all duration-300"
                  :class="currentStep >= step.id 
                    ? 'bg-[#362869] text-white' 
                    : 'bg-gray-200 text-gray-500'"
                >
                  {{ step.id }}
                </div>
                <div v-if="index < steps.length - 1" class="flex-1 h-1 mx-4 bg-gray-200 rounded">
                  <div 
                    class="h-full bg-[#362869] rounded transition-all duration-500"
                    :style="{ width: currentStep > step.id ? '100%' : '0%' }"
                  ></div>
                </div>
              </div>
            </div>
            <div class="text-center">
              <h4 class="font-semibold text-[#362869]">{{ getCurrentStepTitle() }}</h4>
              <p class="text-sm text-gray-600">{{ getCurrentStepDescription() }}</p>
            </div>
          </div>

          <!-- Form Steps -->
          <form @submit.prevent="handleSubmit" class="space-y-6">
            <!-- Step 1: Business Information -->
            <div v-show="currentStep === 1" class="space-y-6">
              <div>
                <label class="block text-sm font-medium text-[#362869] mb-2">
                  Business Type
                </label>
                <select 
                  v-model="formData.businessType" 
                  class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#362869] focus:border-transparent transition-all duration-300"
                  required
                >
                  <option value="">Select your business type</option>
                  <option value="online-casino">Online Casino</option>
                  <option value="sportsbook">Sportsbook</option>
                  <option value="poker-room">Poker Room</option>
                  <option value="lottery">Lottery/Sweepstakes</option>
                  <option value="affiliate">Affiliate Network</option>
                  <option value="other">Other Gaming</option>
                </select>
              </div>

              <div>
                <label class="block text-sm font-medium text-[#362869] mb-2">
                  Target Markets
                </label>
                <div class="grid grid-cols-2 gap-3">
                  <label 
                    v-for="market in availableMarkets" 
                    :key="market.value"
                    class="flex items-center p-3 border border-gray-300 rounded-lg cursor-pointer hover:border-[#362869] transition-colors duration-300"
                    :class="formData.targetMarkets.includes(market.value) ? 'border-[#362869] bg-[#362869]/5' : ''"
                  >
                    <input 
                      type="checkbox" 
                      :value="market.value" 
                      v-model="formData.targetMarkets"
                      class="sr-only"
                    />
                    <div 
                      class="w-4 h-4 border-2 rounded mr-3 flex items-center justify-center transition-all duration-300"
                      :class="formData.targetMarkets.includes(market.value) 
                        ? 'border-[#362869] bg-[#362869]' 
                        : 'border-gray-300'"
                    >
                      <svg 
                        v-if="formData.targetMarkets.includes(market.value)"
                        class="w-2 h-2 text-white" 
                        fill="currentColor" 
                        viewBox="0 0 20 20"
                      >
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                      </svg>
                    </div>
                    <span class="text-sm font-medium">{{ market.label }}</span>
                  </label>
                </div>
              </div>
            </div>

            <!-- Step 2: Current Metrics -->
            <div v-show="currentStep === 2" class="space-y-6">
              <div class="grid md:grid-cols-2 gap-6">
                <div>
                  <label class="block text-sm font-medium text-[#362869] mb-2">
                    Monthly Marketing Budget ($)
                  </label>
                  <input 
                    type="number" 
                    v-model.number="formData.monthlyBudget"
                    placeholder="e.g., 50000"
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#362869] focus:border-transparent transition-all duration-300"
                    required
                    min="1000"
                  />
                  <p class="text-xs text-gray-500 mt-1">Minimum $1,000</p>
                </div>

                <div>
                  <label class="block text-sm font-medium text-[#362869] mb-2">
                    Current Monthly Revenue ($)
                  </label>
                  <input 
                    type="number" 
                    v-model.number="formData.monthlyRevenue"
                    placeholder="e.g., 500000"
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#362869] focus:border-transparent transition-all duration-300"
                    required
                    min="1000"
                  />
                </div>

                <div>
                  <label class="block text-sm font-medium text-[#362869] mb-2">
                    Cost Per Acquisition ($)
                  </label>
                  <input 
                    type="number" 
                    v-model.number="formData.currentCPA"
                    placeholder="e.g., 150"
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#362869] focus:border-transparent transition-all duration-300"
                    required
                    min="1"
                  />
                </div>

                <div>
                  <label class="block text-sm font-medium text-[#362869] mb-2">
                    Player Lifetime Value ($)
                  </label>
                  <input 
                    type="number" 
                    v-model.number="formData.playerLTV"
                    placeholder="e.g., 800"
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#362869] focus:border-transparent transition-all duration-300"
                    required
                    min="1"
                  />
                </div>

                <div>
                  <label class="block text-sm font-medium text-[#362869] mb-2">
                    Monthly New Players
                  </label>
                  <input 
                    type="number" 
                    v-model.number="formData.monthlyPlayers"
                    placeholder="e.g., 1000"
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#362869] focus:border-transparent transition-all duration-300"
                    required
                    min="1"
                  />
                </div>

                <div>
                  <label class="block text-sm font-medium text-[#362869] mb-2">
                    Conversion Rate (%)
                  </label>
                  <input 
                    type="number" 
                    v-model.number="formData.conversionRate"
                    placeholder="e.g., 2.5"
                    step="0.1"
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#362869] focus:border-transparent transition-all duration-300"
                    required
                    min="0.1"
                    max="100"
                  />
                </div>
              </div>
            </div>

            <!-- Step 3: Goals -->
            <div v-show="currentStep === 3" class="space-y-6">
              <div>
                <label class="block text-sm font-medium text-[#362869] mb-2">
                  Primary Goal
                </label>
                <select 
                  v-model="formData.primaryGoal" 
                  class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#362869] focus:border-transparent transition-all duration-300"
                  required
                >
                  <option value="">Select your primary goal</option>
                  <option value="increase-players">Increase Player Acquisition</option>
                  <option value="improve-ltv">Improve Player Lifetime Value</option>
                  <option value="reduce-cpa">Reduce Cost Per Acquisition</option>
                  <option value="expand-markets">Expand to New Markets</option>
                  <option value="improve-retention">Improve Player Retention</option>
                  <option value="increase-revenue">Increase Overall Revenue</option>
                </select>
              </div>

              <div>
                <label class="block text-sm font-medium text-[#362869] mb-2">
                  Timeline for Results
                </label>
                <div class="grid grid-cols-3 gap-3">
                  <label 
                    v-for="timeline in timelineOptions" 
                    :key="timeline.value"
                    class="flex flex-col items-center p-4 border border-gray-300 rounded-lg cursor-pointer hover:border-[#362869] transition-colors duration-300"
                    :class="formData.timeline === timeline.value ? 'border-[#362869] bg-[#362869]/5' : ''"
                  >
                    <input 
                      type="radio" 
                      :value="timeline.value" 
                      v-model="formData.timeline"
                      class="sr-only"
                    />
                    <div class="text-2xl mb-2">{{ timeline.icon }}</div>
                    <span class="text-sm font-medium text-center">{{ timeline.label }}</span>
                  </label>
                </div>
              </div>

              <div>
                <label class="block text-sm font-medium text-[#362869] mb-2">
                  Services of Interest
                </label>
                <div class="grid grid-cols-2 gap-3">
                  <label 
                    v-for="service in availableServices" 
                    :key="service.value"
                    class="flex items-center p-3 border border-gray-300 rounded-lg cursor-pointer hover:border-[#362869] transition-colors duration-300"
                    :class="formData.interestedServices.includes(service.value) ? 'border-[#362869] bg-[#362869]/5' : ''"
                  >
                    <input 
                      type="checkbox" 
                      :value="service.value" 
                      v-model="formData.interestedServices"
                      class="sr-only"
                    />
                    <div 
                      class="w-4 h-4 border-2 rounded mr-3 flex items-center justify-center transition-all duration-300"
                      :class="formData.interestedServices.includes(service.value) 
                        ? 'border-[#362869] bg-[#362869]' 
                        : 'border-gray-300'"
                    >
                      <svg 
                        v-if="formData.interestedServices.includes(service.value)"
                        class="w-2 h-2 text-white" 
                        fill="currentColor" 
                        viewBox="0 0 20 20"
                      >
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                      </svg>
                    </div>
                    <span class="text-sm font-medium">{{ service.label }}</span>
                  </label>
                </div>
              </div>
            </div>

            <!-- Navigation Buttons -->
            <div class="flex justify-between pt-6 border-t border-gray-200">
              <button
                v-if="currentStep > 1"
                type="button"
                @click="previousStep"
                class="px-6 py-3 border border-[#362869] text-[#362869] rounded-lg font-medium hover:bg-[#362869] hover:text-white transition-all duration-300"
              >
                Previous
              </button>
              <div v-else></div>

              <button
                v-if="currentStep < 3"
                type="button"
                @click="nextStep"
                class="px-6 py-3 bg-[#362869] text-white rounded-lg font-medium hover:bg-[#5f4b8b] transition-all duration-300"
                :disabled="!canProceed"
              >
                Next Step
              </button>
              <button
                v-else
                type="submit"
                class="px-8 py-3 bg-[#facb24] text-[#362869] rounded-lg font-bold hover:bg-yellow-400 transition-all duration-300 hover:scale-105"
                :disabled="!canProceed || isCalculating"
              >
                <span v-if="!isCalculating">Calculate ROI</span>
                <span v-else class="flex items-center gap-2">
                  <svg class="animate-spin w-4 h-4" fill="none" viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                  </svg>
                  Calculating...
                </span>
              </button>
            </div>
          </form>
        </div>

        <!-- Results Panel -->
        <div class="bg-white rounded-3xl shadow-2xl p-8 border border-gray-100 sticky top-8">
          <div v-if="!showResults" class="text-center py-12">
            <div class="w-24 h-24 bg-[#362869]/10 rounded-full flex items-center justify-center mx-auto mb-6">
              <svg class="w-12 h-12 text-[#362869]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v4a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
              </svg>
            </div>
            <h3 class="text-xl font-bold text-[#362869] mb-2">Your Results Will Appear Here</h3>
            <p class="text-gray-600">Complete the form to see your personalized ROI projections</p>
          </div>

          <div v-else class="space-y-6">
            <div class="text-center mb-8">
              <h3 class="text-2xl font-bold text-[#362869] mb-2">Your ROI Projection</h3>
              <p class="text-gray-600">Based on industry benchmarks and our proven strategies</p>
            </div>

            <!-- Key Metrics -->
            <div class="grid grid-cols-2 gap-4 mb-8">
              <div class="text-center bg-gradient-to-br from-green-50 to-green-100 rounded-xl p-4 border border-green-200">
                <div class="text-2xl font-bold text-green-700 mb-1">{{ results.projectedROI }}%</div>
                <div class="text-sm text-green-600">Projected ROI</div>
              </div>
              <div class="text-center bg-gradient-to-br from-blue-50 to-blue-100 rounded-xl p-4 border border-blue-200">
                <div class="text-2xl font-bold text-blue-700 mb-1">{{ results.revenueIncrease }}%</div>
                <div class="text-sm text-blue-600">Revenue Increase</div>
              </div>
              <div class="text-center bg-gradient-to-br from-purple-50 to-purple-100 rounded-xl p-4 border border-purple-200">
                <div class="text-2xl font-bold text-purple-700 mb-1">{{ results.cpaReduction }}%</div>
                <div class="text-sm text-purple-600">CPA Reduction</div>
              </div>
              <div class="text-center bg-gradient-to-br from-orange-50 to-orange-100 rounded-xl p-4 border border-orange-200">
                <div class="text-2xl font-bold text-orange-700 mb-1">{{ results.playerIncrease }}%</div>
                <div class="text-sm text-orange-600">Player Growth</div>
              </div>
            </div>

            <!-- Detailed Projections -->
            <div class="space-y-4">
              <h4 class="font-semibold text-[#362869] mb-3">12-Month Projections</h4>
              
              <div class="bg-gray-50 rounded-lg p-4">
                <div class="flex justify-between items-center mb-2">
                  <span class="text-sm text-gray-600">Monthly Revenue</span>
                  <div class="text-right">
                    <div class="text-sm text-gray-500 line-through">${{ formatNumber(formData.monthlyRevenue) }}</div>
                    <div class="font-bold text-[#362869]">${{ formatNumber(results.projectedMonthlyRevenue) }}</div>
                  </div>
                </div>
                <div class="w-full bg-gray-200 rounded-full h-2">
                  <div class="bg-[#362869] h-2 rounded-full transition-all duration-1000" :style="{ width: '75%' }"></div>
                </div>
              </div>

              <div class="bg-gray-50 rounded-lg p-4">
                <div class="flex justify-between items-center mb-2">
                  <span class="text-sm text-gray-600">Monthly Players</span>
                  <div class="text-right">
                    <div class="text-sm text-gray-500 line-through">{{ formatNumber(formData.monthlyPlayers) }}</div>
                    <div class="font-bold text-[#362869]">{{ formatNumber(results.projectedMonthlyPlayers) }}</div>
                  </div>
                </div>
                <div class="w-full bg-gray-200 rounded-full h-2">
                  <div class="bg-[#facb24] h-2 rounded-full transition-all duration-1000" :style="{ width: '65%' }"></div>
                </div>
              </div>

              <div class="bg-gray-50 rounded-lg p-4">
                <div class="flex justify-between items-center mb-2">
                  <span class="text-sm text-gray-600">Cost Per Acquisition</span>
                  <div class="text-right">
                    <div class="text-sm text-gray-500 line-through">${{ formatNumber(formData.currentCPA) }}</div>
                    <div class="font-bold text-green-600">${{ formatNumber(results.projectedCPA) }}</div>
                  </div>
                </div>
                <div class="w-full bg-gray-200 rounded-full h-2">
                  <div class="bg-green-500 h-2 rounded-full transition-all duration-1000" :style="{ width: '45%' }"></div>
                </div>
              </div>
            </div>

            <!-- Call to Action -->
            <div class="text-center pt-6 border-t border-gray-200">
              <p class="text-sm text-gray-600 mb-4">Ready to achieve these results?</p>
              <button
                @click="requestConsultation"
                class="w-full px-6 py-3 bg-[#362869] text-white rounded-lg font-bold hover:bg-[#5f4b8b] transition-all duration-300 hover:scale-105 shadow-lg"
              >
                Get Free Consultation
              </button>
              <p class="text-xs text-gray-500 mt-2">No commitment required</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
import { ref, computed, watch } from 'vue'

// Emits
const emit = defineEmits(['consultation-request', 'calculation-complete'])

// State
const currentStep = ref(1)
const showResults = ref(false)
const isCalculating = ref(false)

// Form data
const formData = ref({
  businessType: '',
  targetMarkets: [],
  monthlyBudget: null,
  monthlyRevenue: null,
  currentCPA: null,
  playerLTV: null,
  monthlyPlayers: null,
  conversionRate: null,
  primaryGoal: '',
  timeline: '',
  interestedServices: []
})

// Results
const results = ref({
  projectedROI: 0,
  revenueIncrease: 0,
  cpaReduction: 0,
  playerIncrease: 0,
  projectedMonthlyRevenue: 0,
  projectedMonthlyPlayers: 0,
  projectedCPA: 0
})

// Configuration data
const steps = ref([
  { id: 1, title: 'Business Info', description: 'Tell us about your business' },
  { id: 2, title: 'Current Metrics', description: 'Share your current performance' },
  { id: 3, title: 'Goals', description: 'Define your objectives' }
])

const availableMarkets = ref([
  { value: 'us', label: 'United States' },
  { value: 'uk', label: 'United Kingdom' },
  { value: 'canada', label: 'Canada' },
  { value: 'australia', label: 'Australia' },
  { value: 'europe', label: 'Europe' },
  { value: 'latam', label: 'Latin America' }
])

const timelineOptions = ref([
  { value: '3-months', label: '3 Months', icon: '🚀' },
  { value: '6-months', label: '6 Months', icon: '📈' },
  { value: '12-months', label: '12 Months', icon: '🎯' }
])

const availableServices = ref([
  { value: 'paid-media', label: 'Paid Media' },
  { value: 'seo', label: 'SEO' },
  { value: 'social-media', label: 'Social Media' },
  { value: 'crm', label: 'CRM & Automation' },
  { value: 'creative', label: 'Creative Services' },
  { value: 'analytics', label: 'Analytics & BI' }
])

// Computed properties
const canProceed = computed(() => {
  switch (currentStep.value) {
    case 1:
      return formData.value.businessType && formData.value.targetMarkets.length > 0
    case 2:
      return formData.value.monthlyBudget && 
             formData.value.monthlyRevenue && 
             formData.value.currentCPA && 
             formData.value.playerLTV && 
             formData.value.monthlyPlayers && 
             formData.value.conversionRate
    case 3:
      return formData.value.primaryGoal && 
             formData.value.timeline && 
             formData.value.interestedServices.length > 0
    default:
      return false
  }
})

// Methods
const getCurrentStepTitle = () => {
  const step = steps.value.find(s => s.id === currentStep.value)
  return step ? step.title : ''
}

const getCurrentStepDescription = () => {
  const step = steps.value.find(s => s.id === currentStep.value)
  return step ? step.description : ''
}

const nextStep = () => {
  if (canProceed.value && currentStep.value < 3) {
    currentStep.value++
  }
}

const previousStep = () => {
  if (currentStep.value > 1) {
    currentStep.value--
  }
}

const calculateROI = () => {
  // Industry benchmark improvements based on our research
  const improvements = {
    'online-casino': { revenue: 45, cpa: 35, players: 60 },
    'sportsbook': { revenue: 40, cpa: 30, players: 55 },
    'poker-room': { revenue: 35, cpa: 25, players: 45 },
    'lottery': { revenue: 50, cpa: 40, players: 65 },
    'affiliate': { revenue: 55, cpa: 45, players: 70 },
    'other': { revenue: 40, cpa: 30, players: 50 }
  }

  const businessImprovement = improvements[formData.value.businessType] || improvements['other']
  
  // Apply timeline multipliers
  const timelineMultipliers = {
    '3-months': 0.6,
    '6-months': 0.8,
    '12-months': 1.0
  }
  
  const multiplier = timelineMultipliers[formData.value.timeline] || 1.0
  
  // Calculate projections
  const revenueIncrease = Math.round(businessImprovement.revenue * multiplier)
  const cpaReduction = Math.round(businessImprovement.cpa * multiplier)
  const playerIncrease = Math.round(businessImprovement.players * multiplier)
  
  const projectedMonthlyRevenue = Math.round(formData.value.monthlyRevenue * (1 + revenueIncrease / 100))
  const projectedMonthlyPlayers = Math.round(formData.value.monthlyPlayers * (1 + playerIncrease / 100))
  const projectedCPA = Math.round(formData.value.currentCPA * (1 - cpaReduction / 100))
  
  // Calculate ROI based on revenue increase vs marketing spend
  const additionalRevenue = projectedMonthlyRevenue - formData.value.monthlyRevenue
  const projectedROI = Math.round((additionalRevenue / formData.value.monthlyBudget) * 100)
  
  results.value = {
    projectedROI,
    revenueIncrease,
    cpaReduction,
    playerIncrease,
    projectedMonthlyRevenue,
    projectedMonthlyPlayers,
    projectedCPA
  }
}

const handleSubmit = async () => {
  if (!canProceed.value) return
  
  isCalculating.value = true
  
  // Simulate calculation time
  await new Promise(resolve => setTimeout(resolve, 2000))
  
  calculateROI()
  showResults.value = true
  isCalculating.value = false
  
  emit('calculation-complete', {
    formData: formData.value,
    results: results.value
  })
}

const requestConsultation = () => {
  emit('consultation-request', {
    formData: formData.value,
    results: results.value
  })
}

const formatNumber = (num) => {
  if (!num) return '0'
  return new Intl.NumberFormat().format(num)
}

// Watch for form changes to reset results
watch(() => formData.value, () => {
  if (showResults.value) {
    showResults.value = false
  }
}, { deep: true })

// Expose methods for parent component
defineExpose({
  resetCalculator: () => {
    currentStep.value = 1
    showResults.value = false
    formData.value = {
      businessType: '',
      targetMarkets: [],
      monthlyBudget: null,
      monthlyRevenue: null,
      currentCPA: null,
      playerLTV: null,
      monthlyPlayers: null,
      conversionRate: null,
      primaryGoal: '',
      timeline: '',
      interestedServices: []
    }
  },
  goToStep: (step) => {
    currentStep.value = step
  }
})
</script>

<style scoped>
/* Custom animations */
@keyframes slideIn {
  from {
    opacity: 0;
    transform: translateX(20px);
  }
  to {
    opacity: 1;
    transform: translateX(0);
  }
}

.animate-slide-in {
  animation: slideIn 0.5s ease-out;
}

/* Enhanced form styling */
input:focus,
select:focus {
  box-shadow: 0 0 0 3px rgba(54, 40, 105, 0.1);
}

/* Progress bar animation */
.progress-bar {
  transition: width 0.5s ease-in-out;
}

/* Checkbox and radio custom styling */
input[type="checkbox"]:checked + div,
input[type="radio"]:checked + div {
  background-color: #362869;
  border-color: #362869;
}

/* Loading spinner */
@keyframes spin {
  to {
    transform: rotate(360deg);
  }
}

.animate-spin {
  animation: spin 1s linear infinite;
}

/* Results animation */
@keyframes countUp {
  from {
    opacity: 0;
    transform: translateY(20px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

.animate-count-up {
  animation: countUp 0.8s ease-out;
}

/* Accessibility improvements */
@media (prefers-reduced-motion: reduce) {
  .transition-all,
  .transition-colors,
  .transition-transform {
    transition: none;
  }
  
  .animate-slide-in,
  .animate-count-up,
  .animate-spin {
    animation: none;
  }
  
  .hover\:scale-105 {
    transform: none;
  }
}

/* Focus styles for better accessibility */
button:focus-visible,
input:focus-visible,
select:focus-visible {
  outline: 2px solid #facb24;
  outline-offset: 2px;
}

/* Enhanced gradient effects */
.bg-gradient-to-br {
  background-image: linear-gradient(to bottom right, var(--tw-gradient-stops));
}

/* Custom scrollbar */
.overflow-y-auto::-webkit-scrollbar {
  width: 8px;
}

.overflow-y-auto::-webkit-scrollbar-track {
  background: #f1f1f1;
  border-radius: 4px;
}

.overflow-y-auto::-webkit-scrollbar-thumb {
  background: #362869;
  border-radius: 4px;
}

.overflow-y-auto::-webkit-scrollbar-thumb:hover {
  background: #5f4b8b;
}

/* Sticky positioning for results panel */
.sticky {
  position: sticky;
}

/* Enhanced shadow effects */
.shadow-2xl {
  box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
}

/* Form validation styling */
input:invalid {
  border-color: #ef4444;
}

input:valid {
  border-color: #10b981;
}

/* Button disabled state */
button:disabled {
  opacity: 0.6;
  cursor: not-allowed;
}

button:disabled:hover {
  transform: none;
  background-color: inherit;
}
</style>

