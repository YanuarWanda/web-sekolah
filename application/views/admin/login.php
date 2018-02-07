<html>

    <head>
    	<link href="<?php echo base_url().'assets/css/bootstrap.min.css';?>" rel='stylesheet' />
        <link href="<?php echo base_url().'assets/css/bootstrap-floating-label.css';?>" rel='stylesheet' />
    	<link href="<?php echo base_url().'assets/css/custom.css';?>" rel='stylesheet' />

        <link rel='icon' href="<?php echo base_url()."/assets/img/icon.png";?>">
    	<title>Admin Login | Bappelitbang Kota Bandung</title>
    </head>

    <body>
        <form class="form-signin" method="POST" action="<?php echo base_url().'admin/signin';?>">
            <div class="text-center mb-4">
                <img class="mb-4" src="<?php echo base_url().'assets/img/smkn12.png';?>" alt="" width="144" height="144">
                <h1 class="h3 mb-3 font-weight-normal">Login Admin</h1>
            </div>

            <div class="form-label-group">
                <input name="email" type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                <label for="inputEmail">Email address</label>
            </div>

            <div class="form-label-group">
                <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                <label for="inputPassword">Password</label>
            </div>

            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
            <p class="mt-5 mb-3 text-muted text-center">&copy;Copyright 2017 - 2018.<br> All rights reserved. SMKN 11 Bandung.</p>
        </form>
    </body>

</html>
