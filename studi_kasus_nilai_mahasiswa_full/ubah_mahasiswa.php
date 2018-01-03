<!DOCTYPE html>
<html>
    <head>
        <title> Ubah Mahasiswa </title>
    </head>
    <body>
        <center>
            <div id="judul">Ubah Mahasiswa</div>
        </center>
        <hr>
        <?php
          // include "koneksi.php";
          $link = koneksi_db();
          $nim = $_GET['id'];
          $sql  = "SELECT * FROM t_mahasiswa WHERE nim='$nim' ";
          $res  = mysqli_query($link, $sql);
          $data = mysqli_fetch_row($res);
        ?>
        <form enctype="multipart/form-data" action="proses_ubah_mahasiswa.php" method="post">
            <table width="auto">
                <tr align="left">
                    <th width="117" scope="row" align="left">
                        <label>NIM</label>
                    </th>
                    <td width="14"><label> : </label></td>
                    <td width="145">
                        <input type="text" name="nim" class="textbox" value='<?php echo $data[0]; ?>'>
                    </td>
                </tr>
                <tr>
                    <th align="left"><label> Nama </label></th>
                    <th align="left"><label>:</label> </th>
                    <th align="left"><input type="text" name="nama" class="textbox" value='<?php echo $data[1]; ?>' required ></th>
                </tr>
                <tr>
                    <th align="left"><label> TTL</label></th>
                    <th align="left"><label>:</label> </th>
                    <th align="left"><input type="text" name="ttl" class="textbox" value='<?php echo $data[2]; ?>' required ></th>
                </tr>
                <tr>
                    <th align="left"><label> Tgl_Lahir </label></th>
                    <th align="left"><label>:</label> </th>
                    <th align="left"><input type="date" name="tgl_lahir" class="textbox" value='<?php echo $data[3]; ?>' required ></th>
                </tr>
                <tr>
                    <th align="left"><label> Alamat </label></th>
                    <th align="left"><label>:</label> </th>
                    <th align="left"><textarea type="text" class="textbox" name="alamat" required > <?php echo $data[4]; ?> </textarea></th>
                </tr>
                <tr>
                    <th align="left"><label> Foto </label></th>
                    <th align="left"><label>:</label> </th>
                    <th align="left"><input type="text" name="gambar" class="textbox" value='<?php echo $data[5]; ?>' readonly></th>
                </tr>
                <!-- <th colspan="3"></th> -->
                <tr>
                    <th colspan="3" align="center">
                        <input type="submit" value="Update" class="tombol">
                        <input type="reset" value="Reset" class="tombol">
                    </th>
                </tr>
            </table>
        </form>
    </body>
</html>
