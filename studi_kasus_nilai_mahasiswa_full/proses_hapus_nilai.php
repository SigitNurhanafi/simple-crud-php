<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title> Hapus Nilai Mahasiswa </title>
    </head>
    <body bgcolor="#65a9d7">
        <?php
            include "koneksi.php";
            if(isset($_GET['id']))
            {
                $kd_nilai = $_GET['id'];
                $link = koneksi_db();
                $sql  = "DELETE FROM t_nilai WHERE kd_nilai='$kd_nilai' ";
                $res  = mysqli_query($link, $sql);

                if($res)
                {

                    echo "<center>";
                        echo "<h1> Sukses Menghapus Data </h1>";
                        echo "<br>";
                        echo "untuk melihatnya silakan klik";
                        echo "<br>";
                        echo "<a href='menu_utama.php?menu=nilai&action=tampil'> Link ini </a>";
                    echo "</center>";
                }else{
                    echo "<center>";
                        echo "<h1> Gagal Menghapus Data </h1>";
                        echo "<br>";
                        echo "Error : ".mysqli_error();
                        echo "<br>";
                        echo "Kembali";
                        echo "<br>";
                        echo "<a href='menu_utama.php?menu=nilai&action=tampil'> Link ini </a>";
                    echo "</center>";
                }
            }
        ?>
    </body>
</html>
