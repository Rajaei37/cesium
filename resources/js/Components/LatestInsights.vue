<template>
  <section id="blog" class="py-20 bg-gray-900 text-white">
    <div class="container mx-auto px-6">
      <div class="text-center mb-16">
        <h2 class="text-4xl lg:text-5xl font-semibold mb-4">Latest Insights</h2>
        <p class="text-xl opacity-90 max-w-3xl mx-auto font-light">Stay ahead with our expert insights and industry analysis</p>
      </div>

      <div v-if="posts && posts.length" class="mb-12">
        <div class="bg-white rounded-xl shadow-xl overflow-hidden">
          <div class="md:flex">
            <div class="md:w-1/2">
              <img :src="posts[0].image" :alt="posts[0].title" class="w-full h-64 md:h-full object-cover" loading="lazy" decoding="async" />
            </div>
            <div class="md:w-1/2 p-8 text-gray-800">
              <div class="text-sm text-[#facb24] font-semibold mb-2">FEATURED ARTICLE</div>
              <h3 class="text-2xl font-bold text-[#362869] mb-4">{{ posts[0].title }}</h3>
              <p class="text-gray-600 mb-6">{{ posts[0].excerpt }}</p>
              <div class="flex items-center justify-between">
                <div class="flex items-center space-x-4 text-sm text-gray-500">
                  <span>{{ posts[0].author }}</span>
                  <span>{{ posts[0].date }}</span>
                  <span>{{ posts[0].read_time }}</span>
                </div>
                <a :href="posts[0].url" class="text-[#facb24] font-semibold">Read More →</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
        <article v-for="(post, i) in posts.slice(1,4)" :key="i" class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition">
          <img :src="post.image" :alt="post.title" class="w-full h-48 object-cover" loading="lazy" decoding="async" />
          <div class="p-6">
            <div class="text-sm text-[#facb24] font-semibold mb-2">{{ post.category || 'INSIGHTS' }}</div>
            <h3 class="text-lg font-bold text-[#362869] mb-2">{{ post.title }}</h3>
            <p class="text-gray-600 text-sm mb-4">{{ post.excerpt }}</p>
            <div class="flex items-center justify-between text-sm text-gray-500">
              <span>{{ post.author }}</span>
              <span>{{ post.read_time }}</span>
            </div>
          </div>
        </article>
      </div>

      <div class="text-center">
        <a href="/blog" class="inline-block bg-[#facb24] text-[#362869] font-semibold py-4 px-8 rounded-full shadow-lg hover:bg-[#FFD300] transition transform hover:scale-105">
          View All Insights
        </a>
      </div>
    </div>
  </section>
</template>

<script setup>
const props = defineProps({
  blogPosts: { type: Array, default: () => [] },
});

// Default posts if none provided
const defaultPosts = [
  {
    title: "The Future of iGaming Marketing",
    excerpt: "Exploring the latest trends and technologies shaping the industry.",
    image: "/assets/blog-placeholder.jpg",
    author: "Cesium Team",
    date: "Dec 15, 2024",
    read_time: "5 min read",
    url: "/blog/future-igaming-marketing",
    category: "TRENDS"
  },
  {
    title: "Data-Driven Growth Strategies",
    excerpt: "How to leverage analytics for maximum ROI in your campaigns.",
    image: "/assets/blog-placeholder.jpg",
    author: "Cesium Team",
    date: "Dec 10, 2024",
    read_time: "7 min read",
    url: "/blog/data-driven-growth",
    category: "STRATEGY"
  },
  {
    title: "Social Media Best Practices",
    excerpt: "Building engaged communities in the digital age.",
    image: "/assets/blog-placeholder.jpg",
    author: "Cesium Team",
    date: "Dec 5, 2024",
    read_time: "4 min read",
    url: "/blog/social-media-best-practices",
    category: "SOCIAL"
  },
  {
    title: "Email Marketing Automation",
    excerpt: "Streamline your campaigns for better conversion rates.",
    image: "/assets/blog-placeholder.jpg",
    author: "Cesium Team",
    date: "Nov 30, 2024",
    read_time: "6 min read",
    url: "/blog/email-automation",
    category: "EMAIL"
  }
];

const posts = props.blogPosts.length > 0 ? props.blogPosts : defaultPosts;
</script>

<style scoped></style>

