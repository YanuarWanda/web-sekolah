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
                <a class="nav-link full-sm active" href="<?php echo base_url()."beranda/";?>">
                    <i class="fa fa-home fa-xs-2x fa-md-1x mr-1"></i><span class="clearfix d-none d-sm-inline-block">Beranda</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link full-sm" href="<?php echo base_url()."tentang/";?>">
                    <i class="fa fa-info fa-xs-2x fa-md-1x mr-1"></i><span class="clearfix d-none d-sm-inline-block">Tentang</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url()."informasi/";?>">
                    <i class="fa fa-newspaper-o fa-md-1x fa-xs-2x mr-1"></i><span class="clearfix d-none d-sm-inline-block"> Informasi</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url()."pengumuman/";?>">
                    <i class="fa fa-bell fa-xs-2x fa-md-1x mr-1"></i><span class="clearfix d-none d-sm-inline-block">Pengumuman</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url()."buku_tamu/";?>">
                   <i class="fa fa-book fa-xs-2x fa-md-1x mr-1"></i><span class="clearfix d-none d-sm-inline-block">Buku Tamu</span>
                </a>
            </li>
        </ul>
    </div>
</nav>

<div class="bg-custom-3">
    <div id="carouselBeranda" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="carouselBeranda" data-slide-to="0" class="active"></li>
            <li data-target="carouselBeranda" data-slide-to="1"></li>
            <li data-target="carouselBeranda" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100 img-fluid" src="<?php echo base_url();?>assets/img/gallery-5.jpg" alt="Slide pertama">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="display-1">Selamat Datang</h5>
                    <p>di SMKN 11 Bandung</p>
                    <p>Rekayasa Perangkat Lunak</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 img-fluid" src="<?php echo base_url();?>assets/img/gallery-4.jpg" alt="Slide kedua">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="display-1">Selamat Datang</h5>
                    <p>di SMKN 11 Bandung</p>
                    <p>Rekayasa Perangkat Lunak</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="<?php echo base_url();?>assets/img/gallery-3.jpg" alt="Slide ketiga">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="display-1">Selamat Datang</h5>
                    <p>di SMKN 11 Bandung</p>
                    <p>Rekayasa Perangkat Lunak</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev z-last" href="#carouselBeranda" role="button" data-slide="prev">
            <i class="fa fa-arrow-left fa-md-2x fa-lg-3x" aria-hidden="true"></i>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next z-last" href="#carouselBeranda" role="button" data-slide="next">
            <i class="fa fa-arrow-right fa-md-2x fa-lg-3x" aria-hidden="true"></i>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="container-fluid bg-custom-3 mb-3">
        <div class="box">
            <h1 class="display-1 text-center">Kelebihan RPL</h1>
            <hr>
            <div class="row container-fluid d-flex justify-content-center">
                <div class="col-sm-4">
                    <div class="box-rounded small">
                        <img class="img-fluid" src="<?php echo base_url();?>assets/img/beranda/small-banner-1.png" />
                        <h1 class="text-center p-2">Lebih lieur.</h1>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="box-rounded small">
                        <img class="img-fluid" src="<?php echo base_url();?>assets/img/beranda/small-banner-1.png" />
                        <h1 class="text-center p-2">Lebih sering olab.</h1>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="box-rounded small">
                        <img class="img-fluid" src="<?php echo base_url();?>assets/img/beranda/small-banner-1.png" />
                        <div class="br-small-text p-2">
                            <h1 class="text-center">Lebih cepat gila.</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-custom-3">
        <div class="parallax"></div>
    </div>
    <div class="bg-custom-3 container">
        <div class="box mb-3">
            <h1 class="display-2 text-center">Menu</h1>
            <hr>
            <div class="row d-flex justify-content-center">
                <div class="col-sm-5">
                    <div class="box-rounded">
                        <a class="informasi-menu" href="<?php echo base_url();?>tentang"><h1 class="h1 display-1 text-center"><i class="fa fa-info-circle fa-1x mr-1"></i></h1></a>
                        <hr>
                        <h1 class="display-4 text-center">Tentang</h1>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="box-rounded">
                        <a class="informasi-menu" href="<?php echo base_url();?>informasi"><h1 class="h1 display-1 text-center"><i class="fa fa-newspaper-o fa-1x mr-1"></i></h1></a>
                        <hr>
                        <h1 class="display-4 text-center">Informasi</h1>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="box-rounded">
                        <a class="informasi-menu" href="<?php echo base_url();?>pengumuman"><h1 class="h1 display-1 text-center"><i class="fa fa-bell fa-1x mr-1"></i></h1></a>
                        <hr>
                        <h1 class="display-4 text-center">Pengumuman</h1>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="box-rounded">
                        <a class="informasi-menu" href="<?php echo base_url();?>buku_tamu"><h1 class="h1 display-1 text-center"><i class="fa fa-book fa-1x mr-1"></i></h1></a>
                        <hr>
                        <h1 class="display-4 text-center">Buku Tamu</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-custom-3">
        <div class="parallax"></div>
    </div>
    <div class="bg-custom-3">
        <div class="container">
            <div class="box mb-3">
                <h1 class="text-center display-3">Lokasi Kita</h1>
            </div>
            <div class="box mb-3">
               <iframe class="maps-full" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.002612100019!2d107.55619391442444!3d-6.8902891950211185!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e6bd6aaaaaab%3A0xf843088e2b5bf838!2sSMK+11+Bandung!5e0!3m2!1sen!2sid!4v1517989587366" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
    <div class="bg-custom-3">
        <div class="parallax"></div>
    </div>
</div>
