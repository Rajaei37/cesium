<template>
  <div class="min-h-screen bg-cesium-light-gray font-poppins antialiased">
    <!-- Header Section (Hero Section modified to include header elements) -->
    <section class="relative bg-primary text-white py-6 overflow-hidden">
      <div class="container mx-auto px-6 relative z-10 flex items-center justify-between">
        <!-- Logo -->
        <div class="flex-shrink-0">
          <img src="/assets/logos/logo-main.svg" alt="Cesium Marketing Logo" class="h-12" />
        </div>

        <!-- Social Media Icons -->
        <div class="flex items-center space-x-4">
          <a href="https://www.tiktok.com/" target="_blank" class="text-white hover:text-secondary transition-colors duration-300">
            <i class="fab fa-tiktok text-2xl"></i>
          </a>
          <a href="https://www.instagram.com/" target="_blank" class="text-white hover:text-secondary transition-colors duration-300">
            <i class="fab fa-instagram text-2xl"></i>
          </a>
          <a href="https://www.facebook.com/" target="_blank" class="text-white hover:text-secondary transition-colors duration-300">
            <i class="fab fa-facebook-f text-2xl"></i>
          </a>
          <a href="https://www.linkedin.com/" target="_blank" class="text-white hover:text-secondary transition-colors duration-300">
            <i class="fab fa-linkedin-in text-2xl"></i>
          </a>
        </div>
      </div>
    </section>

    <!-- Hero Content Section -->
    <section class="relative bg-primary text-white py-20 overflow-hidden">
      <div class="absolute inset-0 bg-gradient-to-br from-primary via-primary-light to-primary opacity-95"></div>
      <div class="container mx-auto px-6 relative z-10 flex flex-col lg:flex-row items-center justify-between">
        <div class="lg:w-1/2 text-center lg:text-left mb-10 lg:mb-0">
          <h1 class="text-5xl lg:text-6xl font-semibold leading-tight mb-6 animate-fade-in-up">
            Launch & Scale Your iGaming Business
          </h1>
          <p class="text-xl lg:text-2xl mb-8 opacity-90 animate-fade-in-up animation-delay-200 font-light">
            We help iGaming operators grow faster with data-driven acquisition, retention, and brand building.
          </p>
          <a href="#contact" class="inline-block bg-secondary text-primary font-medium py-4 px-8 rounded-full shadow-lg hover:bg-secondary-dark transition duration-300 transform hover:scale-105 animate-fade-in-up animation-delay-400">
            Request Strategy Call
          </a>
        </div>
        <div class="lg:w-1/2 flex justify-center lg:justify-end animate-fade-in-up animation-delay-600">
          <MiniSlotMachine class="w-full max-w-md" />
        </div>
      </div>
    </section>

    <!-- Benefits Section -->
    <section class="py-20 bg-white">
      <div class="container mx-auto px-6 text-center">
        <h2 class="text-4xl lg:text-5xl font-semibold text-primary mb-8 animate-fade-in-up">
          Why Partner with Cesium Marketing?
        </h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
          <div class="animate-fade-in-up bg-cesium-light-gray p-8 rounded-xl shadow-lg" style="animation-delay: 0.1s;">
            <h3 class="text-2xl font-semibold text-primary mb-4">Data-Driven Strategies</h3>
            <p class="text-gray-700 font-light">Our decisions are backed by extensive data analysis, ensuring optimal performance and measurable ROI for your iGaming business.</p>
          </div>
          <div class="animate-fade-in-up bg-cesium-light-gray p-8 rounded-xl shadow-lg" style="animation-delay: 0.2s;">
            <h3 class="text-2xl font-semibold text-primary mb-4">Industry Expertise</h3>
            <p class="text-gray-700 font-light">With years of experience in the iGaming sector, we understand the unique challenges and opportunities to drive your success.</p>
          </div>
          <div class="animate-fade-in-up bg-cesium-light-gray p-8 rounded-xl shadow-lg" style="animation-delay: 0.3s;">
            <h3 class="text-2xl font-semibold text-primary mb-4">Tailored Solutions</h3>
            <p class="text-gray-700 font-light">We craft customized marketing plans that align with your specific goals, ensuring a personalized approach to your growth.</p>
          </div>
        </div>
        <div class="mt-12 animate-fade-in-up" style="animation-delay: 0.4s;">
          <a href="#contact" class="inline-block bg-secondary text-primary font-medium py-4 px-8 rounded-full shadow-lg hover:bg-secondary-dark transition duration-300 transform hover:scale-105">
            Contact Us Today
          </a>
        </div>
      </div>
    </section>

    <!-- How We Transform Section -->
    <section class="py-20 bg-primary text-white">
      <div class="container mx-auto px-6 text-center">
        <h2 class="text-4xl lg:text-5xl font-semibold mb-8 animate-fade-in-up">
          See How We Transform the iGaming World
        </h2>
        <p class="text-xl opacity-90 max-w-3xl mx-auto mb-12 animate-fade-in-up animation-delay-200 font-light">
          We don't just market; we revolutionize. Our innovative strategies and deep industry insights help iGaming businesses achieve unprecedented growth and market leadership.
        </p>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
          <div class="animate-fade-in-up" style="animation-delay: 0.1s;">
            <h3 class="text-2xl font-semibold mb-4">Unlocking Potential</h3>
            <p class="opacity-90 font-light">Identifying untapped markets and player segments to expand your reach.</p>
          </div>
          <div class="animate-fade-in-up" style="animation-delay: 0.2s;">
            <h3 class="text-2xl font-semibold mb-4">Optimizing Performance</h3>
            <p class="opacity-90 font-light">Fine-tuning every aspect of your marketing funnel for maximum conversion.</p>
          </div>
          <div class="animate-fade-in-up" style="animation-delay: 0.3s;">
            <h3 class="text-2xl font-semibold mb-4">Building Legacies</h3>
            <p class="opacity-90 font-light">Creating sustainable growth models that ensure long-term success and brand recognition.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- What We Offer Section -->
    <section id="services" class="py-20 bg-white">
      <div class="container mx-auto px-6">
        <div class="text-center mb-16">
          <h2 class="text-4xl lg:text-5xl font-semibold text-primary mb-4 animate-fade-in-up">
            What We Offer
          </h2>
          <p class="text-xl text-gray-600 max-w-3xl mx-auto animate-fade-in-up animation-delay-200 font-light">
            Comprehensive marketing solutions designed specifically for the iGaming industry
          </p>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
          <FeatureCard
            v-for="(feature, index) in features"
            :key="index"
            :icon="feature.icon"
            :title="feature.title"
            :desc="feature.desc"
            :long_desc="feature.long_desc"
            class="animate-fade-in-up bg-white rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 border border-gray-100"
            :style="{ animationDelay: `${200 * index}ms` }"
          />
        </div>
      </div>
    </section>

    <!-- KPI Section -->
    <section class="py-20 bg-primary text-white">
      <div class="container mx-auto px-6">
        <div class="text-center mb-16">
          <h2 class="text-4xl lg:text-5xl font-semibold mb-4 animate-fade-in-up">
            Proven Results
          </h2>
          <p class="text-xl opacity-90 max-w-3xl mx-auto animate-fade-in-up animation-delay-200 font-light">
            Our data-driven approach delivers measurable growth for iGaming operators
          </p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
          <KpiCard
            v-for="(kpi, index) in kpis"
            :key="index"
            :icon="kpi.icon"
            :value="kpi.number"
            :label="kpi.label"
            class="animate-fade-in-up bg-primary-light rounded-xl p-8 border border-primary-light hover:bg-primary-dark transition-all duration-300"
            :style="{ animationDelay: `${200 * index}ms` }"
          />
        </div>
      </div>
    </section>

    <!-- Affiliate Marketing Section -->
    <section id="affiliate-marketing" class="py-20 bg-cesium-light-gray text-primary">
      <div class="container mx-auto px-6 text-center">
        <h2 class="text-4xl lg:text-5xl font-semibold mb-8 animate-fade-in-up">
          Unlock Your Affiliate Potential
        </h2>
        <p class="text-xl text-gray-600 max-w-3xl mx-auto mb-12 animate-fade-in-up animation-delay-200 font-light">
          Discover how our expert affiliate marketing strategies can significantly boost your player acquisition and revenue. See what you can achieve with us.
        </p>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
          <div class="animate-fade-in-up text-left">
            <h3 class="text-3xl font-semibold mb-4">See How You Can Benefit With Us</h3>
            <ul class="list-disc list-inside text-lg text-gray-700 space-y-2 font-light">
              <li>Access to a vast network of high-performing affiliates.</li>
              <li>Customized commission structures for optimal ROI.</li>
              <li>Real-time tracking and transparent reporting.</li>
              <li>Dedicated affiliate management support.</li>
              <li>Proven strategies for diverse iGaming markets.</li>
            </ul>
            <p class="text-lg text-gray-700 mt-6 font-light">
              Ready to see the numbers? Use our interactive calculator to estimate your potential returns.
            </p>
            <a href="#calculator" class="inline-block bg-secondary text-primary font-medium py-4 px-8 rounded-full shadow-lg hover:bg-secondary-dark transition duration-300 transform hover:scale-105 mt-8">
              Calculate Your ROI
            </a>
          </div>
          <div class="animate-fade-in-up">
            <img src="/assets/images/affiliate-marketing-illustration.png" alt="Affiliate Marketing Illustration" class="w-full h-auto rounded-xl shadow-lg" />
          </div>
        </div>
      </div>
    </section>

    <!-- Interactive ROI Calculator Section -->
    <section id="calculator" class="py-20 bg-secondary-light text-primary">
      <div class="container mx-auto px-6">
        <div class="text-center mb-16">
          <h2 class="text-4xl lg:text-5xl font-semibold mb-4 animate-fade-in-up">
            Interactive ROI Calculator
          </h2>
          <p class="text-xl max-w-3xl mx-auto animate-fade-in-up animation-delay-200 font-light">
            See how much your iGaming business could grow with our marketing strategies
          </p>
        </div>
        <InteractiveCalculator />
      </div>
    </section>

    <!-- Case Studies Section -->
    <section id="case-studies" class="py-20 bg-primary text-white">
      <div class="container mx-auto px-6">
        <div class="text-center mb-16">
          <h2 class="text-4xl lg:text-5xl font-semibold mb-4 animate-fade-in-up">
            Our Success Stories
          </h2>
          <p class="text-xl opacity-90 max-w-3xl mx-auto animate-fade-in-up animation-delay-200 font-light">
            Real results from real iGaming operators who partnered with us
          </p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
          <CaseStudyCard
            v-for="(study, index) in caseStudies"
            :key="index"
            :title="study.title"
            :description="study.description"
            :image="study.image"
            :metrics="study.metrics"
            class="animate-fade-in-up bg-primary-light rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1"
            :style="{ animationDelay: `${200 * index}ms` }"
          />
        </div>
      </div>
    </section>

    <!-- Meet the Pros Section -->
    <section id="team" class="py-20 bg-cesium-light-gray">
      <div class="container mx-auto px-6">
        <div class="text-center mb-16">
          <h2 class="text-4xl lg:text-5xl font-semibold text-primary mb-4 animate-fade-in-up">
            Meet the Pros
          </h2>
          <p class="text-xl text-gray-600 max-w-3xl mx-auto animate-fade-in-up animation-delay-200 font-light">
            Our team of iGaming marketing experts with proven track records
          </p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
          <TeamCard
            v-for="(member, index) in teamMembers"
            :key="index"
            :name="member.name"
            :role="member.role"
            :photo="member.photo"
            class="animate-fade-in-up bg-white rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1"
            :style="{ animationDelay: `${200 * index}ms` }"
          />
        </div>
      </div>
    </section>

    <!-- Latest Insights Section -->
    <section id="blog" class="py-20 bg-primary-dark text-white">
      <div class="container mx-auto px-6">
        <div class="text-center mb-16">
          <h2 class="text-4xl lg:text-5xl font-semibold mb-4 animate-fade-in-up">
            Latest Insights
          </h2>
          <p class="text-xl opacity-90 max-w-3xl mx-auto animate-fade-in-up animation-delay-200 font-light">
            Stay ahead with the latest trends and strategies in iGaming marketing
          </p>
        </div>
        
        <!-- Featured Blog Post -->
        <div class="mb-16 animate-fade-in-up">
          <BlogCard
            v-if="blogPosts.length > 0"
            :id="blogPosts[0].id"
            :title="blogPosts[0].title"
            :desc="blogPosts[0].desc"
            :image="blogPosts[0].image"
            :author="blogPosts[0].author"
            :date="blogPosts[0].date"
            :readTime="blogPosts[0].readTime"
            :tags="blogPosts[0].tags"
            :url="blogPosts[0].url"
            class="bg-white text-gray-900 rounded-2xl shadow-2xl hover:shadow-3xl transition-all duration-300 transform hover:-translate-y-2 max-w-4xl mx-auto"
          />
        </div>

        <!-- Regular Blog Posts Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
          <BlogCard
            v-for="(post, index) in blogPosts.slice(1, 4)"
            :key="post.id"
            :id="post.id"
            :title="post.title"
            :desc="post.desc"
            :image="post.image"
            :author="post.author"
            :date="post.date"
            :readTime="post.readTime"
            :tags="post.tags"
            :url="post.url"
            class="animate-fade-in-up bg-white text-gray-900 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1"
            :style="{ animationDelay: `${200 * (index + 1)}ms` }"
          />
        </div>

        <!-- View All Blog Posts Button -->
        <div class="text-center mt-12 animate-fade-in-up" style="animation-delay: 800ms;">
          <Link href="/blog" class="inline-block bg-secondary text-primary font-semibold py-4 px-8 rounded-full shadow-lg hover:bg-secondary-dark transition duration-300 transform hover:scale-105">
            View All Insights
          </Link>
        </div>
      </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-white">
      <div class="container mx-auto px-6">
        <div class="text-center mb-16">
          <h2 class="text-4xl lg:text-5xl font-semibold text-primary mb-4 animate-fade-in-up">
            Let's Build Your Winning Brand
          </h2>
          <p class="text-xl text-gray-600 max-w-3xl mx-auto animate-fade-in-up animation-delay-200 font-light">
            Ready to take your iGaming business to the next level? Let's discuss your growth strategy.
          </p>
        </div>
        <form @submit.prevent="submitContactForm" class="max-w-2xl mx-auto bg-cesium-light-gray p-10 rounded-2xl shadow-xl animate-fade-in-up">
          <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
            <div>
              <input
                type="text"
                v-model="form.name"
                placeholder="Your Name"
                class="w-full p-4 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-secondary focus:border-transparent transition-all duration-300 font-light"
                required
              />
              <p v-if="form.errors.name" class="text-red-500 text-sm mt-2">{{ form.errors.name }}</p>
            </div>
            <div>
              <input
                type="email"
                v-model="form.email"
                placeholder="Email"
                class="w-full p-4 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-secondary focus:border-transparent transition-all duration-300 font-light"
                required
              />
              <p v-if="form.errors.email" class="text-red-500 text-sm mt-2">{{ form.errors.email }}</p>
            </div>
          </div>
          <div class="mb-8">
            <textarea
              v-model="form.message"
              placeholder="Tell us about your iGaming business and your goals..."
              rows="6"
              class="w-full p-4 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-secondary focus:border-transparent transition-all duration-300 resize-none font-light"
              required
            ></textarea>
            <p v-if="form.errors.message" class="text-red-500 text-sm mt-2">{{ form.errors.message }}</p>
          </div>
          <button
            type="submit"
            class="w-full bg-secondary text-primary font-medium py-4 px-8 rounded-xl shadow-lg hover:bg-secondary-dark transition duration-300 transform hover:scale-105 text-lg"
            :disabled="form.processing"
          >
            <span v-if="form.processing">Sending...</span>
            <span v-else>Send Message</span>
          </button>
          <p v-if="form.successMessage" class="text-green-600 text-center mt-6 font-medium">{{ form.successMessage }}</p>
        </form>
      </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-16">
      <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12 mb-12">
          <!-- Company Info -->
          <div class="lg:col-span-1">
            <img src="/assets/logos/logo-main.svg" alt="Cesium Marketing Logo" class="h-12 mb-6" />
            <h3 class="text-xl font-semibold mb-4">Cesium Marketing</h3>
            <p class="text-gray-300 font-light leading-relaxed mb-6">
              We help iGaming entrepreneurs identify the values and experiences that make their brands relevant, unique and valuable to customers.
            </p>
            <!-- Social Media Icons -->
            <div class="flex space-x-4">
              <a href="https://www.tiktok.com/" target="_blank" class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center text-white hover:bg-secondary transition-colors duration-300">
                <i class="fab fa-tiktok"></i>
              </a>
              <a href="https://www.instagram.com/" target="_blank" class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center text-white hover:bg-secondary transition-colors duration-300">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="https://www.facebook.com/" target="_blank" class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center text-white hover:bg-secondary transition-colors duration-300">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="https://www.linkedin.com/" target="_blank" class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center text-white hover:bg-secondary transition-colors duration-300">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </div>

          <!-- Latest Insights -->
          <div class="lg:col-span-1">
            <h3 class="text-xl font-semibold mb-6">LATEST INSIGHTS</h3>
            <div class="space-y-4">
              <div v-for="post in blogPosts.slice(0, 3)" :key="post.id" class="border-l-4 border-secondary pl-4">
                <h4 class="text-sm font-medium text-white hover:text-secondary transition-colors duration-300 cursor-pointer">
                  {{ post.title }}
                </h4>
                <p class="text-xs text-gray-400 mt-1">{{ post.date }}</p>
              </div>
            </div>
          </div>

          <!-- Apply Now Section -->
          <div class="lg:col-span-1">
            <h3 class="text-xl font-semibold mb-6">Ready to Scale Your iGaming Business?</h3>
            <p class="text-gray-300 font-light mb-6">
              Join successful iGaming operators who trust Cesium Marketing to drive their growth. Apply now to get started.
            </p>
            <a href="https://forms.google.com/your-form-link" target="_blank" class="inline-block bg-secondary text-primary font-semibold py-3 px-8 rounded-full shadow-lg hover:bg-secondary-dark transition duration-300 transform hover:scale-105">
              Apply Now
            </a>
          </div>
        </div>

        <!-- Bottom Footer -->
        <div class="border-t border-gray-800 pt-8">
          <div class="flex flex-col md:flex-row justify-between items-center">
            <p class="text-gray-400 text-sm font-light mb-4 md:mb-0">
              &copy; {{ new Date().getFullYear() }} Cesium Marketing. All Rights Reserved.
            </p>
            <div class="flex space-x-8 text-sm">
              <a href="#" class="text-gray-400 hover:text-secondary transition-colors duration-300 font-light">Privacy Policy</a>
              <a href="#" class="text-gray-400 hover:text-secondary transition-colors duration-300 font-light">Terms of Service</a>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>
