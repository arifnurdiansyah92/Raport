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
        </style>
    </head>
    <body>
        <h1 align="center">AN RAPORT</h1>
        <p>Nama : <?php echo $nama.'('.$nis.')' ?></p>
        <p>Kelas : <?php echo $kelas ?></p>
        <table>
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
    </body>
</html>