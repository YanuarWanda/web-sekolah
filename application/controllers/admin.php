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

        $link       = str_replace(' ', '-', strtolower($_POST['judul']));
        $fileName   = time().'_'.$_FILES['gambar']['name'];
        $berita     = $this->modelweb->getDataBerita(FALSE, FALSE, $_GET['i']);

        $data = array(
            'judul_berita'  => $_POST['judul'],
            'isi_berita'    => $_POST['isi_berita'],
            'link'          => $link,
            'gambar'        => $fileName
        );

        $where = array(
            'id'    => $_GET['i']
        );

        $config = array(
            'file_name'     => $fileName,
            'upload_path'   => './assets/img/foto-berita/',
            'allowed_types' => 'gif|jpg|png|ico|jpeg',
            'overwrite'     => TRUE,
            'max_size'      => '2048000',
            'max_height'    => '5000',
            'max_width'     => '5000'
        );

        $this->load->library('upload', $config);

        $result = $this->modelweb->updateData('berita', $data, $where);
        if($result == 1){
            $this->session->set_flashdata('pesan', "<script>swal('Gagal!', 'Data gagal diubah!', 'error')</script>");
            redirect('admin/editBerita?i='.$_GET['i']);
        }else{
            if($this->upload->do_upload('gambar')){
                unlink('./assets/img/foto-berita/'.$berita['0']['gambar']);
            }
            $this->session->set_flashdata('pesan', "<script>swal('Berhasil!', 'Data berhasil diubah!', 'success')</script>");
            redirect('admin/berita');
        }
    }

    public function addBerita(){
        if(empty($this->session->userdata['email'])){
            redirect('admin/login');
        }
        $fileName = time().'_'.$_FILES['gambar']['name'];

        $data = array(
            'judul_berita'  => $_POST['judul'],
            'isi_berita'    => $_POST['isi_berita'],
            'gambar'        => $fileName,
            'link'          => str_replace(' ', '-', strtolower($_POST['judul']))
        );

        $config = array(
            'file_name'     => $fileName,
            'upload_path'   => './assets/img/foto-berita/',
            'allowed_types' => 'gif|jpg|png|ico|jpeg',
            'overwrite'     => TRUE,
            'max_size'      => '2048000',
            'max_height'    => '5000',
            'max_width'     => '5000'
        );

        $this->load->library('upload', $config);

        if($this->modelweb->tambahBerita($data) == 1){
            $this->session->set_flashdata('pesan', "<script>swal('Gagal!', 'Data gagal ditambahkan!', 'error')</script>");
            redirect('admin/tambahBerita');
        }else{
            if($this->upload->do_upload('gambar')){
                $data = array($this->upload->data());
                $this->session->set_flashdata('pesan', "<script>swal('Berhasil!', 'Data berhasil ditambahkan!', 'success')</script>");
                redirect('admin/berita');
            }else{
            }
        }
    }

    public function deleteBerita(){
        if(empty($this->session->userdata['email'])){
            redirect('admin/login');
        }

        $berita = $this->modelweb->getDataBerita(FALSE, FALSE, $id);

        $id = array(
            'id' => $_GET['i']
        );

        $result = $this->modelweb->hapusData('berita', $id);
        if($result != 1){
            unlink('./assets/img/foto-berita/'.$berita['0']['gambar']);
            $this->session->set_flashdata('pesan', '<script>swal("Terhapus!", "Data telah berhasil dihapus!", "success");</script>');
            redirect('admin/berita');
        }else{
            $this->session->set_flashdata('pesan', '<script>swal("Gagal!", "Data gagal dihapus!", "error")</script>');
            redirect('admin/berita');
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
    /* .Agenda */

    /* Guru */
    public function guru(){
        if(empty($this->session->userdata['email'])){
            redirect('admin/login');
        }

        $data['title']  = "Guru ";
        $data['isi']    = "admin/guru";
        $data['guru']   = $this->modelweb->getDataGuru(FALSE, FALSE, FALSE);

        $this->load->view('layout_admin/wrapper', $data);
    }

    public function tambahGuru(){
        if(empty($this->session->userdata['email'])){
            redirect('admin/login');
        }

        $data['title']  = "Tambah Guru ";
        $data['isi']    = "admin/guru/tambahGuru";

        $this->load->view('layout_admin/wrapper', $data);
    }

    public function addGuru(){
        if(empty($this->session->userdata['email'])){
            redirect('admin/login');
        }

        $fileName   = time().'_'.$_FILES['gambar']['name'];

        $data = array(
            'nip'               => $_POST['nip'],
            'nama_guru'         => $_POST['nama'],
            'deskripsi_guru'    => $_POST['mapel'],
            'jabatan_guru'      => $_POST['jabatan'],
            'email'             => $_POST['email'],
            'no_hp'             => $_POST['hp'],
            'gambar'            => $fileName
        );

        $config = array(
            'file_name'     => $fileName,
            'upload_path'   => './assets/img/foto-guru/',
            'allowed_types' => 'gif|jpg|png|ico|jpeg',
            'overwrite'     => TRUE,
            'max_size'      => '2048000',
            'max_height'    => '5000',
            'max_width'     => '5000'
        );

        $this->load->library('upload', $config);

        if($this->modelweb->tambahGuru($data) == 1){
            $this->session->set_flashdata('pesan', "<script>swal('Gagal!', 'Data gagal ditambahkan!', 'error')</script>");
            redirect('admin/tambahGuru');
        }else{
            if($this->upload->do_upload('gambar')){
                $data = array($this->upload->data());
                $this->session->set_flashdata('pesan', "<script>swal('Berhasil!', 'Data berhasil ditambahkan!', 'success')</script>");
                redirect('admin/guru');
            }
        }
    }

    public function deleteGuru(){
        if(empty($this->session->userdata['email'])){
            redirect('admin/login');
        }

        $guru   = $this->modelweb->getDataGuru(FALSE, FALSE, $_GET['i']);

        $where = array(
            'id'    => $_GET['i']
        );

        if($this->modelweb->hapusData('guru', $where) == 1){
            $this->session->set_flashdata('pesan', "<script>swal('Gagal!', 'Data gagal ditambahkan!', 'error')</script>");
            redirect('admin/guru');
        }else{
            unlink('./assets/img/foto-guru/'.$guru['0']['gambar']);
            $this->session->set_flashdata('pesan', "<script>swal('Berhasil!', 'Data berhasil ditambahkan!', 'success')</script>");
            redirect('admin/guru');
        }
    }

    public function editGuru(){
        if(empty($this->session->userdata['email'])){
            redirect('admin/login');
        }

        $data['title']  = "Edit Guru ";
        $data['isi']    = "admin/guru/editGuru";
        $data['guru']   = $this->modelweb->getDataGuru(FALSE, FALSE, $_GET['i']);

        $this->load->view('layout_admin/wrapper', $data);
    }

    public function updateGuru(){
        if(empty($this->session->userdata['email'])){
            redirect('admin/login');
        }

        $guru   = $this->modelweb->getDataGuru(FALSE, FALSE, $_GET['i']);

        $where = array(
            'id'    => $_GET['i']
        );

        $fileName   = time().'_'.$_FILES['gambar']['name'];

        $data = array(
            'nip'               => $_POST['nip'],
            'nama_guru'         => $_POST['nama'],
            'deskripsi_guru'    => $_POST['mapel'],
            'jabatan_guru'      => $_POST['jabatan'],
            'email'             => $_POST['email'],
            'no_hp'             => $_POST['hp'],
            'gambar'            => $fileName
        );

        $config = array(
            'file_name'     => $fileName,
            'upload_path'   => './assets/img/foto-guru/',
            'allowed_types' => 'gif|jpg|png|ico|jpeg',
            'overwrite'     => TRUE,
            'max_size'      => '2048000',
            'max_height'    => '5000',
            'max_width'     => '5000'
        );

        $this->load->library('upload', $config);

        if($this->modelweb->updateData('guru', $data, $where) == 1){
            $this->session->set_flashdata('pesan', "<script>swal('Gagal!', 'Data gagal diubah!', 'error');</script>");
            redirect('admin/editGuru?i='.$guru['0']['id']);
        }else{
            if($this->upload->do_upload('gambar')){
                unlink('./assets/img/foto-guru/'.$guru['0']['gambar']);
            }
            $this->session->set_flashdata('pesan', "<script>swal('Berhasil!', 'Data berhasil diubah!', 'success');</script>");
            redirect('admin/guru');
        }
    }
    /* .Guru */

    /* Pengumuman */
    public function pengumuman($offset = 0){
        if(empty($this->session->userdata['email'])){
            redirect('admin/login');
        }

        $data['title']          = "Pengumuman ";
        $data['isi']            = "admin/pengumuman";

        $config['base_url']     = base_url() . 'admin/pengumuman';
        $config['total_rows']   = $this->db->count_all('pengumuman');
        $config['per_page']     = 3;
        $config['uri_segment']  = 3;
        $config['attributes']   = array('class' => 'pagination-link');

        $this->pagination->initialize($config);

        $data['pengumuman']     = $this->modelweb->getDataPengumuman($config['per_page'], $offset);

        $this->load->view('layout_admin/wrapper', $data);
    }

    public function tambahPengumuman(){
        if(empty($this->session->userdata['email'])){
            redirect('admin/login');
        }

        $data['title']  = "Tambah Pengumuman ";
        $data['isi']    = 'admin/pengumuman/tambahPengumuman';

        $this->load->view('layout_admin/wrapper', $data);
    }

    public function addPengumuman(){
        if(empty($this->session->userdata['email'])){
            redirect('admin/login');
        }

        $data = array(
            'judul_pengumuman'  => $_POST['judul'],
            'isi_pengumuman'    => $_POST['isi']
        );

        if($this->modelweb->tambahPengumuman($data) == 1){
            $this->session->set_flashdata('pesan', "<script>swal('Gagal!', 'Data gagal ditambahkan!', 'error');</script>");
            redirect('admin/tambahPengumuman');
        }else{
            $this->session->set_flashdata('pesan', "<script>swal('Berhasil!', 'Data berhasil ditambahkan!', 'success');</script>");
            redirect('admin/pengumuman');
        }
    }

    public function hapusPengumuman(){
        if(empty($this->session->userdata['email'])){
            redirect('admin/login');
        }

        $where = array(
            'id'    => $_GET['i']
        );

        if($this->modelweb->hapusData('pengumuman', $where) == 1){
            $this->session->set_flashdata('pesan', "<script>swal('Gagal!', 'Data gagal dihapus!', 'error');</script>");
            redirect('admin/pengumuman');
        }else{
            $this->session->set_flashdata('pesan', "<script>swal('Berhasil!', 'Data berhasil dihapus!', 'success');</script>");
            redirect('admin/pengumuman');
        }
    }

    public function editPengumuman(){
        if(empty($this->session->userdata['email'])){
            redirect('admin/login');
        }

        $data['pengumuman'] = $this->modelweb->getDataPengumuman(FALSE, FALSE, $_GET['i']);
        $data['title']      = "Edit Pengumuman ";
        $data['isi']        = "admin/pengumuman/editPengumuman";

        $this->load->view('layout_admin/wrapper', $data);
    }

    public function updatePengumuman(){
        if(empty($this->session->userdata['email'])){
            redirect('admin/login');
        }

        $where = array(
            'id'    => $_GET['i']
        );

        $data = array(
            'judul_pengumuman'  => $_POST['judul'],
            'isi_pengumuman'    => $_POST['isi']
        );

        if($this->modelweb->updateData('pengumuman', $data, $where) == 1){
            $this->session->set_flashdata('pesan', '<script>swal("Gagal!", "Data gagal diubah!", "error");</script>');
            redirect('admin/pengumuman');
        }else{
            $this->session->set_flashdata('pesan', '<script>swal("Berhasil!", "Data berhasil diubah!", "success");</script>');
            redirect('admin/pengumuman');
        }
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
