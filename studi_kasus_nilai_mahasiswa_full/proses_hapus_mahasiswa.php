<body bgcolor="#65a9d7">
	<?php
		include "koneksi.php";
		if(isset($_GET['id']))
		{

      $nim = $_GET['id'];
			$link = koneksi_db();
			$sql = "delete from t_mahasiswa where nim='$nim';";
			$res = mysqli_query($link,$sql);
			$filename="img/foto_mhs/" .$nim. ".jpg";

			if($res)
			{
				unlink($filename);
				echo "<center><h1> Sukses Hapus Data dengan Nim $nim </h1></br>";
				echo "Untuk melihatnya silahkan klik <br>
				<a href='menu_utama.php?menu=mahasiswa&action=tampil'>Link ini</a></center>";
			}else{
				echo "<center><h1>Gagal Menghapus</h1></center>";
				echo "Error :".mysqli_error();
				echo "<br>Kembali<br> <a href='menu_utama.php?menu=mahasiswa&action=tampil'>Link ini</a></center>";
			}
		}

	?>
</body>
