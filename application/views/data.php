<body>
    <table class="table table-hover bg-warning">
    <?php
        if($table=="data_kelas"){
            $kolom=5;
    ?>
        <thead>
            <th>ID_Kelas</th>
            <th>GRADE</th>
            <th>Nama Kelas</th>
            <th colspan=2>Aksi</th>
        </thead>
        <?php 
            foreach($resource as $k){
        ?>
        <tr>
            <td><?php echo $k->id_kelas ?></td>
            <td><?php echo $k->grade ?></td>
            <td><?php echo $k->nama_kelas ?></td>
            <td><a href="<?php echo base_url()."Raport/edit/data_kelas/id_kelas/".$k->id_kelas ?>">Edit</a></td>
            <td><a href="<?php echo base_url()."CRUD/hapus/data_kelas/id_kelas/".$k->id_kelas ?>">Hapus</a></td>
        </tr>
        <?php
            }
        }else if($table=="data_siswa"){
            $kolom=8;
    ?>
        <thead>
            <th>NIS</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Jenis Kelamin</th>
            <th>Tempat, Tgl Lahir</th>
            <th>Alamat</th>
            <th colspan="2">Aksi</th>
        </thead>
     <?php 
            foreach($resource as $s){
        ?>
        <tr>
            <td><?php echo $s->nis ?></td>
            <td><?php echo $s->nama_siswa ?></td>
            <td><?php echo $s->grade.'-'.$s->nama_kelas ?></td>
            <td><?php echo $s->jenis_kelamin ?></td>
            <td><?php echo $s->tempat_lahir.', '.$s->tgl_lahir ?></td>
            <td><?php echo $s->alamat ?></td>
            <td><a href="<?php echo base_url()."Raport/edit/data_siswa/nis/".$s->nis ?>">Edit</a></td>
            <td><a href="<?php echo base_url()."CRUD/hapus/data_siswa/nis/".$s->nis ?>">Hapus</a></td>
        </tr>
        <?php
            }
        }else if($table=="mata_pelajaran"){
            $kolom=4;
        ?>
        <thead>
            <th>Id Mapel</th>
            <th>Mata Pelajaran</th>
            <th colspan="2">Aksi</th>
        </thead>
        <?php
            foreach($resource as $m){
        ?>
        <tr>
            <td><?php echo $m->id_mapel ?></td>
            <td><?php echo $m->mata_pelajaran ?></td>
            <td><a href="<?php echo base_url()."Raport/edit/mata_pelajaran/id_mapel/".$m->id_mapel ?>">Edit</a></td>
            <td><a href="<?php echo base_url()."CRUD/hapus/mata_pelajaran/id_mapel/".$m->id_mapel ?>">Hapus</a></td>
        </tr>
        <?php
            }
        }else if($table=="data_nilai"){
            $kolom=9;
        ?>
        <thead>
            <th>NIS</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Mata Pelajaran</th>
            <th>Jenis Nilai</th>
            <th>Nilai</th>
            <th colspan="3">Aksi</th>
        </thead>
        <?php
            foreach($resource as $s){
        ?>
        <tr>
            <td><?php echo $s->nis ?></td>
            <td><?php echo $s->nama_siswa ?></td>
            <td><?php echo $s->grade.'-'.$s->nama_kelas ?></td>
            <td><?php echo $s->mata_pelajaran ?></td>
            <td><?php echo $s->jenis_nilai ?></td>
            <td><?php echo $s->nilai ?></td>
            <td><a href="<?php echo base_url()."Raport/edit/data_nilai/id_nilai/".$s->id_nilai ?>">Edit</a></td>
            <td><a href="<?php echo base_url()."CRUD/hapus/data_nilai/id_nilai/".$s->id_nilai ?>">Hapus</a></td>
            <td><a href="<?php echo base_url()."Raport/cetakpdf/".$s->id_nilai ?>">PDF</a></td>
        </tr>
        <?php
            }      
        }
    ?>
        <tr>
            <td colspan="<?php echo $kolom ?>" align="right"><a href="<?php echo base_url().'/raport/create/'.$table ?>"><button class="btn btn-default">Tambah Data</button></a></td>
        </tr>
    </table>