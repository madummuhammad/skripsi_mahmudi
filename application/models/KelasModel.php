<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KelasModel extends CI_Model {

	private $table='kelas';
	private $primary_key='id_kelas';

	public function __construct()
	{
		parent::__construct();
	}

	public function get()
	{
		return $this->db->get($this->table)->result();
	}

	public function upload($name)
	{
		$config['upload_path'] = './assets/berita/';
		$config['allowed_types'] = 'png|jpg';

		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload($name))
		{
			$error = array('error' => $this->upload->display_errors());
			$this->session->set_flashdata(['errorGambar'=>$error]);
			return NULL;
		}
		else
		{
			$data = array($name => $this->upload->data('file_name'));
			return $data[$name];
		}
	}

	public function create($data)
	{
		$this->db->insert($this->table,$data);
	}

	public function first($id)
	{
		$this->db->where($this->primary_key,$id);
		return $this->db->get($this->table)->row_array();
	}

	public function update($data,$id)
	{
		$this->db->where($this->primary_key,$id);
		$this->db->update($this->table,$data);
	}

	public function delete($id){
		$this->db->where($this->primary_key,$id);
		$this->db->delete($this->table);
	}
}