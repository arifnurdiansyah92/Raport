<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Data_nilai extends CI_Controller{
        public function index(){
            redirect('data_nilai/data/');
        }
        public function data(){
            $data['title']="Data Nilai";
            $data['table']="data_nilai";
            $data['resource']=$this->m_crud->get("data_nilai")->result();
            $this->load->view("header",$data);
            $this->load->view("data",$data);
            $this->load->view("footer");
        }
        public function create(){
            $data['title']="Tambah Data";
            $data['table']='data_nilai';
            $data['mapel']=$this->m_crud->get('mata_pelajaran')->result();
            $data['siswa']=$this->m_crud->get('data_siswa')->result();
            $this->load->view("header",$data);
            $this->load->view("input_data",$data); 
            $this->load->view("footer");
        }
        public function edit($id){
            $data['kolom']='id_nilai';
            $data['id']=$id;
            $data['kelas']=$this->m_crud->get('data_kelas')->result(); 
            $data['mapel']=$this->m_crud->get('mata_pelajaran')->result();
            $data['title']="Edit Data";
            $data['table']='data_nilai';
            $where=array(
                    $data['kolom']=>$data['id']
            );
            $data['resource']=$this->m_crud->get('data_nilai',$where)->result();
            $this->load->view("header",$data);
            $this->load->view("edit_data",$data); 
            $this->load->view("footer");
        }
    }

?>