<script setup>
import { ref } from 'vue'

import dashboard_slot from "../components/slot/dashboard_slot.vue";
import hero_card from '../components/hero_card.vue';
import dashboard_navbar from '../components/dashboard_navbar.vue';

const headtext = ref('Selamat Datang,')
const maintext = ref('Imam Subekti')
const foottext = ref('NIK: 2222')
</script>

<template>
	<dashboard_slot>
		<hero_card :headtext="headtext" :maintext="maintext" :foottext="foottext">
			<div class="card-info-right d-grid gap-2">
        <a class="btn btn-primary" href="javascript:alert('fitur masih dalam tahap pengembangan')">Edit Profile</a
        ><a class="btn btn-outline-danger" href="#">Log Out</a>
      </div>
			<template #gear_setting></template>
		</hero_card>
		<dashboard_navbar></dashboard_navbar>
	</dashboard_slot>
</template>
