<nav class="navbar navbar-expand navbar-light bg-custom-gradient-1">
    <div class="collapse navbar-collapse row" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto col-sm-12 col-lg-3 justify-content-center">
            <a class="nav-link" href="#">
                <i class="fa fa-facebook fa-1x ml-2" aria-hidden="true"></i>
            </a>
            <a class="nav-link" href="#">
                <i class="fa fa-twitter fa-1x ml-2" aria-hidden="true"></i>
            </a>
            <a class="nav-link" href="#">
                <i class="fa fa-instagram fa-1x ml-2" aria-hidden="true"></i>
            </a>
            <a class="nav-link" href="#">
                <i class="fa fa-youtube fa-1x ml-2" aria-hidden="true"></i>
            </a>
            <a class="nav-link" href="#">
                <i class="fa fa-linkedin fa-1x ml-2" aria-hidden="true"></i>
            </a>
            <a class="nav-link" href="#">
                <i class="fa fa-google-plus fa-1x ml-2" aria-hidden="true"></i>
            </a>
        </ul>
        <ul class="navbar-nav ml-auto col-sm-12 col-lg-4 font-small justify-content-center">
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url()."beranda/";?>">
                    <i class="fa fa-home fa-xs-2x fa-md-1x mr-1"></i><span class="clearfix d-none d-sm-inline-block">Beranda</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link full-sm" href="<?php echo base_url()."tentang/";?>">
                    <i class="fa fa-info fa-xs-2x fa-md-1x mr-1"></i><span class="clearfix d-none d-sm-inline-block">Tentang</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="<?php echo base_url()."informasi/";?>">
                    <i class="fa fa-newspaper-o fa-xs-2x fa-md-1x mr-1"></i><span class="clearfix d-none d-sm-inline-block"> Informasi</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url()."pengumuman/";?>">
                    <i class="fa fa-bell fa-1x fa-xs-2x fa-md-1x mr-1"></i><span class="clearfix d-none d-sm-inline-block">Pengumuman</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url()."buku_tamu/";?>">
                   <i class="fa fa-book fa-1x fa-xs-2x fa-md-1x mr-1"></i><span class="clearfix d-none d-sm-inline-block">Buku Tamu</span>
                </a>
            </li>
        </ul>
    </div>
</nav>

<div class="parallax">
    <div class="container p-3">
        <div class="box-rounded">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>informasi">Informasi</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Berita</li>
                </ol>
            </nav>
        </div>
        <div class="box-rounded small mr-0 ml-0">
            <?php echo form_open('informasi/berita'); ?>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-search"></i></span>
                    <input type="text" name="search" class="form-control" placeholder="Search ..." value="<?php if(!empty($this->session->flashdata('search_berita'))){ echo $this->session->flashdata('search_berita'); } else { set_value('search'); }?>"/>
                </div>
            </form>
        </div>
        <?php if($berita){ ?>
            <?php foreach($berita as $b){ ?>
            <div class="box-rounded">
                <div class="row">
                    <div class="col-sm-12 col-lg-3">
                        <img class="img-fluid img-full" src="<?php echo base_url();?>assets/img/foto-berita/<?php echo $b['gambar']; ?>" />
                    </div>
                    <div class="col-sm-12 col-lg-9">
                        <p class="display-4"><?php echo $b['judul_berita']; ?></p>
                        <hr>
                        <small class="text-muted ml-2">Dipost pada <?php echo $b['tanggal_berita']; ?> pada kategori ?</small>
                        <p><?php echo word_limiter($b['isi_berita'], 40); ?></p>
                        <hr>
                        <a href="<?php echo base_url();?>informasi/berita/isi/<?php echo $b['link']; ?>" class="btn btn-primary btn-block">Selengkapnya</a>
                    </div>
                </div>
            </div>
            <?php } ?>
        <?php }else{ ?>
            <div class="box-rounded">
                <h1 class="display-4 text-center"> Berita yang anda cari tidak ditemukan ... </h1>
            </div>
        <?php } ?>
        <div class="box-rounded d-flex justify-content-center pt-0 pb-0">
            <?php echo $this->pagination->create_links(); ?>
        </div>
    </div>
</div>
