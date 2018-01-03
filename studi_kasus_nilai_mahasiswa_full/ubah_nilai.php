<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title> Menu - Mahasiswa </title>
    </head>
    <body>
        <?php
            function tampilNIM()
            {
                $link = koneksi_db();
                $sql = "select nim from t_mahasiswa";
                $res = mysqli_query($link, $sql);
                while( $data = mysqli_fetch_array($res) )
                {
                    echo "<option value=$data[nim] selected> $data[nim] </option>";
                }
                mysqli_close($link);
            }

            function tampilMatkul()
            {
                $link = koneksi_db();
                $sql = "select * from t_mata_kuliah";
                $res = mysqli_query($link, $sql);
                while( $data = mysqli_fetch_array($res) )
                {
                    // echo "Nama $data[nama]"
                    echo "<option value='$data[kd_mk]' selected> $data[nama_mk] </option>";
                }
                mysqli_close($link);
            }
         ?>
        <center>
            <div id="judul">Ubah Data Mahasiswa</div>
        </center>
        <hr>
        <?php
            if( isset($_GET['id']) )
            {
                  $kd_nilai = $_GET['id'];
                  $link = koneksi_db();
                  $sql  = "SELECT * FROM t_nilai WHERE kd_nilai='$kd_nilai' ";
                  $res  = mysqli_query($link, $sql);
                  $data = mysqli_fetch_array($res);
        ?>
                <form enctype="multipart/form-data" action="proses_ubah_nilai.php" method="post">
                    <table width="auto" border="0" id="table-tambah">
            			<tr align="left">
            				<th width="117" scope="row">
            					<label> Kode Nilai </label>
            				</th>
            				<td width="14">
            					<label> : </label>
            				</td>
            				<td width="145">
            					<input type="text" class="textbox" name="kd_nilai" value="<?php echo $data['kd_nilai']; ?>" readonly>
            				</td>
            			</tr>
                  <tr align="left">
            				<th width="117" scope="row">
            					<label> NIM </label>
            				</th>
            				<td width="14">
            					<label> : </label>
            				</td>
            				<td width="145">
            					<select name="nim" id="nim">
            						<?php
                                        tampilNIM();
            						?>
            					</select>
            				</td>
            			</tr>
            			<tr align="left">
            				<th width="117" scope="row">
            					<label> Mata Kuliah </label>
            				</th>
            				<td width="14">
            					<label> : </label>
            				</td>
            				<td width="145">
            					<select name="matkul" id="matkul">
            						<?php
                                        tampilMatkul();
            						?>
            					</select>
            				</td>
            			</tr>
                        <tr align="left">
            				<th width="117" scope="row">
            					<label> Kehadiran </label>
            				</th>
            				<td width="14">
            					<label> : </label>
            				</td>
            				<td width="145">
            					<input type="number" class="textbox" name="kehadiran" min="1" max="100" value="<?php echo $data['kehadiran']; ?>" >
            				</td>
            			</tr>
                        <tr align="left">
            				<th width="117" scope="row">
            					<label> Tugas 1 </label>
            				</th>
            				<td width="14">
            					<label> : </label>
            				</td>
            				<td width="145">
            					<input type="number" class="textbox" name="tugas1" min="1" max="100" value="<?php echo $data['tugas_1']; ?>" >
            				</td>
            			</tr>
                        <tr align="left">
            				<th width="117" scope="row">
            					<label> Tugas 2 </label>
            				</th>
            				<td width="14">
            					<label> : </label>
            				</td>
            				<td width="145">
            					<input type="number" class="textbox" name="tugas2" min="1" max="100" value="<?php echo $data['tugas_2']; ?>" >
            				</td>
            			</tr>
                        <tr align="left">
            				<th width="117" scope="row">
            					<label> Tugas 3 </label>
            				</th>
            				<td width="14">
            					<label> : </label>
            				</td>
            				<td width="145">
            					<input type="number" class="textbox" name="tugas3" min="1" max="100" value="<?php echo $data['tugas_3']; ?>" >
            				</td>
            			</tr>
                        <tr align="left">
            				<th width="117" scope="row">
            					<label> UTS </label>
            				</th>
            				<td width="14">
            					<label> : </label>
            				</td>
            				<td width="145">
            					<input type="number" class="textbox" name="uts" min="1" max="100" value="<?php echo $data['uts']; ?>" >
            				</td>
            			</tr>
                        <tr align="left">
            				<th width="117" scope="row">
            					<label> UAS </label>
            				</th>
            				<td width="14">
            					<label> : </label>
            				</td>
            				<td width="145">
            					<input type="number" class="textbox" name="uas" min="1" max="100" value="<?php echo $data['uas']; ?>" >
            				</td>
            			</tr>
                        <tr>
            				<th colspan="3" align="center">
            					<input type="submit" value="Submit" class="tombol" name="submit">
            					<input type="reset" value="Reset" class="tombol">
            				</th>
            			</tr>


            		</table>
                </form>
        <?php
            }else{
                header("Location: http://localhost/ATOL/studi_kasus_nilai_mahasiswa/manu_utama.php?menu=nilai&action=tampil");
            }
         ?>
    </body>
</html>
