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
  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
  <link rel="stylesheet" href="../assets/css/components/keranjang.css">
  <title>X-Store</title>
</head>

<body>
  <?php include '../components/header.php'; ?>
  <main>
    <div class="container">
      <?php
      if (isset($_COOKIE['login'])) {
        $select_cart = $server->query("SELECT * FROM `kategori`, `keranjang`, `iklan` WHERE keranjang.id_user='$iduser' AND keranjang.id_iklan=iklan.id AND iklan.id_kategori=kategori.id ORDER BY `keranjang`.`id` DESC");
        $cek_cart = mysqli_num_rows($select_cart);
      ?>
        <div class="header_cart" id="header_cart">
          <p>Keranjang Belanja Anda Sebanyak: <span><?php echo $cek_cart; ?></span></p>
        </div>
        <div class="box_isi_cart">
          <?php
          if ($cek_cart) {
            while ($cart_data = mysqli_fetch_array($select_cart)) {
              $hitung_diskon_fs = ($cart_data['diskon'] / 100) * $cart_data['harga'];
              $harga_diskon_fs = ($cart_data['harga'] - $hitung_diskon_fs) * $cart_data['jumlah'];
              $exp_gambar_cd = explode(',', $cart_data['gambar']);
          ?>
              <div class="isi_cart" id="isi_cart<?php echo $cart_data['id']; ?>">
                <div class="box_gambar_judul">
                  <img src="../assets/images/<?php echo $exp_gambar_cd[0]; ?>" alt="">
                  <div class="box_judul_ic">
                    <h1><?php echo $cart_data['judul']; ?></h1>
                    <p>Kategori <span><?php echo $cart_data['nama']; ?></span></p>
                    <p>Total Produk <span><?php echo $cart_data['jumlah']; ?></span></p>
                  </div>
                </div>
                <div class="box_detail_isi_cart">
                  <div class="box_total_harga">
                    <p>Total Harga</p>
                    <h1><span>Rp</span> <?php echo number_format($harga_diskon_fs, 0, ".", "."); ?></h1>
                  </div>
                  <div class="bayar" id="button_checkout<?php echo $cart_data['id']; ?>" onclick="checkout('<?php echo $cart_data['id']; ?>')">Checkout</div>
                  <div class="box_remove_cart" onclick="removecart(<?php echo $cart_data['id']; ?>)">
                    <i class="ri-delete-bin-line" id="icon_remove_cart<?php echo $cart_data['id']; ?>"></i>
                  </div>
                </div>
              </div>
            <?php
            }
          } else {
            ?>
            <div class="box_cart_0">
              <p class="p_cart_0">Belum Ada Produk Di Keranjang</p>
            </div>
          <?php
          }
          ?>
        </div>
      <?php
      } else {
        include '../components/belum-login.php';
      }
      ?>
    </div>
    <div id="res"></div>
    <?php include '../components/bottom-nav.php'; ?>
  </main>
  <?php include '../components/footer.php'; ?>
  <script src="../assets/js/keranjang.js"></script>
</body>

</html>