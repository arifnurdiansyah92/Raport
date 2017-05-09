 <?php
            $this->fpdf->AddPage('P','A4');
            $this->fpdf->setFont('Arial','B',20);
            //HEADER
            $this->fpdf->Cell(80);
            $this->fpdf->Cell(30,10,'LAPORAN NILAI SISWA',0,0,'C');
            $this->fpdf->Ln(20);
            //CONTENT
            $this->fpdf->SetFillColor(255,250,250);
            $this->fpdf->SetTextColor(0);
            $this->fpdf->SetFont('Arial','B','12');
            $this->fpdf->Cell(20, 5, 'NIS', 1, '0', 'C', TRUE);
            $this->fpdf->Cell(30, 5, 'NAMA', 1, '0', 'C', TRUE);
            $this->fpdf->Cell(65, 5, 'KELAS', 1, '0', 'C', TRUE);
            $this->fpdf->Cell(35, 5, 'Mapel', 1, '0', 'C', TRUE);
            $this->fpdf->Cell(20, 5, 'JENIS', 1, '0', 'C', TRUE);
            $this->fpdf->Cell(20, 5, 'NILAI', 1, '0', 'C', TRUE);  
            $this->fpdf->SetFont('Arial','','10');
            foreach($siswa as $s){
                $this->fpdf->Ln();
                $this->fpdf->Cell(20, 5, $s->nis, 1, '0', 'C', TRUE);
                $this->fpdf->Cell(30, 5, $s->nama_siswa, 1, '0', 'C', TRUE);
                $this->fpdf->Cell(65, 5, $s->grade.'-'.$s->nama_kelas, 1, '0', 'C', TRUE);
                $this->fpdf->Cell(35, 5, $s->mata_pelajaran, 1, '0', 'C', TRUE);
                $this->fpdf->Cell(20, 5, $s->jenis_nilai, 1, '0', 'C', TRUE);
                $this->fpdf->Cell(20, 5, $s->nilai, 1, '0', 'C', TRUE);
            }
            //FOOTER
            $this->fpdf->SetY(-25);
            $this->fpdf->SetFont('Arial','B',14);
            $this->fpdf->Cell(0,0,'AN RAPORT',0,0,'C');
            $this->fpdf->Output("LaporanSiswa","I");  
?>