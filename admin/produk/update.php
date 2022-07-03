<?php 
// koneksi database
include '../koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$gambar = $_POST['gambar'];
$judul = $_POST['judul'];
$harga = $_POST['harga'];
$berat = $_POST['berat'];
$terjual = $_POST['terjual'];
$stok = $_POST['stok'];
 
// update data ke database
mysqli_query($koneksi,"UPDATE iklan SET gambar='$gambar', judul='$judul', harga='$harga', berat='$berat', terjual='$terjual', stok='$stok' WHERE id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:produk.php");
 
?>
