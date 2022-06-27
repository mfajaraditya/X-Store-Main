<?php
include '../config.php';
if (isset($_GET['code'])) {
  $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);
  if (!isset($token['error'])) {
      // CEK AKUN
      $akun_user = $server->query("SELECT * FROM `akun` WHERE `email`='$email_google'");
      $akun_user_data = mysqli_fetch_assoc($akun_user);
      // HASIL CEK AKUN
      if ($akun_user_data) {
          $idakun = $akun_user_data['id'] . "hcCTZvFLD7XIchiaMqEka0TLzGgdpsXB";
          $ciphering = "AES-128-CTR";
          $iv_length = openssl_cipher_iv_length($ciphering);
          $options = 0;
          $encryption_iv = '1234567891011121';
          $encryption_key = "ecommerce";
          $encryption = openssl_encrypt($idakun, $ciphering, $encryption_key, $options, $encryption_iv);
          $buat_cookie = setcookie("login", $encryption, time() + (86400 * 30), "/");
          if ($buat_cookie) {
              echo '<script>window.location.href="' . $url . '";</script>';
          }
      } else {
          $insert_akun = $server->query("INSERT INTO `akun`(`foto`, `nama_lengkap`, `email`, `waktu`, `tipe_daftar`) VALUES ('user.png', '$nama_lengkap_google', '$email_google', '$time', '$jenis_daftar')");
          if ($insert_akun) {
              $select_akun = $server->query("SELECT * FROM `akun` WHERE `email`='$email_google'");
              $select_akun_data = mysqli_fetch_assoc($select_akun);
              // ENSKRIPSI ID
              $idakun = $select_akun_data['id'] . "hcCTZvFLD7XIchiaMqEka0TLzGgdpsXB";
              $ciphering = "AES-128-CTR";
              $iv_length = openssl_cipher_iv_length($ciphering);
              $options = 0;
              $encryption_iv = '1234567891011121';
              $encryption_key = "ecommerce";
              $encryption = openssl_encrypt($idakun, $ciphering, $encryption_key, $options, $encryption_iv);
              $buat_cookie = setcookie("login", $encryption, time() + (86400 * 30), "/");
              if ($buat_cookie) {
                  echo '<script>window.location.href="' . $url . '";</script>';
              }
          }
      }
  }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../assets/css/components/daftar-masuk.css">
    <title>Masuk</title>
  </head>
  <body>
    <div class="daftar-masuk">
      <div class="container-daftar-masuk">
        <h1>Masuk</h1>
        <h4>Belum punya akun? <a href="<?php echo $url; ?>daftar-masuk/daftar">Daftar Sekarang</a></h4>
        <div class="container-form-daftar-masuk">
          <div class="form-daftar-masuk">
            <p id="p_email"></p>
            <input type="text"placeholder="Email" class="input" id="email">
          </div>
          <div class="form-daftar-masuk">
            <p id="p_password"></p>
            <input type="password"placeholder="Password" class="input" id="password">
          </div>
        </div>
        <div class="masuk_button" id="masuk_button">
          <div class="button" id="masuk">
            <p>Masuk Sekarang</p>
          </div>
        </div>
      </div>
    </div>
    <div class="res" id="res"></div>
    <script src="../assets/js/masuk.js"></script>
  </body>
</html>