</template>

<script setup>
import { ref, onMounted } from 'vue';
import { useForm, Head } from '@inertiajs/vue3';
import MiniSlotMachine from '@/Components/MiniSlotMachine.vue';
import FeatureCard from '@/Components/FeatureCard.vue';
import KpiCard from '@/Components/KpiCard.vue';
import BlogCard from '@/Components/BlogCard.vue';
import TeamCard from '@/Components/TeamCard.vue';
import CaseStudyCard from '@/Components/CaseStudyCard.vue';
import InteractiveCalculator from '@/Components/InteractiveCalculator.vue';
import ScrollReveal from 'scrollreveal';

const props = defineProps({
  features: Array,
  kpis: Array,
  teamMembers: Array,
  blogPosts: Array,
  caseStudies: Array,
});

const form = useForm({
  name: "",
  email: "",
  message: "",
  successMessage: "",
});

const submitContactForm = () => {
  form.post(route("contact"), {
    onSuccess: () => {
      form.reset();
      form.successMessage = "Your message has been sent successfully! We'll get back to you within 24 hours.";
      setTimeout(() => (form.successMessage = ""), 8000);
    },
    onError: () => {
      form.successMessage = "";
    },
  });
};

onMounted(() => {
  // Initialize ScrollReveal with enhanced settings
  ScrollReveal().reveal(".animate-fade-in-up", {
    delay: 100,
    distance: "60px",
    origin: "bottom",
    opacity: 0,
    easing: "cubic-bezier(0.25, 0.46, 0.45, 0.94)",
    interval: 150,
    reset: false,
  });
});
</script>

<style scoped>
/* Custom animation delays for staggered effects */
.animation-delay-200 {
  animation-delay: 0.2s;
}
.animation-delay-400 {
  animation-delay: 0.4s;
}
.animation-delay-600 {
  animation-delay: 0.6s;
}

/* Enhanced hover effects */
.hover\:shadow-xl:hover {
  box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
}

/* Smooth transitions for all interactive elements */
* {
  transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;
  transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
  transition-duration: 300ms;
}
</style>




