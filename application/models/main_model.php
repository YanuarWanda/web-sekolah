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
                $this->db->where('id_guru', $where);
            }
            if($jabatan){
                $this->db->where('jabatan_guru', 'Ketua Kompetensi Keahlian RPL');
            }
            if($nama){
                $this->db->like('nama_guru', $nama);
            }
            if($limit){
                $this->db->limit($limit, $offset);
            }
            $this->db->order_by('id_guru', 'DESC');
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
        public function getDataKolomGuru($limit = FALSE, $offset = FALSE, $where = FALSE, $search = FALSE, $link = FALSE, $join = FALSE){
			if($where){
				$this->db->where('id_kolom', $where);
			}
			if($limit){
				$this->db->limit($limit, $offset);
			}
            if($search){
                $this->db->like('judul', $search);
            }
            if($link){
                $this->db->where('link', $link);
            }
            if($join){
                $this->db->join('guru', 'kolom_guru.karya = guru.id_guru', 'left');
            }
			$this->db->order_by('kolom_guru.id_kolom', 'DESC');
			return $this->db->get('kolom_guru')->result_array();
		}
        public function kirimPesan($data){
            $this->db->insert('buku_tamu', $data);
        }
    }
