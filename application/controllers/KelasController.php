<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KelasController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('KelasModel');
		$this->load->helper('admin_helper');
		is_admin_login();
	}

	public function index()
	{
		$data['kelas']=$this->KelasModel->get();
		$this->load->view('admin/KelasView',$data);
	}

	public function add_kelas()
	{
		$this->load->view('admin/AddKelasView');
	}

	public function create()
	{
		$nama_kelas=$this->input->post('nama_kelas');
		$kuota=$this->input->post('kuota');

		$this->form_validation->set_rules('nama_kelas','Nama Kelas','required');
		$this->form_validation->set_rules('kuota','Kuota','required|numeric');
		$data=[
			'nama_kelas'=>$nama_kelas,
			'kuota'=>$kuota,
		];

		if($this->form_validation->run()==FALSE){
			$this->load->view('admin/AddKelasView');
		} else {
			$this->KelasModel->create($data);
			return redirect('admin/kelas');
		}
	}

	public function edit_kelas()
	{
		$id=$this->uri->segment(4);
		$data['kelas']=$this->KelasModel->first($id);
		$this->load->view('admin/EditKelasView',$data);
	}

	public function edit()
	{
		$id=$this->input->post('id_kelas');
		$nama_kelas=$this->input->post('nama_kelas');
		$kuota=$this->input->post('kuota');

		$this->form_validation->set_rules('nama_kelas','Nama Kelas','required');
		$this->form_validation->set_rules('kuota','Kuota','required|numeric');
		$data=[
			'nama_kelas'=>$nama_kelas,
			'kuota'=>$kuota,
		];
		if($this->form_validation->run()==FALSE){
			$this->load->view('admin/EditKelasView');
		} else {
			$this->KelasModel->update($data,$id);
			return redirect('admin/kelas');
		}
	}

	public function hapus()
	{
		$id=$this->uri->segment(4);
		$this->KelasModel->delete($id);
		return redirect('admin/kelas');
	}
}