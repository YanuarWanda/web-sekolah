<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengumuman  extends CI_Controller {
	public function index()
	{
		$data['title']	= "Pengumuman ";
		$data['isi']	= "pengumuman";

		$config['base_url']		= base_url().'pengumuman/';
		$config['total_rows']	= 10;
		$config['per_page']		= 3;
		$config['uri_segment']	= 3;

		$this->pagination->initialize($config);

		$this->load->view('layout/wrapper', $data);
	}
}
