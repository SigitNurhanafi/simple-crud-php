<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title> Cari Matakuliah </title>
    </head>
    <body>
        <div id="judul">Tampil Cari Mata Kuliah</div>
        <a href="menu_utama.php?menu=mata_kuliah&action=tampil" class="tombol" style="color:white; float:right; margin-top:10px;"> Kembali </a>
        <hr>
        <div id="isi_content">
        <?php
            // include "koneksi.php";

              $link = koneksi_db();
              $sql  = "SELECT * FROM t_mata_kuliah WHERE nama_mk LIKE '%".$_POST['txt_cari']."%'";
              $res  = mysqli_query($link, $sql);
              $banyak_data = mysqli_num_rows($res);

        ?>
                      </label>Ditemukan = <?php echo $banyak_data; ?></label>
                          <center>
                          <h1>Mata Kuliah Yang Dicari</h1>
                          <table id="tabel-tampil">
                            <thead>
                              <tr>
                                <th>No</th>
                                <th>Kode Mata Kuliah</th>
                                <th>Nama Mata Kuliah</th>
                                <th colspan="2">Option</th>
                              </tr>
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
                                    <td> <?php echo "$data[kd_mk];" ?> </td>
                                    <td> <?php echo "$data[nama_mk];" ?> </td>
                                    <td><a href="?menu=mata_kuliah&action=ubah&id=<?php echo $data['kd_mk'];?>"><img src="img/ubah.gif"></a></td>
                                    <td><a href="proses_hapus_mata_kuliah.php?id=<?php echo $data['kd_mk'];?>"><img src="img/hapus.gif"></a></td>
                                </tr>
                    <?php

                  }
                    ?>
                    </tbody>
                </table>
        </div>
    </body>
</html>
