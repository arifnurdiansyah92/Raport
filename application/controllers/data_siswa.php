<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Data_siswa extends CI_Controller{
        public function index(){
            redirect('data_siswa/data/');
        }
        public function data(){
            $data['title']="Data Siswa";
            $data['table']="data_siswa";
            $data['resource']=$this->m_crud->get("data_siswa")->result();
            $this->load->view("header",$data);
            $this->load->view("data",$data);
            $this->load->view("footer");
        }
        public function create(){
            $data['title']="Tambah Data";
            $data['table']='data_siswa';
            $data['kelas']=$this->m_crud->get('data_kelas')->result();
            $this->load->view("header",$data);
            $this->load->view("input_data",$data); 
            $this->load->view("footer");
        }
        public function edit($nis){
            $data['kolom']='nis';
            $data['id']=$nis;
            $data['kelas']=$this->m_crud->get('data_kelas','')->result(); 
            $data['title']="Edit Data";
            $data['table']='data_siswa';
            $where=array(
                    $data['kolom']=>$data['id']
            );
            $data['resource']=$this->m_crud->get('data_siswa',$where)->result();
            $this->load->view("header",$data);
            $this->load->view("edit_data",$data); 
            $this->load->view("footer");
        }
    }

?>