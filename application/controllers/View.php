<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class View extends CI_Controller {

  public function __construct() 
  {
    parent::__construct();
    $this->load->model('Jadwal_model');
    $this->load->model('Ref_model');
    $this->load->model('Unit_model');
    $this->load->model('Nilai_model');
    $this->load->model('Tugas_model');
    $this->load->model('Rencana_model');
  }
  public function index()
  {
    echo "hai";
  }
	public function login()
	{
    loginRequired(false);
    
		$this->load->view('templates/header', ['title' =>'Login | RPS Manager']);
    $this->load->view('login');
    $this->load->view('templates/footer');
	}
	public function register()
	{
    loginRequired(false);

		$this->load->view('templates/header', ['title' =>'Register | RPS Manager']);
    $this->load->view('register');
    $this->load->view('templates/footer');
	}
	public function dashboard()
	{
    loginRequired();

		$this->load->view('templates/header', ['title' =>'Dashboard | RPS Manager']);
    $this->load->view('dashboard');
    $this->load->view('templates/footer');
	}
	public function rps($id)
	{
    loginRequired();

		$data = $this->Jadwal_model->getOne($id);
    $data['isDisableButton'] = ($data['status'] == 0)? '':'disabled';
    $data['id'] = $id;
    
    $this->load->view('templates/header', ['title' => 'Detail | RPS Manager', 'id_rps' => $id]);
    $this->load->view('detail', $data);
    $this->load->view('templates/footer');
	}

  public function print($id)
  {
    loginRequired();

    $data = [
      'basic' => $this->Jadwal_model->getOne($id),
      'referensi' => $this->Ref_model->getAll($id),
      'unit' => $this->Unit_model->getAll($id),
      'nilai' => $this->Nilai_model->getAll($id),
      'tugas' => $this->Tugas_model->getAll($id),
      'rencana' => $this->Rencana_model->getAll($id),
    ];

    $this->load->view('templates/header', ['title' => 'Detail | RPS Manager']);
    $this->load->view('print', $data);
    $this->load->view('templates/footer');
  }

  public function components($id)
  {
    $this->load->view("components/$id.php");
  }
  
  public function accordions($id)
  {
    $this->load->view("components/accordions/$id.php");
  }
 

}
