<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'HomeController/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// Halaman login
$route['login']='PageController/login';

// Halaman registrasi
$route['register']='PageController/register';

// Proses Registrasi
$route['registrasi']='CasisController/registrasi';

// Proses login
$route['load/login']='CasisController/login';

// Proses logout
$route['logout']='CasisController/logout';


$route['casis']='PageController/dashboard';
$route['casis/dashboard']='PageController/dashboard';

// Casis Data
$route['casis/data']='CasisController/data_casis';
$route['casis/data/update']='CasisController/update_data_casis';
$route['casis/data/clear']='CasisController/clear_data_casis';

// Casis Nilai
$route['casis/nilai']='CasisController/nilai_casis';
$route['casis/nilai/update']='CasisController/update_nilai_casis';
$route['casis/nilai/clear/:num']='CasisController/clear_nilai_casis';

// Casis Berkas
$route['casis/berkas']='CasisController/berkas_casis';
$route['casis/berkas/update']='CasisController/update_berkas_casis';
$route['casis/berkas/clear']='CasisController/clear_berkas_casis';

// Pendaftaran
$route['casis/pendaftaran']='CasisController/pendaftaran';
$route['casis/pendaftaran/update']='CasisController/update_pendaftaran';
$route['casis/pendaftaran/bukti/:num']='CasisController/bukti';


// Admin login
$route['admin/login']='PageController/admin_login';
$route['admin/logout']='AdminController/logout';
$route['load/admin/login']='AdminController/login';

// Admin user
$route['admin/user']='AdminController/list_user';
$route['admin']='AdminController/list_user';
$route['admin/user/add']='AdminController/add_user';
$route['admin/user/add/load']='AdminController/create';
$route['admin/user/edit/:num']='AdminController/edit_user';
$route['admin/user/edit/load']='AdminController/edit';
$route['admin/user/hapus/:num']='AdminController/hapus';

// Berita
$route['admin/berita']='BeritaController/index';
$route['admin/berita/add']='BeritaController/add_berita';
$route['admin/berita/edit/:num']='BeritaController/edit_berita';
$route['admin/berita/edit/load']='BeritaController/edit';
$route['admin/berita/add/load']='BeritaController/create';
$route['admin/berita/hapus/:num']='BeritaController/hapus';

// Kelas
$route['admin/kelas']='KelasController/index';
$route['admin/kelas/add']='KelasController/add_kelas';
$route['admin/kelas/edit/:num']='KelasController/edit_kelas';
$route['admin/kelas/edit/load']='KelasController/edit';
$route['admin/kelas/add/load']='KelasController/create';
$route['admin/kelas/hapus/:num']='KelasController/hapus';

// Admin Profile Sekolah
$route['admin/profile']='ProfilController/index';
$route['admin/profile/edit/load']='ProfilController/edit';

// Olah data
$route['admin/seleksi']='SeleksiController/index';
$route['admin/seleksi/load']='SeleksiController/create';

// Laporan
$route['admin/buat_laporan']='LaporanController/buat_laporan';
$route['admin/buat_laporan/load']='LaporanController/create';

// Hasil seleksi
$route['admin/hasil_seleksi']='HasilSeleksiController/index';
$route['admin/hasil_seleksi/cetak']='HasilSeleksiController/cetak';
$route['admin/hasil_seleksi/detail/cetak/:num']='HasilSeleksiController/detail_cetak';
$route['admin/hasil_seleksi/load']='HasilSeleksiController/update';
$route['admin/rekap']='CasisController/rekap';
$route['admin/rekap/:num']='CasisController/rekap_detail';

// Home
$route['/']='HomeController/index';
$route['beranda']='HomeController/index';
$route['berita']='HomeController/berita';
$route['pengumuman']='HomeController/pengumuman';
$route['pengumuman/cetak']='HomeController/cetak';
$route['profile']='HomeController/profile';
$route['galeri']='HomeController/galeri';

$route['berita/detail/:num']='HomeController/berita_detail';