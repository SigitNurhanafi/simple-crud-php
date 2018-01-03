<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title> Menu - Mahasiswa </title>
    </head>
    <body>
        <div id="judul">Tampil Nilai Mahasiswa</div>
        <a href="menu_utama.php?menu=nilai&action=tampil" class="tombol" style="color:white; float:right; margin-top:10px;"> Kembali </a>

        <hr>
        <div id="isi_content">
        <?php
            // include "koneksi.php";
              $nim = $_POST['txtcari'];
              $link = koneksi_db();
              $sql  = "SELECT * FROM t_nilai NATURAL JOIN t_mata_kuliah WHERE nim='$nim' ";
              $res  = mysqli_query($link, $sql);
              $jumlah_data = mysqli_num_rows($res);
              echo "Jumlah data yang ditemukan : $jumlah_data";

        ?>
            <center>
              <h1 id="info_matkul">Mahasiswa Yang Dicari</h1>
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
                        $ketemu = FALSE;
                        while( $data = mysqli_fetch_array($res) )
                        {

                        // print_r($data);
                        // if( $nama_mk === $data[1])
                        // {
                            $ketemu = TRUE;
                            $no++;
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

                        if(!$ketemu)
                        {
                    ?>
                            <script>
                                var H1_Node = document.getElementById('info_matkul');
                                H1_Node.innerHTML = "Data Tidak Ditemukan";
                            </script>
                    <?php
                        }
                    ?>
                    </tbody>
                </table>
        </div>
    </body>
</html>
