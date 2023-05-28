<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BeritaController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('BeritaModel');
		$this->load->helper('admin_helper');
		is_admin_login();
	}

	public function index()
	{
		$data['berita']=$this->BeritaModel->get();
		$this->load->view('admin/BeritaView',$data);
	}

	public function add_berita()
	{
		$this->load->view('admin/AddBeritaView');
	}

	public function create()
	{
		$judul=$this->input->post('judul');
		$isi=$this->input->post('isi');
		$gambar=$this->BeritaModel->upload('gambar');

		$this->form_validation->set_rules('judul','Judul Berita','required');
		$this->form_validation->set_rules('isi','Isi berita','required');
		$data=[
			'judul_berita'=>$judul,
			'isi'=>$isi,
			'gambar'=>$gambar
		];

		if($this->form_validation->run()==FALSE){
			$this->load->view('admin/AddBeritaView');
		} else {
			$this->BeritaModel->create($data);
			return redirect('admin/berita');
		}
	}

	public function edit_berita()
	{
		$id=$this->uri->segment(4);
		$data['berita']=$this->BeritaModel->first($id);
		$this->load->view('admin/EditBeritaView',$data);
	}

	public function edit()
	{
		$id=$this->input->post('id_berita');
		$judul=$this->input->post('judul');
		$isi=$this->input->post('isi');

		$gambar=$this->BeritaModel->upload('gambar');
		$this->form_validation->set_rules('judul','Judul Berita','required');
		$this->form_validation->set_rules('isi','Isi berita','required');

		if($gambar==NULL){
			$data=[
				'judul_berita'=>$judul,
				'isi'=>$isi
			];
		} else {
			$data=[
				'judul_berita'=>$judul,
				'isi'=>$isi,
				'gambar'=>$gambar
			];
		}

		if($this->form_validation->run()==FALSE){
			$this->load->view('admin/AddBeritaView');
		} else {
			$this->BeritaModel->update($data,$id);
			return redirect('admin/berita');
		}
	}

	public function hapus()
	{
		$id=$this->uri->segment(4);
		$this->BeritaModel->delete($id);
		return redirect('admin/berita');
	}
}