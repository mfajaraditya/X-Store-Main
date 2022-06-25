<?php
session_start();

$url = "http://localhost/front-end/";

$server = new mysqli(
     "localhost",
     "root",
     "",
     "x_store"
);

// Header
$setting_header = $server->query("SELECT * FROM `setting_header` WHERE `id_hs`='1'");
$data_setting_header = mysqli_fetch_assoc($setting_header);
$logo = $data_setting_header['logo'];
$title_name = $data_setting_header['title_name'];
$placeholder_search = $data_setting_header['placeholder_search'];

// Lokasi
$lokasi_toko = $server->query("SELECT * FROM `setting_lokasi` WHERE `id`='1'");
$data_lokasi_toko = mysqli_fetch_assoc($lokasi_toko);
$provinsi_toko = $data_lokasi_toko['provinsi'];
$provinsi_id_toko = $data_lokasi_toko['provinsi_id'];
$kota_toko = $data_lokasi_toko['kota'];
$kota_id_toko = $data_lokasi_toko['kota_id'];

// Cek Login User
if (isset($_COOKIE['login'])) {
     $key_login = $_COOKIE['login'];
     $ciphering = "AES-128-CTR";
     $iv_length = openssl_cipher_iv_length($ciphering);
     $options = 0;
     $decryption_iv = '1234567891011121';
     $decryption_key = "ecommerce";
     $decryption = openssl_decrypt($key_login, $ciphering, $decryption_key, $options, $decryption_iv);

     $iduser_key_login = explode("hcCTZvFLD7XIchiaMqEka0TLzGgdpsXB", $decryption);
     $id_user_login = $iduser_key_login[0];

     $select_profile = $server->query("SELECT * FROM `akun` WHERE `id`='$id_user_login' ");
     $profile = mysqli_fetch_assoc($select_profile);
     $iduser = $profile['id'];

     // COUNT CART
     $count_cart_header = $server->query("SELECT * FROM `keranjang` WHERE `id_user`='$iduser' ");
     $cek_cart_header = mysqli_num_rows($count_cart_header);
}

// Cek Login Admin
if (isset($_COOKIE['login_admin'])) {
     $key_login_adm = $_COOKIE['login_admin'];
     $ciphering_adm = "AES-128-CTR";
     $iv_length_adm = openssl_cipher_iv_length($ciphering_adm);
     $options_adm = 0;
     $decryption_iv_adm = '1234567891011121';
     $decryption_key_adm = "admin_ecommerce";
     $decryption_adm = openssl_decrypt($key_login_adm, $ciphering_adm, $decryption_key_adm, $options_adm, $decryption_iv_adm);

     $iduser_key_login_adm = explode("hcCTZvFLD7XIchiaMqEka0TLzGgdpsXB", $decryption_adm);
     $id_user_login_adm = $iduser_key_login_adm[0];

     $select_profile_adm = $server->query("SELECT * FROM `akun` WHERE `id`='$id_user_login_adm' ");
     $profile_adm = mysqli_fetch_assoc($select_profile_adm);
     if ($profile_adm['tipe_akun'] == 'Admin') {
          $akun_adm = 'true';
     } else {
          $akun_adm = 'false';
     }
}