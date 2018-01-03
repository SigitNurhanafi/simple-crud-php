<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title> Tambah Data Nilai </title>
    </head>
    <body bgcolor="#65a9d7">
        <?php
            include "koneksi.php";
            if( isset($_POST['submit']) )
            {
                $kd_nilai = $_POST['kd_nilai'];
                $nim = $_POST['nim'];
                $kehadiran = $_POST['kehadiran'];
                $tugas1 = $_POST['tugas1'];
                $tugas2 = $_POST['tugas2'];
                $tugas3 = $_POST['tugas3'];
                $uts = $_POST['uts'];
                $uas = $_POST['uas'];
                $kode_matkul = $_POST['matkul'];
                $nilai_kehadiran = $kehadiran;
                $nilai_tugas = ( $tugas1 + $tugas2 + $tugas3 ) / 3;
                $nilai_uts = $uts;
                $nilai_uas = $uas;
                $nilai_akhir = ($nilai_tugas + $nilai_uts + $nilai_uas + $nilai_kehadiran) / 4;

                if($nilai_akhir >= 80){
                    $indeks = "A";
                    $ket = "Anda Lulus, Mendapatkan Nilai A";
                }else if($nilai_akhir >= 70){
                    $indeks = "B";
                    $ket = "Anda Lulus, Mendapatkan Nilai B";
                }else if($nilai_akhir >= 60){
                    $indeks = "C";
                    $ket = "Anda Lulus, Mendapatkan Nilai C";
                }else if($nilai_akhir >= 40){
                    $indeks = "D";
                    $ket = "Anda Lulus, Mendapatkan Nilai D";
                }else{
                    $indeks = "E";
                    $ket = "Anda Tidak Lulus, Mendapatkan Nilai E";
                }

                $link = koneksi_db();

                $sql  = "INSERT INTO t_nilai(kd_nilai, nim, kd_mk, kehadiran, tugas_1, tugas_2, tugas_3, uts, uas,
                                                 nilai_kehadiran, nilai_tugas, nilai_uts, nilai_uas, nilai_akhir, indeks, ket)
                         VALUES ('$kd_nilai', '$nim', '$kode_matkul', '$kehadiran', '$tugas1', '$tugas2', '$tugas3',
                                '$uts', '$uas', '$nilai_kehadiran', '$nilai_tugas', '$nilai_uts', '$nilai_uas', '$nilai_akhir', '$indeks', '$ket')";
                $res  = mysqli_query($link, $sql);
                if($res)
                {
                    echo "<center>";
                        echo "<h1> Sukses Menambah Data Nilai </h1>";
                        echo "<br>";
                        echo "untuk melihatnya silakan klik";
                        echo "<br>";
                        echo "<a href='menu_utama.php?menu=nilai&action=tampil'> Link ini </a>";
                    echo "</center>";
                }else{
                    echo "<center>";
                        echo "<h1> Gagal Menambah Data </h1>";
                        echo "<br>";
                        echo "Error : ".mysqli_error();
                        echo "<br>";
                        echo "Kembali";
                        echo "<br>";
                        echo "<a href='menu_utama.php?menu=nilai&action=tampil'> Link ini </a>";
                    echo "</center>";
                }
            }else{
                header("Location: http://localhost/ATOL/studi_kasus_nilai_mahasiswa/index.php?menu=nilai&action=tampil");
            }
        ?>
    </body>
</html>
