<div id="judul">Tampil Mahasiswa</div>
<div id="cari">
            <form action="?menu=mahasiswa&action=cari" method="post" >
                <span >Cari Mahasiswa </span>
                <input type="text" class="textbox" name="txt_cari" required>
                <input type="submit" value="Cari" class="tombol" name="tombol">
              </from>
            </div>
            <hr>

<div id="isi_content">
  <?php
    // include "koneksi.php";
    $link=koneksi_db();
    $sql="SELECT * FROM t_mahasiswa";
    $res=mysqli_query($link,$sql);
   ?>
    <center>
    <table id="tabel-tampil">
      <thead>
        <tr>
          <th>No</th>
          <th>NIM</th>
          <th>Nama</th>
          <th>Ttl</th>
          <th>tgl_Lahir</th>
          <th>Alamat</th>
          <th>Foto</th>
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
          <td><?php echo "$data[nim]";?></td>
          <td><?php echo "$data[nama]";?></td>
          <td><?php echo "$data[ttl]";?></td>
          <td><?php echo "$data[tgl_lahir]";?></td>
          <td><?php echo "$data[alamat]";?></td>
          <td><?php echo "$data[foto]";?></td>

          <td>
              <a href="?menu=mahasiswa&action=ubah&id=<?php echo "$data[nim]";?>">
              <img src="img/ubah.gif"</a></td>
          <td>
            <a href="proses_hapus_mahasiswa.php?id=<?php echo "$data[nim]";?>">
              <img src="img/hapus.gif"</a></td>
        </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>
