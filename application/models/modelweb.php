<?php defined('BASEPATH') OR exit('No direct script access allowed');
	class ModelWeb extends CI_Model{
		/* Get Data */
		function getDataAkun($email){
			$this->db->where('email', $email);
			return $this->db->get('users')->result_array();
		}

		function lihat_agenda(){
			return $this->db->get('agenda')->result();
		}

		public function getDataTentangRPL(){
			return $this->db->get('tentang_rpl')->row();
		}

		public function getDataBerita($limit = FALSE, $offset = FALSE, $where = FALSE){
			if($where){
				$this->db->where('id', $where);
			}
			if($limit){
				$this->db->limit($limit, $offset);
			}
			$this->db->order_by('berita.id', 'DESC');
			return $this->db->get('berita')->result_array();
		}

		public function getDataGuru($limit = FALSE, $offset = FALSE, $where = FALSE){
			if($where){
				$this->db->where('id', $where);
			}
			if($limit){
				$this->db->limit($limit, $offset);
			}
			$this->db->order_by('guru.id', 'DESC');
			return $this->db->get('guru')->result_array();
		}

		public function getDataAgenda($limit = FALSE, $offset = FALSE, $where = FALSE){
			if($where){
				$this->db->where('id', $where);
			}
			if($limit){
				$this->db->limit($limit, $offset);
			}
			$this->db->order_by('agenda.id', 'DESC');
			return $this->db->get('agenda')->result_array();
		}

		public function getDataPengumuman($limit = FALSE, $offset = FALSE, $where = FALSE){
			if($where){
				$this->db->where('id', $where);
			}
			if($limit){
				$this->db->limit($limit, $offset);
			}
			$this->db->order_by('pengumuman.id', 'DESC');
			return $this->db->get('pengumuman')->result_array();
		}

		public function getDataDownload($limit = FALSE, $offset = FALSE, $where = FALSE){
			if($where){
				$this->db->where('id', $where);
			}
			if($limit){
				$this->db->limit($limit, $offset);
			}
			$this->db->order_by('file_download.id', 'DESC');
			return $this->db->get('file_download')->result_array();
		}
		/* .Get Data */

		/* Update Data */
		public function updateData($tabel, $data, $where){
			$this->db->update($tabel, $data, $where);
		}
		/* .Update Data */

		/* Tambah Data */
		public function tambahAgenda($data){
			$this->db->insert('agenda', $data);
		}

		public function tambahBerita($data){
			$this->db->insert('berita', $data);
		}

		public function tambahGuru($data){
			$this->db->insert('guru', $data);
		}

		public function tambahPengumuman($data){
			$this->db->insert('pengumuman', $data);
		}

		public function tambahDownload($data){
			$this->db->insert('file_download', $data);
		}
		/* .Tambah Data */

		/* Hapus Data */
		public function hapusData($tabel, $where){
			$this->db->delete($tabel, $where);
		}
		function hapus_agenda(){
			$this->db->where('id', $this->uri->segment(3));
			$this->db->delete('agenda');
		}
		/* .Hapus Data */
	}
?>
