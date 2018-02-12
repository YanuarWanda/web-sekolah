<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tentang extends CI_Controller {

function __construct() {
        parent::__construct();
        	$this->load->model("modelweb");
    }
	public function index()
	{
		$data['title']	= "Tentang ";
		$data['isi']	= "tentang/tentang";
<<<<<<< HEAD
		$data['tentang']= $this->main_model->getDataTentangRPL();
=======
		$data['tentang']= $this->modelweb->getDataTentangRPL();
>>>>>>> c5853bf1d5041cab55d77833a8a2ffdb790a6a95

		$this->load->view('layout/wrapper', $data);
	}
}
