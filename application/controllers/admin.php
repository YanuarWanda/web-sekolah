<?php defined('BASEPATH') OR exit('No direct script access allowed');
Class Admin extends CI_Controller{

    function __construct() {
        parent::__construct();
        	$this->load->model("modelweb");
    }

    /* Tentang */
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

        $where = array(
            'id' => 1,
        );

        $this->modelweb->updateData('tentang_rpl', $data, $where);
        redirect('admin');
    }
    /* .Tentang */

    /* Berita */
    public function berita($offset = 0){
        if(empty($this->session->userdata['email'])){
            redirect('admin/login');
        }

        $config['base_url']     = base_url() . 'admin/berita';
        $config['total_rows']   = $this->db->count_all('berita');
        $config['per_page']     = 3;
        $config['uri_segment']  = 3;
        $config['attributes']   = array('class' => 'pagination-link');

        $this->pagination->initialize($config);

        $data['title']  = "Berita ";
        $data['isi']    = "admin/berita";

        $data['berita'] = $this->modelweb->getDataBerita($config['per_page'], $offset);

        $this->load->view('layout_admin/wrapper', $data);
    }

    public function tambahBerita(){
        if(empty($this->session->userdata['email'])){
            redirect('admin/login');
        }

        $data['title']  = "Tambah Berita ";
        $data['isi']    = "admin/berita/tambahBerita";

        $this->load->view('layout_admin/wrapper', $data);
    }

    public function editBerita(){
        if(empty($this->session->userdata['email'])){
            redirect('admin/login');
        }

        $data['title']  = "Edit Berita ";
        $data['isi']    = "admin/berita/editBerita";
        $data['berita'] = $this->modelweb->getDataBerita(FALSE, FALSE, $_GET['i']);

        $this->load->view('layout_admin/wrapper', $data);
    }

    public function updateBerita(){
        if(empty($this->session->userdata['email'])){
            redirect('admin/login');
        }

        $data = array(
            'judul_berita'  => $_POST['judul'],
            'isi_berita'    => $_POST['isi_berita']
        );

        $where = array(
            'id'    => $_GET['i']
        );

        $result = $this->modelweb->updateData('berita', $data, $where);
        if($result == 1){
            $this->session->set_flashdata('pesan', "<script>swal('Gagal!', 'Data gagal diubah!', 'error')</script>");
            redirect('admin/editBerita?i='.$_GET['i']);
        }else{
            $this->session->set_flashdata('pesan', "<script>swal('Berhasil!', 'Data berhasil diubah!', 'success')</script>");
            redirect('admin/berita');
        }
    }

    public function addBerita(){
        if(empty($this->session->userdata['email'])){
            redirect('admin/login');
        }

        $data = array(
            'judul_berita'  => $_POST['judul'],
            'isi_berita'    => $_POST['isi_berita'],
            'gambar'        => $_FILES['gambar']['name'],
            'link'          => str_replace(' ', '-', strtolower($_POST['judul']))
        );

        $config = array(
            'upload_path'   => './assets/img/foto-berita/',
            'allowed_types' => 'gif|jpg|png|ico|jpeg',
            'overwrite'     => TRUE,
            'max_size'      => '2048000',
            'max_height'    => '5000',
            'max_width'     => '5000'
        );

        $this->load->library('upload', $config);

        if($this->upload->do_upload('gambar')){
            print_r($this->upload->data());
        }

        // if($this->modelweb->tambahBerita($data) == 1){
        //     $this->session->set_flashdata('pesan', "<script>swal('Gagal!', 'Data gagal ditambahkan!', 'error')</script>");
        //     redirect('admin/tambahBerita');
        // }else{
        //     if($this->upload->do_upload('gambar')){
        //         $data = array($this->upload->data());
        //         print_r($data);
        //         $this->session->set_flashdata('pesan', "<script>swal('Berhasil!', 'Data berhasil ditambahkan!', 'success')</script>");
        //         redirect('admin/berita');
        //     }else{
        //     }
        // }
    }

    public function deleteBerita(){
        if(empty($this->session->userdata['email'])){
            redirect('admin/login');
        }

        $id = array(
            'id' => $_GET['i']
        );

        $result = $this->modelweb->hapusData('berita', $id);
        if($result != 1){
            $this->session->set_flashdata('pesan', '<script>swal("Terhapus!", "Data telah berhasil dihapus!", "success");</script>');
            redirect('admin/berita');
        }else{
            $this->session->set_flashdata('pesan', '<script>swal("Gagal!", "Data gagal dihapus!", "error")</script>');
        }
    }

    /* .Berita */

    /* Agenda */
    public function agenda(){
        if(empty($this->session->userdata['email'])){
            redirect('admin/login');
        }

        $data['title']  = "Agenda ";
        $data['isi']    = "admin/agenda";
        $data['record'] = $this->modelweb->lihat_agenda();

        $this->load->view('layout_admin/wrapper', $data);
    }
    function tambah_agenda(){
       $data = array(
           'judul_agenda' => $this->input->post('judul'),
           'tanggal_agenda' => $this->input->post('tanggal'),
    	   'isi_agenda' => $this->input->post('isi')
       );

       if(!empty($data['judul_agenda']) && !empty($data['tanggal_agenda']) && !empty($data['isi_agenda'])){
         $this->modelweb->tambah_agenda($data);
         redirect(base_url()."admin/agenda");
        }else{
           //$this->session->set_flashdata('pesan', "<script> alert ('Data harus di isi') </script>");
        }
	}
    /* .Agenda */

    /* Guru */

    public function ambil_ubah_agenda(){
        if(empty($this->session->userdata['email'])){
            redirect('admin/login');
        }

        $data['title']  = "Agenda ";
        $data['isi']    = "admin/ubah_agenda";
        $data['record'] = $this->modelweb->lihat_agenda($data);

        $this->load->view('layout_admin/wrapper', $data);
    }

    function ubah_agenda(){
            $data = array('isi_agenda'  => $_POST['isi_agenda'],);

            if(!empty($data['isi_agenda'])){
                $this->modelweb->ubah_agenda($data);
            }else{
                $alert = $this->session->set_flashdata('pesan', "<script> alert ('Data harus di isi') </script>");
            }
            redirect('admin/agenda');
        }

    function hapus_agenda(){
            $this->modelweb->hapus_agenda();
            redirect('admin/agenda');
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
    /* .Guru */

    /* Pengumuman */
    public function pengumuman(){
        if(empty($this->session->userdata['email'])){
            redirect('admin/login');
        }

        $data['title']  = "Pengumuman ";
        $data['isi']    = "admin/pengumuman";
        $data['record'] = $this->modelweb->lihat_agenda();

        $this->load->view('layout_admin/wrapper', $data);
    }
    /* .Pengumuman */

    /* Login */
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
            redirect('admin');
        }else{
            redirect('admin/login');
        }
    }

    public function signout(){
        $this->session->sess_destroy();
        redirect('admin');
    }
    /* .Login */
}
