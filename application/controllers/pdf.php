<?php
    class PDF extends CI_Controller{
        
        public function index(){
            redirect("pdf/data");
        }
        public function data(){
            $data['title']="Data PDF";
            $data['table']="pdf";
            $data['resource']=$this->m_crud->get("pdf")->result();
            $this->load->view("header",$data);
            $this->load->view("data",$data);
            $this->load->view("footer");
        }
        public function create($table){
            if($table==""){
                redirect("pdf/konfigurasi");
            }
            $data['id']=$this->uri->segment(5);
            $data['kolom']=$this->uri->segment(4);
            $array=array(
                'data_siswa.'.$data['kolom']=>$data['id']
            );
            $get_nilai=$this->m_crud->get("data_nilai",$array)->num_rows();
            if($get_nilai>0){
            $data['title']='AN RAPORT - PDF Konfigurasi';
            $data['table']='pdf';
            $data['header']=$this->m_crud->get("pdf",array("type"=>"Header"))->result();
            $data['footer']=$this->m_crud->get("pdf",array("type"=>"footer"))->result();
            $this->load->view('header',$data);
            $this->load->view('laporanpdf',$data);
            $this->load->view('footer',$data);
            }
            else{
                redirect("data_siswa/data");
            }
        }
        public function konfigurasi(){
            $data['table']='pdf';
            $data['title']='AN RAPORT - PDF Konfigurasi';
            $this->load->view('header',$data);
            $this->load->view('input_data',$data);
            $this->load->view('footer',$data);
        }
        public function generatePDF(){
            $data['title']='Raport Siswa';
            $kolom=$this->uri->segment(4);
            $id=$this->uri->segment(5);
            $where=array(
                'data_siswa.'.$kolom=>$id
            );
            $header=array(
                'kode_pdf'=>$this->input->post('kode_pdf_header')
            );
            $footer=array(
                'kode_pdf'=>$this->input->post('kode_pdf_footer')
            );
            
            $data['header']=$this->m_crud->get('pdf',$header)->result();
            $data['footer']=$this->m_crud->get('pdf',$footer)->result();
            $data['siswa']=$this->m_crud->get('data_nilai',$where)->result();
            $filename='NILAI SISWA';
            $paper='A4';
            $orientation='potrait';
            $html = $this->load->view('raport_siswa',$data,TRUE);
            pdf_create($html,$filename,$paper,$orientation);
        }
         public function edit($kode_pdf){
            $data['kolom']='kode_pdf';
            $data['id']=$kode_pdf;
            $data['title']="Edit Data";
            $data['table']='pdf';
            $where=array(
                    $data['kolom']=>$data['id']
            );
            $data['resource']=$this->m_crud->get('pdf',$where)->result();
            $this->load->view("header",$data);
            $this->load->view("edit_data",$data); 
            $this->load->view("footer");
        }
        
    }

?>