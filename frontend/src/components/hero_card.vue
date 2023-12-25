<script setup>
const props = defineProps({
  headtext: String,
  maintext: String,
  foottext: String,
})
</script>

<template>
  <section id="profile-card" class="card">
    <div class="p-3 px-5 d-flex justify-content-between align-items-center">
      <div>
        <p class="mb-2">{{ headtext }}</p>
        <h4><strong>{{ maintext }}</strong></h4>
        <p class="mb-2">{{ foottext }}</p>
      </div>
      <slot></slot>
    </div>
    <slot name="gear_setting"></slot>
  </section>
</template>