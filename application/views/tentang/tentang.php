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
                <div class="col-lg-3">
                    <div class="box-rounded">
                        <img class="img-fluid imgZoom" src="<?php echo base_url();?>assets/img/gallery-1.jpg" alt="Profil RPL"/>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="box-rounded text-justify">
                        RPL di SMKN 11 Bandung sudah ada sejak tahun 2011, di tahun pertama hanya ada satu kelas bengkel yaitu BTI-1 Di sana terdapat 20 buah PC, dan 1 buah proyektor.
                    </div>
                </div>
            </div>
        </div>

        <div class="tab-pane fade" id="visimisi" role="tabpanel" aria-labelledby="profile-tab">
            <div class="box-rounded">
                <h1 class="text-center"> Visi </h1>
                <hr>
                <blockquote class="blockquote text-center">
                    <p class="mb-0"> Mencetak lulusan berkualitas dengan kompetensi di bidang rekayasa perangkatlunak, pemrograman dan web.</p>
                    <footer class="blockquote-footer">Visi RPL di SMKN 11 Bandung</footer>
                </blockquote>
            </div>
            <div class="box-rounded">
                <h1 class="text-center"> Misi </h1>
                <hr>
                <blockquote class="blockquote">
                    <ol>
                        <li>Mendidik siswa mengidentifikasi dan melakukan reparasi software untuk kebutuhan didunia usaha dan industri.</li>
                        <li>Mendidik siswa mengimplementasikan aplikasi-aplikasi pemrograman, dan pengembangan web.</li>
                        <li>Mendidik siswa mengimplementasikan pemrograman berbasis client server dan desktop</li>
                    </ol>
                </blockquote>
            </div>
        </div>

        <div class="tab-pane fade show active" id="struktur" role="tabpanel" aria-labelledby="contact-tab">
            <div class="row">
                <div class="col-sm-3">
                    <div class="box-rounded ">
                        <img class="img-fluid imgZoom" width="225px" height="150px" src="http://berkas.siap.id/ptk2014/202/19175/20219175100024.1410356524" alt="Yudi Subekti S,MT."/>
                    </div>
                    <div class="box-rounded">
                        <p class="text-center m-0"> Yudi Subekti S.Mt.</p>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="box-rounded">
                        <h2 class="text-center">Kepala Jurusan</h2>
                    </div>
                    <div class="box-rounded">
                        <ul>
                            <li class="square-list">NIP : 1952812739101231</li>
                            <li>Alamat : Jln Jln Jn J jJjJjJj</li>
                        </ul>
                    </div>
                    <div class="box-rounded">
                        <dl class="ml-5 m-0">
                            <dt>Bidang Keahlian</dt>
                            <dd> - Pemrograman Basis dan Data</dd>
                            <dd> - Pemrograman Desktop dan Data</dd>
                        </dl>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="box-rounded p-0 pt-1 pb-1">
                        <h2 class="text-center"> Kontak </h2>
                    </div>
                    <div class="box-rounded">
                        E-Mail : yudi.subekti@hotmail.org<br>
                        No HP : 07822372829193
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
            <div class="box-rounded m-0 p-0"><hr></div>
            <div class="row">
                <div class="col-sm-3">
                    <div class="box-rounded">
                        <img class="img-fluid imgZoom" width="300px" height="150px" src="http://berkas.siap.id/ptk2014/202/19175/20219175100002.1410312450" alt="ANI NURAENI"/>
                    </div>
                    <div class="box-rounded">
                        <p class="text-center m-0"> Ani Nuraeni</p>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="box-rounded">
                        <h2 class="text-center">Wakil Kepala Jurusan</h2>
                    </div>
                    <div class="box-rounded">
                        <ul>
                            <li class="square-list">NIP : 1952222739101231</li>
                            <li>Alamat : Jln Jln Jn J ABCDEFGHI</li>
                        </ul>
                    </div>
                    <div class="box-rounded">
                        <dl class="ml-5 m-0">
                            <dt>Bidang Keahlian</dt>
                            <dd> - Desain Web dan Data</dd>
                            <dd> - Desain Desktop dan Data</dd>
                        </dl>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="box-rounded p-0 pt-1 pb-1">
                        <h2 class="text-center"> Kontak </h2>
                    </div>
                    <div class="box-rounded">
                        E-Mail : ani.nuraeni@hotmail.org<br>
                        No HP : 082728191282
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
            <div class="box-rounded m-0 p-0"><hr></div>
        </div>
        <div class="tab-pane fade box" id="kurikulum" role="tabpanel" aria-labelledby="contact-tab">Kurikulum RPL</div>
        <div class="tab-pane fade box" id="kerja" role="tabpanel" aria-labelledby="contact-tab">Peluang Kerja</div>
    </div>
</div>
