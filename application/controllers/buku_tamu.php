<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buku_tamu  extends CI_Controller {
	public function index()
	{
		$data['title']	= "Buku Tamu ";
		$data['isi']	= "buku_tamu";
		$data['errors']	= $this->form_validation->error_array();

		$this->load->view('layout/wrapper', $data);
	}

	public function kirimPesan(){
		$data = array(
			'nama'	=> $_POST['nama'],
			'asal'	=> $_POST['asal'],
			'isi'	=> $_POST['isi'],
			'email'	=> $_POST['email']
		);

		$this->form_validation->set_rules('nama', 'Nama', 'required', array('required' => 'Nama wajib diisi!'));
		$this->form_validation->set_rules('asal', 'Asal', 'required', array('required' => 'Asal wajib diisi!'));
		$this->form_validation->set_rules('isi', 'Isi', 'required', array('required' => 'Isi Pesan wajib diisi!'));
		$this->form_validation->set_rules('email', 'E-mail', 'required|valid_email', array('valid_email' => 'Email tidak valid!', 'required' => 'E-Mail wajib diisi!'));

		if($this->form_validation->run() == FALSE){
			$this->load->view('layout/wrapper', array('title'=>'Buku Tamu ', 'isi'=>'buku_tamu', 'errors'=>$this->form_validation->error_array()));
		}else{
			if($this->main_model->kirimPesan($data) == 1){
				$this->session->set_flashdata('pesan', '<script>swal("Gagal!", "Gagal mengirim pesan!", "error");</script>');
				redirect('buku_tamu');
			}else{
				$this->session->set_flashdata('pesan', '<script>swal("Berhasil!", "Terima kasih telah mengirim pesan/saran kepada kami!", "success");</script>');
				redirect('buku_tamu');
			}
		}
	}
}
