<template>
  <section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-6">
      <!-- Section Header -->
      <div class="text-center mb-12">
        <h2 class="text-3xl md:text-4xl font-bold text-[#362869] mb-4">
          Trusted by Industry Leaders
        </h2>
        <p class="text-lg text-gray-600 max-w-3xl mx-auto">
          Our certifications, partnerships, and industry recognition demonstrate our commitment to excellence and compliance in the casino marketing industry.
        </p>
      </div>

      <!-- Filter Tabs -->
      <div class="flex flex-wrap justify-center gap-2 mb-8">
        <button
          v-for="category in categories"
          :key="category.id"
          @click="activeCategory = category.id"
          class="px-4 py-2 rounded-full text-sm font-medium transition-all duration-300"
          :class="activeCategory === category.id 
            ? 'bg-[#362869] text-white shadow-lg' 
            : 'bg-white text-[#362869] hover:bg-[#362869]/10 border border-[#362869]/20'"
        >
          {{ category.name }}
          <span class="ml-2 text-xs opacity-75">({{ getBadgeCount(category.id) }})</span>
        </button>
      </div>

      <!-- Trust Badges Grid -->
      <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-6 gap-6 mb-12">
        <div
          v-for="badge in filteredBadges"
          :key="badge.id"
          class="group bg-white rounded-xl p-6 shadow-md hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 border border-gray-100 hover:border-[#362869]/20 cursor-pointer"
          @click="showBadgeDetails(badge)"
          @mouseenter="playHoverSound"
        >
          <!-- Badge Image -->
          <div class="relative mb-4">
            <div v-if="!badge.imageError" class="w-full h-16 flex items-center justify-center">
              <img
                :src="badge.image"
                :alt="`${badge.name} certification`"
                class="max-w-full max-h-full object-contain group-hover:scale-110 transition-transform duration-300"
                @error="handleImageError(badge)"
                loading="lazy"
              />
            </div>
            <div v-else class="w-full h-16 bg-[#362869]/10 rounded-lg flex items-center justify-center">
              <span class="text-[#362869] font-bold text-sm">{{ getInitials(badge.name) }}</span>
            </div>
            
            <!-- Verification Status -->
            <div v-if="badge.verified" class="absolute -top-2 -right-2">
              <div class="w-6 h-6 bg-green-500 rounded-full flex items-center justify-center shadow-lg">
                <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                </svg>
              </div>
            </div>

            <!-- Expiry Warning -->
            <div v-if="isExpiringSoon(badge)" class="absolute -top-2 -left-2">
              <div class="w-6 h-6 bg-yellow-500 rounded-full flex items-center justify-center shadow-lg">
                <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                </svg>
              </div>
            </div>
          </div>

          <!-- Badge Info -->
          <div class="text-center">
            <h3 class="font-semibold text-[#362869] text-sm mb-1 group-hover:text-[#5f4b8b] transition-colors duration-300">
              {{ badge.name }}
            </h3>
            <p class="text-xs text-gray-500 mb-2">{{ badge.issuer }}</p>
            
            <!-- Badge Type -->
            <div class="mb-2">
              <span 
                class="inline-block px-2 py-1 rounded-full text-xs font-medium"
                :class="getBadgeTypeClass(badge.type)"
              >
                {{ badge.type }}
              </span>
            </div>

            <!-- Date Info -->
            <div class="text-xs text-gray-400">
              <div v-if="badge.dateIssued">Issued: {{ formatDate(badge.dateIssued) }}</div>
              <div v-if="badge.expiryDate" class="mt-1">
                <span :class="isExpiringSoon(badge) ? 'text-yellow-600 font-medium' : ''">
                  Expires: {{ formatDate(badge.expiryDate) }}
                </span>
              </div>
              <div v-if="!badge.expiryDate && badge.dateIssued" class="text-green-600 font-medium">
                No Expiry
              </div>
            </div>
          </div>

          <!-- Hover Overlay -->
          <div class="absolute inset-0 bg-[#362869]/90 opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded-xl flex items-center justify-center p-4">
            <div class="text-center text-white">
              <h4 class="font-bold mb-2">{{ badge.name }}</h4>
              <p class="text-sm text-white/80 mb-3">{{ badge.description }}</p>
              <div class="text-xs text-[#facb24]">Click for details</div>
            </div>
          </div>
        </div>
      </div>

      <!-- Statistics Section -->
      <div class="bg-white rounded-2xl p-8 shadow-lg border border-gray-100">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
          <div class="group">
            <div class="text-3xl font-bold text-[#362869] mb-2 group-hover:text-[#5f4b8b] transition-colors duration-300">
              {{ totalBadges }}
            </div>
            <div class="text-sm text-gray-600">Total Certifications</div>
          </div>
          <div class="group">
            <div class="text-3xl font-bold text-[#362869] mb-2 group-hover:text-[#5f4b8b] transition-colors duration-300">
              {{ activeBadges }}
            </div>
            <div class="text-sm text-gray-600">Active Certifications</div>
          </div>
          <div class="group">
            <div class="text-3xl font-bold text-[#362869] mb-2 group-hover:text-[#5f4b8b] transition-colors duration-300">
              {{ yearsInBusiness }}+
            </div>
            <div class="text-sm text-gray-600">Years in Business</div>
          </div>
          <div class="group">
            <div class="text-3xl font-bold text-[#362869] mb-2 group-hover:text-[#5f4b8b] transition-colors duration-300">
              {{ industryAwards }}
            </div>
            <div class="text-sm text-gray-600">Industry Awards</div>
          </div>
        </div>
      </div>

      <!-- Call to Action -->
      <div class="text-center mt-12">
        <p class="text-lg text-gray-600 mb-6">
          Want to work with a certified and trusted partner?
        </p>
        <button
          @click="$emit('cta-click', 'trust-badges')"
          class="px-8 py-4 bg-[#362869] text-white rounded-full font-bold text-lg hover:bg-[#5f4b8b] transition-all duration-300 hover:scale-105 shadow-lg hover:shadow-xl"
        >
          Get Started Today
        </button>
      </div>
    </div>

    <!-- Badge Details Modal -->
    <div 
      v-if="selectedBadge"
      class="fixed inset-0 bg-black/50 flex items-center justify-center z-50 p-4"
      @click="closeBadgeDetails"
    >
      <div class="bg-white rounded-2xl max-w-2xl w-full max-h-[90vh] overflow-y-auto" @click.stop>
        <!-- Modal Header -->
        <div class="p-6 border-b border-gray-200">
          <div class="flex items-center justify-between">
            <div class="flex items-center gap-4">
              <div class="w-16 h-16 bg-gray-100 rounded-lg flex items-center justify-center">
                <img
                  v-if="!selectedBadge.imageError"
                  :src="selectedBadge.image"
                  :alt="`${selectedBadge.name} certification`"
                  class="max-w-full max-h-full object-contain"
                />
                <span v-else class="text-[#362869] font-bold">{{ getInitials(selectedBadge.name) }}</span>
              </div>
              <div>
                <h3 class="text-xl font-bold text-[#362869]">{{ selectedBadge.name }}</h3>
                <p class="text-gray-600">{{ selectedBadge.issuer }}</p>
              </div>
            </div>
            <button
              @click="closeBadgeDetails"
              class="w-8 h-8 bg-gray-100 hover:bg-gray-200 rounded-full flex items-center justify-center transition-colors duration-300"
            >
              <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
              </svg>
            </button>
          </div>
        </div>

        <!-- Modal Content -->
        <div class="p-6">
          <!-- Description -->
          <div class="mb-6">
            <h4 class="font-semibold text-[#362869] mb-2">About This Certification</h4>
            <p class="text-gray-700 leading-relaxed">{{ selectedBadge.description }}</p>
          </div>

          <!-- Details Grid -->
          <div class="grid md:grid-cols-2 gap-6 mb-6">
            <div>
              <h4 class="font-semibold text-[#362869] mb-3">Certification Details</h4>
              <div class="space-y-2 text-sm">
                <div class="flex justify-between">
                  <span class="text-gray-600">Type:</span>
                  <span class="font-medium">{{ selectedBadge.type }}</span>
                </div>
                <div class="flex justify-between">
                  <span class="text-gray-600">Issuer:</span>
                  <span class="font-medium">{{ selectedBadge.issuer }}</span>
                </div>
                <div v-if="selectedBadge.dateIssued" class="flex justify-between">
                  <span class="text-gray-600">Date Issued:</span>
                  <span class="font-medium">{{ formatDate(selectedBadge.dateIssued) }}</span>
                </div>
                <div v-if="selectedBadge.expiryDate" class="flex justify-between">
                  <span class="text-gray-600">Expiry Date:</span>
                  <span class="font-medium" :class="isExpiringSoon(selectedBadge) ? 'text-yellow-600' : ''">
                    {{ formatDate(selectedBadge.expiryDate) }}
                  </span>
                </div>
                <div class="flex justify-between">
                  <span class="text-gray-600">Status:</span>
                  <span class="font-medium" :class="selectedBadge.verified ? 'text-green-600' : 'text-yellow-600'">
                    {{ selectedBadge.verified ? 'Verified' : 'Pending' }}
                  </span>
                </div>
              </div>
            </div>

            <div v-if="selectedBadge.benefits && selectedBadge.benefits.length">
              <h4 class="font-semibold text-[#362869] mb-3">Benefits</h4>
              <ul class="space-y-2 text-sm">
                <li v-for="benefit in selectedBadge.benefits" :key="benefit" class="flex items-start gap-2">
                  <svg class="w-4 h-4 text-green-500 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                  </svg>
                  <span>{{ benefit }}</span>
                </li>
              </ul>
            </div>
          </div>

          <!-- Verification Link -->
          <div v-if="selectedBadge.verificationUrl" class="mb-6">
            <a
              :href="selectedBadge.verificationUrl"
              target="_blank"
              rel="noopener noreferrer"
              class="inline-flex items-center gap-2 px-4 py-2 bg-[#362869] text-white rounded-lg hover:bg-[#5f4b8b] transition-colors duration-300"
            >
              <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
              </svg>
              Verify Certification
            </a>
          </div>

          <!-- Related Certifications -->
          <div v-if="getRelatedBadges(selectedBadge).length" class="mb-6">
            <h4 class="font-semibold text-[#362869] mb-3">Related Certifications</h4>
            <div class="grid grid-cols-2 md:grid-cols-3 gap-3">
              <div
                v-for="relatedBadge in getRelatedBadges(selectedBadge)"
                :key="relatedBadge.id"
                class="p-3 bg-gray-50 rounded-lg text-center cursor-pointer hover:bg-gray-100 transition-colors duration-300"
                @click="showBadgeDetails(relatedBadge)"
              >
                <div class="w-8 h-8 mx-auto mb-2 bg-white rounded flex items-center justify-center">
                  <img
                    v-if="!relatedBadge.imageError"
                    :src="relatedBadge.image"
                    :alt="`${relatedBadge.name} certification`"
                    class="max-w-full max-h-full object-contain"
                  />
                  <span v-else class="text-xs font-bold text-[#362869]">{{ getInitials(relatedBadge.name) }}</span>
                </div>
                <div class="text-xs font-medium text-[#362869]">{{ relatedBadge.name }}</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
