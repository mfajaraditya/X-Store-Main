<?php
include '../config.php';

if (!isset($_COOKIE['login'])) {
  header('Location: ../index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://kit.fontawesome.com/79bd89534b.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../assets/css/components/akun.css" />
  <title>Akun</title>
</head>
<body>
  <?php include '../components/header.php'; ?>
  <main>
    <div class="container">
      <div class="profil">
        <div class="info-akun">
          <div class="info-akun2">
            <img src="../assets/images/<?php echo $profile['foto']; ?>">
            <div class="container-data-user">
              <h1><?php echo $profile['nama_lengkap']; ?></h1>
              <p><?php echo $profile['email']; ?></p>
            </div>
          </div>
          <div class="menu-info-akun">
            <a href="edit">
              <div class="content-menu-info-akun">
                <p>Edit Profile</p>
              </div>
            </a>
            <a href="../sistem/logout">
              <div class="content-menu-info-akun">
                <p>Logout</p>
              </div>
            </a>
          </div>
        </div>
        <div class="tab-menu" id="tab_menu">
          <div class="container-pilih-menu">
            <div class="header-pilih-menu">
              <p>Pesanan Saya</p>
              <i class="ri-close-line" id="close_order_menu"></i>
            </div>
            <div class="container-pilih-menu2">
              <div class="pilih-menu">
                <div class="isi_select_order_menu_active" id="belum_bayar">
                  <p>Belum Dibayar</p>
                </div>
                <div class="isi_select_order_menu" id="dikemas">
                  <p>Dikemas</p>
                </div>
                <div class="isi_select_order_menu" id="dikirim">
                  <p>Dikirim</p>
                </div>
                <div class="isi_select_order_menu" id="selesai">
                  <p>Selesai</p>
                </div>
              </div>
            </div>
          </div>
          <div class="res_order_menu">
            <div id="res_order_menu"></div>
          </div>
        </div>
      </div>
    </div>
    <div id="res"></div>
    <?php include '../components/bottom-nav.php'; ?>
  </main>
  <?php include '../components/footer.php'; ?>
  <script src="../assets/js/akun.js"></script>
</body>
</html>