<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tentang extends CI_Controller {

function __construct() {
        parent::__construct();
        	$this->load->model("main_model");
    }
	public function index()
	{
		$data['title']	= "Tentang ";
		$data['isi']	= "tentang/tentang";
		$data['tentang']= $this->main_model->getDataTentangRPL();
        $data['guru']   = $this->main_model->getDataGuru(FALSE, FALSE, FALSE, 'Guru Tetap');
        
		$this->load->view('layout/wrapper', $data);
	}
}
