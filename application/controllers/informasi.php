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

		if(isset($_POST['search'])){
			$data['berita']			= $this->main_model->getDataBerita($config['per_page'], $offset, FALSE, FALSE, $_POST['search']);
			$config['total_rows']	= count($this->main_model->getDataBerita(FALSE, FALSE, FALSE, FALSE, $_POST['search']));
			$this->session->set_flashdata('search_berita', $_POST['search']);
		}else if($this->session->flashdata('search_berita')){
			$data['berita']			= $this->main_model->getDataBerita($config['per_page'], $offset, FALSE, FALSE, $this->session->flashdata('search_berita'));
			$config['total_rows']	= count($this->main_model->getDataBerita(FALSE, FALSE, FALSE, FALSE, $this->session->flashdata('search_berita')));
			$this->session->set_flashdata('search_berita', $this->session->flashdata('search_berita'));
		}else{
			$data['berita']			= $this->main_model->getDataBerita($config['per_page'], $offset);
		}

		$this->pagination->initialize($config);

		$this->load->view('layout/wrapper', $data);
	}

	public function isi_berita(){
		$berita					= $this->main_model->getDataBerita(FALSE, FALSE, FALSE, $this->uri->segment(4));
		$beritaTerbaru			= $this->main_model->getDataBerita(3, 0);

		$data['title']			= $berita['0']['judul_berita'].' ';
		$data['isi']			= "informasi/berita/isi_berita";
		$data['berita']			= $berita;
		$data['beritaTerbaru'] 	= $beritaTerbaru;

		$this->load->view('layout/wrapper', $data);
	}

	public function guru($offset = 0){
		$data['title']	= "Guru ";
		$data['isi']	= "informasi/guru";

		$config['base_url']		= base_url().'informasi/guru/';
		$config['total_rows']	= $this->db->count_all('guru');
		$config['per_page']		= 3;
		$config['uri_segment']	= 3;
		$config['attributes']	= array('class' => 'pagination-link');

		if(isset($_POST['search'])){
			$data['guru']			= $this->main_model->getDataGuru($config['per_page'], $offset, FALSE, FALSE, $_POST['search']);
			$config['total_rows']	= count($this->main_model->getDataGuru(FALSE, FALSE, FALSE, FALSE, $_POST['search']));
			$this->session->set_flashdata('search_guru', $_POST['search']);
		}else if($this->session->flashdata('search_guru')){
			$data['guru']			= $this->main_model->getDataGuru($config['per_page'], $offset, FALSE, FALSE, $this->session->flashdata('search_guru'));
			$config['total_rows']	= count($this->main_model->getDataGuru(FALSE, FALSE, FALSE, FALSE, $this->session->flashdata('search_guru')));
			$this->session->set_flashdata('search_guru', $this->session->flashdata('search_guru'));
		}else{
			$data['guru']			= $this->main_model->getDataGuru($config['per_page'], $offset);
		}

		$this->pagination->initialize($config);

		$this->load->view("layout/wrapper", $data);
	}

	public function agenda($offset = 0){
		$data['title']	= "Agenda ";
		$data['isi']	= "informasi/agenda";

		$config['base_url']		= base_url().'informasi/agenda/';
		$config['total_rows']	= $this->db->count_all('agenda');
		$config['per_page']		= 3;
		$config['uri_segment']	= 3;
		$config['attributes']	= array('class' => 'pagination-link');

		if(isset($_POST['search'])){
			$data['agenda']			= $this->main_model->getDataAgenda($config['per_page'], $offset, FALSE, $_POST['search']);
			$config['total_rows']	= count($this->main_model->getDataAgenda(FALSE, FALSE, FALSE, $_POST['search']));
			$this->session->set_flashdata('search_agenda', $_POST['search']);
		}else if($this->session->flashdata('search_agenda')){
			$data['agenda']			= $this->main_model->getDataAgenda($config['per_page'], $offset, FALSE, $this->session->flashdata('search_agenda'));
			$config['total_rows']	= count($this->main_model->getDataAgenda(FALSE, FALSE, FALSE, $this->session->flashdata('search_agenda')));
			$this->session->set_flashdata('search_agenda', $this->session->flashdata('search_agenda'));
		}else{
			$data['agenda']			= $this->main_model->getDataAgenda($config['per_page'], $offset);
		}

		$this->pagination->initialize($config);

		$this->load->view('layout/wrapper', $data);
	}

	public function isi_agenda(){
		$agenda					= $this->main_model->getDataAgenda(FALSE, FALSE, FALSE, $this->uri->segment(4));
		$agendaTerbaru			= $this->main_model->getDataAgenda(3, 0);

		$data['title']			= $berita['0']['judul_agenda'].' ';
		$data['isi']			= "informasi/agenda/isi_agenda";
		$data['agenda']			= $agenda;
		$data['agendaTerbaru'] 	= $agendaTerbaru;

		$this->load->view('layout/wrapper', $data);
	}

	public function download($offset = 0){
		$data['title'] 	= "Download ";
		$data['isi']	= "informasi/download";

		$config['base_url']     = base_url() . 'admin/download';
        $config['total_rows']   = $this->db->count_all('file_download');
        $config['per_page']     = 2;
        $config['uri_segment']  = 3;
        $config['attributes']   = array('class' => 'pagination-link');

		if(isset($_POST['search'])){
			$data['download']			= $this->main_model->getDataDownload($config['per_page'], $offset, FALSE, $_POST['search']);
			$config['total_rows']		= count($this->main_model->getDataDownload(FALSE, FALSE, FALSE, $_POST['search']));
			$this->session->set_flashdata('search_download', $_POST['search']);
		}else if($this->session->flashdata('search_download')){
			$data['download']			= $this->main_model->getDataDownload($config['per_page'], $offset, FALSE, $this->session->flashdata('search_download'));
			$config['total_rows']		= count($this->main_model->getDataDownload(FALSE, FALSE, FALSE, $this->session->flashdata('search_download')));
			$this->session->set_flashdata('search_download', $this->session->flashdata('search_download'));
		}else{
			$data['download']			= $this->main_model->getDataDownload($config['per_page'], $offset);
		}

        $this->pagination->initialize($config);

		$this->load->view("layout/wrapper", $data);
	}
	public function kolom_guru($offset = 0){
		$data['title']	= "Kolom Guru ";
		$data['isi']	= "informasi/kolom_guru";

		$config['base_url']     = base_url() . 'informasi/kolom_guru';
        $config['total_rows']   = $this->db->count_all('kolom_guru');
        $config['per_page']     = 4;
        $config['uri_segment']  = 3;
        $config['attributes']   = array('class' => 'pagination-link');

		if(isset($_POST['search'])){
			$data['kolom']			= $this->main_model->getDataKolomGuru($config['per_page'], $offset, FALSE, $_POST['search'], FALSE, TRUE);
			$config['total_rows']	= count($this->main_model->getDataKolomGuru(FALSE, FALSE, FALSE, $_POST['search']));
			$this->session->set_flashdata('search_kolom', $_POST['search']);
		}else if($this->session->flashdata('search_kolom')){
			$data['kolom']			= $this->main_model->getDataKolomGuru($config['per_page'], $offset, FALSE, $this->session->flashdata('search_kolom'), FALSE, TRUE);
			$config['total_rows']	= count($this->main_model->getDataKolomGuru(FALSE, FALSE, FALSE, $this->session->flashdata('search_kolom')));
			$this->session->set_flashdata('search_kolom', $this->session->flashdata('search_kolom'));
		}else{
			$data['kolom']			= $this->main_model->getDataKolomGuru($config['per_page'], $offset, FALSE, FALSE, FALSE, TRUE);
		}

        $this->pagination->initialize($config);

		$this->load->view("layout/wrapper", $data);
	}
	public function isi_kolomguru(){
		$kolom					= $this->main_model->getDataKolomGuru(FALSE, FALSE, FALSE, FALSE, $this->uri->segment(4), TRUE);
		$kolomTerbaru			= $this->main_model->getDataKolomGuru(3, 0, FALSE, FALSE, FALSE, TRUE);

		$data['title']			= $kolom['0']['judul'].' ';
		$data['isi']			= "informasi/kolom_guru/isi_kolomguru";
		$data['kolom']			= $kolom;
		$data['kolomTerbaru'] 	= $kolomTerbaru;

		$this->load->view('layout/wrapper', $data);
	}
}
