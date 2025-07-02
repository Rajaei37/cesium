<template>
  <div class="min-h-screen bg-gradient-to-br from-blue-50 to-white flex flex-col items-center px-4">
    <!-- Header -->
    <header class="w-full max-w-6xl mx-auto py-8 flex justify-between items-center" data-aos="fade-down">
      <div class="text-3xl font-extrabold text-blue-700">YourBrand</div>
      <nav class="space-x-6">
        <a href="#" class="text-blue-700 hover:underline">Home</a>
        <a href="#features" class="text-blue-700 hover:underline">Features</a>
        <a href="#testimonials" class="text-blue-700 hover:underline">Testimonials</a>
        <a href="#team" class="text-blue-700 hover:underline">Team</a>
        <a href="#contact" class="text-blue-700 hover:underline">Contact</a>
      </nav>
    </header>

    <!-- Hero Section with Lottie Animation -->
    <main class="flex flex-col md:flex-row items-center justify-center text-center md:text-left w-full max-w-6xl py-12 gap-8">
      <div class="flex-1" data-aos="fade-right">
        <h1 class="text-5xl md:text-6xl font-bold text-gray-900 mb-6">
          Elevate Your Brand with <span class="text-blue-600">Stunning Marketing</span>
        </h1>
        <p class="text-lg md:text-xl text-gray-600 mb-8 max-w-xl">
          We help brands stand out with beautiful, high-converting websites and creative marketing strategies.
        </p>
        <a href="#contact" class="px-8 py-4 bg-blue-600 text-white rounded-full shadow-lg text-lg font-semibold hover:bg-blue-700 transition">Get Started</a>
      </div>
      <div class="flex-1 flex justify-center" data-aos="fade-left">
        <div ref="lottieContainer" class="w-72 h-72 mx-auto"></div>
      </div>
    </main>

    <!-- Features Section -->
    <section id="features" class="w-full max-w-6xl mx-auto py-16 grid md:grid-cols-3 gap-8" data-aos="fade-up">
      <div class="bg-white rounded-lg shadow-lg p-8 text-center" data-aos="zoom-in" data-aos-delay="100">
        <svg class="mx-auto mb-4 w-14 h-14 text-blue-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M12 4v16m8-8H4"></path></svg>
        <h3 class="text-2xl font-bold mb-2">Creative Design</h3>
        <p class="text-gray-600">Eye-catching, modern designs that capture your brand's essence and engage your audience.</p>
      </div>
      <div class="bg-white rounded-lg shadow-lg p-8 text-center" data-aos="zoom-in" data-aos-delay="200">
        <svg class="mx-auto mb-4 w-14 h-14 text-blue-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3"></path></svg>
        <h3 class="text-2xl font-bold mb-2">Web Development</h3>
        <p class="text-gray-600">Fast, responsive, and SEO-friendly websites built for results and scalability.</p>
      </div>
      <div class="bg-white rounded-lg shadow-lg p-8 text-center" data-aos="zoom-in" data-aos-delay="300">
        <svg class="mx-auto mb-4 w-14 h-14 text-blue-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M17 20h5v-2a4 4 0 00-3-3.87M9 20H4v-2a4 4 0 013-3.87M17 8V6a4 4 0 00-8 0v2m8 0a4 4 0 01-8 0"></path></svg>
        <h3 class="text-2xl font-bold mb-2">Marketing Strategy</h3>
        <p class="text-gray-600">Data-driven strategies to grow your audience and boost your sales.</p>
      </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="w-full max-w-6xl mx-auto py-16" data-aos="fade-up">
      <h2 class="text-4xl font-bold text-center mb-12">What Our Clients Say</h2>
      <div class="grid md:grid-cols-3 gap-8">
        <div class="bg-white rounded-lg shadow-lg p-6" data-aos="fade-up" data-aos-delay="100">
          <p class="text-gray-700 italic mb-4">"Absolutely transformed our online presence. The team is creative, responsive, and results-driven!"</p>
          <div class="flex items-center gap-3">
            <img src="https://randomuser.me/api/portraits/men/32.jpg" class="w-12 h-12 rounded-full" alt="Client 1">
            <div>
              <div class="font-bold">John Doe</div>
              <div class="text-gray-400 text-sm">CEO, Acme Corp</div>
            </div>
          </div>
        </div>
        <div class="bg-white rounded-lg shadow-lg p-6" data-aos="fade-up" data-aos-delay="200">
          <p class="text-gray-700 italic mb-4">"Our sales increased by 40% after launching the new site. Highly recommended!"</p>
          <div class="flex items-center gap-3">
            <img src="https://randomuser.me/api/portraits/women/44.jpg" class="w-12 h-12 rounded-full" alt="Client 2">
            <div>
              <div class="font-bold">Jane Smith</div>
              <div class="text-gray-400 text-sm">Marketing Lead, Beta Inc</div>
            </div>
          </div>
        </div>
        <div class="bg-white rounded-lg shadow-lg p-6" data-aos="fade-up" data-aos-delay="300">
          <p class="text-gray-700 italic mb-4">"Professional, innovative, and always on time. Our go-to marketing partner."</p>
          <div class="flex items-center gap-3">
            <img src="https://randomuser.me/api/portraits/men/54.jpg" class="w-12 h-12 rounded-full" alt="Client 3">
            <div>
              <div class="font-bold">Mike Lee</div>
              <div class="text-gray-400 text-sm">Founder, Gamma LLC</div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Team Section -->
    <section id="team" class="w-full max-w-6xl mx-auto py-16" data-aos="fade-up">
      <h2 class="text-4xl font-bold text-center mb-12">Meet the Team</h2>
      <div class="grid md:grid-cols-3 gap-8">
        <div class="bg-white rounded-lg shadow-lg p-6 text-center" data-aos="flip-left" data-aos-delay="100">
          <img src="https://randomuser.me/api/portraits/men/45.jpg" class="w-20 h-20 rounded-full mx-auto mb-4" alt="Team 1">
          <div class="font-bold text-lg">Alex Johnson</div>
          <div class="text-gray-400 mb-2">Lead Designer</div>
          <p class="text-gray-600">Passionate about creating beautiful, user-friendly interfaces.</p>
        </div>
        <div class="bg-white rounded-lg shadow-lg p-6 text-center" data-aos="flip-left" data-aos-delay="200">
          <img src="https://randomuser.me/api/portraits/women/47.jpg" class="w-20 h-20 rounded-full mx-auto mb-4" alt="Team 2">
          <div class="font-bold text-lg">Sara Kim</div>
          <div class="text-gray-400 mb-2">Marketing Strategist</div>
          <p class="text-gray-600">Expert in digital marketing and brand growth strategies.</p>
        </div>
        <div class="bg-white rounded-lg shadow-lg p-6 text-center" data-aos="flip-left" data-aos-delay="300">
          <img src="https://randomuser.me/api/portraits/men/48.jpg" class="w-20 h-20 rounded-full mx-auto mb-4" alt="Team 3">
          <div class="font-bold text-lg">Chris Evans</div>
          <div class="text-gray-400 mb-2">Full Stack Developer</div>
          <p class="text-gray-600">Loves building fast, scalable, and robust web applications.</p>
        </div>
      </div>
    </section>

    <!-- FAQ Section -->
    <section id="faq" class="w-full max-w-4xl mx-auto py-16" data-aos="fade-up">
      <h2 class="text-4xl font-bold text-center mb-12">Frequently Asked Questions</h2>
      <div class="space-y-6">
        <div class="bg-white rounded-lg shadow p-6" data-aos="fade-up" data-aos-delay="100">
          <div class="font-bold mb-2">How long does a typical project take?</div>
          <div class="text-gray-600">Most projects are completed within 4-8 weeks, depending on complexity and requirements.</div>
        </div>
        <div class="bg-white rounded-lg shadow p-6" data-aos="fade-up" data-aos-delay="200">
          <div class="font-bold mb-2">Do you offer ongoing support?</div>
          <div class="text-gray-600">Yes! We offer maintenance and support packages to keep your site running smoothly.</div>
        </div>
        <div class="bg-white rounded-lg shadow p-6" data-aos="fade-up" data-aos-delay="300">
          <div class="font-bold mb-2">Can you help with branding and content?</div>
          <div class="text-gray-600">Absolutely. Our team includes branding experts and copywriters to help you shine.</div>
        </div>
      </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="w-full max-w-4xl mx-auto py-16 text-center" data-aos="zoom-in">
      <h2 class="text-4xl font-bold mb-4">Ready to elevate your brand?</h2>
      <p class="text-gray-600 mb-8">Contact us today for a free consultation and let's build something amazing together.</p>
      <form class="max-w-xl mx-auto grid gap-4">
        <input type="text" placeholder="Your Name" class="p-3 rounded border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-200" />
        <input type="email" placeholder="Your Email" class="p-3 rounded border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-200" />
        <textarea placeholder="Your Message" class="p-3 rounded border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-200"></textarea>
        <button type="submit" class="px-8 py-3 bg-blue-600 text-white rounded-full font-semibold hover:bg-blue-700 transition">Send Message</button>
      </form>
    </section>

    <!-- Footer -->
    <footer class="w-full max-w-6xl mx-auto py-6 text-center text-gray-400">
      &copy; 2024 YourBrand. All rights reserved.
    </footer>
  </div>
</template>

<script setup>
import { onMounted, ref } from 'vue'
import AOS from 'aos'
import 'aos/dist/aos.css'
import lottie from 'lottie-web'

const lottieContainer = ref(null)

onMounted(() => {
  AOS.init()
  // Lottie animation (replace with your own animation JSON if desired)
  lottie.loadAnimation({
    container: lottieContainer.value,
    renderer: 'svg',
    loop: true,
    autoplay: true,
    path: 'https://assets2.lottiefiles.com/packages/lf20_kyu7xb1v.json' // Example marketing animation
  })
})
</script>

<style scoped>
/* Add custom styles or use Tailwind classes */
</style>
