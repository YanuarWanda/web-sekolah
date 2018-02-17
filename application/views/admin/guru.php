<div class="main-container ace-save-state" id="main-container">
	<script type="text/javascript">
		try{ace.settings.loadState('main-container')}catch(e){}
	</script>

	<div id="sidebar" class="sidebar responsive ace-save-state">
		<script type="text/javascript">
			try{ace.settings.loadState('sidebar')}catch(e){}
		</script>
		<div class="sidebar-shortcuts" id="sidebar-shortcuts">
			<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
				<button class="btn btn-success">
					<i class="ace-icon fa fa-signal"></i>
				</button>
				<button class="btn btn-info">
					<i class="ace-icon fa fa-pencil"></i>
				</button>
				<button class="btn btn-warning">
					<i class="ace-icon fa fa-users"></i>
				</button>
				<button class="btn btn-danger">
					<i class="ace-icon fa fa-cogs"></i>
				</button>
			</div>
			<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
				<span class="btn btn-success"></span>
				<span class="btn btn-info"></span>
				<span class="btn btn-warning"></span>
				<span class="btn btn-danger"></span>
			</div>
		</div>
		<ul class="nav nav-list">
			<li class="">
				<a href="<?php echo base_url();?>admin">
					<i class="menu-icon fa fa-home"></i>
					<span class="menu-text"> Beranda </span>
				</a>
				<b class="arrow"></b>
			</li>
            <li class="">
                <a href="<?php echo base_url();?>admin/berita">
                    <i class="menu-icon fa fa-newspaper-o"></i>
                    <span class="menu-text"> Berita </span>
                </a>
            </li>
            <li class="">
    			<a href="<?php echo base_url();?>admin/agenda">
    				<i class="menu-icon fa fa-calendar"></i>
    				<span class="menu-text"> Agenda </span>
    				<b class="arrow"></b>
    			</a>
    		</li>
    		<li class="active open">
    			<a href="<?php echo base_url();?>admin/guru">
    				<i class="menu-icon fa fa-id-card"></i>
    				<span class="menu-text"> Guru </span>
    			</a>
    			<b class="arrow"></b>
    		</li>
			<li class="">
				<a href="<?php echo base_url();?>admin/kolom_guru">
					<i class="menu-icon fa fa-archive"></i>
					<span class="menu-text">Kolom Guru</span>
				</a>
			</li>
            <li class="">
    			<a href="<?php echo base_url();?>admin/pengumuman">
    				<i class="menu-icon fa fa-bell"></i>
    				<span class="menu-text"> Pengumuman </span>
    			</a>
    			<b class="arrow"></b>
    		</li>
    		<li class="">
    			<a href="<?php echo base_url();?>admin/download">
    				<i class="menu-icon fa fa-download"></i>
    				<span class="menu-text"> Download </span>
    			</a>
    			<b class="arrow"></b>
    		</li>
        </ul>
		<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
			<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
		</div>
	</div>

	<div class="main-content">
		<div class="main-content-inner">
			<div class="breadcrumbs ace-save-state" id="breadcrumbs">
				<ul class="breadcrumb normal">
					<li>
						<i class="ace-icon fa fa-home home-icon"></i>
						<a href="<?php echo base_url();?>admin">Home</a>
					</li>
					<li class="active">
						<i class="ace-icon fa fa-id-card home-icon"></i>
						Guru
					</li>
				</ul>
			</div>
			<div class="page-content">
				<a href="<?php echo base_url();?>admin/tambahGuru" class="btn btn-info btn-fixed-bottom-right z-top"><i class="fa fa-plus fa-2x" aria-hidden="true"></i></a>
				<div class="row">
					<?php foreach($guru as $g){ ?>
					<div class="col-sm-6 col-lg-4">
						<div class="box-border">
							<img class="img-responsive imgZoom" width="100%" src="<?php echo base_url();?>assets/img/foto-guru/<?php echo $g['gambar']; ?>" alt="<?php echo $g['nama_guru']; ?>"/>
							<div class="d-flex justify-content-center">
								<button type="button" data-panel="<?php echo $g['id']; ?>" class="btn btn-info btn-block show">
									<i class="fa fa-info fa-2x"></i>
								</button>
								<a href="<?php echo base_url();?>admin/editGuru?i=<?php echo $g['id']; ?>">
									<button type="button" class="btn btn-primary">
										<i class="fa fa-edit fa-2x"></i>
									</button>
								</a>
								<button type="button" class="btn btn-danger remove" href="<?php echo base_url();?>admin/deleteGuru?i=<?php echo $g['id']; ?>">
									<i class="fa fa-trash fa-2x"></i>
								</button>
							</div>

							<div class="card-reveal" id="<?php echo $g['id']; ?>">
								<i data-panel="<?php echo $g['id']; ?>" class="fa fa-close close"></i>
								<ul>
									<li>NIP<br>
										<?php echo $g['nip']; ?></li>
									<li>Nama<br>
										<?php echo $g['nama_guru']; ?></li>
									<li>Mata Pelajaran<br>
										<?php echo $g['deskripsi_guru']; ?></li>
									<li>Jabatan<br>
										<?php echo $g['jabatan_guru']; ?></li>
									<li>E-mail<br>
										<?php echo $g['email']; ?></li>
									<li>No HP<br>
										<?php echo $g['no_hp']; ?></li>
								</ul>
							</div>
						</div>
					</div>
					<?php } ?>
				</div>
				<div class="d-flex justify-content-center">
					<?php echo $this->pagination->create_links(); ?>
				</div>
			</div>
		</div>
	</div>
