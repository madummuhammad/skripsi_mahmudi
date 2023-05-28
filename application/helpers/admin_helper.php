<?php 
if (! function_exists('casis_helper')) {
	function is_admin_login() {
		$CI = &get_instance();
		if (!$CI->session->userdata('is_admin_login')) {
            redirect('admin/login'); // redirect ke halaman login jika pengguna belum login
        }
    }
}
?>