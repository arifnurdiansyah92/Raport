<body>
    <table>
        <?php 
            if($table=="data_kelas"){
                $kolom='id_kelas';
            }
        ?>
        <form action="<?php echo base_url()."CRUD/edit/".$table."/".$kolom."/".$id ?>" method="post">
          
        <?php
            if($table=="data_kelas"){    
                
                foreach($resource as $k){
        ?>  
            <input type="hidden" value="<?php echo $k->id_kelas ?>">
            <tr>
                <td>Grade</td>
                <td><input type="text" name="grade" required value="<?php echo $k->grade ?>"></td>
            </tr>
            <tr>
                <td>Nama Kelas</td>
                <td><input type="text" name="nama_kelas" required value="<?php echo $k->nama_kelas ?>"></td>
            </tr>
            <tr>
                <td>Kuota</td>
                <td><input type="text" name="kuota" required value="<?php echo $k->kuota ?>"></td>
            </tr>
            
        <?php
                }
            }else if($table=="data_siswa"){
                foreach($resource as $s){
                    if($s->jenis_kelamin=="Laki-Laki"){
                        $ket_l="selected";
                        $ket_b="";
                    }
                    else{
                        $ket_b="selected";
                        $ket_l="";
                    }
        ?>
            <input type="hidden" value="<?php echo $s->nis ?>">
            <tr>
                <td>Nama Siswa</td>
                <td><input type="text" name="nama" value="<?php echo $s->nama_siswa ?>" required></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>
                    <select name="jenis_kelamin">
                        <option value="Laki-Laki" <?php echo $ket_l ?>>Laki-Laki</option>
                        <option value="Perempuan" <?php echo $ket_b ?>>Perempuan</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td><input type="date" name="tgl_lahir" value="<?php echo $s->tgl_lahir ?>" required></td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td><input type="text" name="tempat_lahir" value="<?php echo $s->tempat_lahir ?>" required></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="textarea" name="alamat" value="<?php echo $s->alamat ?>" required></td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td>
                    <select name="kelas">
                <?php
                }   
                foreach($kelas as $k){
                ?>
                        <option value="<?php echo $k->id_kelas ?>"><?php echo $k->grade."-".$k->nama_kelas ?></option>
        <?php
                    }
        ?>
                    </select>
                </td>
            </tr>
        <?php
            }else if($table=="mata_pelajaran"){
                foreach($resource as $m){        
        ?>
            <tr>
                <td>Mata Pelajaran</td>
                <td><input type="text" name="mata_pelajaran" required value="<?php echo $m->mata_pelajaran ?>"></td>
            </tr>
        <?php
                }
            }else if($table=="data_nilai"){
                foreach($resource as $n){
        ?>
            <tr>
                <td>Nama</td>
                <td><input type="text" value="<?php echo $n->nama_siswa ?>" disabled></td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td><input type="text" value="<?php echo $n->grade.'-'.$n->nama_kelas ?>" disabled></td>
            </tr>
           <tr>
                <td>Mata Pelajaran</td>
            
                <td>
                    <select name="mata_pelajaran">
                 <?php   
                foreach($mapel as $m){
                ?>
                        <option value="<?php echo $n->id_mapel ?>"><?php echo $m->mata_pelajaran ?></option>
                <?php
                    }
                ?>
                    </select>
                </td>
        
            </tr>
            <tr>
                <td>Jenis Nilai</td>
                <td><input type="text" name="jenis_nilai" value="<?php echo $n->jenis_nilai ?>" required></td>
            </tr>
            <tr>
                <td>Nilai</td>
                <td><input type="number" name="nilai" value="<?php echo $n->nilai ?>" required></td>
            </tr>
            
        <?php
                }
            }
        ?>
            <tr>
                <td colspan="2"><button type="submit">Update</button></td>
            </tr>
        </form>
    </table>
</body>