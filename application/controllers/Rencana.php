<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rencana extends CI_Controller {

  public function __construct() 
  {
    parent::__construct();
    $this->load->model('Rencana_model');
  }

  public function index($id_rps)
  {
    loginRequired();
    $data = $this->Rencana_model->getAll($id_rps);

    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($data);
  }
  
  public function show($id)
  {
    loginRequired();
    $data = $this->Rencana_model->getOne($id);

    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($data);
  }

  public function insert($id_rps)
  {
    loginRequired();

    $data = json_decode(file_get_contents('php://input'), true);
    $pertemuan_ke = $data['pertemuan_ke'];
    $kemampuan = $data['kemampuan'];
    $indikator = $data['indikator'];
    $topik_subtopik = $data['topik_subtopik'];
    $strategi = $data['strategi'];
    $lama_waktu = $data['lama_waktu'];
    $penilaian = $data['penilaian'];
    
    $r = $this->Rencana_model->insert($id_rps, $pertemuan_ke, $kemampuan, $indikator, $topik_subtopik, $strategi, $lama_waktu, $penilaian);

    header('Content-Type: application/json; charset=utf-8');
    echo json_encode(['success' => $r]);
  }

  public function edit($id_rps, $id)
  {
    loginRequired();

    $data = json_decode(file_get_contents('php://input'), true);
    $pertemuan_ke = $data['pertemuan_ke'];
    $kemampuan = $data['kemampuan'];
    $indikator = $data['indikator'];
    $topik_subtopik = $data['topik_subtopik'];
    $strategi = $data['strategi'];
    $lama_waktu = $data['lama_waktu'];
    $penilaian = $data['penilaian'];

    $r = $this->Rencana_model->update($id, $id_rps, $pertemuan_ke, $kemampuan, $indikator, $topik_subtopik, $strategi, $lama_waktu, $penilaian);

    header('Content-Type: application/json; charset=utf-8');
    echo json_encode(['success' => $r]);
  }

  public function delete($id_ref)
  {
    loginRequired();
    
    $r = $this->Rencana_model->delete($id_ref);

    header('Content-Type: application/json; charset=utf-8');
    echo json_encode(['success' => $r]);
  }
}