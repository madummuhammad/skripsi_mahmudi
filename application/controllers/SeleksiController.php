<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SeleksiController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('admin_helper');
		$this->load->model('PendaftaranModel');
		$this->load->model('BerkasDiterimaModel');
		$this->load->model('SeleksiModel');
		$this->load->model('NilaiDiterimaModel');
		is_admin_login();
	}

	public function index()
	{
		$data['pendaftaran']=$this->PendaftaranModel->get();
		$id_pendaftaran=$this->input->post('id_pendaftaran');
		if($id_pendaftaran){
			$data['filter']=$this->PendaftaranModel->row_array('id_pendaftaran',$id_pendaftaran);
		} else {
			$data['filter']=$this->PendaftaranModel->get();
		}
		// var_dump($data);
		$this->load->view('admin/SeleksiView',$data);
	}

	public function create()
	{
		$pendaftaran=$this->PendaftaranModel->get();
		foreach ($pendaftaran as $key => $value) {
			$status=$this->input->post('kelengkapan'.$value->id_pendaftaran);
			$this->PendaftaranModel->update(['status'=>1],$value->id_pendaftaran,$value->id_casis);
			if(!$this->BerkasDiterimaModel->first('id_pendaftaran',$value->id_pendaftaran)){
				if($status=='Lengkap'){
					$this->BerkasDiterimaModel->create(['id_pendaftaran'=>$value->id_pendaftaran]);
					$rerata=($value->nilai['matematika']+$value->nilai['ipa']+$value->nilai['bahasa_indonesia']+$value->nilai['bahasa_inggris'])/4;
					$data=[
						'rerata_nilai'=>$rerata,
						'id_pendaftaran'=>$value->id_pendaftaran,
						'id_panitia'=>1
					];
					$this->SeleksiModel->create($data);
					$this->PendaftaranModel->update(['status'=>1],$value->id_pendaftaran,$value->id_casis);
				} else {

				}
			} else {
				// var_dump($status);
				if($status=='Tidak Lengkap'){
					$this->PendaftaranModel->update(['status'=>1],$value->id_pendaftaran,$value->id_casis);
					$this->BerkasDiterimaModel->delete('id_pendaftaran',$value->id_pendaftaran);
					$this->SeleksiModel->delete('id_pendaftaran',$value->id_pendaftaran);
					$this->NilaiDiterimaModel->delete('id_seleksi',$value->seleksi['id_seleksi']);
				}
			}
		}
		return redirect('admin/seleksi');
	}
}