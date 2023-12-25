<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rps extends CI_Controller {

  public function __construct() 
  {
    parent::__construct();
    $this->load->model('Jadwal_model');
    $this->load->model('Prodi_model');
    $this->load->model('Matkul_model');
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

  public function insert()
  {
    $id_matkul = $this->Matkul_model->searchOrAdd($_POST['nama_matkul']);
    $id_prodi = $this->Prodi_model->searchOrAdd($_POST['nama_prodi']);

    $r = $this->Jadwal_model->insert($id_matkul, $id_prodi, $_POST['id_dosen'], $_POST['semester'], $_POST['sks_teori'], $_POST['sks_praktek'], $_POST['tahun']);

    $_SESSION['msg'] = $r ? "berhasil menambahkan data" : "gagal menambahkan data";
    $this->session->mark_as_flash('msg');
    redirect(base_url("dashboard"));
  }

  public function editInfo($id)
  {
    $semester = $_POST['semester'];
    $tahun = $_POST['tahun'];
    $sks_teori = $_POST['sks_teori'];
    $sks_praktek = $_POST['sks_praktek'];

    $r = $this->Jadwal_model->updateBasic($id, $semester, $sks_teori, $sks_praktek, $tahun);
        
    $_SESSION['msg'] = $r ? "berhasil mengedit data" : "gagal mengedit data";
    $this->session->mark_as_flash('msg');
    redirect(base_url("rps/$id"));
  }

  public function delete($id)
  {
    $r = $this->Jadwal_model->delete($id);
        
    $_SESSION['msg'] = $r ? "berhasil menghapus data" : "gagal menghapus data";
    $this->session->mark_as_flash('msg');
  }

  public function editStatus($id_rps, $newStatus)
  {
    $r = $this->Jadwal_model->updateStatus($id_rps, $newStatus);
        
    $_SESSION['msg'] = $r ? "berhasil mengedit data" : "gagal mengedit data";
    $this->session->mark_as_flash('msg');
  }
}