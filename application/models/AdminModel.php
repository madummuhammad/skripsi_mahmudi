<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminModel extends CI_Model {

	private $table='admin';
	private $primary_key='id';

	public function __construct()
	{
		parent::__construct();
	}

	public function get()
	{
		return $this->db->get($this->table)->result();
	}

	public function create($data){
		$this->db->insert($this->table,$data);
	}

	public function create_panitia($data){
		$this->db->insert('panitia_psb',$data);
	}

	public function delete($id)
	{
		$this->db->where($this->primary_key,$id);
		$this->db->delete($this->table);
	}

	public function update($data,$id,$username)
	{
		// $this->db->where('username',$username);
		$this->db->where($this->primary_key,$id);
		$this->db->update($this->table,$data);
	}

	public function first($id)
	{
		$this->db->where($this->primary_key,$id);
		return $this->db->get($this->table)->row_array();
	}

	// public function id_casis()
	// {
	// 	$tahun=date('Y');
	// 	$this->db->where("YEAR(created_at) = $tahun");
	// 	$count=$this->db->get($this->table)->num_rows();
	// 	$urutan = str_pad($count+1, 3, '0', STR_PAD_LEFT);
	// 	return $tahun.$urutan;
	// }

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