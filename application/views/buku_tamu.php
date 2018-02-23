<script src="https://cdn.ckeditor.com/4.8.0/full/ckeditor.js"></script>
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
                <a class="nav-link active" href="<?php echo base_url()."buku_tamu/";?>">
                   <i class="fa fa-book fa-xs-2x fa-md-1x mr-1"></i><span class="clearfix d-none d-sm-inline-block">Buku Tamu</span>
                </a>
            </li>
        </ul>
    </div>
</nav>

<div class="parallax pt-1 pb-1">
    <div class="container mb-3">
        <div class="box-rounded transparent">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>">Beranda</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Buku Tamu</li>
                </ol>
            </nav>
        </div>
        <div class="box-rounded transparent">
            <h1 class="text-center">Pesan, Kritik dan Saran</h1>
            <hr>
            <?php if($errors){foreach($errors as $error){ ?>
                <div class="box-rounded-red">
                    <b><?php echo $error; ?></b>
                </div>
            <?php }} ?>
            <?php echo form_open('buku_tamu/kirimPesan'); ?>
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" placeholder="Nama pengirim ..." class="form-control" value="<?php echo set_value('nama'); ?>">
                </div>
                <div class="form-group">
                    <label for="asal">Asal</label>
                    <input type="text" name="asal" placeholder="Asal pengirim ..." class="form-control" value="<?php echo set_value('asal'); ?>">
                </div>
                <div class="form-group">
                    <label for="email">E-Mail</label>
                    <input type="text" name="email" placeholder="Email pengirim ..." class="form-control" value="<?php echo set_value('email'); ?>">
                </div>
                <div class="form-group">
                    <label for="isi">Isi Pesan</label>
                    <textarea name="isi" class="form-control"><?php echo set_value('isi'); ?></textarea>
                    <script type="text/javascript">
                        CKEDITOR.replace( 'isi' );
                    </script>
                </div>
                <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-send fa-2x"></i></button>
            </form>
        </div>
    </div>
</div>
