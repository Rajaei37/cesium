<template>
  <section id="services-main" class="py-20 bg-white">
    <div class="container mx-auto px-6">
      <div class="flex flex-col lg:flex-row shadow-lg rounded-lg overflow-hidden">
        <!-- Left Column: Service List -->
        <div class="lg:w-1/3 bg-[#F0F0F5] p-6">
          <ul class="space-y-2">
            <li v-for="service in services" :key="service.id" 
                :class="{
                  'bg-[#FFD700] text-[#4A248C]': activeService === service.id,
                  'text-gray-700': activeService !== service.id
                }"
                class="p-3 rounded-md cursor-pointer hover:bg-[#FFD700] hover:text-[#4A248C] transition-all duration-200"
                @click="selectService(service.id)">
              {{ service.name }}
            </li>
          </ul>
        </div>

        <!-- Right Column: Service Details -->
        <div class="lg:w-2/3 bg-[#FFD700] p-8 flex flex-col justify-center items-center">
          <div v-if="activeServiceDetails" class="text-center">
            <div class="w-64 h-64 mb-6">
              <img :src="activeServiceDetails.svg" :alt="activeServiceDetails.headline" class="w-full h-full object-contain" />
            </div>
            <h3 class="text-3xl font-bold text-[#4A248C] mb-4">
              {{ activeServiceDetails.headline }}
            </h3>
            <p class="text-lg text-[#4A248C] mb-6">
              {{ activeServiceDetails.description }}
            </p>
            <ul class="list-disc list-inside text-left text-[#4A248C]">
              <li v-for="item in activeServiceDetails.benefits" :key="item">{{ item }}</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
import { ref, onMounted, computed } from 'vue';

const services = ref([
  { id: 'process-management', name: 'Process Management', svg: '/assets/Processmanagment.svg', headline: 'Streamline Your Operations', description: 'Optimize your workflows for maximum efficiency and impact.', benefits: ['Workflow analysis', 'Process automation', 'Performance monitoring'] },
  { id: 'market-study', name: 'Market Study', svg: '/assets/Marketstudy.svg', headline: 'Understand Your Landscape', description: 'Gain deep insights into market trends, competitor strategies, and customer behavior.', benefits: ['Market research', 'Competitor analysis', 'Consumer insights'] },
  { id: 'branding', name: 'Branding & Visual Identity', svg: '/assets/Brading.svg', headline: 'Forge a Powerful Identity', description: 'Develop a compelling brand story and visual language that resonates with your audience.', benefits: ['Brand strategy', 'Logo design', 'Visual guidelines'] },
  { id: 'paid-media', name: 'Paid Media', svg: '/assets/Paidmedia.svg', headline: 'Amplify Your Reach', description: 'Launch high-impact ad campaigns across diverse platforms for instant results.', benefits: ['PPC campaigns', 'Social media ads', 'Display advertising'] },
  { id: 'seo-optimization', name: 'SEO Optimization', svg: '/assets/SeoOptimization.svg', headline: 'Climb & Stay at the Top.', description: 'We boost your organic search rankings and sustain long-term visibility with proven SEO strategies tailored for iGaming.', benefits: ['Keyword strategy & content structure', 'Technical SEO', 'On-page & off-page optimization'] },
  { id: 'social-media-marketing', name: 'Social Media Marketing', svg: '/assets/Socialmediamarketing.svg', headline: 'Engage & Grow Your Community', description: 'Build vibrant online communities and drive viral growth through strategic social campaigns.', benefits: ['Platform strategy', 'Content creation', 'Community management'] },
  { id: 'influencer-marketing', name: 'Influencer Marketing', svg: '/assets/InfluencerMarketing.svg', headline: 'Leverage Authentic Voices', description: 'Connect with key influencers to expand your brand’s reach and credibility.', benefits: ['Influencer identification', 'Campaign management', 'Performance tracking'] },
  { id: 'content-marketing', name: 'Content Marketing', svg: '/assets/ContentMarketing.svg', headline: 'Create Compelling Narratives', description: 'Develop engaging content that attracts, educates, and converts your target audience.', benefits: ['Blog posts & articles', 'Video content', 'Infographics'] },
  { id: 'email-marketing', name: 'Email Marketing', svg: '/assets/EmailMarketing.svg', headline: 'Nurture & Convert Leads', description: 'Design personalized email campaigns that build relationships and drive conversions.', benefits: ['List segmentation', 'Automated campaigns', 'Performance analytics'] },
  { id: 'data-analytics', name: 'Data Analytics', svg: '/assets/DataAnalytics.svg', headline: 'Unlock Actionable Insights', description: 'Transform raw data into strategic intelligence that fuels precision-targeted growth.', benefits: ['Data collection & analysis', 'Reporting & visualization', 'Predictive modeling'] },
  { id: 'offerings-management', name: 'Offerings Management', svg: '/assets/OfferingsManagement.svg', headline: 'Optimize Your Product Portfolio', description: 'Strategically manage your service offerings to maximize market fit and profitability.', benefits: ['Product lifecycle management', 'Pricing strategy', 'Market positioning'] },
  { id: 'igaming-site-management', name: 'iGaming Site Management', svg: '/assets/iGamingSiteManagement.svg', headline: 'Ensure Seamless Operations', description: 'Maintain and enhance your iGaming platform for optimal performance and user experience.', benefits: ['Technical maintenance', 'Content updates', 'Security audits'] },
]);

const activeService = ref('seo-optimization'); // Default active service

const selectService = (serviceId) => {
  activeService.value = serviceId;
};

const activeServiceDetails = computed(() => {
  return services.value.find(service => service.id === activeService.value);
});

// Ensure SEO Optimization is active on mount
onMounted(() => {
  activeService.value = 'seo-optimization';
});
</script>


