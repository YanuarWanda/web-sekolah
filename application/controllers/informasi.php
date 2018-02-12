<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Informasi extends CI_Controller {
	public function index()
	{
		$data['title']	= "Informasi ";
		$data['isi']	= "informasi";

		$this->load->view('layout/wrapper', $data);
	}

	public function berita($offset = 0){
		$data['title']	= "Berita ";
		$data['isi']	= "informasi/berita";

		$config['base_url']		= base_url().'informasi/berita/';
		$config['total_rows']	= $this->db->count_all('berita');
		$config['per_page']		= 3;
		$config['uri_segment']	= 3;
		$config['attributes']	= array('class' => 'pagination-link');

		$this->pagination->initialize($config);
        $data['berita'] = $this->main_model->getDataBerita($config['per_page'], $offset);

		$this->load->view('layout/wrapper', $data);
	}

	public function guru(){
		$data['title']	= "Guru ";
		$data['isi']	= "informasi/guru";

		$config['base_url']		= base_url().'informasi/guru/';
		$config['total_rows']	= 10;
		$config['per_page']		= 3;
		$config['uri_segment']	= 3;

		$this->pagination->initialize($config);

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
