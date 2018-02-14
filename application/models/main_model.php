<?php
    class Main_model extends CI_Model{
        public function getDataTentangRPL(){
            return $this->db->get('tentang_rpl')->row();
        }

        public function getDataBerita($limit = FALSE, $offset = FALSE, $where = FALSE, $link = FALSE){
			if($where){
				$this->db->where('id', $where);
			}
            if($link){
                $this->db->where('link', $link);
            }
			if($limit){
				$this->db->limit($limit, $offset);
			}
			$this->db->order_by('berita.id', 'DESC');
			return $this->db->get('berita')->result_array();
		}

        public function getDataGuru($limit = FALSE, $offset = FALSE, $where = FALSE, $jabatan = FALSE){
            if($where){
                $this->db->where('id', $where);
            }
            if($jabatan){
                $this->db->where('jabatan_guru !=', 'Guru Tetap');
            }
            if($limit){
                $this->db->limit($limit, $offset);
            }
            $this->db->order_by('id', 'DESC');
            return $this->db->get('guru')->result_array();
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
    }
