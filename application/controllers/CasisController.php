<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CasisController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('CasisModel');
		$this->load->model('NilaiModel');
		$this->load->model('BerkasModel');
		$this->load->model('PendaftaranModel');
		$this->load->helper('casis_helper');
		$this->load->helper('admin_helper');
	}

	public function registrasi(){
		$name=$this->input->post('nama_casis');
		$email=$this->input->post('email');
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		$created_at=date('Y-m-d H:i:s');
		$id_casis=$this->CasisModel->id_casis();

		$data=[
			'id_casis'=>$id_casis,
			'nama_casis'=>$name,
			'email'=>$email,
			'username'=>$username,
			'password'=>$password
		];

		$this->form_validation->set_rules('nama_casis','Nama Lengkap','required');
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('username','Username','required|is_unique[casis.username]',['is_unique'=>'Username sudah digunakan']);
		$this->form_validation->set_rules('password','Password','required');

		if($this->form_validation->run()==FALSE){
			$this->load->view('RegisterView');
		} else {			
			$this->CasisModel->create($data);
			return redirect('login');
		}
	}

	public function login()
	{
		$username=$this->input->post('username');
		$password=$this->input->post('password');

		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('password','Password','required');

		if($this->form_validation->run()==FALSE){
			$this->load->view('LoginView');
		} else {			
			if($this->CasisModel->login()){
				$this->db->where('username',$username);
				$data['casis']=$this->db->get('casis')->row_array();
				$data['is_login']=true;
				$this->session->set_userdata($data);


				$id_casis=$this->session->userdata('casis')['id_casis'];
				$nilai=[
					'id_casis'=>$id_casis
				];
				if(!$this->NilaiModel->first($id_casis)){
					$this->NilaiModel->insert($nilai);
				}

				if($this->BerkasModel->count($id_casis)<4){
					$berkas=['Ijazah','SKHU','Akta','Kartu Keluarga'];
					for ($i=0; $i < 4; $i++) {
						$nama_berkas[$i]=[
							'nama_berkas'=>$berkas[$i],
							'id_casis'=>$id_casis
						];
						$this->BerkasModel->insert($nama_berkas[$i]);
					}
				}
				return redirect('/casis');
			} else {
				$this->session->set_flashdata('login_status',TRUE);
				$this->load->view('LoginView');
			}
		}

	}

	public function data_casis()
	{
		is_login();
		$data['casis']=$this->CasisModel->first();
		$this->load->view('DataCasisView',$data);
	}

	public function rekap()
	{
		is_admin_login();
		$kabupaten=$this->input->post('kabupaten');
		if($kabupaten){
			$data['casis']=$this->CasisModel->search('kabupaten',$kabupaten);
		} else{
			$data['casis']=$this->CasisModel->get();
		}
		$this->load->view('admin/RekapView',$data);
	}

	public function rekap_detail()
	{
		$id_casis=$this->uri->segment(3);
		$data['casis']=$this->CasisModel->detail('id_casis',$id_casis);
		$this->load->view('admin/RekapDetailView',$data);
	}

	public function update_data_casis()
	{
		is_login();
		$id_casis=$this->session->userdata('casis')['id_casis'];
		// $nama_casis=$this->input->post('nama_casis');
		$gambar=$this->CasisModel->upload('gambar');
		$agama=$this->input->post('agama');
		$nik=$this->input->post('nik');
		$kabupaten=$this->input->post('kabupaten');
		$kecamatan=$this->input->post('kecamatan');
		$desa=$this->input->post('desa');
		$tempat=$this->input->post('tempat');
		$tanggal_lahir=$this->input->post('tanggal_lahir');
		$jenis_kelamin=$this->input->post('jenis_kelamin');
		// $alamat=$this->input->post('alamat');
		$jumlah_saudara=$this->input->post('jumlah_saudara');
		$no_telp=$this->input->post('no_telp');
		$nama_ayah=$this->input->post('nama_ayah');
		$pekerjaan_ayah=$this->input->post('pekerjaan_ayah');
		$penghasilan_ayah=$this->input->post('penghasilan_ayah');
		$nama_ibu=$this->input->post('nama_ibu');
		$pekerjaan_ibu=$this->input->post('pekerjaan_ibu');
		$penghasilan_ibu=$this->input->post('penghasilan_ibu');
		$asal_sekolah=$this->input->post('asal_sekolah');
		$no_induk_asal_sekolah=$this->input->post('no_induk_asal_sekolah');
		if($gambar!==NULL){
			$this->CasisModel->update(['gambar'=>$gambar],$id_casis);
		}
		$data=[
			// 'nama_casis'=>$nama_casis,
			'nik'=>$nik,
			'kabupaten'=>$kabupaten,
			'kecamatan'=>$kecamatan,
			'desa'=>$desa,
			'agama'=>$agama,
			'tempat'=>$tempat,
			'tanggal_lahir'=>$tanggal_lahir,
			'jenis_kelamin'=>$jenis_kelamin,
			// 'alamat'=>$alamat,
			'jumlah_saudara'=>$jumlah_saudara,
			'no_telp'=>$no_telp,
			'nama_ayah'=>$nama_ayah,
			'pekerjaan_ayah'=>$pekerjaan_ayah,
			'penghasilan_ayah'=>$penghasilan_ayah,
			'nama_ibu'=>$nama_ibu,
			'pekerjaan_ibu'=>$pekerjaan_ibu,
			'penghasilan_ibu'=>$penghasilan_ibu,
			'asal_sekolah'=>$asal_sekolah,
			'no_induk_asal_sekolah'=>$no_induk_asal_sekolah,
			'status'=>1
		];

		// $this->form_validation->set_rules('nama_casis','Nama Calon Siswa','required');
		$this->form_validation->set_rules('nik','NIK','required|numeric|max_length[16]');
		$this->form_validation->set_rules('tempat','Tempat Lahir','required');
		// $this->form_validation->set_rules('alamat','Alamat','required');
		$this->form_validation->set_rules('kabupaten','Kabupaten','required');
		$this->form_validation->set_rules('kecamatan','Kecamatan','required');
		$this->form_validation->set_rules('desa','Desa','required');
		$this->form_validation->set_rules('jenis_kelamin','Jenis Kelamin','required');
		$this->form_validation->set_rules('agama','Agama','required');
		$this->form_validation->set_rules('jumlah_saudara','Jumlah Saudara','required|numeric');
		$this->form_validation->set_rules('no_telp','Nomor Telepon','required|numeric');
		$this->form_validation->set_rules('nama_ayah','Nama Ayah','required');
		$this->form_validation->set_rules('pekerjaan_ayah','Pekerjaan Ayah','required');
		$this->form_validation->set_rules('penghasilan_ayah','Penghasilan Ayah','required');
		$this->form_validation->set_rules('nama_ibu','Nama Ibu','required');
		$this->form_validation->set_rules('pekerjaan_ibu','Pekerjaan Ibu','required');
		$this->form_validation->set_rules('penghasilan_ibu','Penghasilan Ibu','required');
		$this->form_validation->set_rules('asal_sekolah','Asal Sekolah','required');
		$this->form_validation->set_rules('no_induk_asal_sekolah','No Induk Sekolah Asal','required|numeric');

		if($this->form_validation->run()==FALSE){
			$casis['casis']=$this->CasisModel->first();
			$casis['casis']['nik']=$nik;
			$casis['casis']['tempat']=$tempat;
			$casis['casis']['tanggal_lahir']=$tanggal_lahir;
			$casis['casis']['jenis_kelamin']=$jenis_kelamin;
			$casis['casis']['jumlah_saudara']=$jumlah_saudara;
			$casis['casis']['kabupaten']=$kabupaten;
			$casis['casis']['kecamatan']=$kecamatan;
			$casis['casis']['desa']=$desa;
			$casis['casis']['agama']=$agama;
			$casis['casis']['no_telp']=$no_telp;
			$casis['casis']['nama_ayah']=$nama_ayah;
			$casis['casis']['pekerjaan_ayah']=$pekerjaan_ayah;
			$casis['casis']['penghasilan_ayah']=$penghasilan_ayah;
			$casis['casis']['nama_ibu']=$nama_ibu;
			$casis['casis']['pekerjaan_ibu']=$pekerjaan_ibu;
			$casis['casis']['penghasilan_ibu']=$penghasilan_ibu;
			$casis['casis']['asal_sekolah']=$asal_sekolah;
			$casis['casis']['no_induk_asal_sekolah']=$no_induk_asal_sekolah;
			$this->load->view('DataCasisView',$casis);
		} else {
			$nilai=[
				'id_casis'=>$id_casis
			];
			if(!$this->NilaiModel->first($id_casis)){
				$this->NilaiModel->insert($nilai);
			}
			$this->CasisModel->update($data,$id_casis);
			return redirect('casis/nilai');
		}

	}

	public function clear_data_casis()
	{
		is_login();
		$id_casis=$this->session->userdata('casis')['id_casis'];
		$data=[
			'nik'=>NULL,
			'kabupaten'=>NULL,
			'gambar'=>NULL,
			'kecamatan'=>NULL,
			'desa'=>NULL,
			'agama'=>NULL,
			'tempat'=>NULL,
			'tanggal_lahir'=>NULL,
			'jenis_kelamin'=>NULL,
			// 'alamat'=>alamat,
			'jumlah_saudara'=>NULL,
			'no_telp'=>NULL,
			'nama_ayah'=>NULL,
			'pekerjaan_ayah'=>NULL,
			'penghasilan_ayah'=>NULL,
			'nama_ibu'=>NULL,
			'pekerjaan_ibu'=>NULL,
			'penghasilan_ibu'=>NULL,
			'asal_sekolah'=>NULL,
			'no_induk_asal_sekolah'=>NULL,
		];

		$this->CasisModel->update($data,$id_casis);
		$this->NilaiModel->delete('id_casis',$id_casis);
		return redirect('casis/data');
	}

	public function nilai_casis()
	{
		is_login();
		$id_casis=$this->session->userdata('casis')['id_casis'];
		$data['nilai']=$this->NilaiModel->first($id_casis);
		// if($data['nilai']){
		$this->load->view('NilaiCasisView',$data);
		// } else{
		// 	return redirect('casis/data');
		// }
	}

	public function update_nilai_casis()
	{
		is_login();
		$id_casis=$this->session->userdata('casis')['id_casis'];
		$id_nilai=$this->input->post('id_nilai');
		$matematika=$this->input->post('matematika');
		$bahasa_indonesia=$this->input->post('bahasa_indonesia');
		$ipa=$this->input->post('ipa');
		$bahasa_inggris=$this->input->post('bahasa_inggris');

		$data=[
			'matematika'=>$matematika,
			'bahasa_indonesia'=>$bahasa_indonesia,
			'ipa'=>$ipa,
			'bahasa_inggris'=>$bahasa_inggris,
			'status'=>1
		];

		$this->form_validation->set_rules('matematika','Nilai Matematika','required|numeric');
		$this->form_validation->set_rules('bahasa_indonesia','Nilai Bahasa Indonesia','required|numeric');
		$this->form_validation->set_rules('ipa','Nilai Ipa','required|numeric');
		$this->form_validation->set_rules('bahasa_inggris','Nilai Bahasa Inggris','required|numeric');

		if($this->form_validation->run()==FALSE){
			$nilai['nilai']=$this->NilaiModel->first($id_casis);
			$nilai['nilai']['matematika']=$matematika;
			$nilai['nilai']['bahasa_indonesia']=$bahasa_indonesia;
			$nilai['nilai']['ipa']=$ipa;
			$nilai['nilai']['bahasa_inggris']=$bahasa_inggris;
			$this->load->view('NilaiCasisView',$nilai);
		} else{
			if($this->BerkasModel->count($id_casis)<4){
				$berkas=['Ijazah','SKHU','Akta','Kartu Keluarga'];
				for ($i=0; $i < 4; $i++) {
					$nama_berkas[$i]=[
						'nama_berkas'=>$berkas[$i],
						'id_casis'=>$id_casis
					];
					$this->BerkasModel->insert($nama_berkas[$i]);
				}
			}
			$casis=$this->CasisModel->first();
			if(!$this->PendaftaranModel->first()){
				$pendaftaran=[
					'id_pendaftaran'=>$this->PendaftaranModel->id_pendaftaran(),
					'tgl_pendaftaran'=>$casis['created_at'],
					'id_casis'=>$casis['id_casis']
				];
				$this->PendaftaranModel->create($pendaftaran);
			}
			$this->NilaiModel->update($data,$id_nilai);
			return redirect('casis/berkas');
		}
	}

	public function clear_nilai_casis()
	{
		is_login();
		$id_casis=$this->session->userdata('casis')['id_casis'];
		$id_nilai=$this->uri->segment(4);
		$data=[
			'matematika'=>0,
			'bahasa_indonesia'=>0,
			'ipa'=>0,
			'bahasa_inggris'=>0
		];
		$this->BerkasModel->delete('id_casis',$id_casis);
		$this->NilaiModel->update($data,$id_nilai);
		return redirect('casis/nilai');
	}

	public function berkas_casis()
	{
		is_login();
		$id_casis=$this->session->userdata('casis')['id_casis'];
		$count=$this->BerkasModel->count($id_casis);
		$data['berkas']=$this->BerkasModel->get($id_casis);
		$this->load->view('BerkasCasisView',$data);
	}

	public function update_berkas_casis()
	{
		is_login();
		$id_casis=$this->session->userdata('casis')['id_casis'];
		if($_FILES['ijazah']['name']){
			$ijazah=$this->BerkasModel->upload('ijazah');
			$this->BerkasModel->update('Ijazah',$ijazah,$id_casis);
		}
		if($_FILES['skhu']['name']){
			$skhu=$this->BerkasModel->upload('skhu');
			$this->BerkasModel->update('SKHU',$skhu,$id_casis);
		}
		if($_FILES['akta']['name']){
			$akta=$this->BerkasModel->upload('akta');
			$this->BerkasModel->update('Akta',$akta,$id_casis);
		}
		if($_FILES['kartu_keluarga']['name']){
			$kk=$this->BerkasModel->upload('kartu_keluarga');
			$this->BerkasModel->update('Kartu Keluarga',$kk,$id_casis);
		}


		if($this->BerkasModel->count_null($id_casis)==0){
			return redirect('casis/pendaftaran');
		} else {
			return redirect('casis/pendaftaran');
			// $data['berkas']=$this->BerkasModel->get($id_casis);
			// $this->load->view('BerkasCasisView',$data);
		}
	}

	public function clear_berkas_casis()
	{
		is_login();
		$id_casis=$this->session->userdata('casis')['id_casis'];
		$this->BerkasModel->update_null('id_casis',$id_casis);
		return redirect('casis/berkas');
	}

	public function pendaftaran()
	{
		is_login();
		$status_casis=$this->CasisModel->row_array('status',1);
		$status_nilai=$this->NilaiModel->row_array('status',1);
		if($status_casis==NULL OR $status_nilai==null){
			return redirect('casis/berkas');
		}
		$id_casis=$this->session->userdata('casis')['id_casis'];
		$data['casis']=$this->CasisModel->first();
		$data['pendaftaran']=$this->PendaftaranModel->first();
		$data['casis']['id_casis_value']=$data['casis']['id_casis'];
		$data['casis']['nama_casis_value']=$data['casis']['nama_casis'];
		$data['casis']['tempat_value']=$data['casis']['tempat'];
		$data['casis']['tanggal_lahir_value']=$data['casis']['tanggal_lahir'];
		if($data['pendaftaran']['no_ijazah']==NULL AND $data['pendaftaran']['no_skhu'] == NULL AND $data['pendaftaran']['no_akta']==NULL AND $data['pendaftaran']['no_kk']==null){
			$data['casis']['id_casis']="";
			$data['casis']['nama_casis']="";
			$data['casis']['tempat']="";
			$data['casis']['tanggal_lahir']="";
		} else{

		}
		$this->load->view('PendaftaranCasisView',$data);
	}

	public function update_pendaftaran()
	{
		is_login();
		$casis=$this->session->userdata('casis');
		$pendaftaran=$this->PendaftaranModel->first();
		$id_casis=$this->input->post('id_casis');
		$no_skhu=$this->input->post('no_skhu');
		$no_ijazah=$this->input->post('no_ijazah');
		$no_akta=$this->input->post('no_akta');
		$no_kk=$this->input->post('no_kk');
		$nisn=$this->input->post('nisn');
		$id_pendaftaran=$pendaftaran['id_pendaftaran'];

		$data=[
			'no_skhu'=>$no_skhu,
			'no_ijazah'=>$no_ijazah,
			'no_akta'=>$no_akta,
			'no_kk'=>$no_kk,
			'nisn'=>$nisn
		];

		// var_dump($pendaftaran['id_pendaftaran']);

		$this->PendaftaranModel->update($data,$id_casis,$id_pendaftaran);
		$this->session->set_flashdata(['status'=>'success','message'=>'Atas nama '.$casis['nama_casis'].' dengan id pendaftaran PDF'.$pendaftaran['id_pendaftaran'].' telah berhasil mendaftar. Unduh bukti pendaftaran pada link berikut:','link'=>base_url('casis/pendaftaran/bukti/').$pendaftaran['id_pendaftaran']]);
		return redirect('casis/pendaftaran');
	}

	public function bukti()
	{
		$this->load->model("LogModel");
		$id_pendaftaran=$this->uri->segment(4);
		$data['pendaftaran']=$this->PendaftaranModel->where('id_pendaftaran',$id_pendaftaran);
		$data['casis']=$this->CasisModel->row_array('id_casis',$data['pendaftaran']['id_casis']);
		$data['log']=$this->LogModel->last_login();
		$this->load->view('BuktiView',$data);
		// return redirect('casis/pendaftaran');
	}

	public function logout()
	{
		$this->session->sess_destroy();
		return redirect('login');
	}
}