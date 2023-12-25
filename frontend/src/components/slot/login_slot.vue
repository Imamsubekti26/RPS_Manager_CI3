<script setup>
import googleIcon from "../../assets/img/google_icon.png";
</script>

<template>
	<div class="d-flex justify-content-center align-items-center full-body">
		<div class="card login-card p-5">
			<h4 class="text-center">
				<strong>
					<slot name="title"></slot>
				</strong>
			</h4>
			<slot></slot>
			<hr class="mt-3" />
			<p class="text-center mb-3">or login with:</p>
			<div class="d-grid gap-2">
				<button class="btn btn-light border">
					<img :src="googleIcon" alt="google-icon" width="16" height="16" class="me-2" />
					Amikom Google Account
				</button>
			</div>
			<p class="text-center mt-4">
				<slot name="footer"></slot>
			</p>
		</div>
	</div>
</template>
