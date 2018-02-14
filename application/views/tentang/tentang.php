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
                <a class="nav-link full-sm" href="<?php echo base_url()."beranda/";?>">
                    <i class="fa fa-home fa-xs-2x fa-md-1x mr-1"></i><span class="clearfix d-none d-sm-inline-block">Beranda</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link full-sm active" href="<?php echo base_url()."tentang/";?>">
                    <i class="fa fa-info fa-xs-2x fa-md-1x mr-1"></i><span class="clearfix d-none d-sm-inline-block">Tentang</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url()."informasi/";?>">
                    <i class="fa fa-newspaper-o fa-xs-2x fa-md-1x mr-1"></i><span class="clearfix d-none d-sm-inline-block"> Informasi</span>
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

<div class="container p-3">
    <ul class="nav justify-content-center" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link box-rounded mr-2" id="home-tab" data-toggle="tab" href="#profil" role="tab" aria-controls="home" aria-selected="true">Profil RPL</a>
        </li>
        <li class="nav-item">
            <a class="nav-link box-rounded mr-2" id="profile-tab" data-toggle="tab" href="#visimisi" role="tab" aria-controls="profile" aria-selected="false">Visi Misi</a>
        </li>
        <li class="nav-item">
            <a class="nav-link box-rounded active mr-2" id="contact-tab" data-toggle="tab" href="#struktur" role="tab" aria-controls="contact" aria-selected="false">Struktur Organisasi</a>
        </li>
        <li class="nav-item">
            <a class="nav-link box-rounded mr-2" id="contact-tab" data-toggle="tab" href="#kurikulum" role="tab" aria-controls="contact" aria-selected="false">Kurikulum RPL</a>
        </li>
        <li class="nav-item">
            <a class="nav-link box-rounded mr-2" id="contact-tab" data-toggle="tab" href="#kerja" role="tab" aria-controls="contact" aria-selected="false">Peluang Kerja</a>
        </li>
    </ul>

    <div class="tab-content" id="myTabContent">

        <div class="tab-pane fade" id="profil" role="tabpanel" aria-labelledby="home-tab">
            <div class="row">
                <div class="col-lg-12">
                    <div class="box-rounded">
                        <img class="img-fluid imgZoom" src="<?php echo base_url();?>assets/img/gallery-1.jpg" alt="Profil RPL"/>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="box-rounded text-center">
                        <h1 class="display-4"> Apa itu Rekayasa Perangkat Lunak ? </h1>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="box-rounded text-justify">
                        <?php echo $tentang->deskripsi; ?>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="box-rounded text-center">
                        <h1 class="display-4"> Sejarah Rekayasa Perangkat Lunak </h1>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="box-rounded text-justify">
                        <?php echo $tentang->sejarah; ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="tab-pane fade" id="visimisi" role="tabpanel" aria-labelledby="profile-tab">
            <div class="box-rounded">
                <h1 class="text-center"> Visi </h1>
                <hr>
                <blockquote class="blockquote text-center">
                    <p class="mb-0"><?php echo $tentang->visi; ?></p>
                    <footer class="blockquote-footer">Visi RPL di SMKN 11 Bandung</footer>
                </blockquote>
            </div>
            <div class="box-rounded">
                <h1 class="text-center"> Misi </h1>
                <hr>
                <blockquote class="blockquote">
                    <?php echo $tentang->misi; ?>
                    <!-- <ol>
                        <li>Mendidik siswa mengidentifikasi dan melakukan reparasi software untuk kebutuhan didunia usaha dan industri.</li>
                        <li>Mendidik siswa mengimplementasikan aplikasi-aplikasi pemrograman, dan pengembangan web.</li>
                        <li>Mendidik siswa mengimplementasikan pemrograman berbasis client server dan desktop</li>
                    </ol> -->
                </blockquote>
            </div>
        </div>

        <div class="tab-pane fade show active" id="struktur" role="tabpanel" aria-labelledby="contact-tab">
            <?php foreach($guru as $g){ ?>
            <div class="row box">
                <div class="col-sm-3">
                    <div class="box-rounded ">
                        <img class="img-fluid imgZoom" width="225px" height="150px" src="<?php echo base_url();?>assets/img/foto-guru/<?php echo $g['gambar']; ?>" alt="<?php echo $g['nama_guru']; ?>"/>
                    </div>
                    <div class="box-rounded">
                        <p class="text-center m-0"> <?php echo $g['nama_guru']; ?></p>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="box-rounded">
                        <h2 class="text-center"><?php echo $g['jabatan_guru']; ?></h2>
                    </div>
                    <div class="box-rounded">
                        <ul>
                            <li class="square-list">NIP : <?php echo $g['nip']; ?></li>
                        </ul>
                    </div>
                    <div class="box-rounded">
                        <dl class="ml-2 m-0">
                            <dt>Bidang Keahlian</dt>
                            <dd> - <?php echo $g['deskripsi_guru']; ?></dd>
                        </dl>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="box-rounded p-0 pt-1 pb-1">
                        <h2 class="text-center"> Kontak </h2>
                    </div>
                    <div class="box-rounded">
                        E-Mail : <?php echo $g['email']; ?><br>
                        No HP : <?php echo $g['no_hp']; ?>
                    </div>
                    <div class="box-rounded text-center">
                        <h1 class="h1 text-center"> Sosial Media </h1>
                        <hr>
                        <a href="#">
                            <span class="fa-stack fa-lg">
                                <i class="fa fa-square fa-stack-2x fa-red"></i>
                                <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                            </span>
                        </a>
                        <a href="#">
                            <span class="fa-stack fa-lg">
                                <i class="fa fa-square fa-stack-2x fa-red"></i>
                                <i class="fa fa-twitter fa-stack-1x fa-light"></i>
                            </span>
                        </a>
                        <a href="#">
                            <span class="fa-stack fa-lg">
                                <i class="fa fa-square fa-stack-2x fa-red"></i>
                                <i class="fa fa-instagram fa-stack-1x fa-light"></i>
                            </span>
                        </a>
                        <a href="#">
                            <span class="fa-stack fa-lg">
                                <i class="fa fa-square fa-stack-2x fa-red"></i>
                                <i class="fa fa-youtube fa-stack-1x fa-light"></i>
                            </span>
                        </a>
                        <a href="#">
                            <span class="fa-stack fa-lg">
                                <i class="fa fa-square fa-stack-2x fa-red"></i>
                                <i class="fa fa-github fa-stack-1x fa-light"></i>
                            </span>
                        </a>
                        <a href="#">
                            <span class="fa-stack fa-lg">
                                <i class="fa fa-square fa-stack-2x fa-red"></i>
                                <i class="fa fa-google-plus fa-stack-1x fa-light"></i>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
        <div class="tab-pane fade box" id="kurikulum" role="tabpanel" aria-labelledby="contact-tab">Kurikulum RPL</div>
        <div class="tab-pane fade box" id="kerja" role="tabpanel" aria-labelledby="contact-tab">Peluang Kerja</div>
            <div class="box-rounded">
                <blockquote class="blockquote">
                    <p class="mb-0"><?php echo $tentang->peluang_kerja; ?></p>
                    <hr>
                </blockquote>
                 <small>Informasi lebih lanjut hubungi hubin.</small>
            </div>
        </div>
        
    </div>
</div>
