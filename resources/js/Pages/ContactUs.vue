<template>
  <Head title="Contact Us" />

  <section class="bg-gray-100 py-16">
    <div class="container mx-auto px-4">
      <h1 class="text-5xl font-extrabold text-gray-900 text-center mb-12">
        Contact Us
      </h1>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
        <!-- Contact Information -->
        <div class="bg-white p-8 rounded-lg shadow-lg">
          <h2 class="text-3xl font-bold text-gray-800 mb-6">Get in Touch</h2>
          <p class="text-gray-700 mb-4">
            Have questions or want to discuss your iGaming marketing needs? We're here to help!
          </p>
          <ul class="space-y-4 text-gray-700">
            <li>
              <strong>Email:</strong> <a href="mailto:info@cesiummarketing.com" class="text-blue-600 hover:underline">info@cesiummarketing.com</a>
            </li>
            <li>
              <strong>Phone:</strong> <a href="tel:+1234567890" class="text-blue-600 hover:underline">+1 (234) 567-890</a>
            </li>
            <li>
              <strong>Address:</strong> 123 Marketing Lane, Suite 400, Business City, BC 12345
            </li>
          </ul>
        </div>

        <!-- Contact Form -->
        <div class="bg-white p-8 rounded-lg shadow-lg">
          <h2 class="text-3xl font-bold text-gray-800 mb-6">Send Us a Message</h2>
          <form @submit.prevent="submitForm">
            <div class="mb-4">
              <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name:</label>
              <input
                type="text"
                id="name"
                v-model="form.name"
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                required
              />
            </div>
            <div class="mb-4">
              <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email:</label>
              <input
                type="email"
                id="email"
                v-model="form.email"
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                required
              />
            </div>
            <div class="mb-6">
              <label for="message" class="block text-gray-700 text-sm font-bold mb-2">Message:</label>
              <textarea
                id="message"
                v-model="form.message"
                rows="5"
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                required
              ></textarea>
            </div>
            <div class="flex items-center justify-between">
              <button
                type="submit"
                class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
              >
                Send Message
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
import { ref } from 'vue';
import { Head } from '@inertiajs/vue3';

const form = ref({
  name: '',
  email: '',
  message: '',
});

const submitForm = () => {
  alert('Form submitted! (This is a placeholder. In a real application, this would send data to a backend.)');
  form.value.name = '';
  form.value.email = '';
  form.value.message = '';
};
</script>

<style scoped>
/* Add any component-specific styles here if needed */
</style>


