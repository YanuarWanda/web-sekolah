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
            <li class="active open">
    			<a href="<?php echo base_url();?>admin/agenda">
    				<i class="menu-icon fa fa-calendar"></i>
    				<span class="menu-text"> Agenda </span>
    				<b class="arrow"></b>
    			</a>
    		</li>
    		<li class="">
    			<a href="<?php echo base_url();?>admin/guru">
    				<i class="menu-icon fa fa-id-card"></i>
    				<span class="menu-text"> Guru </span>
    			</a>
    			<b class="arrow"></b>
    		</li>
            <li class="">
    			<a href="<?php echo base_url();?>admin/pengumuman">
    				<i class="menu-icon fa fa-bell"></i>
    				<span class="menu-text"> Pengumuman </span>
    			</a>
    			<b class="arrow"></b>
    		</li>
    		<li class="">
    			<a href="<?php echo base_url();?>admin/gallery">
    				<i class="menu-icon fa fa-picture-o"></i>
    				<span class="menu-text"> Gallery </span>
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
					<li>
						<i class="ace-icon fa fa-newspaper-o home-icon"></i>
						<a href="<?php echo base_url();?>admin/agenda">Agenda</a>
					</li>
                    <li class="active">
                        <i class="ace-icon fa fa-edit home-icon"></i>
                        Edit Agenda
                    </li>
				</ul>
			</div>
            <div class="page-content">
                <?php echo form_open_multipart('admin/updateAgenda?i='.$agenda['0']['id']); ?>
					<div class="form-group">
						<label for="judul">Judul Agenda</label>
						<input type="text" class="form-control" name="judul" value="<?php echo $agenda['0']['judul_agenda']; ?>"></input>
					</div>
					<div class="form-group">
		                <label for="tanggal">Tanggal Agenda</label>
		                <input type="text" name="tanggal" class="tanggal form-control" placeholder="dd/mm/yyyy" value="<?php echo $agenda['0']['tanggal_agenda']; ?>"/>
		            </div>
					<div class="form-group">
						<label for="agenda">Isi Agenda</label>
						<textarea id="isi_agenda" name="isi_agenda" class="form-control"><?php echo $agenda['0']['isi_agenda']; ?></textarea>
						<script>
							CKEDITOR.replace('isi_agenda');
						</script>
					</div>
					<button role="button" type="submit" class="btn btn-primary btn-block"><i class="fa fa-edit fa-2x"></i></button>
				</form>
            </div>
        </div>
    </div>
