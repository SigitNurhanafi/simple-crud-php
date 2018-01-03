<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title> Cari Mahasiswa </title>
    </head>
    <body>
        <div id="judul">Tampil Cari Mahasiswa</div>
        <a href="menu_utama.php?menu=mahasiswa&action=tampil" class="tombol" style="color:white; float:right; margin-top:10px;"> Kembali </a>
        <hr>
        <div id="isi_content">
        <?php
            // include "koneksi.php";

              $link = koneksi_db();
              $sql  = "SELECT * FROM t_mahasiswa WHERE nama LIKE '%".$_POST['txt_cari']."%'";
              $res  = mysqli_query($link, $sql);
              $banyak_data = mysqli_num_rows($res);

        ?>
                      </label>Ditemukan = <?php echo $banyak_data; ?></label>
                          <center>
                          <h1>Mahasiswa Yang Dicari</h1>
                          <table id="tabel-tampil">
                            <thead>
                              <th>No</th>
                              <th>NIM</th>
                              <th>Nama</th>
                              <th>Ttl</th>
                              <th>tgl_Lahir</th>
                              <th>Alamat</th>
                              <th>Foto</th>
                              <th colspan="2">Option</th>
                            </thead>
                            <tbody>
                              <?php
                                  $no = 0;
                                  // if(!isset($_POST['nama_mk'])){
                                  while( $data = mysqli_fetch_array($res) )
                                  {
                                    $no++;
                              ?>
                                <tr>
                                    <td> <?php echo "$no"; ?> </td>
                                    <td><?php echo "$data[nim]";?></td>
                                    <td><?php echo "$data[nama]";?></td>
                                    <td><?php echo "$data[ttl]";?></td>
                                    <td><?php echo "$data[tgl_lahir]";?></td>
                                    <td><?php echo "$data[alamat]";?></td>
                                    <td><?php echo "$data[foto]";?></td>
                                    <td><a href="?menu=mahasiswa&action=ubah&id=<?php echo $data['nim'];?>"><img src="img/ubah.gif"></a></td>
                                    <td><a href="proses_hapus_mahasiswa.php?id=<?php echo $data['nim'];?>"><img src="img/hapus.gif"></a></td>
                                </tr>
                    <?php

                  }
                    ?>
                    </tbody>
                </table>
        </div>
    </body>
</html>
