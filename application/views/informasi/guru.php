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
                    <i class="fa fa-home fa-xs-2x mr-1"></i><span class="clearfix d-none d-sm-inline-block">Beranda</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link full-sm" href="<?php echo base_url()."tentang/";?>">
                    <i class="fa fa-info fa-xs-2x mr-1"></i><span class="clearfix d-none d-sm-inline-block">Tentang</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="<?php echo base_url()."informasi/";?>">
                    <i class="fa fa-newspaper-o fa-xs-2x mr-1"></i><span class="clearfix d-none d-sm-inline-block"> Informasi</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url()."pengumuman/";?>">
                    <i class="fa fa-bell fa-1x fa-xs-2x mr-1"></i><span class="clearfix d-none d-sm-inline-block">Pengumuman</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url()."buku_tamu/";?>">
                   <i class="fa fa-book fa-1x fa-xs-2x mr-1"></i><span class="clearfix d-none d-sm-inline-block">Buku Tamu</span>
                </a>
            </li>
        </ul>
    </div>
</nav>

<div class="container mb-3">
    <div class="box-rounded">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url();?>">Beranda</a></li>
                <li class="breadcrumb-item"><a href="<?php echo base_url();?>informasi">Informasi</a></li>
                <li class="breadcrumb-item active" aria-current="page">Guru</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <?php for($n=1;$n<=6;$n++){ ?>
        <div class="col-lg-4">
            <div class="box-rounded">
                <img class="img-fluid" src="<?php echo base_url();?>assets/img/gallery-1.jpg" />
                <hr>
                <p class="text-center font-weight-bold"> Yanuar Wanda Putra </p>
                <p class="text-center"> 195289381923192839 </p>
                <p class="text-center"> Pemrograman Web Dinamis </p>
                <p class="text-center"> 087825418390 </p>
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
        <?php } ?>
    </div>
</div>
