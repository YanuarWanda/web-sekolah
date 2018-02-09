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
				<ul class="breadcrumb">
					<li>
						<i class="ace-icon fa fa-home home-icon"></i>
						<a href="<?php echo base_url();?>admin">Home</a>
					</li>
					<li class="active">
						<i class="ace-icon fa fa-calendar home-icon"></i>
						Agenda
					</li>
				</ul>
			</div>
			<div class="page-content">
				<div class="row">
					<div class="col-xs-12">
						<div class="row">
							&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
							<button class="btn btn-success" data-target="#tambah-agenda" data-toggle="modal"><i class="fa fa-plus"></i> Tambah Agenda</button>
							<div id="tambah-agenda" class="modal" role="dialog">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header no-padding table-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h3 class="text-center">Tambah Agenda</h3>
										</div>
										<div class="modal-body no-padding">
											<form action="<?php echo base_url(); ?>admin/tambah_agenda" method="POST" >
												<input class="form-control" type="text" name="judul" placeholder="Judul Agenda">
												<input class="form-control" type="date" name="tanggal">
												<textarea name="isi"></textarea>
										</div>

										<div class="modal-footer no-margin-top">
											<button class="btn btn-sm btn-danger pull-left" data-dismiss="modal">
												<i class="ace-icon fa fa-times"></i>Close
											</button>
											<button id="submit" class="btn btn-sm btn-primary pull-right">
												<i class="fa fa-plus"></i>Tambah

											</button>
											</form>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xs-12">
							<br>
								<table class="table table-bordered table-hover">
									<thead>
										<tr>
											<th class="detail-col">Rincian</th>
											<th class="center">Judul Agenda</th>
											<th class="center">Tanggal</th>
											<th class="center">Aksi</th>
										</tr>
									</thead>

									<tbody>
										<tr>
											<?php
											 	foreach ($record as $value) {
											 ?>
											 <td class="center">
												<div class="action-buttons">
													<a href="#" class="green bigger-140 show-details-btn" title="Rincian">
														<i class="ace-icon fa fa-angle-double-down"></i>
														<span class="sr-only">Rincian</span>
													</a>
												</div>
											</td>

											<td><?php echo $value->judul_agenda; ?></td>
											<td><?php echo $value->tanggal_agenda; ?></td>
											<td class="center">
												<div class="hidden-sm hidden-xs btn-group center">
													<button class="btn btn-xs btn-info" title="Ubah">
														<i class="ace-icon fa fa-pencil bigger-120"></i>
													</button>

													<button class="btn btn-xs btn-danger" title="Hapus">
														<i class="ace-icon fa fa-trash-o bigger-120"></i>
													</button>
												</div>
											</td>
										</tr>

										<tr class="detail-row">
											<td colspan="8">
												<div class="table-detail">
													<div class="row">
														<div class="col-xs-16 col-sm-12">
															<div class="space visible-xs"></div>
															<div>
																<?php echo $value->isi_agenda; ?>
															</div>
														</div>
													</div>
												</div>
											</td>
										</tr>
										<?php } ?>
									</tbody>
								</table>
							</div>
						</div>

						<div class="hr hr-18 dotted hr-double"></div>
						<div class="row">
							<div class="col-xs-12">
								<h3 class="header smaller lighter blue">Data Table</h3>
								<div class="clearfix">
									<div class="pull-right tableTools-container"></div>
								</div>
								<div class="table-header">
									Agenda
								</div>
								<div>
									<table id="dynamic-table" class="table table-striped table-bordered table-hover">
										<thead>
											<tr>
												<th class="center">Judul Agenda</th>
												<th class="center">Rincian</th>
												<th class="center" colspan="">Tanggal</th>
												<th class="center">Aksi</th>
											</tr>
										</thead>

										<tbody>

										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="footer">
		<div class="footer-inner">
			<div class="footer-content">
				<span class="bigger-120">
					&copy; Copyright Tim 7 @ SMKN 11 Bandung. All Rights Reserved. 2017-2018.
				</span>
				&nbsp; &nbsp;
				<span class="action-buttons">
				</span>
			</div>
		</div>
	</div>

	<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
		<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
	</a>
</div>