import { ref, computed, onMounted } from 'vue'

// Props
const props = defineProps({
  showStats: {
    type: Boolean,
    default: true
  },
  enableSound: {
    type: Boolean,
    default: false
  }
})

// Emits
const emit = defineEmits(['cta-click', 'badge-click'])

// State
const activeCategory = ref('all')
const selectedBadge = ref(null)
const hoverSound = ref(null)

// Categories
const categories = ref([
  { id: 'all', name: 'All' },
  { id: 'platform', name: 'Platform Certifications' },
  { id: 'compliance', name: 'Compliance' },
  { id: 'awards', name: 'Awards' },
  { id: 'partnerships', name: 'Partnerships' },
  { id: 'security', name: 'Security' }
])

// Trust badges data
const badges = ref([
  {
    id: 1,
    name: 'Google Partner',
    issuer: 'Google',
    type: 'Platform Certification',
    category: 'platform',
    image: '/assets/badges/google-partner.svg',
    description: 'Certified Google Partner with expertise in Google Ads and Analytics for the gaming industry.',
    dateIssued: '2023-01-15',
    expiryDate: '2025-01-15',
    verified: true,
    verificationUrl: 'https://partners.google.com/verify',
    benefits: [
      'Access to beta features and tools',
      'Dedicated Google support',
      'Advanced training and certification',
      'Priority technical support'
    ],
    imageError: false
  },
  {
    id: 2,
    name: 'Meta Business Partner',
    issuer: 'Meta',
    type: 'Platform Certification',
    category: 'platform',
    image: '/assets/badges/meta-partner.svg',
    description: 'Certified Meta Business Partner specializing in Facebook and Instagram advertising for gaming clients.',
    dateIssued: '2023-03-20',
    expiryDate: '2025-03-20',
    verified: true,
    verificationUrl: 'https://business.facebook.com/partners',
    benefits: [
      'Early access to new features',
      'Dedicated Meta support team',
      'Advanced advertising tools',
      'Priority account management'
    ],
    imageError: false
  },
  {
    id: 3,
    name: 'Gaming Compliance Certified',
    issuer: 'Gaming Compliance Institute',
    type: 'Compliance Certification',
    category: 'compliance',
    image: '/assets/badges/gaming-compliance.svg',
    description: 'Certified in gaming industry compliance and regulatory requirements across multiple jurisdictions.',
    dateIssued: '2022-11-10',
    expiryDate: '2024-11-10',
    verified: true,
    verificationUrl: 'https://gamingcompliance.org/verify',
    benefits: [
      'Multi-jurisdiction compliance expertise',
      'Regulatory update notifications',
      'Compliance audit support',
      'Legal framework guidance'
    ],
    imageError: false
  },
  {
    id: 4,
    name: 'Best iGaming Agency 2024',
    issuer: 'iGaming Excellence Awards',
    type: 'Industry Award',
    category: 'awards',
    image: '/assets/badges/igaming-award-2024.svg',
    description: 'Recognized as the Best iGaming Marketing Agency of 2024 for outstanding client results and innovation.',
    dateIssued: '2024-06-15',
    expiryDate: null,
    verified: true,
    verificationUrl: 'https://igamingawards.com/winners/2024',
    benefits: [
      'Industry recognition and credibility',
      'Enhanced client trust',
      'Media coverage and exposure',
      'Networking opportunities'
    ],
    imageError: false
  },
  {
    id: 5,
    name: 'ISO 27001 Certified',
    issuer: 'International Organization for Standardization',
    type: 'Security Certification',
    category: 'security',
    image: '/assets/badges/iso-27001.svg',
    description: 'ISO 27001 certified for information security management systems, ensuring client data protection.',
    dateIssued: '2023-08-01',
    expiryDate: '2026-08-01',
    verified: true,
    verificationUrl: 'https://iso.org/verify',
    benefits: [
      'Enhanced data security',
      'Client confidence in data handling',
      'Compliance with international standards',
      'Risk management framework'
    ],
    imageError: false
  },
  {
    id: 6,
    name: 'HubSpot Solutions Partner',
    issuer: 'HubSpot',
    type: 'Platform Certification',
    category: 'platform',
    image: '/assets/badges/hubspot-partner.svg',
    description: 'Certified HubSpot Solutions Partner with expertise in CRM and marketing automation for gaming clients.',
    dateIssued: '2023-05-12',
    expiryDate: '2025-05-12',
    verified: true,
    verificationUrl: 'https://ecosystem.hubspot.com/marketplace/solutions',
    benefits: [
      'Advanced CRM implementation',
      'Marketing automation expertise',
      'Lead nurturing strategies',
      'Customer lifecycle management'
    ],
    imageError: false
  }
])

