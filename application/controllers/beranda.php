<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {
	public function index()
	{
		$data['title']	= "Web Sekolah";
		$data['isi']	= "beranda";

		$this->load->view('layout/wrapper', $data);
	}
}
