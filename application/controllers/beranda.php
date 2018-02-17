<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {
	public function index()
	{
		$data['title']		= "Beranda ";
		$data['isi']		= "beranda";
		$data['berita']		= $this->main_model->getDataBerita(1, 0);
		$data['pengumuman']	= $this->main_model->getDataPengumuman(1, 0);
		$data['rpl']		= $this->main_model->getDataTentangRPL();

		$this->load->view('layout/wrapper', $data);
	}
}
