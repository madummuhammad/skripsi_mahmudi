<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PendaftaranModel extends CI_Model {

	private $table='pendaftaran';
	private $primary_key='id_pendaftaran';

	public function __construct()
	{
		parent::__construct();
	}

	public function create($data){
		$this->db->insert($this->table,$data);
	}

	public function get()
	{
		$this->db->order_by('tgl_pendaftaran','DESC');
		$pendaftaran=$this->db->get($this->table)->result();
		foreach ($pendaftaran as $key => $value) {
			$this->db->where('id_casis',$value->id_casis);
			$value->casis=$this->db->get('casis')->row_array();

			// Ijazah
			$this->db->where('id_casis',$value->id_casis);
			$this->db->where('nama_berkas','Ijazah');
			$value->ijazah=$this->db->get('berkas')->row_array()['gambar'];

			// SKHU
			$this->db->where('id_casis',$value->id_casis);
			$this->db->where('nama_berkas','SKHU');
			$value->skhu=$this->db->get('berkas')->row_array()['gambar'];

			// Akta
			$this->db->where('id_casis',$value->id_casis);
			$this->db->where('nama_berkas','Akta');
			$value->akta=$this->db->get('berkas')->row_array()['gambar'];

			// KK
			$this->db->where('id_casis',$value->id_casis);
			$this->db->where('nama_berkas','Kartu Keluarga');
			$value->kk=$this->db->get('berkas')->row_array()['gambar'];

			// Berkas diterima
			$this->db->where('id_pendaftaran',$value->id_pendaftaran);
			$berkas_diterima=$this->db->get('berkas_diterima')->row_array();
			if($berkas_diterima){
				$value->berkas_diterima=true;
			} else{
				$value->berkas_diterima=false;
			}

			// Seleksi
			$this->db->where('id_pendaftaran',$value->id_pendaftaran);
			$value->seleksi=$this->db->get('seleksi')->row_array();

			// Nilai
			$this->db->where('id_casis',$value->id_casis);
			$value->nilai=$this->db->get('nilai')->row_array();
		}
		return $pendaftaran;
	}

	public function update($data,$id_casis,$id_pendaftaran)
	{
		$this->db->where('id_casis',$id_casis);
		$this->db->where('id_pendaftaran',$id_pendaftaran);
		$this->db->update($this->table,$data);
	}

	public function first()
	{
		$userdata=$this->session->userdata('casis');
		$this->db->where('id_casis',$userdata['id_casis']);
		return $this->db->get($this->table)->row_array();
	}

	public function where($field,$id)
	{
		$this->db->where($field,$id);
		return $this->db->get($this->table)->row_array();
	}

	public function row_array($field='id_pendaftaran',$value="")
	{
		$this->db->where($field,$value);
		$pendaftaran=$this->db->get($this->table)->result();
		foreach ($pendaftaran as $key => $value) {
			$value->casis=$this->db->get('casis')->row_array();

			// Ijazah
			$this->db->where('id_casis',$value->id_casis);
			$this->db->where('nama_berkas','Ijazah');
			$value->ijazah=$this->db->get('berkas')->row_array()['gambar'];

			// SKHU
			$this->db->where('id_casis',$value->id_casis);
			$this->db->where('nama_berkas','SKHU');
			$value->skhu=$this->db->get('berkas')->row_array()['gambar'];

			// Akta
			$this->db->where('id_casis',$value->id_casis);
			$this->db->where('nama_berkas','Akta');
			$value->kk=$this->db->get('berkas')->row_array()['gambar'];

			// KK
			$this->db->where('id_casis',$value->id_casis);
			$this->db->where('nama_berkas','Kartu Keluarga');
			$value->akta=$this->db->get('berkas')->row_array()['gambar'];

			// Berkas diterima
			$this->db->where('id_pendaftaran',$value->id_pendaftaran);
			$berkas_diterima=$this->db->get('berkas_diterima')->row_array();
			if($berkas_diterima){
				$value->berkas_diterima=true;
			} else{
				$value->berkas_diterima=false;
			}

			// Nilai
			$this->db->where('id_casis',$value->id_casis);
			$value->nilai=$this->db->get('nilai')->row_array();
		}

		return $pendaftaran;
	}

	public function id_pendaftaran()
	{
		$tahun=date('Y');
		$this->db->where("YEAR(tgl_pendaftaran) = $tahun");
		$count=$this->db->get($this->table)->num_rows();
		$urutan = str_pad($count+1, 3, '0', STR_PAD_LEFT);
		return $tahun.$urutan;
	}

	public function login()
	{
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		// Cek username
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		$cek_username=$this->db->get($this->table)->num_rows();

		if($cek_username==1){
			return true;
		} else {
			return false;
		}
	}
}