<?php 
// koneksi database
include '../koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama_lengkap = $_POST['nama_lengkap'];
$no_whatsapp = $_POST['no_whatsapp'];
$email = $_POST['email'];
$tipe_daftar = $_POST['tipe_daftar'];
$tipe_akun = $_POST['tipe_akun'];
 
// update data ke database
mysqli_query($koneksi,"UPDATE akun SET nama_lengkap='$nama_lengkap', no_whatsapp='$no_whatsapp', email='$email', tipe_daftar='$tipe_daftar', tipe_akun='$tipe_akun' WHERE id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:pelanggan.php");
 
?>