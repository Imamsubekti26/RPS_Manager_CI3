<script setup>
import AmikomIcon from '../assets/img/amikom_icon.png';
</script>

<template>
  <header class="dashboard-topbar border-bottom d-flex bg-light">
    <div class="container d-flex align-items-center gap-2">
      <img :src="AmikomIcon" alt="logo-amikom" height="32" width="32" />
      <div>
        <strong>Amikom RPS Manager</strong>
      </div>
    </div>
  </header>
</template>