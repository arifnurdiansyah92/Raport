<body>
    <table class="table table-hover bg-warning">
    <?php
        if($table=="data_kelas"){
            $kolom=4;
    ?>
        <thead>
            <th>Nama Kelas</th>
            <th>Kuota</th>
            <th colspan=2>Aksi</th>
        </thead>
        <?php 
            foreach($resource as $k){
        ?>
        <tr>
            <td><?php echo $k->grade.'-'.$k->nama_kelas ?></td>
            <td><?php echo $k->kuota ?></td>
            <td><a href="<?php echo base_url()."data_kelas/edit/".$k->id_kelas ?>">Edit</a></td>
            <td><a href="<?php echo base_url()."CRUD/hapus/data_kelas/id_kelas/".$k->id_kelas ?>">Hapus</a></td>
        </tr>
        <?php
            }
        }else if($table=="data_siswa"){
            $kolom=9;
    ?>
        <thead>
            <th>NIS</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Jenis Kelamin</th>
            <th>Tempat, Tgl Lahir</th>
            <th>Alamat</th>
            <th colspan="3">Aksi</th>
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
            <td><a href="<?php echo base_url()."data_siswa/edit/".$s->nis ?>">Edit</a></td>
            <td><a href="<?php echo base_url()."CRUD/hapus/data_siswa/nis/".$s->nis ?>">Hapus</a></td>
            <td><a href="<?php echo base_url()."Raport/pdf/data_nilai/nis/".$s->nis ?>">PDF</a></td>
        </tr>
        <?php
            }
        }else if($table=="mata_pelajaran"){
            $kolom=3;
        ?>
        <thead>
            <th>Mata Pelajaran</th>
            <th colspan="2">Aksi</th>
        </thead>
        <?php
            foreach($resource as $m){
        ?>
        <tr>
            <td><?php echo $m->mata_pelajaran ?></td>
            <td><a href="<?php echo base_url()."mata_pelajaran/edit/".$m->id_mapel ?>">Edit</a></td>
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
            <td><a href="<?php echo base_url()."data_nilai/edit/".$s->id_nilai ?>">Edit</a></td>
            <td><a href="<?php echo base_url()."CRUD/hapus/data_nilai/id_nilai/".$s->id_nilai ?>">Hapus</a></td>
            <td><a href="<?php echo base_url()."Raport/cetakpdf/".$s->id_nilai ?>">PDF</a></td>
        </tr>
        <?php
            }      
        }
        $kol=$kolom/2;
    ?>
        <tr>
            <td colspan="<?php echo $kol ?>" align="left"><a href="<?php echo base_url().$table.'/create/' ?>"><button class="btn btn-default">Tambah Data</button></a></td>
            <td colspan="<?php echo $kol+1 ?>" align="right"><a href="<?php echo base_url().'excel/import/'.$table ?>"><button class="btn btn-default">Import</button></a></td>
        </tr>
    </table>