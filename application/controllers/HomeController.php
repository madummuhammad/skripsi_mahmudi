<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('BeritaModel');
		$this->load->model('SeleksiModel');
		$this->load->model('NilaiDiterimaModel');
		$this->load->model('ProfilSekolahModel');
	}

	public function index()
	{
		$data['berita']=$this->BeritaModel->highlight();
		$this->load->view('home/BerandaView',$data);
	}

	public function berita()
	{
		$data['berita']=$this->BeritaModel->get();
		$this->load->view('home/BeritaView',$data);
	}

	public function berita_detail()
	{
		$id=$this->uri->segment(3);
		$data['berita']=$this->BeritaModel->first($id);
		$this->load->view('home/BeritaDetailView',$data);
	}

	public function pengumuman()
	{
		$data['seleksi']=$this->SeleksiModel->get();
		$data['status']=$this->NilaiDiterimaModel->status();
		$this->load->view('home/PengumumanView',$data);
	}

	public function cetak()
	{
		$data['seleksi']=$this->SeleksiModel->get();
		$data['status']=$this->NilaiDiterimaModel->status();
		$this->load->view('home/CetakView',$data);
	}

	public function profile()
	{
		$data['profile']=$this->ProfilSekolahModel->first();
		$this->load->view('home/ProfileView',$data);
	}

	public function galeri()
	{
		$data['berita']=$this->BeritaModel->get();
		$this->load->view('home/GaleriView',$data);
	}
}