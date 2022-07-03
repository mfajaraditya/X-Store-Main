<?php 
// koneksi database
include '../koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$kategori = $_POST['kategori'];

// update data ke database
mysqli_query($koneksi,"UPDATE iklan SET kategori='$kategori' WHERE id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:kategori.php");
 
?>