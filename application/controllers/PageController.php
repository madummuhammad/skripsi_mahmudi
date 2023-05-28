<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PageController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('casis_helper');
		$this->load->model('ProfilSekolahModel');
	}

	public function dashboard()
	{
		is_login();
		$data['profile']=$this->ProfilSekolahModel->first();
		$this->load->view('DashboardView',$data);
	}

	public function login()
	{
		$this->load->view('LoginView');
	}

	public function register()
	{
		$this->load->view('RegisterView');
	}

	public function admin_login()
	{
		$this->load->view('admin/LoginAdminView');
	}
}