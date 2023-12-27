<div class="d-flex justify-content-center align-items-center full-body">
  <div class="card login-card p-5">
    <h4 class="text-center">
      <strong>Register Account</strong>
    </h4>
    <form action="<?= base_url('api/auth/register')?>" method="POST">
      <div class="form-group mb-3">
        <label class="form-label" for="nik"> NIK </label>
        <input class="form-control" type="text" id="nik" value="<?= $_SESSION['old']['nik']??'' ?>" name="nik" />
      </div>
      <div class="form-group mb-3">
        <label class="form-label" for="name"> Name </label>
        <input class="form-control" type="text" id="name" value="<?= $_SESSION['old']['name']??'' ?>" name="name" />
      </div>
      <div class="form-group mb-3">
        <label class="form-label" for="password"> Password </label>
        <input class="form-control" type="password" id="password" name="pass[]" />
      </div>
      <div class="form-group mb-3">
        <label class="form-label" for="cpassword"> Confirm Password </label>
        <input class="form-control" type="password" id="cpassword" name="pass[]" />
      </div>
      <div
        class="d-flex justify-content-between align-items-center mt-4 mb-3"
      >
        <div>
          <p>
            Sudah Punya Akun?
            <a href="<?= base_url('auth/login')?>">Login</a>
          </p>
        </div>
        <button class="btn btn-success px-5" type="submit">Register</button>
      </div>
    </form>
    <hr class="mt-3" />
    <p class="text-center mb-3">or register with:</p>
    <div class="d-grid gap-2">
      <button class="btn btn-light border">
        <img
          src="<?= base_url('assets/img/google_icon.png') ?>"
          alt="google-icon"
          width="16"
          height="16"
          class="me-2"
        />
        Amikom Google Account
      </button>
    </div>
  </div>
</div>