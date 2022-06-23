<?php
include '../config.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../assets/css/components/daftar-masuk.css">
    <title>Daftar</title>
  </head>
  <body>
    <div class="daftar-masuk">
      <div class="container-daftar-masuk">
        <h1>Daftar</h1>
        <h4>Sudah punya akun? <a href="<?php echo $url; ?>daftar-masuk/masuk">Masuk Sekarang</a></h4>
        <div class="container-form-daftar-masuk">
          <div class="form-daftar-masuk">
            <p id="p_nama_lengkap"></p>
            <input type="text"placeholder="Nama Lengkap" class="input" id="nama_lengkap">
          </div>
          <div class="form-daftar-masuk">
            <p id="p_email"></p>
            <input type="text"placeholder="Email" class="input" id="email">
          </div>
          <div class="form-daftar-masuk">
            <p id="p_no_whatsapp"></p>
            <input type="text"placeholder="Nomor WhatsApp" class="input" id="no_whatsapp">
          </div>
          <div class="form-daftar-masuk">
            <p id="p_password"></p>
            <input type="text"placeholder="Password" class="input" id="password">
          </div>
        </div>
        <div class="daftar_button" id="daftar_button">
          <div class="button" id="daftar">
            <p>Daftar Sekarang</p>
          </div>
        </div>
      </div>
    </div>
    <div class="res" id="res"></div>
    <script src="../assets/js/daftar.js"></script>
  </body>
</html>
