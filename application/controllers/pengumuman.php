<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengumuman  extends CI_Controller {
	public function index($offset = 0)
	{
		$data['title']	= "Pengumuman ";
		$data['isi']	= "pengumuman";

		$config['base_url']		= base_url().'pengumuman/index/';
		$config['total_rows']	= $this->db->count_all('pengumuman');
		$config['per_page']		= 4;
		$config['uri_segment']	= 3;
		$config['attributes']	= array('class' => 'pagination-link');

		if(isset($_POST['search'])){
			$data['pengumuman']			= $this->main_model->getDataPengumuman($config['per_page'], $offset, FALSE, $_POST['search']);
			$config['total_rows']		= count($this->main_model->getDataPengumuman(FALSE, FALSE, FALSE, $_POST['search']));
			$this->session->set_flashdata('search_pengumuman', $_POST['search']);
		}else if($this->session->flashdata('search_pengumuman')){
			$data['pengumuman']			= $this->main_model->getDataPengumuman($config['per_page'], $offset, FALSE, $this->session->flashdata('search_pengumuman'));
			$config['total_rows']		= count($this->main_model->getDataPengumuman(FALSE, FALSE, FALSE, $this->session->flashdata('search_pengumuman')));
			$this->session->set_flashdata('search_pengumuman', $this->session->flashdata('search_pengumuman'));
		}else{
			$data['pengumuman']			= $this->main_model->getDataPengumuman($config['per_page'], $offset);
		}

		$this->pagination->initialize($config);

		$this->load->view('layout/wrapper', $data);
	}
}
