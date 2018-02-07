    <footer>
        <div class="row bg-custom-1 font-white font-small m-0">
            <div class="col-lg-4 col-sm-12 m-2">
                <h6 class="h6">Kontak</h6>
                <hr>
                <p class="">Jl. Budhi Cilember Bandung - Jawa Barat</p>
                <p>
                    <b>Telp</b> : 022-6652442<br>
                    <b>Fax</b> : 022-6613508<br>
                    <b>E-Mail</b> : smkn11bdg@gmail.com
                </p>
            </div>
            <div class="col-lg-4 col-sm-12 m-2">
                <h6 class="h6">Gallery</h6>
                <hr>
                <?php for($n=1;$n<=4;$n++){ ?>
                    <img class="imgZoom" src="<?php echo base_url();?>assets/img/gallery-1.jpg" width="105px" height="80px" alt="Gallery <?php echo $n; ?>"/>
                <?php } ?>
            </div>
            <div class="col-lg-3 col-sm-12 m-2">
                <h6 class="h6">Link</h6>
                <hr>
                <a class="font-white" href="#"> Website SMKN 11 Bandung </a>
            </div>
        </div>
        <div class="bg-custom-2 p-2 font-white">
            <small><center>&copy; Copyright Tim 7 @ SMKN 11 Bandung. All Rights Reserved.</center></small>
        </div>
    </footer>

    <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/custom.js"></script>

    </body>
</html>
