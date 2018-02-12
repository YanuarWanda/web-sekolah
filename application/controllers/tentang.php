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
		$data['tentang']= $this->modelweb->getDataTentangRPL();

		$this->load->view('layout/wrapper', $data);
	}
}
