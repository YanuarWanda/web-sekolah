<?php defined('BASEPATH') OR exit('No direct script access allowed'); 
	class ModelWeb extends CI_Model{

		function lihat_agenda(){
			return $this->db->get('agenda')->result();
		}
	}
?>