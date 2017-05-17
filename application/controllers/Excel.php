<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Excel extends CI_Controller {
    public function upload($table){
        $fileName = time().$_FILES['file']['name'];
         
        $config['upload_path'] = './assets/'; //buat folder dengan nama assets di root folder
        $config['file_name'] = $fileName;
        $config['allowed_types'] = 'xls|xlsx|csv';
        $config['max_size'] = 10000;
         
        $this->load->library('upload');
        $this->upload->initialize($config);
         
        if(! $this->upload->do_upload('file') )
        $this->upload->display_errors();
             
        $media = $this->upload->data();
        $inputFileName = './assets/'.$media['file_name'];
         
        try {
                $inputFileType = IOFactory::identify($inputFileName);
                $objReader = IOFactory::createReader($inputFileType);
                $objPHPExcel = $objReader->load($inputFileName);
            } catch(Exception $e) {
                die('Error loading file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
            }
 
            $sheet = $objPHPExcel->getSheet(0);
            $highestRow = $sheet->getHighestRow();
            $highestColumn = $sheet->getHighestColumn();
             
            for ($row = 2; $row <= $highestRow; $row++){//  Read a row of data into an array                 
                $rowData = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row,NULL,TRUE,FALSE);
                                                 
                //Sesuaikan sama nama kolom tabel di database                                
                if($table=="data_kelas"){
                $data=array(
                    'id_kelas'=>$rowData[0][0],
                    'grade'=>$rowData[0][1],
                    'nama_kelas'=>$rowData[0][2],
                    'kuota'=>$rowData[0][3],
                    'tahun_masuk'=>$rowData[0][4],
                    'tahun_keluar'=>$rowData[0][5]
                );

                } 
                else if($table=="data_siswa"){
                    $array = explode("-",$rowData[0][2]);
                    $array2= explode("/",$rowData[0][7]);
                    $where = array(
                        'grade'=>$array[0],
                        'nama_kelas'=>$array[1],
                        'tahun_masuk'=>$array2[0],
                        'tahun_keluar'=>$array2[1]
                    );
                    $kelas=$this->m_crud->get("data_kelas",$where)->result();
                    foreach($kelas as $kel){
                        $id_kelas=$kel->id_kelas;
                    }
                    $data=array(
                        'nis'=>$rowData[0][0],
                        'nama_siswa'=>$rowData[0][1],
                        'jenis_kelamin'=>$rowData[0][3],
                        'tgl_lahir'=>$rowData[0][4],
                        'tempat_lahir'=>$rowData[0][5],
                        'alamat'=>$rowData[0][6],
                        'kelas'=>$id_kelas
                    );
                }
                else if($table=="mata_pelajaran"){
                    $data=array(
                        'id_mapel'=>rowData[0][1],
                        'mata_pelajaran'=>rowData[0][2]
                    );
                }
                else if($table=="data_nilai"){
                    $data=array(
                        'id_nilai'=>rowData[0][1],
                        'nis'=>rowData[0][2],
                        'mata_pelajaran'=>rowData[0][3],
                        'jenis_nilai'=>rowData[0][4],
                        'nilai'=>rowData[0][5]
                    );
                }
                 
                //sesuaikan nama dengan nama tabel
                $insert = $this->db->insert($table,$data);
                     
            }
        unlink($inputFileName);
        redirect($table.'/data');
    }
    public function import($table){
        $data['title']="Import Excel";
        $data['table']=$table;
        $this->load->view('header',$data);
        $this->load->view('import',$data);
        $this->load->view('footer',$data);
    }
}