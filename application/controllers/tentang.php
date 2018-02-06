<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tentang extends CI_Controller {
	public function index()
	{
		$data['title']	= "Tentang ";
		$data['isi']	= "tentang/tentang";

		$this->load->view('layout/wrapper', $data);
	}
}
