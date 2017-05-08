<?php
    class M_Crud extends CI_Model{
        public function get($table,$where=""){
            if($table=="data_siswa"){
                $this->db->select('*');
                $this->db->from('data_siswa');
                if($where!=""){
                $this->db->where($where);
                }
                $this->db->join('data_kelas', 'data_kelas.id_kelas = data_siswa.kelas');

                $query = $this->db->get();
                return $query;
            }else if($table=="data_nilai"){
                $this->db->select('*');
                $this->db->from('data_nilai');
                if($where!=""){
                $this->db->where($where);
                }
                $this->db->join('data_siswa', 'data_siswa.nis = data_nilai.nis');
                $this->db->join('mata_pelajaran', 'mata_pelajaran.id_mapel = data_nilai.mata_pelajaran');
                $this->db->join('data_kelas', 'data_kelas.id_kelas = data_siswa.kelas');

                $query = $this->db->get();
                return $query;
            }else{
            return $this->db->get($table,$where);
            }
        }
        public function create($table,$data){
            $this->db->insert($table,$data);
        }
        public function hapus($table,$where){
            $this->db->delete($table,$where);
        }
        public function update_data($where,$data,$table){
            $this->db->where($where);
            $this->db->update($table,$data);
        }
    }
?>