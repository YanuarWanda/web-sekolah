<?php defined('BASEPATH') OR exit('No direct script access allowed');
	class ModelWeb extends CI_Model{

		function lihat_agenda(){
			return $this->db->get('agenda')->result();
		}

		function tambah_agenda($data){
			$this->db->insert('agenda',$data);
		}

		function getDataAkun($email){
			$this->db->where('email', $email);
			return $this->db->get('users')->result_array();
		}
	}
?>
