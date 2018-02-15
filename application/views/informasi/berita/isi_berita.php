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
<div class="bg-custom-4">
    <?php foreach($berita as $b){ ?>
    <div class="container p-3">
        <div class="box-rounded">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>informasi">Informasi</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>informasi/berita">Berita</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?php echo $b['judul_berita']; ?></li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-lg-9">
                <div class="box-rounded">
                    <h1 class="display-4 text-center"><?php echo $b['judul_berita']; ?> </h1>
                </div>
                <div class="box-rounded">
                    <img class="img-fluid imgZoom" src="<?php echo base_url();?>assets/img/foto-berita/<?php echo $b['gambar']; ?>" alt="<?php echo $b['judul_berita']; ?>"/>
                </div>
                <div class="box-rounded">
                    <small class="text-muted">Dipost pada : <?php echo $b['tanggal_berita']; ?></small>
                </div>
                <div class="box-rounded">
                    <p class="text-justify"><?php echo $b['isi_berita']; ?></p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="box-rounded">
                    <h3 class="text-center"> Berita Terbaru </h3>
                    <?php foreach($beritaTerbaru as $bt){ ?>
                        <hr>
                        <a href="<?php echo base_url();?>informasi/berita/isi/<?php echo $bt['link']; ?>">
                            <h6 class="text-center"><?php echo $bt['judul_berita']; ?></h6>
                            <img class="img-fluid imgHover" src="<?php echo base_url();?>assets/img/foto-berita/<?php echo $bt['gambar']; ?>" />
                        </a>
                    <?php } ?>
                </div>
                <div class="box-rounded">
                    <h3 class="text-center"> Bagikan Berita </h3>
                    <hr>
                    <div class="d-flex justify-content-center">
                        <span class="fa-stack fa-lg">
                            <a href="#">
                                <i class="fa fa-square fa-stack-2x fa-red"></i>
                                <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                            </a>
                        </span>
                        <span class="fa-stack fa-lg">
                            <a href="#">
                                <i class="fa fa-square fa-stack-2x fa-red"></i>
                                <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                            </a>
                        </span>
                        <span class="fa-stack fa-lg">
                            <a href="#">
                                <i class="fa fa-square fa-stack-2x fa-red"></i>
                                <i class="fa fa-instagram fa-stack-1x fa-inverse"></i>
                            </a>
                        </span>
                        <span class="fa-stack fa-lg">
                            <a href="#">
                                <i class="fa fa-square fa-stack-2x fa-red"></i>
                                <i class="fa fa-google-plus fa-stack-1x fa-inverse"></i>
                            </a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>
</div>
