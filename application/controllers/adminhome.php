<?php defined('BASEPATH') OR exit('No direct script access allowed');
Class AdminHome extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        	$this->load->model("modelweb");
    }
    
    function index(){
    	$value = array();
			if($data = $this->modelweb->lihat_agenda()){
				$value['record'] = $data;
			}
        $this->load->view('admin/adminhome',$value);
    }

    function tambah_agenda(){
			$data = array('judul_agenda' => $this->input->post('judul'),
						  'tanggal_agenda' => $this->input->post('tanggal'),
						  'isi_agenda' => $this->input->post('isi'));

			if(!empty($data['judul_agenda']) && !empty($data['tanggal_agenda']) && !empty($data['isi_agenda'])){
				$this->modelweb->tambah_agenda($data);
				redirect(base_url()."adminhome");
			}else{
			//$this->session->set_flashdata('pesan', "<script> alert ('Data harus di isi') </script>");	
			}
		}
}