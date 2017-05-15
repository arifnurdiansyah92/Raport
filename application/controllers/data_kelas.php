<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Data_kelas extends CI_Controller{
        public function index(){
            redirect('data_kelas/data/');
        }
        public function data(){
            $data['title']="Data Kelas";
            $data['table']="data_kelas";
            $data['resource']=$this->m_crud->get("data_kelas")->result();
            $this->load->view("header",$data);
            $this->load->view("data",$data);
            $this->load->view("footer");
        }
        public function create(){
            $data['title']="Tambah Data";
            $data['table']='data_kelas';
            $this->load->view("header",$data);
            $this->load->view("input_data",$data); 
            $this->load->view("footer");
        }
        public function edit($id_kelas){
            $data['kolom']='id_kelas';
            $data['id']=$id_kelas;
            $data['kelas']=$this->m_crud->get('data_kelas','')->result(); 
            $data['title']="Edit Data";
            $data['table']='data_kelas';
            $where=array(
                    $data['kolom']=>$data['id']
            );
            $data['resource']=$this->m_crud->get('data_kelas',$where)->result();
            $this->load->view("header",$data);
            $this->load->view("edit_data",$data); 
            $this->load->view("footer");
        }
    }

?>