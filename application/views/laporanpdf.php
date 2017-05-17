<form action="<?php echo base_url()."pdf/generatePDF/data_nilai/".$kolom."/".$id ?>" method="post">
        <table>
            <tr>
                <td>Daftar Header</td>
                <td>
                <select name="kode_pdf_header" class="autocomplete">
                    <option disabled selected>Pilih Header</option>
                    <?php
                    foreach($header as $head){
                    ?>
                    <option value="<?php echo $head->kode_pdf ?>"><?php echo '('.$head->kode_pdf.') '.$head->nama ?></option>
                    <?php
                    }
                    ?>
                </select>
                </td>
            </tr>
            <tr>
                <td>Daftar Footer</td>
                <td>
                <select name="kode_pdf_footer" class="autocomplete">
                    <option disabled selected>Pilih Footer</option>
                    <?php
                    foreach($footer as $foot){
                    ?>
                    <option value="<?php echo $foot->kode_pdf ?>"><?php echo '('.$foot->kode_pdf.') '.$foot->nama ?></option>
                    <?php
                    }
                    ?>
                </select>
                </td>
            </tr>
            <tr>
                <td colspan="2"><button type="submit">Submit</button></td>
            </tr>
        </table>