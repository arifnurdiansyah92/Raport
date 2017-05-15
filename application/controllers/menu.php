<?php
    class Menu extends CI_Controller{
        public function index(){
            $data['title']="Selamat Datang di AN RAPORT";
            $this->load->view('header',$data);
            $this->load->view('menu');
            $this->load->view('footer',$data);
        }
    }
?>