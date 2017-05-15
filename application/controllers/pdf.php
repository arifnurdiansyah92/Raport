<?php
    class PDF extends CI_Controller{
        
        public function index(){
            
            
        }
        public function create(){
            $data['title']='AN RAPORT - PDF Konfigurasi';
            $data['table']='pdf';
            $data['resource']=$this->m_crud->get("pdf")->result();
            $this->load->view('header',$data);
            $this->load->view('input_data',$data);
            $this->load->view('footer',$data);
        }
        
        
    }

?>