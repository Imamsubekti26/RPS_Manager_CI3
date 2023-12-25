<script setup>
import LoginSlot from "../components/slot/login_slot.vue";
</script>

<template>
	<LoginSlot>
		<template #title>Amikom RPS Manager</template>
		<form action="#" method="POST">
			<div class="form-group mb-3">
				<label class="form-label" for="nik"> NIK </label>
				<input class="form-control" type="text" id="nik" name="nik" />
			</div>
			<div class="form-group mb-3">
				<label class="form-label" for="password"> Password </label>
				<input class="form-control" type="password" id="password" name="pass" />
			</div>
			<div class="d-flex justify-content-between align-items-center mt-4 mb-3">
				<div class="form-check">
					<input class="form-check-input" type="checkbox" id="rememberme" />
					<label class="form-check-label" for="rememberme"> Remember Me </label>
				</div>
				<button class="btn btn-success px-5" type="submit">Login</button>
			</div>
		</form>
		<template #footer>
			Belum Punya Akun? klik
			<router-link to="/register"> disini</router-link>
		</template>
	</LoginSlot>
</template>
