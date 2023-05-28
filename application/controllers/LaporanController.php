<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LaporanController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('admin_helper');
		// $this->load->model('PendaftaranModel');
		$this->load->model('NilaiDiterimaModel');
		$this->load->model('SeleksiModel');
		is_admin_login();
	}

	public function buat_laporan(){
		$data['seleksi']=$this->SeleksiModel->get_all();

		// var_dump($data['seleksi']);
		$data['status']=$this->SeleksiModel->status();
		// var_dump($this->SeleksiModel->status());
		$this->load->view('admin/LaporanView',$data);
	}

	public function create()
	{
		$pendaftaran=$this->SeleksiModel->get();
		foreach ($pendaftaran['unggulan'] as $key => $value) {
			$id_kelas=1;
			$data=[
				'rata_rata_nilai'=>$value->rerata_nilai,
				'status'=>false,
				'id_seleksi'=>$value->id_seleksi,
				'id_kelas'=>$id_kelas
			];

			$this->NilaiDiterimaModel->create($data);
		}
		foreach ($pendaftaran['reguler'] as $key => $value) {
			$id_kelas=2;
			$data=[
				'rata_rata_nilai'=>$value->rerata_nilai,
				'status'=>false,
				'id_seleksi'=>$value->id_seleksi,
				'id_kelas'=>$id_kelas
			];

			$this->NilaiDiterimaModel->create($data);
		}

		return redirect('admin/buat_laporan');
	}
}