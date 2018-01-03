<html>
    <head>
        <meta charset="utf-8">
        <title> Ubah Data Mahasiswa </title>
    </head>
    <body bgcolor="#65a9d7">
        <?php
            include "koneksi.php";
            if(!empty($_POST['nim']))
            {
                $nim       = $_POST['nim'];
                $nama      = $_POST['nama'];
                $Ttl       = $_POST['ttl'];
                $tgl_lahir = $_POST['tgl_lahir'];
                $alamat    = $_POST['alamat'];
                $foto      = $_POST['nim'];

                $link = koneksi_db();
                $sql  = "UPDATE t_mahasiswa SET nama='$nama', ttl='$Ttl', tgl_lahir='$tgl_lahir', alamat='$alamat', foto='$foto' WHERE nim='$nim' ";
                $res  = mysqli_query($link, $sql);

			if($res)
			{
				echo "<center><h1> Sukses Mengubah Data di $nim</h1></br>";
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
