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
                    <li class="breadcrumb-item active" aria-current="page">Guru</li>
                </ol>
            </nav>
        </div>
        <div class="box-rounded small mr-0 ml-0">
            <?php echo form_open('informasi/guru'); ?>
                <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-search"></i></div>
                    <input type="text" name="search" class="form-control" placeholder="Search ..." value="<?php if(!empty($this->session->flashdata('search_guru'))){ echo $this->session->flashdata('search_guru'); } else { set_value('search'); }?>">
                </div>
            </form>
        </div>
        <div class="row">
            <?php if($guru){ ?>
                <?php foreach($guru as $g){ ?>
                <div class="col-lg-4">
                    <div class="box-rounded">
                        <img class="img-fluid img-full imgZoom" src="<?php echo base_url();?>assets/img/foto-guru/<?php echo $g['gambar']; ?>" alt="<?php echo $g['nama_guru']; ?>"/>
                        <hr>
                        <p class="text-center font-weight-bold"> <?php echo $g['nama_guru']; ?> </p>
                        <p class="text-center"> <?php echo $g['nip']; ?> </p>
                        <p class="text-center"> <?php echo $g['deskripsi_guru']; ?> </p>
                        <p class="text-center"> <?php echo $g['no_hp']; ?> </p>
                        <hr>
                        <div class="d-flex justify-content-center">
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-square fa-stack-2x fa-red"></i>
                                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-square fa-stack-2x fa-red"></i>
                                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-square fa-stack-2x fa-red"></i>
                                    <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-square fa-stack-2x fa-red"></i>
                                    <i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
        <?php }}else{ ?>
        <div class="col-sm-12">
            <div class="box-rounded">
                <h1 class="display-4 text-center">Data yang anda cari tidak ditemukan ... </h1>
            </div>
        </div>
        <?php } ?>
        </div>
        <div class="box-rounded d-flex justify-content-center pt-0 pb-0">
            <?php echo $this->pagination->create_links(); ?>
        </div>
    </div>
</div>
