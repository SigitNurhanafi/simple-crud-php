<!DOCTYPE html>
<html>
    <head>
        <title> Ubah Matakuliah </title>
    </head>
    <body>
        <center>
            <div id="judul">Ubah Mata Kuliah</div>
        </center>
        <hr>
        <?php
          // include "koneksi.php";
          $link = koneksi_db();
          $kd_mk = $_GET['id'];
          $sql  = "SELECT * FROM t_mata_kuliah WHERE kd_mk='$kd_mk' ";
          $res  = mysqli_query($link, $sql);
          $data = mysqli_fetch_row($res);
        ?>
        <form enctype="multipart/form-data" action="proses_ubah_mata_kuliah.php" method="post">
            <table width="auto">
                <tr align="left">
                    <th width="117" scope="row">
                        <label>Kode M.K</label>
                    </th>
                    <td width="14"><label> : </label></td>
                    <td width="145">
                        <input type="text" name="kd_mk" class="textbox" value='<?php echo $data[0]; ?>'>
                    </td>
                </tr>
                <tr>
                    <th align="left"> <label> Nama M.K </label></th>
                    <th align="left"> <label>:</label> </th>
                    <th align="left"> <input type="text" name="nama_mk" class="textbox" value='<?php echo $data[1]; ?>' required ></th>
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
