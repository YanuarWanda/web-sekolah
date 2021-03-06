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
            'sejarah'   => $_POST['sejarah'],
            'peluang_kerja'=> $_POST['peluang_kerja'],
            'kurikulum' => $_POST['kurikulum']
        );

        $where = array(
            'id' => 1,
        );

        if($this->modelweb->updateData('tentang_rpl', $data, $where) == 1){
            $this->session->set_flashdata('pesan', '<script>swal("Gagal!", "Data gagal diubah!", "error");</script>');
        }else{
            $this->session->set_flashdata('pesan', '<script>swal("Berhasil!", "Data berhasil diubah!", "success");</script>');
        }
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

        if(isset($_POST['search'])){
            $data['berita']         = $this->modelweb->getDataBerita($config['per_page'], $offset, FALSE, $_POST['search']);
            $config['total_rows']   = count($this->modelweb->getDataBerita(FALSE, FALSE, FALSE, $_POST['search']));
            $this->session->set_flashdata('search_admin_berita', $_POST['search']);
        }else if($this->session->flashdata('search_admin_berita')){
            $data['berita']         = $this->modelweb->getDataBerita($config['per_page'], $offset, FALSE, $this->session->flashdata('search_admin_berita'));
            $config['total_rows']   = count($this->modelweb->getDataBerita(FALSE, FALSE ,FALSE, $this->session->flashdata('search_admin_berita')));
            $this->session->set_flashdata('search_admin_berita', $this->session->flashdata('search_admin_berita'));
        }else{
            $data['berita']         = $this->modelweb->getDataBerita($config['per_page'], $offset);
            $config['total_rows']   = $this->db->count_all('berita');
        }

        $this->pagination->initialize($config);

        $data['title']  = "Berita ";
        $data['isi']    = "admin/berita";

        $this->load->view('layout_admin/wrapper', $data);
    }

    public function tambahBerita(){
        if(empty($this->session->userdata['email'])){
            redirect('admin/login');
        }

        $data['title']  = "Tambah Berita ";
        $data['isi']    = "admin/berita/tambahBerita";
        $data['errors'] = $this->form_validation->error_array();

        $this->load->view('layout_admin/wrapper', $data);
    }

    public function editBerita(){
        if(empty($this->session->userdata['email'])){
            redirect('admin/login');
        }

        $data['title']  = "Edit Berita ";
        $data['isi']    = "admin/berita/editBerita";
        $data['berita'] = $this->modelweb->getDataBerita(FALSE, FALSE, $_GET['i']);
        $data['errors'] = $this->form_validation->error_array();

        $this->load->view('layout_admin/wrapper', $data);
    }

    public function updateBerita(){
        if(empty($this->session->userdata['email'])){
            redirect('admin/login');
        }

        $berita     = $this->modelweb->getDataBerita(FALSE, FALSE, $_GET['i']);
        $link       = str_replace(' ', '-', strtolower($_POST['judul']));
        if($_FILES['gambar']['name']){
            $fileName   = time().'_'.$_FILES['gambar']['name'];
        }else if($berita['0']['gambar']){
            $fileName   = $berita['0']['gambar'];
        }else{
            $fileName   = "no-image.jpg";
        }

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

        $this->form_validation->set_rules('judul', 'Judul', 'required', array('required' => 'Judul Berita harus diisi!'));
        $this->form_validation->set_rules('isi_berita', 'Isi Berita', 'required', array('required' => 'Isi Berita harus diisi!'));

        if($this->form_validation->run() == FALSE){
            $this->load->view('layout_admin/wrapper', array('title'=>'Edit Berita ','isi'=>'admin/berita/editBerita','berita'=>$berita,'errors'=>$this->form_validation->error_array()));
        }else{
            if($this->modelweb->updateData('berita', $data, $where) == 1){
                $this->session->set_flashdata('pesan', "<script>swal('Gagal!', 'Data gagal diubah!', 'error')</script>");
                redirect('admin/editBerita?i='.$_GET['i']);
            }else{
                if($this->upload->do_upload('gambar')){
                    if($berita['0']['gambar'] != "no-image.jpg"){
                        unlink('./assets/img/foto-berita/'.$berita['0']['gambar']);
                    }
                }
                $this->session->set_flashdata('pesan', "<script>swal('Berhasil!', 'Data berhasil diubah!', 'success')</script>");
                redirect('admin/berita');
            }
        }
    }

    public function addBerita(){
        if(empty($this->session->userdata['email'])){
            redirect('admin/login');
        }

        if($_FILES['gambar']['name']){
            $fileName = time().'_'.$_FILES['gambar']['name'];
        }else{
            $fileName = "no-image.jpg";
        }

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

        $this->form_validation->set_rules('judul', 'Judul', 'required', array('required' => 'Judul Berita harus diisi!'));
        $this->form_validation->set_rules('isi_berita', 'Isi Berita', 'required', array('required' => 'Isi Berita harus diisi!'));

        if($this->form_validation->run() == FALSE){
            $this->load->view('layout_admin/wrapper', array('title'=>'Tambah Berita ','isi'=>'admin/berita/tambahBerita','errors'=>$this->form_validation->error_array()));
        }else{
            if($this->modelweb->tambahBerita($data) == 1){
                $this->session->set_flashdata('pesan', "<script>swal('Gagal!', 'Data gagal ditambahkan!', 'error')</script>");
                redirect('admin/tambahBerita');
            }else{
                $this->upload->do_upload('gambar');
                $this->session->set_flashdata('pesan', "<script>swal('Berhasil!', 'Data berhasil ditambahkan!', 'success')</script>");
                redirect('admin/berita');
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
            if(!$berita['0']['gambar'] == "no-image.jpg"){
                unlink('./assets/img/foto-berita/'.$berita['0']['gambar']);
            }
            $this->session->set_flashdata('pesan', '<script>swal("Terhapus!", "Data telah berhasil dihapus!", "success");</script>');
            redirect('admin/berita');
        }else{
            $this->session->set_flashdata('pesan', '<script>swal("Gagal!", "Data gagal dihapus!", "error")</script>');
            redirect('admin/berita');
        }
    }

    /* .Berita */

    /* Agenda */
    public function agenda($offset = 0){
        if(empty($this->session->userdata['email'])){
            redirect('admin/login');
        }

        $config['base_url']     = base_url() . 'admin/agenda';
        $config['total_rows']   = $this->db->count_all('agenda');
        $config['per_page']     = 3;
        $config['uri_segment']  = 3;
        $config['attributes']   = array('class' => 'pagination-link');

        if(isset($_POST['search'])){
            $data['agenda']         = $this->modelweb->getDataAgenda($config['per_page'], $offset, FALSE, $_POST['search']);
            $config['total_rows']   = count($this->modelweb->getDataAgenda(FALSE, FALSE, FALSE, $_POST['search']));
            $this->session->set_flashdata('search_admin_agenda', $_POST['search']);
        }else if($this->session->flashdata('search_admin_agenda')){
            $data['agenda']         = $this->modelweb->getDataAgenda($config['per_page'], $offset, FALSE, $this->session->flashdata('search_admin_agenda'));
            $config['total_rows']   = count($this->modelweb->getDataAgenda(FALSE, FALSE, FALSE, $this->session->flashdata('search_admin_agenda')));
            $this->session->set_flashdata('search_admin_agenda', $this->session->flashdata('search_admin_agenda'));
        }else{
            $data['agenda']         = $this->modelweb->getDataAgenda($config['per_page'], $offset);
        }

        $this->pagination->initialize($config);

        $data['title']  = "Agenda ";
        $data['isi']    = "admin/agenda";

        $this->load->view('layout_admin/wrapper', $data);
    }

    public function tambahAgenda(){
        if(empty($this->session->userdata['email'])){
            redirect('admin/login');
        }

        $data['title']  = "Tambah Agenda ";
        $data['isi']    = "admin/agenda/tambahAgenda";

        $this->load->view('layout_admin/wrapper', $data);
    }

    public function editAgenda(){
        if(empty($this->session->userdata['email'])){
            redirect('admin/login');
        }

        $data['title']  = "Edit Agenda ";
        $data['isi']    = "admin/agenda/editAgenda";
        $data['agenda'] = $this->modelweb->getDataAgenda(FALSE, FALSE, $_GET['i']);

        $this->load->view('layout_admin/wrapper', $data);
    }

    public function updateAgenda(){
        if(empty($this->session->userdata['email'])){
            redirect('admin/login');
        }
        $agenda     = $this->modelweb->getDataAgenda(FALSE, FALSE, $_GET['i']);

        $data = array(
            'judul_agenda'  => $_POST['judul'],
            'tanggal_agenda'=> $_POST['tanggal'],
            'isi_agenda'    => $_POST['isi_agenda']
        );

        $where = array(
            'id'    => $_GET['i']
        );

        $this->load->library('upload', $config);

        $result = $this->modelweb->updateData('agenda', $data, $where);
        if($result == 1){
            $this->session->set_flashdata('pesan', "<script>swal('Gagal!', 'Data gagal diubah!', 'error')</script>");
            redirect('admin/editAgenda?i='.$_GET['i']);
        }else{
            if($this->upload->do_upload('gambar')){
                unlink('./assets/img/foto-berita/'.$berita['0']['gambar']);
            }
            $this->session->set_flashdata('pesan', "<script>swal('Berhasil!', 'Data berhasil diubah!', 'success')</script>");
            redirect('admin/agenda');
        }
    }

    public function addAgenda(){
        if(empty($this->session->userdata['email'])){
            redirect('admin/login');
        }

        $data = array(
            'judul_agenda'  => $_POST['judul'],
            'tanggal_agenda'=> $_POST['tanggal'],
            'isi_agenda'    => $_POST['isi_agenda']
        );

        if($this->modelweb->tambahAgenda($data) == 1){
            $this->session->set_flashdata('pesan', "<script>swal('Gagal!', 'Data gagal ditambahkan!', 'error')</script>");
            redirect('admin/tambahAgenda');
        }else{
             $this->session->set_flashdata('pesan', "<script>swal('Berhasil!', 'Data berhasil ditambahkan!', 'success')</script>");
             redirect('admin/agenda');
        }
    }

    public function deleteAgenda(){
        if(empty($this->session->userdata['email'])){
            redirect('admin/login');
        }

        $admin = $this->modelweb->getDataAgenda(FALSE, FALSE, $id);

        $id = array(
            'id' => $_GET['i']
        );

        $result = $this->modelweb->hapusData('agenda', $id);
        if($result != 1){
            $this->session->set_flashdata('pesan', '<script>swal("Terhapus!", "Data telah berhasil dihapus!", "success");</script>');
            redirect('admin/agenda');
        }else{
            $this->session->set_flashdata('pesan', '<script>swal("Gagal!", "Data gagal dihapus!", "error")</script>');
            redirect('admin/agenda');
        }
    }
    /* .Agenda */

    /* Guru */
    public function guru($offset = 0){
        if(empty($this->session->userdata['email'])){
            redirect('admin/login');
        }

        $config['base_url']     = base_url() . 'admin/guru';
        $config['per_page']     = 3;
        $config['uri_segment']  = 3;
        $config['attributes']   = array('class' => 'pagination-link');

        if(isset($_POST['search'])){
            $data['guru']           = $this->modelweb->getDataGuru($config['per_page'], $offset, FALSE, $this->input->post('search'));
            $config['total_rows']   = count($this->modelweb->getDataGuru(FALSE, FALSE, FALSE, $this->input->post('search')));
            $this->session->set_flashdata('search_admin_guru', $this->input->post('search'));
        }else if($this->session->flashdata('search_admin_guru')){
            $data['guru']           = $this->modelweb->getDataGuru($config['per_page'], $offset, FALSE, $this->session->flashdata('search_admin_guru'));
            $config['total_rows']   = count($this->modelweb->getDataGuru(FALSE, FALSE, FALSE, $this->session->flashdata('search_admin_guru')));
            $this->session->set_flashdata('search_admin_guru', $this->session->flashdata('search_admin_guru'));
        }else{
            $data['guru']   = $this->modelweb->getDataGuru($config['per_page'], $offset);
            $config['total_rows']   = $this->db->count_all('guru');
        }

        $this->pagination->initialize($config);

        $data['title']  = "Guru ";
        $data['isi']    = "admin/guru";

        $this->load->view('layout_admin/wrapper', $data);
    }

    public function tambahGuru(){
        if(empty($this->session->userdata['email'])){
            redirect('admin/login');
        }

        $data['title']  = "Tambah Guru ";
        $data['isi']    = "admin/guru/tambahGuru";
        $data['errors'] = $this->form_validation->error_array();

        $this->load->view('layout_admin/wrapper', $data);
    }

    public function addGuru(){
        if(empty($this->session->userdata['email'])){
            redirect('admin/login');
        }

        if($_FILES['gambar']['name']){
            $fileName   = time().'_'.$_FILES['gambar']['name'];
        }else{
            $fileName   = "no-image.jpg";
        }

        $data = array(
            'nip'               => $this->input->post('nip'),
            'nama_guru'         => $this->input->post('nama'),
            'deskripsi_guru'    => $this->input->post('mapel'),
            'jabatan_guru'      => $this->input->post('jabatan'),
            'email'             => $this->input->post('email'),
            'no_hp'             => $this->input->post('hp'),
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

        $this->form_validation->set_rules('nip', 'NIP', 'required|integer', array('required' => 'NIP wajib diisi!', 'integer' => 'NIP anda tidak valid! (Bukan Angka)'));
        $this->form_validation->set_rules('nama', 'Nama', 'required', array('required' => 'Nama wajib diisi!'));
        $this->form_validation->set_rules('mapel', 'Mata Pelajaran', 'required', array('required' => 'Mata Pelajaran wajib diisi!'));
        $this->form_validation->set_rules('email', 'E-Mail', 'valid_email', array('valid_email' => 'E-Mail anda tidak valid!'));
        $this->form_validation->set_rules('hp', 'No HP', 'integer', array('integer' => 'No HP anda tidak valid!'));

        if($this->form_validation->run() == FALSE){
            $this->load->view('layout_admin/wrapper', array('title'=>'Tambah Guru ', 'isi'=>'admin/guru/tambahGuru', 'errors'=>$this->form_validation->error_array()));
        }else{
            if($this->modelweb->tambahGuru($data) == 1){
                $this->session->set_flashdata('pesan', "<script>swal('Gagal!', 'Data gagal ditambahkan!', 'error')</script>");
                redirect('admin/tambahGuru');
            }else{
                $this->upload->do_upload('gambar');
                $this->session->set_flashdata('pesan', "<script>swal('Berhasil!', 'Data berhasil ditambahkan!', 'success')</script>");
                redirect('admin/guru');
            }
        }
    }

    public function deleteGuru(){
        if(empty($this->session->userdata['email'])){
            redirect('admin/login');
        }

        $guru   = $this->modelweb->getDataGuru(FALSE, FALSE, $this->input->get('i'));

        $where = array(
            'id_guru'    => $this->input->get('i')
        );

        if($this->modelweb->hapusData('guru', $where) == 1){
            $this->session->set_flashdata('pesan', "<script>swal('Gagal!', 'Data gagal ditambahkan!', 'error')</script>");
            redirect('admin/guru');
        }else{
            if($guru['0']['gambar'] != "no-image.jpg"){
                unlink('./assets/img/foto-guru/'.$guru['0']['gambar']);
            }
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
        $data['guru']   = $this->modelweb->getDataGuru(FALSE, FALSE, $this->input->get('i'));
        $data['errors'] = $this->form_validation->error_array();

        $this->load->view('layout_admin/wrapper', $data);
    }

    public function updateGuru(){
        if(empty($this->session->userdata['email'])){
            redirect('admin/login');
        }

        $guru   = $this->modelweb->getDataGuru(FALSE, FALSE, $this->input->get('i'));

        $where = array(
            'id_guru'    => $this->input->get('i')
        );

        if($_FILES['gambar']['name']){
            $fileName   = time().'_'.$_FILES['gambar']['name'];
        }else if($guru['0']['gambar']){
            $fileName   = $guru['0']['gambar'];
        }else{
            $fileName   = "no-image.jpg";
        }

        $data = array(
            'nip'               => $this->input->post('nip'),
            'nama_guru'         => $this->input->post('nama'),
            'deskripsi_guru'    => $this->input->post('mapel'),
            'jabatan_guru'      => $this->input->post('jabatan'),
            'email'             => $this->input->post('email'),
            'no_hp'             => $this->input->post('hp'),
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

        $this->form_validation->set_rules('nip', 'NIP', 'required|integer', array('required' => 'NIP wajib diisi!', 'integer' => 'NIP anda tidak valid! (Bukan Angka)'));
        $this->form_validation->set_rules('nama', 'Nama', 'required', array('required' => 'Nama wajib diisi!'));
        $this->form_validation->set_rules('mapel', 'Mata Pelajaran', 'required', array('required' => 'Mata Pelajaran wajib diisi!'));
        $this->form_validation->set_rules('email', 'E-Mail', 'valid_email', array('valid_email' => 'E-Mail anda tidak valid!'));
        $this->form_validation->set_rules('hp', 'No HP', 'integer', array('integer' => 'No HP anda tidak valid!'));

        if($this->form_validation->run() == FALSE){
            $this->load->view('layout_admin/wrapper', array('title'=>'Edit Guru ', 'isi'=>'admin/guru/editGuru', 'guru'=>$guru, 'errors'=>$this->form_validation->error_array()));
        }else{
            if($this->modelweb->updateData('guru', $data, $where) == 1){
                $this->session->set_flashdata('pesan', "<script>swal('Gagal!', 'Data gagal diubah!', 'error');</script>");
                redirect('admin/editGuru?i='.$guru['0']['id']);
            }else{
                if($this->upload->do_upload('gambar')){
                    if($guru['0']['gambar'] != "no-image.jpg"){
                        unlink('./assets/img/foto-guru/'.$guru['0']['gambar']);
                    }
                }
                $this->session->set_flashdata('pesan', "<script>swal('Berhasil!', 'Data berhasil diubah!', 'success');</script>");
                redirect('admin/guru');
            }
        }
    }
    /* .Guru */

    /* Kolom Guru */
    public function kolom_guru($offset = 0){
        if(empty($this->session->userdata['email'])){
            redirect('admin/login');
        }

        $data['title']          = "Kolom Guru ";
        $data['isi']            = "admin/kolom_guru";


        $config['base_url']     = base_url() . 'admin/kolom_guru';
        $config['total_rows']   = $this->db->count_all('kolom_guru');
        $config['per_page']     = 3;
        $config['uri_segment']  = 3;
        $config['attributes']   = array('class' => 'pagination-link');

        if(isset($_POST['search'])){
            $data['kolom_guru']     = $this->modelweb->getDataKolomGuru($config['per_page'], $offset, FALSE, $_POST['search']. TRUE);
            $config['total_rows']   = count($this->modelweb->getDataKolomGuru(FALSE, FALSE, FALSE, $_POST['search']));
            $this->session->set_flashdata('search_admin_kolom', $_POST['search']);
        }else if($this->session->flashdata('search_admin_kolom')){
            $data['kolom_guru']     = $this->modelweb->getDataKolomGuru($config['per_page'], $offset, FALSE, $this->session->flashdata('search_admin_kolom'), TRUE);
            $config['total_rows']   = count($this->modelweb->getDataKolomGuru(FALSE, FALSE, FALSE , $this->session->flashdata('search_admin_kolom')));
            $this->session->set_flashdata('search_admin_kolom', $this->session->flashdata('search_admin_kolom'));
        }else{
            $data['kolom_guru']     = $this->modelweb->getDataKolomGuru($config['per_page'], $offset, FALSE, FALSE, TRUE);
        }

        $this->pagination->initialize($config);

        $this->load->view('layout_admin/wrapper', $data);
    }
    public function tambahKolomGuru(){
        if(empty($this->session->userdata['email'])){
            redirect('admin/login');
        }

        $data['title']          = "Tambah Kolom Guru ";
        $data['isi']            = "admin/kolom_guru/tambahKolom";
        $data['errors']         = $this->form_validation->error_array();
        $data['guru']           = $this->modelweb->getDataGuru(FALSE, FALSE, FALSE, FALSE);

        $this->load->view('layout_admin/wrapper', $data);
    }
    public function addKolomGuru(){
        if(empty($this->session->userdata['email'])){
            redirect('admin/login');
        }

        $data = array(
            'judul' => $this->input->post('judul'),
            'karya' => $this->input->post('penulis'),
            'link'  => str_replace(' ', '-', strtolower($this->input->post('judul'))),
            'isi'   => $this->input->post('isi')
        );

        $this->form_validation->set_rules('judul', 'Judul', 'required', array('required' => 'Judul harus diisi!'));
        $this->form_validation->set_rules('penulis', 'Penulis', 'required', array('required' => 'Penulis harus diisi!'));
        $this->form_validation->set_rules('isi', 'Isi', 'required', array('required' => 'Isi harus diisi!'));

        if($this->form_validation->run() == FALSE){
            $this->load->view('layout_admin/wrapper', array('title'=>'Tambah Kolom Guru ', 'isi'=>'admin/kolom_guru/tambahKolom', 'guru'=>$this->modelweb->getDataGuru(FALSE, FALSE, FALSE, FALSE), 'errors'=>$this->form_validation->error_array()));
        }else{
            if($this->modelweb->tambahKolomGuru($data) == 1){
                $this->session->set_flashdata('pesan', '<script>swal("Gagal!", "Data gagal ditambahkan!", "error");</script>');
                redirect('admin/tambahKolomGuru');
            }else{
                $this->session->set_flashdata('pesan', '<script>swal("Berhasil!", "Data berhasil ditambahkan!", "success");</script>');
                redirect('admin/kolom_guru');
            }
        }
    }
    public function hapusKolomGuru(){
        if(empty($this->session->userdata['email'])){
            redirect('admin/login');
        }

        $where = array(
            'id_kolom'    => $_GET['i']
        );

        if($this->modelweb->hapusData('kolom_guru', $where) == 1){
            $this->session->set_flashdata('pesan', '<script>swal("Gagal!", "Data gagal dihapus!", "error");</script>');
            redirect('admin/kolom_guru');
        }else{
            $this->session->set_flashdata('pesan', '<script>swal("Berhasil!", "Data berhasil dihapus!", "success");</script>');
            redirect('admin/kolom_guru');
        }
    }
    public function editKolomGuru(){
        if(empty($this->session->userdata['email'])){
            redirect('admin/login');
        }

        $data['title']          = "Edit Kolom Guru ";
        $data['isi']            = "admin/kolom_guru/editKolom";
        $data['kolom']          = $this->modelweb->getDataKolomGuru(FALSE, FALSE, $this->input->get('i'), FALSE, TRUE);
        $data['guru']           = $this->modelweb->getDataGuru();
        $data['errors']         = $this->form_validation->error_array();

        $this->load->view('layout_admin/wrapper', $data);
    }
    public function updateKolomGuru(){
        if(empty($this->session->userdata['email'])){
            redirect('admin/login');
        }

        $where = array(
            'id_kolom'    => $this->input->get('i')
        );

        $data = array(
            'judul' => $this->input->post('judul'),
            'karya' => $this->input->post('penulis'),
            'link'  => str_replace(' ', '-', strtolower($this->input->post('judul'))),
            'isi'   => $this->input->post('isi')
        );

        $this->form_validation->set_rules('judul', 'Judul', 'required', array('required' => 'Judul harus diisi!'));
        $this->form_validation->set_rules('penulis', 'Penulis', 'required', array('required' => 'Penulis harus diisi!'));
        $this->form_validation->set_rules('isi', 'Isi', 'required', array('required' => 'Isi harus diisi!'));

        if($this->form_validation->run() == FALSE){
            $this->load->view('layout_admin/wrapper', array('title'=>'Edit Kolom Guru ', 'isi'=>'admin/kolom_guru/editKolom', 'kolom' => $this->modelweb->getDataKolomGuru(FALSE, FALSE, $_GET['i'], FALSE, TRUE), 'guru' => $this->modelweb->getDataGuru(), 'errors'=>$this->form_validation->error_array()));
        }else{
            if($this->modelweb->updateData('kolom_guru', $data, $where) == 1){
                $this->session->set_flashdata('pesan', '<script>swal("Gagal!", "Data gagal diubah!", "error");</script>');
                redirect('admin/editKolomGuru?i='.$kolom['0']['id']);
            }else{
                $this->session->set_flashdata('pesan', '<script>swal("Berhasil!", "Data berhasil diubah!", "success");</script>');
                redirect('admin/kolom_guru');
            }
        }
    }
    /* .Kolom Guru */

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

        if(isset($_POST['search'])){
            $data['pengumuman']         = $this->modelweb->getDataPengumuman($config['per_page'], $offset, FALSE, $_POST['search']);
            $config['total_rows']       = count($this->modelweb->getDataPengumuman(FALSE, FALSE, FALSE, $_POST['search']));
            $this->session->set_flashdata('search_admin_pengumuman', $_POST['search']);
        }else if($this->session->flashdata('search_admin_pengumuman')){
            $data['pengumuman']         = $this->modelweb->getDataPengumuman($config['per_page'], $offset, FALSE, $this->session->flashdata('search_admin_pengumuman'));
            $config['total_rows']       = count($this->modelweb->getDataPengumuman(FALSE, FALSE, FALSE, $this->session->flashdata('search_admin_pengumuman')));
            $this->session->set_flashdata('search_admin_pengumuman', $this->session->flashdata('search_admin_pengumuman'));
        }else{
            $data['pengumuman']         = $this->modelweb->getDataPengumuman($config['per_page'], $offset);
        }

        $this->pagination->initialize($config);

        $this->load->view('layout_admin/wrapper', $data);
    }

    public function tambahPengumuman(){
        if(empty($this->session->userdata['email'])){
            redirect('admin/login');
        }

        $data['title']  = "Tambah Pengumuman ";
        $data['isi']    = 'admin/pengumuman/tambahPengumuman';
        $data['errors'] = $this->form_validation->error_array();

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

        $this->form_validation->set_rules('judul', 'Judul', 'required', array('required' => 'Judul harus diisi!'));
        $this->form_validation->set_rules('isi', 'Isi Pengumuman', 'required', array('required' => 'Isi Pengumuman harus diisi!'));

        if($this->form_validation->run() == FALSE){
            $this->load->view('layout_admin/wrapper', array('title'=>'Tambah Pengumuman ','isi'=>'admin/pengumuman/tambahPengumuman','errors'=>$this->form_validation->error_array()));
        }else{
            if($this->modelweb->tambahPengumuman($data) == 1){
                $this->session->set_flashdata('pesan', "<script>swal('Gagal!', 'Data gagal ditambahkan!', 'error');</script>");
                redirect('admin/tambahPengumuman');
            }else{
                $this->session->set_flashdata('pesan', "<script>swal('Berhasil!', 'Data berhasil ditambahkan!', 'success');</script>");
                redirect('admin/pengumuman');
            }
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
        $data['errors']     = $this->form_validation->error_array();

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

        $this->form_validation->set_rules('judul', 'Judul', 'required', array('required' => 'Judul harus diisi!'));
        $this->form_validation->set_rules('isi', 'Isi Pengumuman', 'required', array('required' => 'Isi Pengumuman harus diisi!'));

        if($this->form_validation->run() == FALSE){
            $this->load->view('layout_admin/wrapper', array('title'=>'Edit Pengumuman ','isi'=>'admin/pengumuman/editPengumuman','pengumuman'=>$this->modelweb->getDataPengumuman(FALSE, FALSE, $_GET['i']),'errors'=>$this->form_validation->error_array()));
        }else{
            if($this->modelweb->updateData('pengumuman', $data, $where) == 1){
                $this->session->set_flashdata('pesan', '<script>swal("Gagal!", "Data gagal diubah!", "error");</script>');
                redirect('admin/pengumuman');
            }else{
                $this->session->set_flashdata('pesan', '<script>swal("Berhasil!", "Data berhasil diubah!", "success");</script>');
                redirect('admin/pengumuman');
            }
        }
    }
    /* .Pengumuman */

    /* Download */
    public function download($offset = 0){
        if(empty($this->session->userdata['email'])){
            redirect('admin/login');
        }

        $data['title']      = "Download ";
        $data['isi']        = "admin/download";

        $config['base_url']     = base_url() . 'admin/download';
        $config['total_rows']   = $this->db->count_all('file_download');
        $config['per_page']     = 3;
        $config['uri_segment']  = 3;
        $config['attributes']   = array('class' => 'pagination-link');

        if(isset($_POST['search'])){
            $data['download']       = $this->modelweb->getDataDownload($config['per_page'], $offset, FALSE, $_POST['search']);
            $config['total_rows']   = count($this->modelweb->getDataDownload(FALSE, FALSE, FALSE, $_POST['search']));
            $this->session->set_flashdata('search_admin_download', $_POST['search']);
        }else if($this->session->flashdata('search_admin_download')){
            $data['download']       = $this->modelweb->getDataDownload($config['per_page'], $offset, FALSE, $this->session->flashdata('search_admin_download'));
            $config['total_rows']   = count($this->modelweb->getDataDownload(FALSE, FALSE, FALSE, $this->session->flashdata('search_admin_download')));
            $this->session->set_flashdata('search_admin_download', $this->session->flashdata('search_admin_download'));
        }else{
            $data['download']       = $this->modelweb->getDataDownload($config['per_page'], $offset);
        }

        $this->pagination->initialize($config);

        $this->load->view('layout_admin/wrapper', $data);
    }

    public function tambahDownload(){
        if(empty($this->session->userdata['email'])){
            redirect('admin/login');
        }

        $data['title']  = "Tambah Download ";
        $data['isi']    = "admin/download/tambahDownload";
        $data['errors'] = $this->form_validation->error_array();

        $this->load->view('layout_admin/wrapper', $data);
    }

    public function addDownload(){
        if(empty($this->session->userdata['email'])){
            redirect('admin/login');
        }

        $data = array(
            'nama_file'         => $_POST['nama_file'],
            'deskripsi_file'    => $_POST['deskripsi'],
            'link_file'         => $_POST['link']
        );

        $this->form_validation->set_rules('nama_file', 'Nama File', 'required', array('required' => 'Nama File harus diisi!'));
        $this->form_validation->set_rules('link', 'Link File', 'required|valid_url', array('required' => 'Link File harus diisi!', 'valid_url' => 'Link File tidak valid! (harus ada http:// atau https://)'));

        if($this->form_validation->run() == FALSE){
            $this->load->view('layout_admin/wrapper', array('title'=>'Tambah Download ','isi'=>'admin/download/tambahDownload','errors'=>$this->form_validation->error_array()));
        }else{
            if($this->modelweb->tambahDownload($data) == 1){
                $this->session->set_flashdata('pesan', "<script>swal('Gagal!', 'Data gagal ditambahkan', 'error');</script>");
                redirect('admin/download');
            }else{
                $this->session->set_flashdata('pesan', "<script>swal('Berhasil!', 'Data berhasil ditambahkan', 'success');</script>");
                redirect('admin/download');
            }
        }
    }

    public function deleteDownload(){
        if(empty($this->session->userdata['email'])){
            redirect('admin/login');
        }

        $where = array(
            'id'    => $_GET['i']
        );


        if($this->modelweb->hapusData('file_download', $where) == 1){
            $this->session->set_flashdata('pesan', "<script>swal('Gagal!', 'Data gagal dihapus!', 'error');</script>");
            redirect('admin/download');
        }else{
            $this->session->set_flashdata('pesan', "<script>swal('Berhasil!', 'Data berhasil dihapus!', 'success');</script>");
            redirect('admin/download');
        }
    }

    public function editDownload(){
        if(empty($this->session->userdata['email'])){
            redirect('admin/login');
        }

        $data['title']      = "Edit Download ";
        $data['isi']        = "admin/download/editDownload";
        $data['download']   = $this->modelweb->getDataDownload(FALSE, FALSE, $_GET['i']);
        $data['errors']     = $this->form_validation->error_array();

        $this->load->view('layout_admin/wrapper', $data);
    }

    public function updateDownload(){
        if(empty($this->session->userdata['email'])){
            redirect('admin/login');
        }

        $where = array(
            'id'    => $_GET['i']
        );

        $data = array(
            'nama_file'         => $_POST['nama_file'],
            'deskripsi_file'    => $_POST['deskripsi'],
            'link_file'         => $_POST['link']
        );

        $this->form_validation->set_rules('nama_file', 'Nama File', 'required', array('required' => 'Nama File harus diisi!'));
        $this->form_validation->set_rules('link', 'Link File', 'required|valid_url', array('required' => 'Link File harus diisi!', 'valid_url' => 'Link File tidak valid! (harus ada http:// atau https://)'));

        if($this->form_validation->run() == FALSE){
            $this->load->view('layout_admin/wrapper', array('title'=>'Edit Download ','isi'=>'admin/download/editDownload','download'=>$this->modelweb->getDataDownload(FALSE, FALSE, $_GET['i']),'errors'=>$this->form_validation->error_array()));
        }else{
            if($this->modelweb->updateData('file_download', $data, $where) == 1){
                $this->session->set_flashdata('pesan', "<script>swal('Gagal!', 'Data gagal diubah!', 'error'); </script>");
                redirect('admin/editDownload?i='.$_GET['i']);
            }else{
                $this->session->set_flashdata('pesan', "<script>swal('Berhasil!', 'Data berhasil diubah!', 'success'); </script>");
                redirect('admin/download');
            }
        }
    }
    /* .Download */

    /* Pesan */
    public function pesan($offset = 0){
        if(empty($this->session->userdata('email'))){
            redirect('admin/login');
        }

        $config['base_url']     = base_url() . 'admin/pesan';
        $config['total_rows']   = $this->db->count_all('buku_tamu');
        $config['per_page']     = 3;
        $config['uri_segment']  = 3;
        $config['attributes']   = array('class' => 'pagination-link');

        if(isset($_POST['search'])){
            $data['pesan']         = $this->modelweb->getDataPesan($config['per_page'], $offset, $_POST['search']);
            $config['total_rows']   = count($this->modelweb->getDataPesan(FALSE, FALSE, $_POST['search']));
            $this->session->set_flashdata('search_admin_pesan', $_POST['search']);
        }else if($this->session->flashdata('search_admin_pesan')){
            $data['pesan']         = $this->modelweb->getDataPesan($config['per_page'], $offset, $this->session->flashdata('search_admin_pesan'));
            $config['total_rows']   = count($this->modelweb->getDataPesan(FALSE, FALSE , $this->session->flashdata('search_admin_pesan')));
            $this->session->set_flashdata('search_admin_pesan', $this->session->flashdata('search_admin_pesan'));
        }else{
            $data['pesan']         = $this->modelweb->getDataPesan($config['per_page'], $offset);
        }

        $this->pagination->initialize($config);

        $data['title']  = "Pesan ";
        $data['isi']    = "admin/pesan";

        $this->load->view('layout_admin/wrapper', $data);
    }

    public function hapusPesan(){
        $where = array(
            'id'    => $_GET['i']
        );

        if($this->modelweb->hapusData('buku_tamu', $where) == 1){
            $this->session->set_flashdata('pesan', '<script>swal("Gagal!", "Data gagal dihapus!", "error");</script>');
            redirect('admin/pesan');
        }else{
            $this->session->set_flashdata('pesan', '<script>swal("Berhasil!", "Data berhasil dihapus!", "success");</script>');
            redirect('admin/pesan');
        }
    }
    /* .Pesan */

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
            $akun = $this->modelweb->getDataAkun($_POST['email']);
            $data = array(
                'email' => $_POST['email'],
                'name'  => $akun['0']['name']
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
