<?php
include '../config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://kit.fontawesome.com/79bd89534b.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../assets/css/components/about-us.css">
  <title>X-Store</title>
</head>

<body>
  <header>
    <div class="container">
      <div class="header">
        <a href="<?php echo $url; ?>">
          <div class="logo-header">
            <img src="<?php echo $url; ?>assets/images/logo.png">
        </a>
      </div>
      </a>
    </div>
    </div>
  </header>
  <main>
    <div class="container">
      <div class="container-au">
        <div class="about-us">
          <h1>Tentang Kami</h1></br>
          <p>X-STORE adalah situs elektronik komersial yang berkantor pusat di Kota Semarang yang didirikan pada tahun 2020 milik EX-SCIENCE.
            Kini X-STORE hadir di tengah-tengah masyarakat dengan tujuan membantu para UMKM secara totalitas dengan model individual dalam berbisnis.</br></br>
            Sejauh ini platform maupun aplikasi belanja online (e-commerce) begitu menjamur, namun belum adanya platform yang menyediakan pelayanan administrasi secara penuh bagi pelaku bisnis. 
            Melalui proyek ini kami mendatangkan solusi bagi para pelaku bisnis dan UMKM dalam mengelola administrasi bisnis harian tanpa ribet dan mudah dipantau.</br>
          </p>
        </div>
      </div>
    </div>
  </main>
  <?php include '../components/footer.php'; ?>
</body>

</html>