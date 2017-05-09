<body>
    <table>
        <form action="<?php echo base_url()."CRUD/create/".$table ?>" method="post">
        <?php
            if($table=="data_kelas"){    
        ?>
            <tr>
                <td>Grade</td>
                <td><input type="text" name="grade" required></td>
            </tr>
            <tr>
                <td>Nama Kelas</td>
                <td><input type="text" name="nama_kelas" required></td>
            </tr>
            <tr>
                <td>Kuota</td>
                <td><input type="text" name="kuota" placeholder="Kosongkan = 35"></td>
            </tr>
        <?php
            }else if($table=="data_siswa"){
        ?>
            <tr>
                <td>NIS</td>
                <td><input type="number" name="nis" required></td>
            </tr>
            <tr>
                <td>Nama Siswa</td>
                <td><input type="text" name="nama" required ></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>
                    <select name="jenis_kelamin">
                        <option value="Laki-Laki">Laki-Laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td><input type="date" name="tgl_lahir" required></td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td><input type="text" name="tempat_lahir"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="textarea" name="alamat"></td>
            </tr>
            <tr>
                <td>Kelas</td>
                <?php
                foreach($kelas as $k){
                ?>
                <td>
                    <select name="kelas">
                        <option value="<?php echo $k->id_kelas ?>"><?php echo $k->grade."-".$k->nama_kelas ?></option>
                    </select>
                </td>
                <?php
                }
                ?>
            </tr>
        <?php
            }else if($table=='mata_pelajaran'){
        ?>
            <tr>
                <td>Mata Pelajaran</td>
                <td><input type="text" name="mata_pelajaran" required></td>
            </tr>
                
        <?php
            }else if($table=="data_nilai"){
        ?>
            <tr>
                <td>Nama Siswa</td>
                <td>
                    <select name="nis">
                <?php
                
                foreach($siswa as $s){
                ?>
                
                        <option value="<?php echo $s->nis ?>"><?php echo $s->nama_siswa.'('.$s->grade.'-'.$s->nama_kelas.')' ?></option>
                <?php
                }
                ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Mata Pelajaran</td>
                <td>
                    <select name="mata_pelajaran">
                <?php
                foreach($mapel as $m){
                ?>
                        <option value="<?php echo $m->id_mapel ?>"><?php echo $m->mata_pelajaran ?></option>
                <?php
                }
                ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Jenis Nilai</td>
                <td><input type="text" name="jenis_nilai"></td>
            </tr>
            <tr>
                <td>Nilai</td>
                <td><input type="number" name="nilai"></td>
            </tr>
        <?php
            }
        ?>
            
            <tr>
                <td colspan="2"><button type="submit">Tambah</button></td>
            </tr>
        </form>
    </table>
</body>