<?php
    function koneksi_db(){
        $server     = "127.0.0.1";
        $username   = "root";
        $password   = "";
        $database   = "atol_akdmk";

        //koneksi
        $link = mysqli_connect($server, $username, $password, $database);
        if(!$link){
            die("Koneksi Database Gagal : ".mysqli_error());
        }
        return $link;
    }
?>
