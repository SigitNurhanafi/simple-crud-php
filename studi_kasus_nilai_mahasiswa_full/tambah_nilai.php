<!DOCTYPE html>
<html>
<head>
	<title> Tambah Mata Kuliah </title>
</head>
<body bgcolor="#65a9d7">
	<center>
		<div id="judul"> Tambah Data Nilai </div>
	</center>
	<hr>
	<form action="proses_tambah_nilai.php" method="post" enctype="multipart/form-data">
		<table width="auto" border="0" id="table-tambah">
			<tr align="left">
				<th width="117" scope="row">
					<label> Kode Nilai </label>
				</th>
				<td width="14">
					<label> : </label>
				</td>
				<td width="145">
					<input type="text" class="textbox" name="kd_nilai">
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
							$link = koneksi_db();
							$sql = "select * from t_mahasiswa";
							$res = mysqli_query($link, $sql);
							while( $data = mysqli_fetch_array($res) )
							{
								// echo "Nama $data[nama]"
								echo "<option value='$data[nim]'> $data[nim] </option>";
							}
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
							$link = koneksi_db();
							$sql = "select * from t_mata_kuliah";
							$res = mysqli_query($link, $sql);
							while( $data = mysqli_fetch_array($res) )
							{
								// echo "Nama $data[nama]"
								echo "<option value='$data[kd_mk]'> $data[nama_mk] </option>";
							}
						?>
					</select>
				</td>
			</tr>
			<!-- <span id="hidden" style="display:hidden"> </span>
			<script>
				var nim_Node = document.getElementById('nim');
				var span_Node = document.getElementById('hidden');
				function getNIM(){
					span_Node.innerHTML = nim_Node.value;
				}
			</script> -->
			<!-- <tr align="left">
				<th> <label> Nama  </label></th>
				<td> <label> : </label> </td>
				<td>

					<input type="text" class="textbox" name="nama" required >
				</td>
			</tr> -->
			<tr align="left">
				<th> <label> Kehadiran </label></th>
				<td> <label> : </label> </td>
				<td>
					<input type="number" class="textbox" name="kehadiran" min="1" max="100" required>
					<span> % </span>
				</td>
			</tr>
			<tr align="left">
				<th> <label> Tugas 1 </label></th>
				<td> <label> : </label> </td>
				<td> <input type="number" class="textbox" name="tugas1" min="1" max="100" required> </td>
			</tr>
			<tr align="left">
				<th> <label> Tugas 2 </label></th>
				<td> <label> : </label> </td>
				<td> <input type="number" class="textbox" name="tugas2" min="1" max="100" required> </td>
			</tr>
			<tr align="left">
				<th> <label> Tugas 3 </label></th>
				<td> <label> : </label> </td>
				<td> <input type="number" class="textbox" name="tugas3" min="1" max="100" required> </td>
			</tr>
			<tr align="left">
				<th> <label> UTS </label></th>
				<td> <label> : </label> </td>
				<td> <input type="number" class="textbox" name="uts" min="1" max="100" required> </td>
			</tr>
			<tr align="left">
				<th> <label> UAS </label></th>
				<td> <label> : </label> </td>
				<td> <input type="number" class="textbox" name="uas" min="1" max="100" required> </td>
			</tr>
			<tr>
				<th colspan="3" align="center">
					<input type="submit" value="Submit" class="tombol" name="submit">
					<input type="reset" value="Reset" class="tombol">
				</th>
			</tr>
		</table>
	</form>
</body>
</html>
