<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Unit extends CI_Controller {

  public function __construct() 
  {
    parent::__construct();
    $this->load->model('Unit_model');
  }

  public function index($id_rps)
  {
    $data = $this->Unit_model->getAll($id_rps);

    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($data);
  }
  
  public function show($id)
  {
    $data = $this->Unit_model->getOne($id);

    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($data);
  }

  public function insert($id_rps)
  {
    $data = json_decode(file_get_contents('php://input'), true);
    $judul = $data['judul'];
    $kemampuan = $data['kemampuan'];
    $indikator = $data['indikator'];
    $bahan_kajian = $data['bahan_kajian'];
    $metode_pem = $data['metode_pem'];
    $metode_pen = $data['metode_pen'];
    $lama_waktu = $data['lama_waktu'];
    
    $r = $this->Unit_model->insert($id_rps, $judul, $kemampuan, $indikator, $bahan_kajian, $metode_pem, $metode_pen, $lama_waktu);

    header('Content-Type: application/json; charset=utf-8');
    echo json_encode(['success' => $r]);
  }

  public function edit($id_rps, $id)
  {
    $data = json_decode(file_get_contents('php://input'), true);
    $judul = $data['judul'];
    $kemampuan = $data['kemampuan'];
    $indikator = $data['indikator'];
    $bahan_kajian = $data['bahan_kajian'];
    $metode_pem = $data['metode_pem'];
    $metode_pen = $data['metode_pen'];
    $lama_waktu = $data['lama_waktu'];

    $r = $this->Unit_model->update($id, $id_rps, $judul, $kemampuan, $indikator, $bahan_kajian, $metode_pem, $metode_pen, $lama_waktu);

    header('Content-Type: application/json; charset=utf-8');
    echo json_encode(['success' => $r]);
  }

  public function delete($id_ref)
  {
    $r = $this->Unit_model->delete($id_ref);

    header('Content-Type: application/json; charset=utf-8');
    echo json_encode(['success' => $r]);
  }
}