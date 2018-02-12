<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tentang extends CI_Controller {
	public function index()
	{
		$data['title']	= "Tentang ";
		$data['isi']	= "tentang/tentang";
		$data['tentang']= $this->main_model->getDataTentangRPL();

		$this->load->view('layout/wrapper', $data);
	}
}
