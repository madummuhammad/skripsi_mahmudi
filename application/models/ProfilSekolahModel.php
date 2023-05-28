<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProfilSekolahModel extends CI_Model {

	private $table='profil_sekolah';
	private $primary_key='id_profil';

	public function __construct()
	{
		parent::__construct();
	}

	public function first()
	{
		$data=$this->db->get($this->table)->row_array();
		return $data;
	}

	public function update($data,$id)
	{
		$this->db->where($this->primary_key,$id);
		$this->db->update($this->table,$data);
	}
}