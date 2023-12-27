<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Matkul extends CI_Controller {

  public function __construct() 
  {
    parent::__construct();
    $this->load->model('Matkul_model');
  }
  
  public function index()
  {
    loginRequired();
    
    $search = $_GET['search'];
    $data = $this->Matkul_model->getAll($search);

    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($data);
  }
}
