<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengumuman  extends CI_Controller {
	public function index($offset = 0)
	{
		$data['title']	= "Pengumuman ";
		$data['isi']	= "pengumuman";

		$config['base_url']		= base_url().'pengumuman/index/';
		$config['total_rows']	= $this->db->count_all('pengumuman');
		$config['per_page']		= 3;
		$config['uri_segment']	= 3;
		$config['attributes']	= array('class' => 'pagination-link');

		$this->pagination->initialize($config);
		$data['pengumuman'] = $this->main_model->getDataPengumuman($config['per_page'], $offset);

		$this->load->view('layout/wrapper', $data);
	}
}
