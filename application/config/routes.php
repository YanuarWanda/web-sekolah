<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'beranda';
$route['informasi/berita/isi/(:any)'] = 'informasi/isi_berita/$i';
$route['informasi/kolom_guru/isi/(:any)'] = 'informasi/isi_kolomguru/$i';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
