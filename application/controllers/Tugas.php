<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tugas extends CI_Controller {

  public function __construct() 
  {
    parent::__construct();
    $this->load->model('Tugas_model');
  }

  public function index($id_rps)
  {
    $data = $this->Tugas_model->getAll($id_rps);

    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($data);
  }
  
  public function show($id)
  {
    $data = $this->Tugas_model->getOne($id);

    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($data);
  }

  public function insert($id_rps)
  {
    $data = json_decode(file_get_contents('php://input'), true);
    $judul = $data['judul'];
    $tugas = $data['tugas'];
    $kemampuan = $data['kemampuan'];
    $kriteria_pen = $data['kriteria_pen'];
    $indikator_pen = $data['indikator_pen'];
    $lama_waktu = $data['lama_waktu'];
    $bobot_nilai = $data['bobot_nilai'];
    
    $r = $this->Tugas_model->insert($id_rps, $judul, $tugas, $kemampuan, $kriteria_pen, $indikator_pen, $lama_waktu, $bobot_nilai);

    header('Content-Type: application/json; charset=utf-8');
    echo json_encode(['success' => $r]);
  }

  public function edit($id_rps, $id)
  {
    $data = json_decode(file_get_contents('php://input'), true);
    $judul = $data['judul'];
    $tugas = $data['tugas'];
    $kemampuan = $data['kemampuan'];
    $kriteria_pen = $data['kriteria_pen'];
    $indikator_pen = $data['indikator_pen'];
    $lama_waktu = $data['lama_waktu'];
    $bobot_nilai = $data['bobot_nilai'];

    $r = $this->Tugas_model->update($id, $id_rps, $judul, $tugas, $kemampuan, $kriteria_pen, $indikator_pen, $lama_waktu, $bobot_nilai);

    header('Content-Type: application/json; charset=utf-8');
    echo json_encode(['success' => $r]);
  }

  public function delete($id_ref)
  {
    $r = $this->Tugas_model->delete($id_ref);

    header('Content-Type: application/json; charset=utf-8');
    echo json_encode(['success' => $r]);
  }
}