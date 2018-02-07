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
                <li class="breadcrumb-item active" aria-current="page">Berita</li>
            </ol>
        </nav>
    </div>
    <?php for($n=1;$n<=3;$n++): ?>
    <div class="box-rounded">
        <div class="row">
            <div class="col-lg-3">
                <img class="img-fluid" src="<?php echo base_url();?>assets/img/gallery-1.jpg" />
            </div>
            <div class="col-lg-9">
                <h2 class="display-4">Judul</h2>
                <hr>
                <small class="text-muted ml-2">Dipost oleh ? pada ? pada kategori ?</small>
                <p><?php echo word_limiter('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 60); ?></p>
                <hr>
                <a href="#" class="btn btn-primary btn-block">Selengkapnya</a>
            </div>
        </div>
    </div>
    <?php endfor; ?>
    <div class="box-rounded">
        <ul class="pagination justify-content-center m-0">
            <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1"><i class="fa fa-arrow-left fa-height-auto"></i></a>
            </li>
            <li class="page-item"><a class="page-link auto" href="#">1</a></li>
            <li class="page-item"><a class="page-link auto" href="#">2</a></li>
            <li class="page-item"><a class="page-link auto" href="#">3</a></li>
            <li class="page-item"><a class="page-link auto" href="#">4</a></li>
            <li class="page-item"><a class="page-link auto" href="#">5</a></li>
            <li class="page-item"><a class="page-link auto" href="#">6</a></li>
            <li class="page-item">
                <a class="page-link" href="#" tabindex="+1"><i class="fa fa-arrow-right fa-height-auto"></i></a>
            </li>
        </ul>
    </div>
</div>
