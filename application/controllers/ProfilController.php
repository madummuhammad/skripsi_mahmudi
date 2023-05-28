<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProfilController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('ProfilSekolahModel');
		$this->load->helper('admin_helper');
		is_admin_login();
	}

	public function index()
	{
		$data['profile']=$this->ProfilSekolahModel->first();
		$this->load->view('admin/EditProfileView',$data);
	}

	public function edit()
	{
		$id=$this->input->post('id_profile');
		$visi=$this->input->post('visi');
		$misi=$this->input->post('misi');
		$sejarah=$this->input->post('sejarah');

		$this->form_validation->set_rules('visi','Visi','required');
		$this->form_validation->set_rules('misi','misi','required');
		$this->form_validation->set_rules('sejarah','Sejarah','required');
		$data=[
			'visi'=>$visi,
			'misi'=>$misi,
			'sejarah'=>$sejarah,
		];
		if($this->form_validation->run()==FALSE){
			$this->load->view('admin/EditProfileView');
		} else {
			$this->ProfilSekolahModel->update($data,$id);
			return redirect('admin/profile');
		}
	}
}