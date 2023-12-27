<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ref extends CI_Controller {

  public function __construct() 
  {
    parent::__construct();
    $this->load->model('Ref_model');
  }

  public function index($id_rps)
  {
    loginRequired();
    
    $data = $this->Ref_model->getAll($id_rps);

    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($data);
  }

  public function insert($id_rps)
  {
    loginRequired();

    $data = json_decode(file_get_contents('php://input'), true);
    $deskripsi = $data['deskripsi'];
    $r = $this->Ref_model->insert($id_rps, $deskripsi);

    header('Content-Type: application/json; charset=utf-8');
    echo json_encode(['success' => $r]);
  }

  public function delete($id_ref)
  {
    loginRequired();

    $r = $this->Ref_model->delete($id_ref);

    header('Content-Type: application/json; charset=utf-8');
    echo json_encode(['success' => $r]);
  }
}