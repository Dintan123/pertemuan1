<?php 
include 'koneksi.php';

$id = $_GET ['id'];

$hapus = mysqli_query($konn,"delete from daftar where id = '$id'");

if ($hapus) {
    echo "<script> alert ('Data Di Hapus')</script>";
    header ("refresh:0;tampil.php");
}else{
    echo "<script> alert ('Data Tidak Bisa Di Hapus')</script>";
    header ("refresh:0;tampil.php");
}
?>