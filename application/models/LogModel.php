<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LogModel extends CI_Model {

	private $table='log';
	private $primary_key='id';

	public function __construct()
	{
		parent::__construct();
	}

	public function get()
	{
		return $this->db->get($this->table)->result();
	}

	public function last_login()
	{
		$this->db->where('hak_akses','Panitia PSB');
		$this->db->order_by('id',"desc");
		$last_login=$this->db->get($this->table)->row_array();

		$this->db->where('id',$last_login['id_admin']);
		return $this->db->get('admin')->row_array();
	}

	public function create($data)
	{
		$this->db->insert($this->table,$data);
	}
}