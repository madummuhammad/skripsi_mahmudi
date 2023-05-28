<?php 
if (! function_exists('casis_helper')) {
	function is_login() {
		$CI = &get_instance();
		if (!$CI->session->userdata('is_login')) {
            redirect('login'); // redirect ke halaman login jika pengguna belum login
        }
    }
}
?>