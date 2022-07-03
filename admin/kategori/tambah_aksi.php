<?php 
// koneksi database
include '../koneksi.php';
 
// menangkap data yang di kirim dari form
$kategori = $_POST['kategori'];

// menginput data ke database
mysqli_query($koneksi,"INSERT INTO kategori VALUES('','$kategori')");
 
// mengalihkan halaman kembali ke index.php
header("location:kategori.php");
 
?>