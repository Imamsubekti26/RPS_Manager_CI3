<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rps extends CI_Controller {

  public function __construct() 
  {
    parent::__construct();
    $this->load->model('Jadwal_model');
  }

  public function index()
  {
    $dosen = $_SESSION['user']['nik'];
    $filter = $_GET['filter'];
    $search = $_GET['search'];

    $data = $this->Jadwal_model->getAll($dosen, $filter, $search);

    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($data);
  }
}