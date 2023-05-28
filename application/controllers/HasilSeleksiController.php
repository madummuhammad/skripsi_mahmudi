<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HasilSeleksiController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('admin_helper');
		$this->load->model('PendaftaranModel');
		$this->load->model('CasisModel');
		$this->load->model('BerkasDiterimaModel');
		$this->load->model('SeleksiModel');
		$this->load->model('NilaiDiterimaModel');
		is_admin_login();
	}

	public function index()
	{
		$data['seleksi']=$this->SeleksiModel->get_all();
		$data['status']=$this->NilaiDiterimaModel->status();


		// var_dump($data['status']);
		$this->load->view('admin/HasilSeleksiView',$data);
	}

	public function cetak()
	{
		$data['seleksi']=$this->SeleksiModel->get_all();
		$data['status']=$this->NilaiDiterimaModel->status();
		$this->load->view('admin/HasilSeleksiCetakView',$data);
	}

	public function detail_cetak()
	{
		$id_casis=$this->uri->segment(5);
		$data['casis']=$this->CasisModel->detail('id_casis',$id_casis);

		// var_dump($data['casis']);
		$this->load->view('admin/HasilSeleksiDetailCetak',$data);
	}

	public function update()
	{
		$pendaftaran=$this->SeleksiModel->get();
		foreach ($pendaftaran['unggulan'] as $key => $value) {
			$data=[
				'status'=>true,
			];

			$this->NilaiDiterimaModel->update('id_seleksi',$value->id_seleksi,$data);
		}
		foreach ($pendaftaran['reguler'] as $key => $value) {
			$data=[
				'status'=>true,
			];

			$this->NilaiDiterimaModel->update('id_seleksi',$value->id_seleksi,$data);
		}

		return redirect('admin/hasil_seleksi');
	}

}