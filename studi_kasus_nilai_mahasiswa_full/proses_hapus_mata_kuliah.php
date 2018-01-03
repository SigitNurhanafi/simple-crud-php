<body bgcolor="#65a9d7">
	<?php
		include "koneksi.php";
		if(isset($_GET['id']))
		{

      $kd_mk = $_GET['id'];

			$link = koneksi_db();
			$sql = "delete from t_mata_kuliah where kd_mk='$kd_mk';";
			$res = mysqli_query($link,$sql);

			if($res)
			{
				echo "<center><h1> Sukses Hapus Data dengan kode $kd_mk </h1></br>";
				echo "Untuk melihatnya silahkan klik <br>
				<a href='menu_utama.php?menu=mata_kuliah&action=tampil'>Link ini</a></center>";
			}else{
				echo "<center><h1>Gagal Menghapus</h1></center>";
				echo "Error :".mysqli_error();
				echo "<br>Kembali<br> <a href='menu_utama.php?menu=mata_kuliah&action=tampil'>Link ini</a></center>";
			}
		}
	?>
</body>
