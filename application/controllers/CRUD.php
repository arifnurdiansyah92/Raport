<?php
    class CRUD extends CI_Controller{
        public function create($table){
            if($table=="data_kelas"){
                $data=array(
                    'id_kelas'=>'',
                    'grade'=>$this->input->post('grade'),
                    'nama_kelas'=>$this->input->post('nama_kelas')
                );
                
            } 
            else if($table=="data_siswa"){
                $data=array(
                    'nis'=>$this->input->post('nis'),
                    'nama_siswa'=>$this->input->post('nama'),
                    'jenis_kelamin'=>$this->input->post('jenis_kelamin'),
                    'tgl_lahir'=>$this->input->post('tgl_lahir'),
                    'tempat_lahir'=>$this->input->post('tempat_lahir'),
                    'alamat'=>$this->input->post('alamat'),
                    'kelas'=>$this->input->post('kelas')
                );
            }
            else if($table=="mata_pelajaran"){
                $data=array(
                    'id_mapel'=>'',
                    'mata_pelajaran'=>$this->input->post('mata_pelajaran')
                );
            }
            else if($table=="data_nilai"){
                $data=array(
                    'id_nilai'=>'',
                    'nis'=>$this->input->post('nis'),
                    'mata_pelajaran'=>$this->input->post('mata_pelajaran'),
                    'jenis_nilai'=>$this->input->post('jenis_nilai'),
                    'nilai'=>$this->input->post('nilai')
                );
            }
            $this->m_crud->create($table,$data);
            redirect("Raport/data/".$table);
        }
        public function edit($table){
            $kolom=$this->uri->segment(4);
                $id=$this->uri->segment(5);
                $where=array(
                    $kolom=>$id
                );
            if($table=="data_kelas"){
                $data=array(
                    'grade'=>$this->input->post('grade'),
                    'nama_kelas'=>$this->input->post('nama_kelas'),
                    'kuota'=>$this->input->post('kuota')
                );
            }
            else if($table=="data_siswa"){
                $data=array(
                    'nama_siswa'=>$this->input->post('nama'),
                    'jenis_kelamin'=>$this->input->post('jenis_kelamin'),
                    'tgl_lahir'=>$this->input->post('tgl_lahir'),
                    'tempat_lahir'=>$this->input->post('tempat_lahir'),
                    'alamat'=>$this->input->post('alamat'),
                    'kelas'=>$this->input->post('kelas')
                );
            }else if($table=="mata_pelajaran"){
                $data=array(
                    'mata_pelajaran'=>$this->input->post('mata_pelajaran')
                );
            }else if($table=="data_nilai"){
                $data=array(
                    'jenis_nilai'=>$this->input->post('jenis_nilai'),
                    'mata_pelajaran'=>$this->input->post('mata_pelajaran'),
                    'nilai'=>$this->input->post('nilai')
                );
            }
            $this->m_crud->update_data($where,$data,$table);
            redirect("Raport/data/".$table);

        }
        public function hapus($table){
            $kolom=$this->uri->segment(4);
            $id=$this->uri->segment(5);
            $where=array(
                $kolom=>$id
            );
            $this->m_crud->hapus($table,$where);
            redirect("Raport/data/".$table);
        }
    }

?>