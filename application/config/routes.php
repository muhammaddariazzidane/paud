<?php
defined('BASEPATH') or exit('No direct script access allowed');


$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['login'] = 'auth';
$route['register'] = 'auth/register';
$route['logout'] = 'auth/logout';
$route['pengajuan'] = 'dashboard/pengajuan';
$route['pengajuan/index/(:num)'] = 'dashboard/pengajuan/$1';
$route['tolak_pengajuan/(:num)'] = 'pengajuan/tolak/$1';
$route['riwayat_pengajuan'] = 'dashboard/riwayat';
$route['riwayat_pengajuan/index/(:num)'] = 'dashboard/riwayat/$1';

$route['delete_dokumen/(:num)'] = 'dokumen/delete/$1';
$route['edit_kegiatan/(:num)'] = 'kegiatan/edit/$1';
$route['tambah_dokumen'] = 'dokumen/store';
$route['ubah_status/(:num)'] = 'pengajuan/ubah_status/$1';
$route['tambah_pengajuan'] = 'pengajuan/store';
