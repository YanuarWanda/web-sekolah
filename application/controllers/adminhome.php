<?php defined('BASEPATH') OR exit('No direct script access allowed');
Class AdminHome extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        	$this->load->model("modelweb");
    }
    
    function index(){
    	$value = array();
			if($data = $this->modelweb->lihat_agenda()){
				$value['record'] = $data;
			}
        $this->load->view('admin/adminhome',$value);
    }
}