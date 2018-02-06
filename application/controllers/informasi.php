<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Informasi extends CI_Controller {
	public function index()
	{
		$data['title']	= "Informasi ";
		$data['isi']	= "informasi";

		$this->load->view('layout/wrapper', $data);
	}

	public function berita(){
		$data['title']	= "Berita ";
		$data['isi']	= "informasi/berita";

		$this->load->view('layout/wrapper', $data);
	}

	public function guru(){
		$data['title']	= "Guru ";
		$data['isi']	= "informasi/guru";

		$this->load->view("layout/wrapper", $data);
	}

	public function agenda(){
		$data['title'] 	= "Agenda ";
		$data['isi']	= "informasi/agenda";

		$this->load->view('layout/wrapper', $data);
	}

	public function download(){
		$data['title'] 	= "Download ";
		$data['isi']	= "informasi/download";

		$this->load->view("layout/wrapper", $data);
	}
}
