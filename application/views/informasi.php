<nav class="navbar navbar-expand navbar-dark bg-custom-1">
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

<div class="container mb-3" id="box-informasi">
    <div class="box-rounded">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url();?>">Beranda</a></li>
                <li class="breadcrumb-item active" aria-current="page">Informasi</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="box-rounded">
                <a class="informasi-menu" href="<?php echo base_url();?>informasi/berita"><h1 class="h1 display-1 text-center"><i class="fa fa-newspaper-o fa-1x mr-1"></i></h1></a>
                <hr>
                <p class="display-4 text-center"> Berita Terkini </p>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="box-rounded">
                <a class="informasi-menu" href="<?php echo base_url();?>informasi/guru"><h1 class="h1 display-1 text-center"><i class="fa fa-id-card fa-1x mr-1"></i></h1></a>
                <hr>
                <p class="display-4 text-center"> Kolom Guru </p>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="box-rounded">
                <a class="informasi-menu" href="<?php echo base_url();?>informasi/agenda"><h1 class="h1 display-1 text-center"><i class="fa fa-calendar fa-1x mr-1"></i></h1></a>
                <hr>
                <p class="display-4 text-center"> Agenda </p>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="box-rounded">
                <a class="informasi-menu" href="<?php echo base_url();?>informasi/download"><h1 class="h1 display-1 text-center"><i class="fa fa-download fa-1x mr-1"></i></h1></a>
                <hr>
                <p class="display-4 text-center"> Download </p>
            </div>
        </div>
     </div>
</div>
