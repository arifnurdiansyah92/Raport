<!DOCTYPE html>
<html>
<head>
    <title>Nilai Siswa</title>
</head>
<body>
    <center>
        <h1>Sertifikat Nilai</h1>
        <hr> 
        <br>
        <?php foreach($resource as $s){ ?>
        <h2>Nama : <?php echo $s->nama_siswa ?></h2>
        <h2>Kelas : <?php echo $s->grade.'-'.$s->nama_kelas ?></h2>
        <h2>Mata Pelajaran : <?php echo $s->mata_pelajaran ?></h2>
        <h2>Jenis Nilai : <?php echo $s->jenis_nilai ?></h2>
        <h2>Nilai : <?php echo $s->nilai ?></h2>
        <?php
        }
        ?>
    </center>
</body>
</html>