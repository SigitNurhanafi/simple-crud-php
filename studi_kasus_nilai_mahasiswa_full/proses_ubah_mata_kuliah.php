<html>
    <head>
        <meta charset="utf-8">
        <title> Ubah Data Matkul </title>
    </head>
    <body bgcolor="#65a9d7">
        <?php
            include "koneksi.php";
            if(!empty($_POST['kd_mk']))
            {
                $kd_mk = $_POST['kd_mk'];
                $nama_mk = $_POST['nama_mk'];

                $link = koneksi_db();
                $sql  = "UPDATE t_mata_kuliah SET nama_mk='$nama_mk' WHERE kd_mk='$kd_mk' ";
                $res  = mysqli_query($link, $sql);

			if($res)
			{
				echo "<center><h1> Sukses Mengubah Data menjadi $nama_mk</h1></br>";
				echo "Untuk melihatnya silahkan klik <br>
				<a href='menu_utama.php?menu=mata_kuliah&action=tampil'>Link ini</a></center>";
			}else{
				echo "<center><h1>Gagal Menambah Data</h1></center>";
				echo "Error :".mysqli_error();
				echo "<br>Kembali<br> <a href='menu_utama.php?menu=mata_kuliah&action=tampil'>Link ini</a></center>";
			}
		}
	?>
</body>
