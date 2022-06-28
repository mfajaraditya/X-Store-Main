<?php
include '../config.php';

if (!isset($_COOKIE['login'])) {
  header('location: ../login/');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://kit.fontawesome.com/79bd89534b.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../assets/css/components/edit.css">
  <title>X-Store</title>
</head>

<body>
  <?php include '../components/header.php'; ?>
  <main>
    <div class="edit">
      <div class="edit-profil">
        <h1>Edit Profile</h1>
        <div class="box_img_pro">
          <div class="change_img_pro" onclick="click_file_img()">
            <i class="ri-pencil-fill"></i>
          </div>
          <img src="../assets/image/profile/<?php echo $profile['foto']; ?>" id="img_foto_pro">
          <input type="file" accept="image/*" class="cfile_img_pro" id="cfile_img_pro" onchange="change_image(event)">
        </div>
        <p class="err_foto_pro" id="err_foto_pro">Pastikan format foto jpg/png</p>
        <div class="container-input">
          <div class="isi-container-input">
            <p id="p_nama">Nama lengkap:</p>
            <input type="text" class="input" id="nama_lengkap" placeholder="Nama lengkap" value="<?php echo $profile['nama_lengkap']; ?>">
          </div>
          <div class="isi-container-input">
            <p id="p_wa">Nomor WhatsApp:</p>
            <input type="text" class="input" id="no_wa" placeholder="Nomor Whatsapp" value="<?php echo $profile['no_whatsapp']; ?>">
          </div>
        </div>
        <div class="b_button_ep"></div>
        <div class="button" id="bu_e_pro" onclick="simpan_edit_profile()">
          <p>Simpan</p>
        </div>
      </div>
    </div>
    <div id="res"></div>
  </main>
  <?php include '../components/footer.php'; ?>
  <script src="../assets/js/edit.js"></script>
</body>

</html>