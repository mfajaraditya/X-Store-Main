<?php 
// koneksi database
include '../koneksi.php';
 
// menangkap data yang di kirim dari form
$gambar = $_POST['gambar'];
$judul = $_POST['judul'];
$harga = $_POST['harga'];
$berat = $_POST['berat'];
$terjual = $_POST['terjual'];
$stok = $_POST['stok'];
 
// menginput data ke database
mysqli_query($koneksi,"INSERT INTO iklan VALUES('','$gambar','$judul','$harga','$berat','$terjual','$stok')");
 
// mengalihkan halaman kembali ke index.php
header("location:produk.php");
 
?>