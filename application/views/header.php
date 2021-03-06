<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $title ?></title>
        <link href="<?php echo base_url()."assets/css/bootstrap.min.css" ?>" rel="stylesheet">
        <link href="<?php echo base_url()."assets/css/style.css" ?>" rel="stylesheet">
        <link href="<?php echo base_url()."assets/css/select2.min.css" ?>" rel="stylesheet">
        <link href="<?php echo base_url()."assets/css/font-awesome.min.css" ?>" rel="stylesheet">
        <script src="<?php echo base_url()."assets/js/jquery-3.1.1.min.js" ?>"></script>
        <script src="<?php echo base_url()."assets/js/bootstrap.min.js" ?>"></script>
        <script src="<?php echo base_url()."assets/js/select2.min.js" ?>"></script>
        <script src="<?php echo base_url()."assets/js/tinymce/tinymce.min.js" ?>"></script>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
              <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <a class="navbar-brand brand-text" href="<?php echo base_url() ?>">AN Raport</a>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url()."data_siswa/data" ?>">Data Siswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url()."data_kelas/data/" ?>">Data Kelas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url()."mata_pelajaran/data/" ?>">Data Mata Pelajaran</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url()."data_nilai/data/" ?>">Data Nilai</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url()."pdf/data/" ?>">Data PDF</a>
                    </li>
                    
                </ul>
              </div>
            </nav>
        </header>
    