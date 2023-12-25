<script setup>
import { ref } from 'vue'

import dashboard_slot from '../components/slot/dashboard_slot.vue';
import hero_card from '../components/hero_card.vue';

const headtext = ref('Selamat Datang,')
const maintext = ref('Imam Subekti')
const foottext = ref('NIK: 2222')
</script>

<template>
	<dashboard_slot>
		<hero_card :headtext="headtext" :maintext="maintext" :foottext="foottext">
			<div class="row">
				<div class="col">
					<p class="mb-1">Semester</p>
					<p class="mb-1">Tahun</p>
					<p class="mb-1">Jml SKS</p>
				</div>
				<div class="col">
					<p class="mb-1">:</p>
					<p class="mb-1">:</p>
					<p class="mb-1">:</p>
				</div>
				<div class="col">
					<p class="mb-1">test</p>
					<p class="mb-1">e</p>
					<p class="mb-1">2</p>
				</div>
			</div>
			<template #gear_setting>
				<button class="btn-setting" data-bs-toggle="modal" data-bs-target="#modal-change-basic-info">
					<i class="bi bi-gear"></i>
				</button>
			</template>
		</hero_card>
	</dashboard_slot>
</template>
