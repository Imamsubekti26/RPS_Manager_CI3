<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prodi extends CI_Controller {

  public function __construct() 
  {
    parent::__construct();
    $this->load->model('Prodi_model');
  }

  public function index()
  {
    $search = $_GET['search'];
    $data = $this->Prodi_model->getAll($search);

    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($data);
  }
}