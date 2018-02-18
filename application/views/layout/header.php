<body>
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
