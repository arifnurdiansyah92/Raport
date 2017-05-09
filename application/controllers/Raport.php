<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Raport extends CI_Controller{
        public function index(){
            redirect('raport/data/data_siswa');
        }
        public function data($table){
        
            $data['title']="Data";
            $data['table']=$table;
            $data['resource']=$this->m_crud->get($table)->result();
            $this->load->view("header",$data);
            $this->load->view("data",$data);
            $this->load->view("footer");
        }
        //Fungsi CRUD TAMPILAN
        public function create($table){
            $data['title']="Tambah Data";
            $data['table']=$table;
            $data['siswa']=$this->m_crud->get('data_siswa')->result();
            $data['kelas']=$this->m_crud->get('data_kelas')->result();
            $data['mapel']=$this->m_crud->get('mata_pelajaran')->result();
            $this->load->view("header",$data);
            $this->load->view("input_data",$data); 
            $this->load->view("footer");
        }
        public function edit($table){
            $data['kolom']=$this->uri->segment(4);
            $data['id']=$this->uri->segment(5);
            $data['kelas']=$this->m_crud->get('data_kelas')->result();
            $data['mapel']=$this->m_crud->get('mata_pelajaran')->result();      
            $data['title']="Edit Data";
            $data['table']=$table;
            $kolom=$this->uri->segment(4);
            $id=$this->uri->segment(5);
            $where=array(
                    $kolom=>$id
            );
            $data['resource']=$this->m_crud->get($table,$where)->result();
            $this->load->view("header",$data);
            $this->load->view("edit_data",$data); 
            $this->load->view("footer");
        }

        function cetakpdf($id_nilai) {
            $where=array(
                'data_nilai.id_nilai'=>$id_nilai
            );
            $data['siswa']=$this->m_crud->get('data_nilai',$where)->result();
            $data['data']=$this->m_crud->get("data_siswa")->result();
            $this->load->view('laporanpdf',$data);
        }
    }

?>