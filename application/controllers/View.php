<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class View extends CI_Controller {

  public function __construct() 
  {
    parent::__construct();
    $this->load->model('Jadwal_model');
  }
  public function index()
  {
    echo "hai";
  }
	public function login()
	{
		$this->load->view('templates/header', ['title' =>'Login | RPS Manager']);
    $this->load->view('login');
    $this->load->view('templates/footer');
	}
	public function register()
	{
		$this->load->view('templates/header', ['title' =>'Register | RPS Manager']);
    $this->load->view('register');
    $this->load->view('templates/footer');
	}
	public function dashboard()
	{
		$this->load->view('templates/header', ['title' =>'Dashboard | RPS Manager']);
    $this->load->view('dashboard');
    $this->load->view('templates/footer');
	}
	public function rps($id)
	{
		$data = $this->Jadwal_model->getOne($id);
    $data['isDisableButton'] = ($data['status'] == 0)? '':'disabled';
    $data['id'] = $id;
    
    $this->load->view('templates/header', ['title' => 'Detail | RPS Manager']);
    $this->load->view('detail', $data);
    $this->load->view('templates/footer');
	}
	public function components($compName)
	{
		$this->load->view("components/accordions/$compName");
	}
}
