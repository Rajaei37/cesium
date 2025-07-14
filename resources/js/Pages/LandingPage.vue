<template>
  <div class="min-h-screen bg-cesium-light-gray font-sans antialiased">
    <!-- Hero Section -->
    <section class="relative bg-primary text-white py-20 overflow-hidden">
      <div class="absolute inset-0 bg-gradient-to-br from-primary via-primary-light to-primary opacity-95"></div>
      <div class="container mx-auto px-6 relative z-10 flex flex-col lg:flex-row items-center justify-between">
        <div class="lg:w-1/2 text-center lg:text-left mb-10 lg:mb-0">
          <!-- Logo -->
          <div class="mb-8">
            <img src="/assets/logos/logo-main.svg" alt="Cesium Marketing Logo" class="h-16 mx-auto lg:mx-0" />
          </div>
          
          <h1 class="text-5xl lg:text-6xl font-extrabold leading-tight mb-6 animate-fade-in-up">
            Launch & Scale Your Online Casino
          </h1>
          <p class="text-xl lg:text-2xl mb-8 opacity-90 animate-fade-in-up animation-delay-200">
            We help casino operators grow faster with data-driven acquisition, retention, and brand building.
          </p>
          <a href="#contact" class="inline-block bg-secondary text-primary font-bold py-4 px-8 rounded-full shadow-lg hover:bg-secondary-dark transition duration-300 transform hover:scale-105 animate-fade-in-up animation-delay-400">
            Request Strategy Call
          </a>
        </div>
        <div class="lg:w-1/2 flex justify-center lg:justify-end animate-fade-in-up animation-delay-600">
          <MiniSlotMachine class="w-full max-w-md" />
        </div>
      </div>
    </section>

    <!-- What We Offer Section -->
    <section id="services" class="py-20 bg-white">
      <div class="container mx-auto px-6">
        <div class="text-center mb-16">
          <h2 class="text-4xl lg:text-5xl font-extrabold text-primary mb-4 animate-fade-in-up">
            What We Offer
          </h2>
          <p class="text-xl text-gray-600 max-w-3xl mx-auto animate-fade-in-up animation-delay-200">
            Comprehensive marketing solutions designed specifically for the online casino industry
          </p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
          <FeatureCard
            v-for="(feature, index) in features"
            :key="index"
            :icon="feature.icon"
            :title="feature.title"
            :desc="feature.desc"
            class="animate-fade-in-up bg-white rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 p-8 border border-gray-100"
            :style="{ animationDelay: `${200 * index}ms` }"
          />
        </div>
      </div>
    </section>

    <!-- KPI Section -->
    <section class="py-20 bg-primary text-white">
      <div class="container mx-auto px-6">
        <div class="text-center mb-16">
          <h2 class="text-4xl lg:text-5xl font-extrabold mb-4 animate-fade-in-up">
            Proven Results
          </h2>
          <p class="text-xl opacity-90 max-w-3xl mx-auto animate-fade-in-up animation-delay-200">
            Our data-driven approach delivers measurable growth for casino operators
          </p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
          <KpiCard
            v-for="(kpi, index) in kpis"
            :key="index"
            :icon="kpi.icon"
            :value="kpi.value"
            :label="kpi.label"
            class="animate-fade-in-up bg-primary-light rounded-xl p-8 border border-primary-light hover:bg-primary-dark transition-all duration-300"
            :style="{ animationDelay: `${200 * index}ms` }"
          />
        </div>
      </div>
    </section>

    <!-- Trust Badges Section -->
    <section id="trust" class="py-20 bg-cesium-light-gray">
      <div class="container mx-auto px-6">
        <h2 class="text-4xl lg:text-5xl font-extrabold text-primary text-center mb-16 animate-fade-in-up">
          Trusted By Industry Leaders
        </h2>
        <TrustBadges :badges="trustBadges" />
      </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="py-20 bg-white">
      <div class="container mx-auto px-6">
        <div class="text-center mb-16">
          <h2 class="text-4xl lg:text-5xl font-extrabold text-primary mb-4 animate-fade-in-up">
            What Our Clients Say
          </h2>
          <p class="text-xl text-gray-600 max-w-3xl mx-auto animate-fade-in-up animation-delay-200">
            Don't just take our word for it. Hear from casino operators who've transformed their business with our proven strategies.
          </p>
        </div>
        <TestimonialCarousel :testimonials="testimonials" />
      </div>
    </section>

    <!-- Interactive ROI Calculator Section -->
    <section id="calculator" class="py-20 bg-secondary-light text-primary">
      <div class="container mx-auto px-6">
        <div class="text-center mb-16">
          <h2 class="text-4xl lg:text-5xl font-extrabold mb-4 animate-fade-in-up">
            Interactive ROI Calculator
          </h2>
          <p class="text-xl max-w-3xl mx-auto animate-fade-in-up animation-delay-200">
            See how much your casino could grow with our marketing strategies
          </p>
        </div>
        <InteractiveCalculator />
      </div>
    </section>

    <!-- Case Studies Section -->
    <section id="case-studies" class="py-20 bg-primary text-white">
      <div class="container mx-auto px-6">
        <div class="text-center mb-16">
          <h2 class="text-4xl lg:text-5xl font-extrabold mb-4 animate-fade-in-up">
            Our Success Stories
          </h2>
          <p class="text-xl opacity-90 max-w-3xl mx-auto animate-fade-in-up animation-delay-200">
            Real results from real casino operators who partnered with us
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
          <h2 class="text-4xl lg:text-5xl font-extrabold text-primary mb-4 animate-fade-in-up">
            Meet the Pros
          </h2>
          <p class="text-xl text-gray-600 max-w-3xl mx-auto animate-fade-in-up animation-delay-200">
            Our team of casino marketing experts with proven track records
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
          <h2 class="text-4xl lg:text-5xl font-extrabold mb-4 animate-fade-in-up">
            Latest Insights
          </h2>
          <p class="text-xl opacity-90 max-w-3xl mx-auto animate-fade-in-up animation-delay-200">
            Stay ahead with the latest trends and strategies in casino marketing
          </p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
          <BlogCard
            v-for="(post, index) in blogPosts"
            :key="index"
            :title="post.title"
            :desc="post.desc"
            class="animate-fade-in-up bg-primary rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1"
            :style="{ animationDelay: `${200 * index}ms` }"
          />
        </div>
      </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-white">
      <div class="container mx-auto px-6">
        <div class="text-center mb-16">
          <h2 class="text-4xl lg:text-5xl font-extrabold text-primary mb-4 animate-fade-in-up">
            Let's Build Your Winning Brand
          </h2>
          <p class="text-xl text-gray-600 max-w-3xl mx-auto animate-fade-in-up animation-delay-200">
            Ready to take your casino to the next level? Let's discuss your growth strategy.
          </p>
        </div>
        <form @submit.prevent="submitContactForm" class="max-w-2xl mx-auto bg-cesium-light-gray p-10 rounded-2xl shadow-xl animate-fade-in-up">
          <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
            <div>
              <input
                type="text"
                v-model="form.name"
                placeholder="Your Name"
                class="w-full p-4 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-secondary focus:border-transparent transition-all duration-300"
                required
              />
              <p v-if="form.errors.name" class="text-red-500 text-sm mt-2">{{ form.errors.name }}</p>
            </div>
            <div>
              <input
                type="email"
                v-model="form.email"
                placeholder="Email"
                class="w-full p-4 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-secondary focus:border-transparent transition-all duration-300"
                required
              />
              <p v-if="form.errors.email" class="text-red-500 text-sm mt-2">{{ form.errors.email }}</p>
            </div>
          </div>
          <div class="mb-8">
            <textarea
              v-model="form.message"
              placeholder="Tell us about your casino and your goals..."
              rows="6"
              class="w-full p-4 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-secondary focus:border-transparent transition-all duration-300 resize-none"
              required
            ></textarea>
            <p v-if="form.errors.message" class="text-red-500 text-sm mt-2">{{ form.errors.message }}</p>
          </div>
          <button
            type="submit"
            class="w-full bg-secondary text-primary font-bold py-4 px-8 rounded-xl shadow-lg hover:bg-secondary-dark transition duration-300 transform hover:scale-105 text-lg"
            :disabled="form.processing"
          >
            <span v-if="form.processing">Sending...</span>
            <span v-else>Send Message</span>
          </button>
          <p v-if="form.successMessage" class="text-green-600 text-center mt-6 font-semibold">{{ form.successMessage }}</p>
        </form>
      </div>
    </section>

    <!-- Footer -->
    <footer class="bg-primary text-white py-12">
      <div class="container mx-auto px-6">
        <div class="text-center">
          <img src="/assets/logos/logo-main.svg" alt="Cesium Marketing Logo" class="h-12 mx-auto mb-6" />
          <p class="text-lg mb-6">&copy; {{ new Date().getFullYear() }} Cesium Marketing. All rights reserved.</p>
          <div class="flex justify-center space-x-8 text-sm">
            <a href="#" class="text-white hover:text-secondary transition-colors duration-300">Privacy Policy</a>
            <a href="#" class="text-white hover:text-secondary transition-colors duration-300">Terms of Service</a>
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
import TestimonialCarousel from '@/Components/TestimonialCarousel.vue';
import CaseStudyCard from '@/Components/CaseStudyCard.vue';
import TrustBadges from '@/Components/TrustBadges.vue';
import InteractiveCalculator from '@/Components/InteractiveCalculator.vue';
import ScrollReveal from 'scrollreveal';

const props = defineProps({
  features: Array,
  kpis: Array,
  teamMembers: Array,
  blogPosts: Array,
  testimonials: Array,
  caseStudies: Array,
  trustBadges: Array,
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

