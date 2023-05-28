<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('AdminModel');
		$this->load->helper('admin_helper');
	}

	public function login()
	{
		$username=$this->input->post('username');
		$password=$this->input->post('password');

		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('password','Password','required');

		if($this->form_validation->run()==FALSE){
			$this->load->view('admin/LoginAdminView');
		} else {			
			if($this->AdminModel->login()){
				$this->db->where('username',$username);
				$data['admin']=$this->db->get('admin')->row_array();
				$data['is_admin_login']=true;
				$this->session->set_userdata($data);
				if($this->session->userdata('admin')['hak_akses']=='Kesiswaan' OR $this->session->userdata('admin')['hak_akses']=='Kepala Madrasah'  OR $this->session->userdata('admin')['hak_akses']=='Panitia PSB'){
					if($this->session->userdata('admin')['hak_akses']=='Panitia PSB'){
						return redirect('/admin/seleksi');
					} else{
						return redirect('/admin/hasil_seleksi');
					}
				} else {
					return redirect('/admin/user');
				}
			} else {
				$this->session->set_flashdata('login_status',TRUE);
				$this->load->view('admin/LoginAdminView');
			}
		}
	}

	public function list_user()
	{
		is_admin_login();
		$data['admin']=$this->AdminModel->get();
		$this->load->view('admin/UserView',$data);
	}

	public function add_user()
	{
		is_admin_login();
		$this->load->view('admin/AddUserView');
	}

	public function create()
	{
		is_admin_login();
		$nama=$this->input->post('nama');
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		$hak_akses=$this->input->post('hak_akses');

		$this->form_validation->set_rules('nama','Nama','required');
		$this->form_validation->set_rules('username','Username','required|is_unique[admin.username]');
		$this->form_validation->set_rules('password','Password','required');
		$this->form_validation->set_rules('hak_akses','Hak Akses','required');

		if($this->form_validation->run()==FALSE){
			$this->load->view('admin/AddUserView');
		} else {			
			$data=[
				'nama'=>$nama,
				'username'=>$username,
				'password'=>$password,
				'hak_akses'=>$hak_akses
			];
			$this->AdminModel->create($data);
			return redirect('admin/user');
		}
		
	}

	public function hapus()
	{
		is_admin_login();
		$id=$this->uri->segment(4);
		$this->AdminModel->delete($id);
		return redirect('admin/user');
	}

	public function edit_user()
	{
		is_admin_login();
		$id=$this->uri->segment(4);
		$data['id']=$id;
		$data['admin']=$this->AdminModel->first($id);
		$this->load->view('admin/EditUserView',$data);
	}

	public function edit()
	{
		is_admin_login();
		$id=$this->input->post('id');
		$nama=$this->input->post('nama');
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		$hak_akses=$this->input->post('hak_akses');

		$this->form_validation->set_rules('username','Username','required|is_unique[admin.username]');
		$this->form_validation->set_rules('nama','Nama','required');
		$this->form_validation->set_rules('password','Password','required');
		$this->form_validation->set_rules('hak_akses','Hak Akses','required');

		if($this->form_validation->run()==FALSE){
			$data['id']=$id;
			$data['admin']=$this->AdminModel->first($id);
			$this->load->view('admin/EditUserView',$data);
		} else {			
			$data=[
				'nama'=>$nama,
				'username'=>$username,
				'password'=>$password,
				'hak_akses'=>$hak_akses
			];
			$this->AdminModel->update($data,$id,$username);
			return redirect('admin/user');
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		return redirect('admin/login');
	}
}