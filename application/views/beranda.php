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
                <a class="nav-link active" href="#">
                    <i class="fa fa-home"></i><span class="clearfix d-none d-sm-inline-block">Beranda</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fa fa-newspaper-o"></i><span class="clearfix d-none d-sm-inline-block">Informasi</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fa fa-bell fa-1x"></i><span class="clearfix d-none d-sm-inline-block">Pengumuman</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                   <i class="fa fa-book fa-1x"></i><span class="clearfix d-none d-sm-inline-block">Buku Tamu</span>
                </a>
            </li>
        </ul>
    </div>
</nav>

<div class="container-fluid p-3">
    <!-- <div class="row">
        <div class="col-sm-2">
            <div class="btn-group-vertical">
                <a href="<?php echo base_url();?>#profil" role="button" class="btn btn-primary">Profil RPL</a>
                <a href="<?php echo base_url();?>#visi" role="button" class="btn btn-secondary">Visi Misi</a>
                <a href="<?php echo base_url();?>#struktur" role="button" class="btn btn-secondary">Struktur Organisasi</a>
                <a href="<?php echo base_url();?>#kurikulum" role="button" class="btn btn-secondary">Kurikulum RPL</a>
                <a href="<?php echo base_url();?>#kerja" role="button" class="btn btn-secondary">Peluang Kerja</a>
            </div>
        </div>
        <div class="col-sm-9 ml-auto btn-primary">

        </div>
    </div> -->
        <ul class="nav justify-content-center" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link box active mr-2" id="home-tab" data-toggle="tab" href="#profil" role="tab" aria-controls="home" aria-selected="true">Profil RPL</a>
            </li>
            <li class="nav-item">
                <a class="nav-link box mr-2" id="profile-tab" data-toggle="tab" href="#visimisi" role="tab" aria-controls="profile" aria-selected="false">Visi Misi</a>
            </li>
            <li class="nav-item">
                <a class="nav-link box mr-2" id="contact-tab" data-toggle="tab" href="#struktur" role="tab" aria-controls="contact" aria-selected="false">Struktur Organisasi</a>
            </li>
            <li class="nav-item">
                <a class="nav-link box mr-2" id="contact-tab" data-toggle="tab" href="#kurikulum" role="tab" aria-controls="contact" aria-selected="false">Kurikulum RPL</a>
            </li>
            <li class="nav-item">
                <a class="nav-link box mr-2" id="contact-tab" data-toggle="tab" href="#kerja" role="tab" aria-controls="contact" aria-selected="false">Peluang Kerja</a>
            </li>

        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active box" id="profil" role="tabpanel" aria-labelledby="home-tab">Profil RPL</div>
            <div class="tab-pane fade box" id="visimisi" role="tabpanel" aria-labelledby="profile-tab">Visi dan Misi</div>
            <div class="tab-pane fade box" id="struktur" role="tabpanel" aria-labelledby="contact-tab">Struktur Organisasi</div>
            <div class="tab-pane fade box" id="kurikulum" role="tabpanel" aria-labelledby="contact-tab">Kurikulum RPL</div>
            <div class="tab-pane fade box" id="kerja" role="tabpanel" aria-labelledby="contact-tab">Peluang Kerja</div>
        </div>
</div>
