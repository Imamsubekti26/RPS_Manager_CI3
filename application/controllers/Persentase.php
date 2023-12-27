<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Persentase extends CI_Controller {

  public function __construct() 
  {
    parent::__construct();
    $this->load->model('Nilai_model');
  }

  public function index($id_rps)
  {
    loginRequired();
    
    $data = $this->Nilai_model->getAll($id_rps);

    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($data);
  }

  public function insert($id_rps)
  {
    loginRequired();

    $data = json_decode(file_get_contents('php://input'), true);
    $deskripsi = $data['deskripsi'];
    $persentase = $data['persentase'];
    $r = $this->Nilai_model->insert($id_rps, $deskripsi, $persentase);

    header('Content-Type: application/json; charset=utf-8');
    echo json_encode(['success' => $r]);
  }

  public function delete($id_nilai)
  {
    loginRequired();

    $r = $this->Nilai_model->delete($id_nilai);

    header('Content-Type: application/json; charset=utf-8');
    echo json_encode(['success' => $r]);
  }
}