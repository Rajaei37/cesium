<template>
  <div class="fixed bottom-6 right-6 z-50 flex flex-col space-y-3" role="region" aria-label="Quick actions">
    <button
      @click="openScheduleWindow"
      aria-label="Schedule meeting"
      class="bg-[#362869] hover:bg-[#2C1C59] text-white font-semibold py-3 px-4 rounded-full shadow-lg transition transform hover:scale-105 flex items-center gap-2"
    >
      <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden>
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
      </svg>
      <span class="hidden sm:inline">Schedule Time</span>
    </button>

    <a href="/contact-us" class="bg-[#facb24] hover:bg-[#FFD300] text-[#362869] font-semibold py-3 px-4 rounded-full shadow-lg transition transform hover:scale-105 flex items-center gap-2" aria-label="Request strategy call">
      <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden>
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
      </svg>
      <span class="hidden sm:inline">Request Call</span>
    </a>
  </div>
</template>

<script setup>
const openScheduleWindow = () => {
  const width = 800;
  const height = 700;
  const left = (window.screen.width / 2) - (width / 2);
  const top = (window.screen.height / 2) - (height / 2);
  window.open(
    'https://calendly.com/ragaee37/30min',
    'Calendly',
    `width=${width},height=${height},top=${top},left=${left},toolbar=no,menubar=no,location=no,status=no`
  );
};
</script>

<style scoped>
@media (max-width: 768px) {
  .fixed.bottom-6.right-6 { bottom: 1rem; right: 1rem; }
  .fixed.bottom-6.right-6 span { display: none; }
}
</style>

