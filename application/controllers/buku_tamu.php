<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buku_tamu  extends CI_Controller {
	public function index()
	{
		$data['title']	= "Buku Tamu ";
		$data['isi']	= "buku_tamu";

		$this->load->view('layout/wrapper', $data);
	}
}