// Computed properties
const filteredBadges = computed(() => {
  if (activeCategory.value === 'all') {
    return badges.value
  }
  return badges.value.filter(badge => badge.category === activeCategory.value)
})

const totalBadges = computed(() => badges.value.length)

const activeBadges = computed(() => {
  return badges.value.filter(badge => {
    if (!badge.expiryDate) return true
    return new Date(badge.expiryDate) > new Date()
  }).length
})

const yearsInBusiness = computed(() => 8)

const industryAwards = computed(() => {
  return badges.value.filter(badge => badge.category === 'awards').length
})

// Methods
const getBadgeCount = (categoryId) => {
  if (categoryId === 'all') return badges.value.length
  return badges.value.filter(badge => badge.category === categoryId).length
}

const handleImageError = (badge) => {
  badge.imageError = true
}

const getInitials = (name) => {
  return name.split(' ').map(word => word.charAt(0)).join('').substring(0, 2).toUpperCase()
}

const getBadgeTypeClass = (type) => {
  const classes = {
    'Platform Certification': 'bg-blue-100 text-blue-800',
    'Compliance Certification': 'bg-green-100 text-green-800',
    'Industry Award': 'bg-yellow-100 text-yellow-800',
    'Partnership': 'bg-purple-100 text-purple-800',
    'Security Certification': 'bg-red-100 text-red-800'
  }
  return classes[type] || 'bg-gray-100 text-gray-800'
}

