<template>
  <div class="min-h-screen bg-gray-100 font-sans antialiased">
    <!-- Hero Section -->
    <section class="relative bg-primary-dark text-white py-20 overflow-hidden" :style="{ backgroundImage: `url(${heroBackground})`, backgroundSize: 'cover', backgroundPosition: 'center' }" >
      <div class="absolute inset-0 bg-gradient-to-r from-primary to-primary-light opacity-90"></div>
      <div class="container mx-auto px-6 relative z-10 flex flex-col lg:flex-row items-center justify-between">
        <div class="lg:w-1/2 text-center lg:text-left mb-10 lg:mb-0">
          <h1 class="text-5xl lg:text-6xl font-extrabold leading-tight mb-4 animate-fade-in-up">
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
    <section id="services" class="py-20 bg-gray-100">
      <div class="container mx-auto px-6">
        <h2 class="text-4xl font-extrabold text-primary text-center mb-12 animate-fade-in-up">
          What We Offer
        </h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
          <FeatureCard
            v-for="(feature, index) in features"
            :key="index"
            :icon="feature.icon"
            :title="feature.title"
            :desc="feature.desc"
            class="animate-fade-in-up"
            :style="{ animationDelay: `${200 * index}ms` }"
          />
        </div>
      </div>
    </section>

    <!-- KPI Section -->
    <section class="py-20 bg-primary text-white">
      <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
          <KpiCard
            v-for="(kpi, index) in kpis"
            :key="index"
            :icon="kpi.icon"
            :value="kpi.value"
            :label="kpi.label"
            class="animate-fade-in-up"
            :style="{ animationDelay: `${200 * index}ms` }"
          />
        </div>
      </div>
    </section>

    <!-- Trust Badges Section -->
    <section id="trust" class="py-20 bg-gray-100">
      <div class="container mx-auto px-6">
        <h2 class="text-4xl font-extrabold text-primary text-center mb-12 animate-fade-in-up">
          Trusted By Industry Leaders
        </h2>
        <TrustBadges :badges="trustBadges" />
      </div>
    </section>

    <!-- Case Studies Section -->
    <section id="case-studies" class="py-20 bg-primary-light text-white">
      <div class="container mx-auto px-6">
        <h2 class="text-4xl font-extrabold text-white text-center mb-12 animate-fade-in-up">
          Our Success Stories
        </h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
          <CaseStudyCard
            v-for="(study, index) in caseStudies"
            :key="index"
            :title="study.title"
            :description="study.description"
            :image="study.image"
            :metrics="study.metrics"
            class="animate-fade-in-up"
            :style="{ animationDelay: `${200 * index}ms` }"
          />
        </div>
      </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="py-20 bg-gray-100">
      <div class="container mx-auto px-6">
        <h2 class="text-4xl font-extrabold text-primary text-center mb-12 animate-fade-in-up">
          What Our Clients Say
        </h2>
        <TestimonialCarousel :testimonials="testimonials" />
      </div>
    </section>

    <!-- Interactive ROI Calculator Section -->
    <section id="calculator" class="py-20 bg-secondary-light text-primary">
      <div class="container mx-auto px-6">
        <h2 class="text-4xl font-extrabold text-primary text-center mb-12 animate-fade-in-up">
          Calculate Your Potential ROI
        </h2>
        <InteractiveCalculator />
      </div>
    </section>

    <!-- Meet the Pros Section -->
    <section id="team" class="py-20 bg-gray-100">
      <div class="container mx-auto px-6">
        <h2 class="text-4xl font-extrabold text-primary text-center mb-12 animate-fade-in-up">
          Meet the Pros
        </h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
          <TeamCard
            v-for="(member, index) in teamMembers"
            :key="index"
            :name="member.name"
            :role="member.role"
            :photo="member.photo"
            class="animate-fade-in-up"
            :style="{ animationDelay: `${200 * index}ms` }"
          />
        </div>
      </div>
    </section>

    <!-- Latest Insights Section -->
    <section id="blog" class="py-20 bg-primary-dark text-white">
      <div class="container mx-auto px-6">
        <h2 class="text-4xl font-extrabold text-white text-center mb-12 animate-fade-in-up">
          Latest Insights
        </h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
          <BlogCard
            v-for="(post, index) in blogPosts"
            :key="index"
            :title="post.title"
            :desc="post.desc"
            class="animate-fade-in-up"
            :style="{ animationDelay: `${200 * index}ms` }"
          />
        </div>
      </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-gray-100">
      <div class="container mx-auto px-6">
        <h2 class="text-4xl font-extrabold text-primary text-center mb-12 animate-fade-in-up">
          Let's Build Your Winning Brand
        </h2>
        <form @submit.prevent="submitContactForm" class="max-w-lg mx-auto bg-white p-8 rounded-xl shadow-lg animate-fade-in-up">
          <p class="text-center text-gray-600 mb-6">Contact us to schedule your free strategy call.</p>
          <div class="mb-4">
            <input
              type="text"
              v-model="form.name"
              placeholder="Your Name"
              class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-secondary"
              required
            />
            <p v-if="form.errors.name" class="text-red-500 text-sm mt-1">{{ form.errors.name }}</p>
          </div>
          <div class="mb-4">
            <input
              type="email"
              v-model="form.email"
              placeholder="Email"
              class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-secondary"
              required
            />
            <p v-if="form.errors.email" class="text-red-500 text-sm mt-1">{{ form.errors.email }}</p>
          </div>
          <div class="mb-6">
            <textarea
              v-model="form.message"
              placeholder="Message"
              rows="5"
              class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-secondary"
              required
            ></textarea>
            <p v-if="form.errors.message" class="text-red-500 text-sm mt-1">{{ form.errors.message }}</p>
          </div>
          <button
            type="submit"
            class="w-full bg-secondary text-primary font-bold py-3 px-6 rounded-full shadow-md hover:bg-secondary-dark transition duration-300 transform hover:scale-105"
            :disabled="form.processing"
          >
            <span v-if="form.processing">Sending...</span>
            <span v-else>Send Message</span>
          </button>
          <p v-if="form.successMessage" class="text-green-600 text-center mt-4">{{ form.successMessage }}</p>
        </form>
      </div>
    </section>

    <!-- Footer -->
    <footer class="bg-primary text-white py-8 text-center">
      <div class="container mx-auto px-6">
        <img src="/assets/icons/logo.svg" alt="Cesium Marketing Logo" class="h-10 mx-auto mb-4" />
        <p class="text-sm">&copy; {{ new Date().getFullYear() }} Cesium Marketing. All rights reserved.</p>
        <div class="mt-4 text-sm">
          <a href="#" class="text-white hover:text-secondary mx-2">Privacy Policy</a>
          <span class="mx-2">|</span>
          <a href="#" class="text-white hover:text-secondary mx-2">Terms of Service</a>
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
  // Add other props as needed for dynamic content
});

