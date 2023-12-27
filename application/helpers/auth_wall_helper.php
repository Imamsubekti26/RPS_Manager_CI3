<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// memastikan agar user login dulu
function loginRequired($status = true)
{
  if ($status){
    if (!isset($_SESSION['user'])){
      redirect(base_url('auth/login'));
      return;
    }
  } else {
    if (isset($_SESSION['user'])){
      redirect(base_url('dashboard'));
      return;
    }
  }
}