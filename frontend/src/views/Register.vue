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
				<label class="form-label" for="name"> Name </label>
				<input class="form-control" type="text" id="name" name="name" />
			</div>
			<div class="form-group mb-3">
				<label class="form-label" for="password"> Password </label>
				<input class="form-control" type="password" id="password" name="pass[]" />
			</div>
			<div class="form-group mb-3">
				<label class="form-label" for="cpassword"> Confirm Password </label>
				<input class="form-control" type="password" id="cpassword" name="pass[]" />
			</div>
			<div class="d-flex justify-content-between align-items-center mt-4 mb-3">
				<div></div>
				<button class="btn btn-success px-5" type="submit">Register</button>
			</div>
		</form>
		<template #footer>
			Sudah Punya Akun? klik
			<router-link to="/login"> disini</router-link>
		</template>
	</LoginSlot>
</template>
