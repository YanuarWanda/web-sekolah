<?php
    class Main_model extends CI_Model{
        public function getDataTentangRPL(){
            return $this->db->get('tentang_rpl')->row();
        }

        public function getDataBerita($limit = FALSE, $offset = FALSE, $where = FALSE, $link = FALSE, $judul = FALSE){
			if($where){
				$this->db->where('id', $where);
			}
            if($link){
                $this->db->where('link', $link);
            }
            if($judul){
                $this->db->like('judul_berita', $judul);
            }
			if($limit){
				$this->db->limit($limit, $offset);
			}
			$this->db->order_by('berita.id', 'DESC');
			return $this->db->get('berita')->result_array();
		}

        public function getDataGuru($limit = FALSE, $offset = FALSE, $where = FALSE, $jabatan = FALSE, $nama = FALSE){
            if($where){
                $this->db->where('id', $where);
            }
            if($jabatan){
                $this->db->where('jabatan_guru !=', 'Guru Tetap');
            }
            if($nama){
                $this->db->like('nama_guru', $nama);
            }
            if($limit){
                $this->db->limit($limit, $offset);
            }
            $this->db->order_by('id', 'DESC');
            return $this->db->get('guru')->result_array();
        }

        public function getDataPengumuman($limit = FALSE, $offset = FALSE, $where = FALSE, $judul = FALSE){
			if($where){
				$this->db->where('id', $where);
			}
			if($limit){
				$this->db->limit($limit, $offset);
			}
            if($judul){
                $this->db->like('judul_pengumuman', $judul);
            }
			$this->db->order_by('pengumuman.id', 'DESC');
			return $this->db->get('pengumuman')->result_array();
		}

        public function getDataAgenda($limit = FALSE, $offset = FALSE, $where = FALSE, $judul = FALSE){
            if($where){
                $this->db->where('id', $where);
            }
            if($limit){
                $this->db->limit($limit, $offset);
            }
            if($judul){
                $this->db->like('judul_agenda', $judul);
            }
            $this->db->order_by('agenda.id', 'DESC');
            return $this->db->get('agenda')->result_array();
        }
        public function getDataDownload($limit = FALSE, $offset = FALSE, $where = FALSE, $nama = FALSE){
			if($where){
				$this->db->where('id', $where);
			}
			if($limit){
				$this->db->limit($limit, $offset);
			}
            if($nama){
                $this->db->like('nama_file', $nama);
            }
			$this->db->order_by('file_download.id', 'DESC');
			return $this->db->get('file_download')->result_array();
		}
    }