const heroBackground = ref("/assets/images/hero-background.jpg"); // Placeholder

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
      form.successMessage = "Your message has been sent successfully!";
      setTimeout(() => (form.successMessage = ""), 5000);
    },
    onError: () => {
      form.successMessage = "";
    },
  });
};

onMounted(() => {
  // Initialize ScrollReveal
  ScrollReveal().reveal(".animate-fade-in-up", {
    delay: 200,
    distance: "50px",
    origin: "bottom",
    opacity: 0,
    easing: "ease-in-out",
    interval: 100,
  });
});
</script>

<style scoped>
/* Add any specific styles here if needed, though Tailwind should handle most */
.bg-primary-dark {
  background-color: #362869;
}
.bg-primary-light {
  background-color: #4a3b82;
}
.bg-secondary {
  background-color: #facb24;
}
.bg-secondary-dark {
  background-color: #e0b41e;
}
.bg-secondary-light {
  background-color: #ffe082;
}

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

/* Basic fade-in-up animation for ScrollReveal fallback/initial state */
@keyframes fade-in-up {
  from {
    opacity: 0;
    transform: translateY(50px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

.animate-fade-in-up {
  /* Apply this if ScrollReveal is not active or for initial load */
  /* animation: fade-in-up 0.8s ease-out forwards; */
}
</style>


