<template>
  <div class="relative bg-[#362869] text-white">
    <div 
      class="absolute inset-0 w-full h-full"
      style="
        background-image: url('/assets/Rectangle8.jpg');
        background-size: cover;
        background-position: center;
        opacity: 0.40;
      "
    ></div>
    <div class="absolute inset-0 bg-[#362869]/20 mix-blend-multiply"></div>
    <slot></slot>
  </div>
</template>

<script setup>
// No props or reactive data needed for this component
</script>


