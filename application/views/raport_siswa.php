<html>
    <head>
        <title><?php echo $title ?></title>
        <style>
            table, tr ,td{
                border: 1px solid black;
                border-collapse: collapse;
                text-align: center;
                width: 100%;
            }
            footer{
                bottom: 0px;
                position: absolute;
              
            }
            .head{
                margin: 0px;
            }
        </style>
    </head>
    <body>
        <?php 
            foreach($header as $head){
                echo "<div class='head'>".$head->isi."</div>";
            }foreach($siswa as $s){
        ?>
        <p>Nama : <?php echo $s->nama_siswa.'('.$s->nis.')' ?></p>
        <p>Kelas : <?php echo $s->grade.'-'.$s->nama_kelas ?></p>
        <table>
        <?php
            break;
            }
        ?>
            <tr>
                <td>No</td>
                <td>Mata Pelajaran</td>
                <td>Jenis Nilai</td>
                <td>Nilai</td>
            </tr>
            <?php 
                $i=1;
                foreach($siswa as $s){
            ?>
            <tr>
                <td><?php echo $i ?></td>
                <td><?php echo $s->mata_pelajaran ?></td>
                <td><?php echo $s->jenis_nilai ?></td>
                <td><?php echo $s->nilai ?></td>
            </tr>
        <?php
        $i++;
        }
            ?>
        </table>
        
            <footer>
            <?php 
                
                foreach($footer as $foot){
                echo $foot->isi;
            }
            ?>
        </footer>
    </body>
</html>