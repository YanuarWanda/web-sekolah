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
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div id="slide-out" class="side-nav relative mdb-sidenav">
                <ul class="custom-scrollbar list-unstyled" style="max-height:100px;">
                    <li>
                        <div class="logo-wrapper waves-light">
                            <a href="#"><img src="https://mdbootstrap.com/img/logo/mdb-transparent.png" class="img-fluid flex-center"></a>
                        </div>
                    </li>
                    <li>
                        <ul class="collapsible collapsible-accordion">
                            <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-chevron-right"></i> Submit blog<i class="fa fa-angle-down rotate-icon"></i></a>
                                <div class="collapsible-body">
                                    <ul>
                                        <li>
                                            <a href="#" class="waves-effect">Submit listing</a>
                                        </li>
                                        <li>
                                            <a href="#" class="waves-effect">Registration form</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-hand-pointer-o"></i> Instruction<i class="fa fa-angle-down rotate-icon"></i></a>
                                <div class="collapsible-body">
                                    <ul>
                                        <li>
                                            <a href="#" class="waves-effect">For bloggers</a>
                                        </li>
                                        <li>
                                            <a href="#" class="waves-effect">For authors</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a class="collapsible-header waves-effect arrow-r"><i class="fa fa-eye"></i> About<i class="fa fa-angle-down rotate-icon"></i></a>
                                <div class="collapsible-body">
                                    <ul>
                                        <li>
                                            <a href="#" class="waves-effect">Introduction</a>
                                        </li>
                                        <li>
                                            <a href="#" class="waves-effect">Monthly meetings</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a class="collapsible-header waves-effect arrow-r"><i class="fa fa-envelope-o"></i> Contact me<i class="fa fa-angle-down rotate-icon"></i></a>
                                <div class="collapsible-body">
                                    <ul>
                                        <li>
                                            <a href="#" class="waves-effect">FAQ</a>
                                        </li>
                                        <li>
                                            <a href="#" class="waves-effect">Write a message</a>
                                        </li>
                                        <li>
                                            <a href="#" class="waves-effect">FAQ</a>
                                        </li>
                                        <li>
                                            <a href="#" class="waves-effect">Write a message</a>
                                        </li>
                                        <li>
                                            <a href="#" class="waves-effect">FAQ</a>
                                        </li>
                                        <li>
                                            <a href="#" class="waves-effect">Write a message</a>
                                        </li>
                                        <li>
                                            <a href="#" class="waves-effect">FAQ</a>
                                        </li>
                                        <li>
                                            <a href="#" class="waves-effect">Write a message</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
                <div class="sidenav-bg mask-strong"></div>
            </div>
        </div>
        <div class="col-md-9">
            <div>
                <a href="#" data-activates="slide-out" class="button-collapse m-2" onclick=""><i class="fa fa-bars fa-red"></i></a>
            </div>
        </div>
    </div>
</div>

<script src="<?php echo base_url();?>assets/js/compiled.min.js"></script>
<script>
     // SideNav Initialization
    $(".button-collapse").sideNav();
    new WOW().init();
</script>