const formatDate = (dateString) => {
  const options = { year: 'numeric', month: 'long', day: 'numeric' }
  return new Date(dateString).toLocaleDateString(undefined, options)
}

const isExpiringSoon = (badge) => {
  if (!badge.expiryDate) return false
  const expiryDate = new Date(badge.expiryDate)
  const now = new Date()
  const threeMonthsFromNow = new Date(now.getTime() + (90 * 24 * 60 * 60 * 1000))
  return expiryDate <= threeMonthsFromNow && expiryDate > now
}

const showBadgeDetails = (badge) => {
  selectedBadge.value = badge
  document.body.style.overflow = 'hidden'
  emit('badge-click', badge)
}

const closeBadgeDetails = () => {
  selectedBadge.value = null
  document.body.style.overflow = 'auto'
}

const getRelatedBadges = (badge) => {
  return badges.value
    .filter(b => b.id !== badge.id && (b.category === badge.category || b.issuer === badge.issuer))
    .slice(0, 6)
}

const playHoverSound = () => {
  if (props.enableSound && hoverSound.value) {
    hoverSound.value.currentTime = 0
    hoverSound.value.play().catch(() => {
      // Ignore audio play errors (user interaction required)
    })
  }
}

// Lifecycle
onMounted(() => {
  if (props.enableSound) {
    hoverSound.value = new Audio('/assets/sounds/hover.mp3')
    hoverSound.value.volume = 0.1
  }
})

