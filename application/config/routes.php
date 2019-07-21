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
|	https://codeigniter.com/user_guide/general/routing.html
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
$route['default_controller'] = 'User';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

/* Pengguna */
$route['login'] = 'Pengguna/Auth/login';
$route['login_proses'] = 'Pengguna/Auth/login_process';
$route['logout'] = 'Pengguna/Auth/logout';
$route['beranda'] = 'Pengguna/App/beranda';
$route['tentang_aplikasi'] = 'Pengguna/App/tentang_aplikasi';

$route['jaldis'] = 'Pengguna/Jaldis';
$route['detail_jaldis/(:any)'] = 'Pengguna/Jaldis/detail_data/$1';
$route['cetak_jaldis'] = 'Pengguna/Jaldis/cetak_data';

$route['agenda'] = 'Pengguna/Agenda';

$route['rapat'] = 'Pengguna/Rapat';

$route['laporan/rapat'] = 'Pengguna/Laporan/rapat';
$route['laporan/jaldis'] = 'Pengguna/Laporan/jaldis';
$route['laporan/detail_jaldis/(:any)'] = 'Pengguna/Laporan/detail_jaldis/$1';

$route['pengguna/mobile'] = 'Pengguna/Mobile/beranda';
/* Notulen */
/* Admin */
$route['admin'] = 'User/login';
$route['laporan_by_tanggal'] = 'Laporan/by_date';
$route['admin_side/proses_pencarian_berdasarkan_waktu'] = 'Laporan/sort_by_date_process';