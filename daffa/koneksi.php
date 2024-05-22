<?php 
    $konn = mysqli_connect("localhost","root","","pendaftaran");

    //cek koneksi
    if (mysqli_connect_error()){
        echo "koneksi gagal : " . mysqli_connect_error();
    }
    //echo "berhasil";
?>