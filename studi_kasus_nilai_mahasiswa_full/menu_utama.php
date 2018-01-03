<?php
session_start();
   if( isset($_SESSION['ses_nama_pengguna']))
   {
        if( ($_SESSION['ses_nama_pengguna'] != "") AND ($_SESSION['ses_password'] != "") )
        {
            include "koneksi.php";
?>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Selamat Datang Admistrator</title>
  </head>
  <body>

    <div id="container">
      <div id="header">


          <h1>Studi Kasus</h1>
          <h2>Aplikasi Nilai Mahasiswa</h2>

      </div>

      <div id="menu">
        <ul>
            <li><a href="menu_utama.php?menu=home&action=tampil" class="menu">Home</a></li>
            <li><a href="menu_utama.php?menu=mahasiswa&action=tampil" class="menu">Mahasiswa</a></li>
            <li><a href="menu_utama.php?menu=mata_kuliah&action=tampil" class="menu">Mata Kuliah</a></li>
            <li><a href="menu_utama.php?menu=nilai&action=tampil" class="menu">Nilai</a></li>
            <li><a href="keluar.php" class="menu">Keluar</a></li>
        </ul>
      </div>

      <div id="content">
        <div id="kiriKolom">
          <!--proses--->
          <?php
              if( (isset($_GET['menu'])) && ($_GET['menu']=='mata_kuliah') && ($_GET['action']=='tampil') )
              {

                include "tambah_mata_kuliah.php";
              }else if( (isset($_GET['menu'])) && ($_GET['menu']=='mata_kuliah') && ($_GET['action']=='ubah') )
              {

                  include "ubah_mata_kuliah.php";
                }

                if( (isset($_GET['menu'])) && ($_GET['menu']=='mahasiswa') && ($_GET['action']=='tampil') )
                {

                  include "tambah_mahasiswa.php";
                }else if( (isset($_GET['menu'])) && ($_GET['menu']=='mahasiswa') && ($_GET['action']=='ubah') )
                {

                    include "ubah_mahasiswa.php";
                  }

                  if( (isset($_GET['menu'])) && ($_GET['menu']=='nilai') && ($_GET['action']=='tampil') )
                  {

                    include "tambah_nilai.php";
                  }else if( (isset($_GET['menu'])) && ($_GET['menu']=='nilai') && ($_GET['action']=='ubah') )
                  {

                      include "ubah_nilai.php";
                    }
           ?>
        </div>
        <div id="kananKolom">
          <!--Cari dan tampil--->
          <?php
            if( (isset($_GET['menu'])) && ($_GET['menu']=='mata_kuliah') && ($_GET['action']=='tampil' || ($_GET['action']=='ubah') ))
            {
                include "tampil_mata_kuliah.php";

              }else if( (isset($_GET['menu'])) && ($_GET['menu']=='mata_kuliah') && ($_GET['action']=='cari') )
              {

                  include "cari_mata_kuliah.php";
                }

                if( (isset($_GET['menu'])) && ($_GET['menu']=='mahasiswa') && ($_GET['action']=='tampil' || ($_GET['action']=='ubah') ))
                {
                    include "tampil_mahasiswa.php";

                  }else if( (isset($_GET['menu'])) && ($_GET['menu']=='mahasiswa') && ($_GET['action']=='cari') )
                  {

                      include "cari_mahasiswa.php";
                    }

                    if( (isset($_GET['menu'])) && ($_GET['menu']=='nilai') && ($_GET['action']=='tampil' || ($_GET['action']=='ubah') ))
                    {
                        include "tampil_nilai.php";

                      }else if( (isset($_GET['menu'])) && ($_GET['menu']=='nilai') && ($_GET['action']=='cari') )
                      {

                          include "cari_nilai.php";
                        }


                        if( (isset($_GET['menu'])) && ($_GET['menu']=='home') && ($_GET['action']=='tampil'))
                        {
                            include "tampil_data_diri.php";

                          }

           ?>
        </div>
      </div>

      <div id="footer">
        &copy;Copyright : Andri Armiyanto - Aplikasi Teknologi Online 2017
      </div>
    </div>
  </body>
</html>
<?php
        }
    }else{
        echo "<center><h1> !! Anda Belum Login !! </h1>";
        echo "Silakan <a href='index.php'> Login </a></center>";
    }
?>
