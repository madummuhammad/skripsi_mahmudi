<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BerkasModel extends CI_Model {

	private $table='berkas';
	private $primary_key='id_berkas';

	public function insert($data){
		$this->db->insert($this->table,$data);
	}

	public function count($id_casis){
		$this->db->where('id_casis',$id_casis);
		return $this->db->get($this->table)->num_rows();
	}

	public function get($id_casis){
		$this->db->where('id_casis',$id_casis);
		return $this->db->get($this->table)->result();
	}

	public function delete($field,$id)
	{
		$this->db->where($field,$id);
		$this->db->delete($this->table);
	}

	public function upload($name)
	{
		$config['upload_path'] = './assets/berkas/';
		$config['allowed_types'] = 'pdf|png|jpg';
		$config['max_size']= 10000;

		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload($name))
		{
			$error = array('error' => $this->upload->display_errors());
			$data=[
				'status'=>'error',
				'message'=>$error
			];
			return NULL;
		}
		else
		{
			$file = array($name => $this->upload->data('file_name'));
			$data=[
				'name'=>$file[$name],
				'status'=>'success',
				'message'=>'Berhasil mengupload'
			];
			return $file[$name];
		}
	}

	public function update($name,$gambar,$id_casis)
	{
		$this->db->where('id_casis',$id_casis);
		$this->db->where('nama_berkas',$name);
		$this->db->update($this->table,['gambar'=>$gambar]);
	}

	public function update_null($field,$id)
	{
		$this->db->where($field,$id);
		$this->db->update($this->table,['gambar'=>NULL]);
	}

	public function count_null($id_casis)
	{
		$this->db->where('id_casis',$id_casis);
		$this->db->where('gambar',NULL);
		return $this->db->get($this->table)->num_rows();
	}
}