// Expose methods for parent component
defineExpose({
  showBadgeDetails,
  closeBadgeDetails,
  setActiveCategory: (categoryId) => { activeCategory.value = categoryId }
})
</script>

<style scoped>
/* Custom animations */
@keyframes fadeInUp {
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
  animation: fadeInUp 0.6s ease-out;
}

/* Enhanced hover effects */
.group:hover .transform {
  transform: translateY(-4px);
}

/* Modal animations */
.modal-enter-active,
.modal-leave-active {
  transition: opacity 0.3s ease;
}

.modal-enter-from,
.modal-leave-to {
  opacity: 0;
}

.modal-content-enter-active,
.modal-content-leave-active {
  transition: all 0.3s ease;
}

.modal-content-enter-from,
.modal-content-leave-to {
  opacity: 0;
  transform: scale(0.9) translateY(20px);
}

/* Accessibility improvements */
@media (prefers-reduced-motion: reduce) {
  .transition-all,
  .transition-transform,
  .transition-colors,
  .transition-opacity {
    transition: none;
  }
  
  .group-hover\:scale-110,
  .hover\:scale-105,
  .hover\:-translate-y-1 {
    transform: none;
  }
  
  .animate-fade-in-up {
    animation: none;
  }
}

/* Focus styles for better accessibility */
button:focus-visible,
.cursor-pointer:focus-visible {
  outline: 2px solid #facb24;
  outline-offset: 2px;
}

/* Enhanced shadow effects */
.shadow-md {
  box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
}

.shadow-xl {
  box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
}

.hover\:shadow-xl:hover {
  box-shadow: 0 20px 25px -5px rgba(54, 40, 105, 0.15), 0 10px 10px -5px rgba(54, 40, 105, 0.08);
}

/* Custom scrollbar for modal */
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

/* Badge grid responsive adjustments */
@media (max-width: 640px) {
  .grid-cols-2 {
    grid-template-columns: repeat(2, minmax(0, 1fr));
  }
}

@media (min-width: 768px) {
  .md\:grid-cols-3 {
    grid-template-columns: repeat(3, minmax(0, 1fr));
  }
}

@media (min-width: 1024px) {
  .lg\:grid-cols-4 {
    grid-template-columns: repeat(4, minmax(0, 1fr));
  }
}

@media (min-width: 1280px) {
  .xl\:grid-cols-6 {
    grid-template-columns: repeat(6, minmax(0, 1fr));
  }
}
</style>

