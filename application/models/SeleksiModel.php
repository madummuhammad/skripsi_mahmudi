<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class SeleksiModel extends CI_Model {

	private $table='seleksi';
	private $primary_key='id_seleksi';

	public function __construct()
	{
		parent::__construct();
	}

	public function create($data){
		$data['created_at']=date('Y-m-d H:i:s');
		$this->db->insert($this->table,$data);
	}

	public function delete($field='id_seleksi',$id){
		$this->db->where($field,$id);
		$this->db->delete($this->table);
	}

	public function get()
	{
		$this->db->where('rerata_nilai >=',80);
		$this->db->where('YEAR(created_at)',date('Y'));
		$this->db->limit(5);
		$unggulan=$this->db->get($this->table)->result();
		foreach ($unggulan as $key => $value) {
			$this->db->where('id_pendaftaran',$value->id_pendaftaran);
			$value->pendaftaran=$this->db->get('pendaftaran')->row_array();

			$this->db->where('id_casis',$value->pendaftaran['id_casis']);
			$value->casis=$this->db->get('casis')->row_array();
			$value->kelas='Unggulan';
		}

		$array1=[];
		foreach ($unggulan as $key => $value) {
			if($key<=4){
				$array1[$key]=$value;
			}
		}

		$data['unggulan']=$array1;

		$this->db->where('rerata_nilai <',80);
		$this->db->where('YEAR(created_at)',date('Y'));
		$this->db->limit(5);
		$reguler=$this->db->get($this->table)->result();
		foreach ($reguler as $key => $value) {
			$this->db->where('id_pendaftaran',$value->id_pendaftaran);
			$value->pendaftaran=$this->db->get('pendaftaran')->row_array();

			$this->db->where('id_casis',$value->pendaftaran['id_casis']);
			$value->casis=$this->db->get('casis')->row_array();
			$value->kelas='Reguler';
		}

		$array2=[];
		foreach ($this->bubbleSort($reguler) as $key => $value) {
			if($value->casis['penghasilan_ayah']+$value->casis['penghasilan_ibu']<1000000){	
				if($key<=4){
					$array2[$key]=$value;
				}
			}
		}
		$data['reguler']= $array2;

		$array3=[];
		foreach ($unggulan as $key => $value) {
			if($key>4){
				$array3[$key]=$value;
			}
		}
		return $data;
	}

	public function get_all()
	{
		$this->db->where('rerata_nilai >=',80);
		$this->db->where('YEAR(created_at)',date('Y'));
		$this->db->limit(5);
		$unggulan=$this->db->get($this->table)->result();
		foreach ($unggulan as $key => $value) {
			$this->db->where('id_pendaftaran',$value->id_pendaftaran);
			$value->pendaftaran=$this->db->get('pendaftaran')->row_array();

			$this->db->where('id_casis',$value->pendaftaran['id_casis']);
			$value->casis=$this->db->get('casis')->row_array();
			$value->kelas='Unggulan';
		}

		$array1=[];
		foreach ($unggulan as $key => $value) {
			if($key<=4){
				$array1[$key]=$value;
			}
		}

		$data['unggulan']=$array1;

		$this->db->where('rerata_nilai <',80);
		$this->db->where('YEAR(created_at)',date('Y'));
		$this->db->limit(5);
		$reguler=$this->db->get($this->table)->result();
		foreach ($reguler as $key => $value) {
			$this->db->where('id_pendaftaran',$value->id_pendaftaran);
			$value->pendaftaran=$this->db->get('pendaftaran')->row_array();

			$this->db->where('id_casis',$value->pendaftaran['id_casis']);
			$value->casis=$this->db->get('casis')->row_array();
			$value->kelas='Reguler';
		}

		$array2=[];
		foreach ($this->bubbleSort($reguler) as $key => $value) {
			if($value->casis['penghasilan_ayah']+$value->casis['penghasilan_ibu']<1000000){	
				if($key<=4){
					$array2[$key]=$value;
				}
			}
		}
		$data['reguler']= $array2;

		$array3=[];
		foreach ($unggulan as $key => $value) {
			if($key>4){
				$array3[$key]=$value;
			}
		}

		$data['tidak_diterima1']=$array3;

		$array4=[];
		foreach ($this->bubbleSort($reguler) as $key => $value) {
			if($key>4){
				$array4[$key]=$value;
			}
		}
		$data['tidak_diterima2']=$array4;

		$array5=[];
		foreach ($this->bubbleSort($reguler) as $key => $value) {
			if($value->casis['penghasilan_ayah']+$value->casis['penghasilan_ibu']>1000000){
				$array5[$key]=$value;
			}
		}
		$data['tidak_diterima3']=$array5;

		$all=$this->db->get($this->table)->result();
		$this->db->where('status',1);
		foreach ($all as $key => $value) {
			$this->db->where_not_in('id_pendaftaran',$value->id_pendaftaran);
		}

		$tidak_lengkap=$this->db->get('pendaftaran')->result();
		foreach ($tidak_lengkap as $key => $value) {
			$this->db->where('id_pendaftaran',$value->id_pendaftaran);
			$value->pendaftaran=$this->db->get('pendaftaran')->row_array();

			$this->db->where('id_casis',$value->pendaftaran['id_casis']);
			$value->casis=$this->db->get('casis')->row_array();
			$value->kelas='Tidak Diterima';
			$this->db->where('id_casis',$value->casis['id_casis']);
			$nilai=$this->db->get('nilai')->row_array();
			$value->rerata_nilai=($nilai['matematika']+$nilai['bahasa_indonesia']+$nilai['bahasa_inggris']+$nilai['ipa'])/4;
		}
		$data['tidak_diterima4']=$tidak_lengkap;
		return $data;
	}

	public function status()
	{
		$reguler=0;
		$unggulan=0;
		foreach ($this->get()['reguler'] as $key => $value) {
			if($key==0){
				$this->db->where('id_seleksi',$value->id_seleksi);
			} else {
				$this->db->or_where('id_seleksi',$value->id_seleksi);
			}
		}
		$reguler=$this->db->get('nilai_diterima')->num_rows();

		foreach ($this->get()['unggulan'] as $key => $value) {
			if($key==0){
				$this->db->where('id_seleksi',$value->id_seleksi);
			} else {
				$this->db->or_where('id_seleksi',$value->id_seleksi);
			}
		}
		return $unggulan=$this->db->get('nilai_diterima')->num_rows();
		if($unggulan+$reguler==count($this->get()['reguler'])+count($this->get()['unggulan'])){
			return true;
		} else {
			return false;
		}
	}

	function bubbleSort(&$arr) {
		$n = count($arr);

		for ($i = 0; $i < $n - 1 ; $i++) {
			for ($j = 0; $j < $n - $i - 1; $j++) {
				if ($arr[$j]->casis['penghasilan_ayah']+$arr[$j]->casis['penghasilan_ibu'] > $arr[$j + 1]->casis['penghasilan_ayah']+$arr[$j + 1]->casis['penghasilan_ibu']) {
					$temp = $arr[$j];
					$arr[$j] = $arr[$j + 1];
					$arr[$j + 1] = $temp;
				}
			}
		}
		return $arr;
	}

}