<div id="judul">Tampil Mata Kuliah</div>
<div id="cari">
            <form action="?menu=mata_kuliah&action=cari" method="post" >
                <span >Cari Mata kuliah </span>
                <input type="text" class="textbox" name="txt_cari" required>
                <input type="submit" value="Cari" class="tombol" name="tombol">
              </from>
            </div>
            <hr>

<div id="isi_content">
  <?php
    // include "koneksi.php";
    $link=koneksi_db();
    $sql="SELECT * FROM t_mata_kuliah";
    $res=mysqli_query($link,$sql);
   ?>
    <center>
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
            $no=0;
            while ($data=mysqli_fetch_array($res))
            {
              $no++;
         ?>
        <tr>
          <td><?php echo "$no"; ?></td>
          <td><?php echo "$data[kd_mk]";?></td>
          <td><?php echo "$data[nama_mk]";?></td>

          <td>
              <a href="?menu=mata_kuliah&action=ubah&id=<?php echo "$data[kd_mk]";?>">
              <img src="img/ubah.gif"</a></td>
          <td>
            <a href="proses_hapus_mata_kuliah.php?id=<?php echo "$data[kd_mk]";?>">
              <img src="img/hapus.gif"</a></td>
        </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>
