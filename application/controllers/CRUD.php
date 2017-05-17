<?php
    class CRUD extends CI_Controller{
        public function create($table){
            if($table=="data_kelas"){
                $data=array(
                    'id_kelas'=>'',
                    'grade'=>$this->input->post('grade'),
                    'nama_kelas'=>$this->input->post('nama_kelas'),
                    'kuota'=>$this->input->post('kuota'),
                    'tahun_masuk'=>$this->input->post('tahun_masuk'),
                    'tahun_keluar'=>$this->input->post('tahun_keluar')
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
            }else if($table=="pdf"){
                if($this->input->post('type')=='header'){
                    $kode=$this->m_crud->kode($table,"kode_pdf","H");
                }
                else{
                    $kode=$this->m_crud->kode($table,"kode_pdf","F");
                }
                $data=array(
                    'kode_pdf' =>$kode,
                    'nama'=>$this->input->post('nama'),
                    'type' =>$this->input->post('type'),
                    'isi' =>$this->input->post('isi')
                );
            }
            $this->m_crud->create($table,$data);
            redirect($table."/data/");
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
                    'kuota'=>$this->input->post('kuota'),
                    'tahun_masuk'=>$this->input->post('tahun_masuk'),
                    'tahun_keluar'=>$this->input->post('tahun_keluar')
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
            }else if($table=="pdf"){
                $data=array(
                    'nama'=>$this->input->post('nama'),
                    'isi'=>$this->input->post('isi')
                );
            }
            $this->m_crud->update_data($where,$data,$table);
            redirect($table."/data/");

        }
        public function hapus($table){
            $kolom=$this->uri->segment(4);
            $id=$this->uri->segment(5);
            $where=array(
                $kolom=>$id
            );
            $this->m_crud->hapus($table,$where);
            redirect($table."/data/");
        }
        
    }

?>