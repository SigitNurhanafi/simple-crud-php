<!DOCTYPE html>
<html>
<head>
	<title> Selamat Datang Administrator </title>
</head>
<body>
	<?php
		session_start();
		include 'koneksi.php';

		if(isset($_POST['submit'])){
			$user = $_POST['nama_pengguna'];
			$pass = $_POST['password'];
			$link = koneksi_db();
			$sql = "SELECT * FROM pengguna
					WHERE nama_pengguna='$user' AND password='$pass'";

			$res = mysqli_query($link, $sql);
			$ketemu = mysqli_num_rows($res);
			$data = mysqli_fetch_array($res);

			if( $ketemu > 0){
				//buat session
				$_SESSION['ses_nama_pengguna'] = $data['nama_pengguna'];
				$_SESSION['ses_password'] = $data['password'];
				echo "<script> location.href='menu_utama.php?menu=home&action=tampil'; </script>";
				// header("Location: menu_utama.php?menu=mahasiswa&action=tampil");
			}else{
				echo "<center> <h1> Username atau Password Salah </h1> <br>";
				echo "Kembali <br> <a href='index.php'> Link ini </a> </center> ";
			}
		}else{
			header("Location: index.php");
		}

	?>
</body>
</html>
