<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Mata_pelajaran extends CI_Controller{
        public function index(){
            redirect('mata_pelajaran/data/');
        }
        public function data(){
            $data['title']="Mata Pelajaran";
            $data['table']="mata_pelajaran";
            $data['resource']=$this->m_crud->get("mata_pelajaran")->result();
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
        public function edit($id_mapel){
            $data['kolom']='id_mapel';
            $data['id']=$id_mapel;
            $data['title']="Edit Data";
            $data['table']='mata_pelajaran';
            $where=array(
                    $data['kolom']=>$data['id']
            );
            $data['resource']=$this->m_crud->get('mata_pelajaran',$where)->result();
            $this->load->view("header",$data);
            $this->load->view("edit_data",$data); 
            $this->load->view("footer");
        }
    }

?>