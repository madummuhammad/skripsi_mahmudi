<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class NilaiModel extends CI_Model {

	private $table='nilai';
	private $primary_key='id_nilai';

	public function insert($data)
	{
		$this->db->insert($this->table,$data);
	}

	public function first($id_casis)
	{
		$this->db->where('id_casis',$id_casis);
		return $this->db->get($this->table)->row_array();
	}

	public function row_array($field,$id)
	{
		$this->db->where($field,$id);
		return $this->db->get($this->table)->row_array();
	}

	public function update($data,$id_nilai)
	{
		$this->db->where($this->primary_key,$id_nilai);
		$this->db->update($this->table,$data);
	}

	public function delete($field,$id){
		$this->db->where($field,$id);
		$this->db->delete($this->table);
	}
}