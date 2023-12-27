<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

  public function __construct() 
  {
    parent::__construct();
    $this->load->model('Dosen_model');
  }

  public function login()
  {
    loginRequired(false);
    
    $nik = $_POST['nik'];
    $pass = md5($_POST['pass']);

    $r = $this->Dosen_model->getOne($nik, $pass);
    
    if(empty($r)) {
      $_SESSION['msg'] = "user atau password salah";
      $_SESSION['old']['nik'] = $nik;
      $this->session->mark_as_flash(['msg', 'old']);
      redirect(base_url('auth/login'));
      return;
    }

    $_SESSION['user']['nik'] = $r['nik'];
    $_SESSION['user']['name'] = $r['name'];

    redirect(base_url("dashboard"));
    return;
  }

  public function register()
  {
    loginRequired(false);

    $nik = $_POST['nik'];
    $name = $_POST['name'];
    $pass = md5($_POST['pass'][0]);

    if($_POST['pass'][0] != $_POST['pass'][1]){
      $_SESSION['msg'] = "pastikan kedua password sudah sama";
      $_SESSION['old']['nik'] = $nik;
      $_SESSION['old']['nama'] = $nama;
      $this->session->mark_as_flash(['msg', 'old']);
      redirect(base_url("auth/register"));
      return;
    }

    $r = $this->Dosen_model->insert($nik, $pass, $name);

    if(!$r) {
      $_SESSION['msg'] = "gagal registrasi";
      $_SESSION['old'] = [
        'nik' => "$nik",
        'name' => "$name",
      ];
      $this->session->mark_as_flash(['msg', 'old']);
      redirect(base_url("auth/register"));
      return;
    }

    $_SESSION['msg'] = "berhasil registrasi! silahkan login";
    $this->session->mark_as_flash('msg');
    redirect(base_url("auth/login"));
    return;
  }

  public function logout()
  {
    unset($_SESSION['user']);
    session_destroy();
    redirect(base_url("auth/login"));
    return;
  }
}