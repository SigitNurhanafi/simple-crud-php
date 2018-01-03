<body bgcolor="#65a9d7">
	<?php
		include "koneksi.php";

		if(!empty($_POST['nim']))
		{
			$name = $_FILES['gambar']['name'];
		  $asal = $_FILES['gambar']['tmp_name'];
			$name = $_POST['nim'].".jpg";
		  move_uploaded_file($asal, 'img/foto_mhs/'. $name);
			$nim = $_POST['nim'];
			$nama = $_POST['nama'];
			$ttl = $_POST['ttl'];
			$tgl_lahir = $_POST['tgl_lahir'];
			$alamat = $_POST['alamat'];
			$foto = $_POST['nim'].".jpg";

			$link = koneksi_db();
			$sql = "insert into t_mahasiswa(nim, nama, ttl, tgl_lahir, alamat, foto) values ('$nim', '$nama', '$ttl', '$tgl_lahir', '$alamat', '$foto');";
			$res = mysqli_query($link, $sql);

			if($res)
			{
				echo "<center><h1> Sukses Menambah Data $nim</h1></br>";
				echo "Untuk melihatnya silahkan klik <br>
				<a href='menu_utama.php?menu=mahasiswa&action=tampil'>Link ini</a></center>";
			}else{
				echo "<center><h1>Gagal Menambah Data</h1></center>";
				echo "Error :".mysqli_error();
				echo "<br>Kembali<br> <a href='menu_utama.php?menu=mahasiswa&action=tampil'>Link ini</a></center>";
			}
		}
	?>
</body>
