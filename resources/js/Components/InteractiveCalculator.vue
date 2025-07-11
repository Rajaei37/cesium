<template>
  <div class="bg-white p-8 rounded-xl shadow-lg max-w-2xl mx-auto">
    <h3 class="text-2xl font-bold text-primary mb-6 text-center">Interactive ROI Calculator</h3>
    
    <div class="space-y-6">
      <!-- Input: Current Monthly Revenue -->
      <div>
        <label for="currentRevenue" class="block text-gray-700 text-sm font-semibold mb-2">Current Monthly Revenue ($)</label>
        <input
          type="number"
          id="currentRevenue"
          v-model.number="currentRevenue"
          @input="calculateROI"
          class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-secondary"
          placeholder="e.g., 10000"
          min="0"
        />
      </div>

      <!-- Input: Desired Growth Rate -->
      <div>
        <label for="growthRate" class="block text-gray-700 text-sm font-semibold mb-2">Desired Monthly Growth Rate (%)</label>
        <input
          type="number"
          id="growthRate"
          v-model.number="growthRate"
          @input="calculateROI"
          class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-secondary"
          placeholder="e.g., 10"
          min="0"
          max="100"
        />
      </div>

      <!-- Input: Marketing Budget -->
      <div>
        <label for="marketingBudget" class="block text-gray-700 text-sm font-semibold mb-2">Monthly Marketing Budget ($)</label>
        <input
          type="number"
          id="marketingBudget"
          v-model.number="marketingBudget"
          @input="calculateROI"
          class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-secondary"
          placeholder="e.g., 1000"
          min="0"
        />
      </div>
    </div>

    <!-- Results -->
    <div class="mt-8 pt-6 border-t border-gray-200 space-y-4">
      <h4 class="text-xl font-bold text-primary text-center">Projected Results</h4>
      
      <div class="flex justify-between items-center">
        <p class="text-gray-700 font-medium">Projected New Revenue:</p>
        <p class="text-lg font-bold text-green-600">{{ formatCurrency(projectedNewRevenue) }}</p>
      </div>

      <div class="flex justify-between items-center">
        <p class="text-gray-700 font-medium">Estimated ROI:</p>
        <p :class="[
          'text-lg font-bold',
          estimatedROI >= 0 ? 'text-green-600' : 'text-red-600'
        ]">{{ formatPercentage(estimatedROI) }}</p>
      </div>

      <p class="text-sm text-gray-500 text-center mt-4">
        *This is an estimation. Actual results may vary based on market conditions and strategy execution.
      </p>
    </div>
  </div>
</template>

<script setup>
import { ref, computed } from 'vue'

const currentRevenue = ref(10000)
const growthRate = ref(10) // percentage
const marketingBudget = ref(1000)

const projectedNewRevenue = computed(() => {
  const revenue = currentRevenue.value * (growthRate.value / 100)
  return isNaN(revenue) ? 0 : revenue
})

const estimatedROI = computed(() => {
  if (marketingBudget.value <= 0) return 0
  const roi = (projectedNewRevenue.value - marketingBudget.value) / marketingBudget.value * 100
  return isNaN(roi) ? 0 : roi
})

const calculateROI = () => {
  // Computed properties will automatically re-calculate when refs change
}

const formatCurrency = (value) => {
  return new Intl.NumberFormat('en-US', {
    style: 'currency',
    currency: 'USD',
    minimumFractionDigits: 0,
    maximumFractionDigits: 0
  }).format(value)
}

const formatPercentage = (value) => {
  return new Intl.NumberFormat('en-US', {
    style: 'percent',
    minimumFractionDigits: 0,
    maximumFractionDigits: 0
  }).format(value / 100)
}
</script>

<style scoped>
/* Add any specific styles here if needed */
.text-primary {
  color: #362869;
}
.text-secondary {
  color: #facb24;
}
.focus\:ring-secondary:focus {
  box-shadow: 0 0 0 2px #facb24;
}
</style>


