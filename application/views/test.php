<?php echo $this->session->flashdata('hasil'); ?>
<table>
    <tr><th>NIM</th><th>NAMA</th><th>ID JURUSAN</th><th>ALAMAT</th><th></th></tr>
    <?php
    foreach ($akta as $m){
        echo "<tr>
              <td>$m->nik</td>
              <td>$m->nm_kpl_keluarga</td>
              <td>$m->nama_ibu</td>
              <td>$m->nm_lengkap</td>
              <td>".anchor('mahasiswa/edit/'.$m->nik,'Edit')."
                  ".anchor('mahasiswa/delete/'.$m->nik,'Delete')."</td>
              </tr>";
    }
    ?>
</table>