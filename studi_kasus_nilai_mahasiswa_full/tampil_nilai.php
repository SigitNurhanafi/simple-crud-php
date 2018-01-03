<!DOCTYPE html>
<html>
<head>
	<title> Tampil Mahasiswa </title>
</head>
<body>
	<div id="judul"> Tampil Data Nilai Mahasiswa </div>

	<!-- Membuat cari  -->
	<div id="cari">
		<form method="post" action="?menu=nilai&action=cari">
			<span class="cari-matkul"> Cari NIM Mahasiswa </span>
			<input type="text" class="textbox" name="txtcari" pattern="[0-9]{8}" required>
			<input type="submit" class="cari" value="Cari">
		</form>
	</div>

	<hr>

	<div id="isi_content">
	<?php

		$link = koneksi_db();
		$sql = "SELECT * FROM t_nilai NATURAL JOIN t_mahasiswa NATURAL JOIN t_mata_kuliah ORDER BY kd_nilai";
		$res = mysqli_query($link, $sql);
	?>
		<center>
			<table id="tabel-tampil">
				 <thead>
				 	<tr>
				 		<th> No </th>
						<th> Kode Nilai </th>
				 		<th> NIM </th>
				 		<th> Mata Kuliah </th>
                        <th> Kehadiran </th>
						<th> Tugas 1 </th>
						<th> Tugas 2 </th>
						<th> Tugas 3 </th>
						<th> UTS </th>
						<th> UAS </th>
						<th> Nilai Akhir </th>
						<th> Index </th>
				 		<th colspan="2"> Aksi </th>
				 	</tr>
				 </thead>
				 <tbody>
				 <?php
				 	$no = 0;
				 	while($data=mysqli_fetch_array($res))
				 	{
				 		$no++;
                        // echo "<pre>";
                        // print_r($data);
                        // echo "</pre>";
                        // die();
				 ?>
					 	<tr>
					 		<td> <?php echo "$no"; ?> </td>
					 		<td> <?php echo "$data[kd_nilai]"; ?> </td>
					 		<td> <?php echo "$data[nim]"; ?> </td>
                            <td> <?php echo "$data[nama_mk]"; ?> </td>
                            <td> <?php echo "$data[kehadiran]"; ?> </td>
                            <td> <?php echo "$data[tugas_1]"; ?> </td>
							<td> <?php echo "$data[tugas_2]"; ?> </td>
							<td> <?php echo "$data[tugas_3]"; ?> </td>
							<td> <?php echo "$data[uts]"; ?> </td>
							<td> <?php echo "$data[uas]"; ?> </td>
							<td> <?php echo number_format($data['nilai_akhir'] ,2,'.',''); ?> </td>
							<td> <?php echo "$data[indeks]"; ?> </td>

					 		<td>
					 			<a href="?menu=nilai&action=ubah&id=<?php echo "$data[kd_nilai]";?>">
					 			<img src="img/ubah.gif"> </a>
					 		</td>
					 		<td>
					 			<a href="proses_hapus_nilai.php?id=<?php echo "$data[kd_nilai]";?>">
					 			<img src="img/hapus.gif"> </a>
					 		</td>
					 	</tr>
				 <?php
				 	}
				 ?>
				 </tbody>
			</table>
		</center>
	</div>

</body>
</html>
