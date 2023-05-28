<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CasisModel extends CI_Model {

	private $table='casis';
	private $primary_key='id_casis';

	public function __construct()
	{
		parent::__construct();
	}

	public function create($data){
		$data['created_at']=date('Y-m-d H:i:s');
		$this->db->insert($this->table,$data);
	}

	public function get()
	{
		return $this->db->get($this->table)->result();
	}

	public function search($field,$keyword){
		$this->db->like($field, $keyword, 'both');
		return $this->db->get($this->table)->result();
	}

	public function detail($field,$id)
	{
		$this->db->where($field,$id);
		return $this->db->get($this->table)->row_array();
	}

	public function update($data,$id)
	{
		$this->db->where('id_casis',$id);
		$this->db->update($this->table,$data);
	}

	public function first()
	{
		$userdata=$this->session->userdata('casis');
		$this->db->where('id_casis',$userdata['id_casis']);
		return $this->db->get('casis')->row_array();
	}

	public function row_array($field,$id)
	{
		$this->db->where($field,$id);
		return $this->db->get($this->table)->row_array();
	}

	public function id_casis()
	{
		$tahun=date('Y');
		$this->db->where("YEAR(created_at) = $tahun");
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

	public function upload($name)
	{
		$config['upload_path'] = './assets/images/';
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
}