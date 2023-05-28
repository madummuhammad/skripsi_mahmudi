<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BerkasDiterimaModel extends CI_Model {

	private $table='berkas_diterima';
	private $primary_key='id_berkas_diterima';

	public function __construct()
	{
		parent::__construct();
	}

	public function create($data)
	{
		$this->db->insert($this->table,$data);
	}

	public function first($field='id_berkas_diterima',$id)
	{
		$this->db->where($field,$id);
		return $this->db->get($this->table)->row_array();
	}

	public function delete($field='id_berkas_diterima',$id){
		$this->db->where($field,$id);
		$this->db->delete($this->table);
	}
}