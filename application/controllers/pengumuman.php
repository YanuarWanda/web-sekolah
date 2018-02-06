<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengumuman  extends CI_Controller {
	public function index()
	{
		$data['title']	= "Pengumuman ";
		$data['isi']	= "pengumuman";

		$this->load->view('layout/wrapper', $data);
	}
}
