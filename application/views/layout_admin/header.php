<body class="no-skin">
    <!-- Preview Image Modal -->
    <div class="modal" id="myModal">
    	<span class="close">&times;</span>
    	<img class="modal-content" id="img01" src="..."/>
    	<div id="caption"></div>
    </div>

    <div id="loading-screen">
        <div id="loader"></div>
    </div>

    <?php echo $this->session->flashdata('pesan'); ?>

    <div id="navbar" class="navbar navbar-default ace-save-state">
    	<div class="navbar-container ace-save-state" id="navbar-container">
    		<div class="navbar-header pull-left">
    			<a href="<?php echo base_url();?>admin" class="navbar-brand">
    				<small>
    					<i class="fa fa-home"></i>Admin Web RPL
    				</small>
    			</a>
    		</div>
    		<div class="navbar-buttons navbar-header pull-right" role="navigation">
    			<ul class="nav ace-nav">
    				<li class="light-blue dropdown-modal">
    					<a data-toggle="dropdown" href="#" class="dropdown-toggle">
    						<img class="nav-user-photo" src="<?php echo base_url()?>assets/img/avatar2.png" alt="Avatar" />
    						<span class="user-info">
    							<small>Welcome,</small><?php echo $this->session->userdata('name'); ?>
    						</span>
    						<i class="ace-icon fa fa-caret-down"></i>
    					</a>
    					<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
    						<li>
    							<a href="<?php echo base_url();?>admin/signout">
    								<i class="ace-icon fa fa-power-off"></i>Logout
    							</a>
    						</li>
    					</ul>
    				</li>
    			</ul>
    		</div>
    	</div>
    </div>
