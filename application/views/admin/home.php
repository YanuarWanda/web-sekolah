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
			<li class="active open">
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
					<li class="active">
						<i class="ace-icon fa fa-home home-icon"></i>
						Home
					</li>
				</ul>
			</div>
			<div class="page-content">
				<form method="POST" action="<?php echo base_url();?>admin/update_tentang">
					<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
			  			<div class="panel panel-default">
				    		<div class="panel-heading" role="tab" id="headingOne">
				      			<h4 class="panel-title">
				        			<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
					          			Visi
					        		</a>
					      		</h4>
					    	</div>
					    	<div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
					      		<div class="panel-body">
									<div class="form-group">
										<textarea id="visi" name="visi" class="form-control"><?php echo $tentang->visi; ?></textarea>
										<script>
											CKEDITOR.replace( 'visi' );
										</script>
									</div>
					      		</div>
					    	</div>
					  	</div>

					  	<div class="panel panel-default">
					    	<div class="panel-heading" role="tab" id="headingTwo">
					      		<h4 class="panel-title">
					        		<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
					          			Misi
				        			</a>
					      		</h4>
				    		</div>
					    	<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
						      	<div class="panel-body">
									<div clas="form-group">
										<textarea id="misi" name="misi" class="form-control"><?php echo $tentang->misi; ?></textarea>
										<script>
											CKEDITOR.replace( 'misi' );
										</script>
									</div>
						    	</div>
				    		</div>
					  	</div>

					  	<div class="panel panel-default">
					    	<div class="panel-heading" role="tab" id="headingThree">
					      		<h4 class="panel-title">
					        		<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
					          			Sejarah
				        			</a>
					      		</h4>
					    	</div>
					    	<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
					      		<div class="panel-body">
									<div clas="form-group">
										<textarea id="sejarah" name="sejarah" class="form-control"><?php echo $tentang->sejarah; ?></textarea>
										<script>
											CKEDITOR.replace( 'sejarah' );
										</script>
									</div>
					      		</div>
					    	</div>
					  	</div>

						<div class="panel panel-default">
					    	<div class="panel-heading" role="tab" id="headingFour">
					      		<h4 class="panel-title">
					        		<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
					          			Deskripsi
				        			</a>
					      		</h4>
					    	</div>
					    	<div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
					      		<div class="panel-body">
									<div clas="form-group">
										<textarea id="deskripsi" name="deskripsi" class="form-control"><?php echo $tentang->deskripsi; ?></textarea>
										<script>
											CKEDITOR.replace( 'deskripsi' );
										</script>
									</div>
					      		</div>
					    	</div>
					  	</div>
					  	<div class="panel panel-default">
					    	<div class="panel-heading" role="tab" id="headingFour">
					      		<h4 class="panel-title">
					        		<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
					          			Peluang Kerja
				        			</a>
					      		</h4>
					    	</div>
					    	<div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
					      		<div class="panel-body">
									<div clas="form-group">
										<textarea id="peluang_kerja" name="peluang_kerja" class="form-control"><?php echo $tentang->peluang_kerja; ?></textarea>
										<script>
											CKEDITOR.replace( 'peluang_kerja' );
										</script>
									</div>
					      		</div>
					    	</div>
					  	</div>
					</div>
					<div class="form-group">
						<label for="kurikulum">Kurikulum</label>
						<input type="text" name="kurikulum" class="form-control" placeholder="Isi dengan link embed dari google drive dalam bentuk pdf/word ." value="<?php echo $tentang->kurikulum; ?>" />
						<small class="text-red ml-2">*Kurikulum diisi dengan link embed dari file pdf/word yang telah di upload ke google drive. Tutorial cari sendiri. Akan ditambahkan nanti kalo keburu.</small>
					</div>
					<button type="submit" class="btn btn-primary btn-block"><i class="fa fa-edit fa-2x"></i></button>
				</form>
			</div>
		</div>
	</div>
