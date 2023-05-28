<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class NilaiDiterimaModel extends CI_Model {

	private $table='nilai_diterima';
	private $primary_key='id_nilai_diterima';

	public function __construct()
	{
		parent::__construct();
		$this->load->model('SeleksiModel');
	}

	public function create($data)
	{
		$this->db->insert($this->table,$data);
	}

	public function delete($field='id_nilai_diterima',$id)
	{
		$this->db->where($field,$id);
		$this->db->delete($this->table);
	}

	public function status()
	{
		$reguler=0;
		$unggulan=0;

		if(count($this->SeleksiModel->get()['reguler'])>0){
			foreach ($this->SeleksiModel->get()['reguler'] as $key => $value) {
				if($key==0){
					$this->db->where('id_seleksi',$value->id_seleksi);
				} else {
					$this->db->or_where('id_seleksi',$value->id_seleksi);
				}
			}
			$this->db->where('status',1);
			$reguler=$this->db->get('nilai_diterima')->num_rows();
		}

		if(count($this->SeleksiModel->get()['unggulan'])>0){
			foreach ($this->SeleksiModel->get()['unggulan'] as $key => $value) {
				if($key==0){
					$this->db->where('id_seleksi',$value->id_seleksi);
				} else {
					$this->db->or_where('id_seleksi',$value->id_seleksi);
				}
			}

			$this->db->where('status',1);
			$unggulan=$this->db->get('nilai_diterima')->num_rows();
		}

		if($unggulan+$reguler==count($this->SeleksiModel->get()['reguler'])+count($this->SeleksiModel->get()['unggulan'])){
			return true;
		} else {
			return false;
		}
		// return count($this->SeleksiModel->get()['unggulan']);
		// return $unggulan;
	}

	public function update($field,$id,$data)
	{
		$this->db->where($field,$id);
		$this->db->update($this->table,$data);
	}
}