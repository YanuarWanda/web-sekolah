<?php defined('BASEPATH') OR exit('No direct script access allowed');
Class Admin extends CI_Controller{

    function __construct() {
        parent::__construct();
        	$this->load->model("modelweb");
    }

    function index(){
        if(empty($this->session->userdata('email'))){
            redirect('admin/login');
        }

        $data['title']      = "Admin ";
        $data['isi']        = "admin/home";
        $data['tentang']    = $this->modelweb->getDataTentangRPL();

        $this->load->view('layout_admin/wrapper',$data);
    }

    public function update_tentang(){
        if(empty($this->session->userdata('email'))){
            redirect('admin/login');
        }

        $data = array(
            'visi'  => $_POST['visi'],
            'misi'  => $_POST['misi'],
            'deskripsi' => $_POST['deskripsi'],
            'sejarah'   => $_POST['sejarah']
        );

        $this->modelweb->updateData('tentang_rpl', $data);
        // print_r($data);
        redirect('admin');
    }

    public function berita(){
        if(empty($this->session->userdata['email'])){
            redirect('admin/berita');
        }

        $data['title']  = "Berita";
        $data['isi']    = "admin/berita";
        $data['record'] = $this->modelweb->lihat_agenda();

        $this->load->view('layout_admin/wrapper', $data);
    }

    public function agenda(){
        if(empty($this->session->userdata['email'])){
            redirect('admin/login');
        }

        $data['title']  = "Agenda ";
        $data['isi']    = "admin/agenda";
        $data['record'] = $this->modelweb->lihat_agenda();

        $this->load->view('layout_admin/wrapper', $data);
    }

    public function guru(){
        if(empty($this->session->userdata['email'])){
            redirect('admin/login');
        }

        $data['title']  = "Guru ";
        $data['isi']    = "admin/guru";
        $data['record'] = $this->modelweb->lihat_agenda();

        $this->load->view('layout_admin/wrapper', $data);
    }

    public function pengumuman(){
        if(empty($this->session->userdata['email'])){
            redirect('admin/login');
        }

        $data['title']  = "Pengumuman ";
        $data['isi']    = "admin/pengumuman";
        $data['record'] = $this->modelweb->lihat_agenda();

        $this->load->view('layout_admin/wrapper', $data);
    }

    public function login(){
        if(!empty($this->session->userdata('email'))){
            redirect('admin');
        }

        $data['title']  = "Admin Login ";
        $data['isi']    = "admin/login";

        $this->load->view('admin/login', $data);
    }

    public function signin(){
        if($this->modelweb->getDataAkun($_POST['email'])){
            $data = array(
                'email' => $_POST['email'],
            );
            $this->session->set_userdata($data);
            // print_r($this->session->userdata('email'));
            redirect('admin');
        }else{
            // print_r($this->session->userdata());
            redirect('admin/login');
        }
    }

    public function signout(){
        $this->session->sess_destroy();
        // print_r($this->session->userdata());
        redirect('admin');
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
