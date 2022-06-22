<?php
include '../config.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/79bd89534b.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="../assets/css/components/keranjang.css">
    <title>X-Store</title>
  </head>
  <body>
  <?php include '../components/header.php'; ?>
    <main>
      <div class="container">
        <?php
        $keranjang = $server->query("SELECT * FROM `kategori`, `keranjang`, `iklan` WHERE keranjang.id_iklan=iklan.id AND iklan.id_kategori=kategori.id ORDER BY `keranjang`.`id` DESC");
        $cek_keranjang = mysqli_num_rows($keranjang);
        ?>
        <div class="header-keranjang">
          <h1>Keranjang Belanja Anda Sebanyak: <span><?php echo $cek_keranjang; ?></span></h1>
        </div>
        <div class="container-isi">
          <?php
          if ($cek_keranjang) {
            while ($data_keranjang = mysqli_fetch_array($keranjang)){
              $hitung_diskon = ($data_keranjang['diskon_k'] / 100) * $data_keranjang['harga_k'];
              $harga_diskon = ($data_keranjang['harga_k'] - $hitung_diskon) * $data_keranjang['jumlah'];
              $exp_gambar = explode(',', $data_keranjang['gambar']);
          ?>
          <div class="content-keranjang" id="isi_cart<?php echo $data_keranjang['id']; ?>">
            <div class="container-gambar">
              <img src="../assets/images/<?php echo $exp_gambar[0]; ?>" alt="" >
              <div class="container-judul">
                <h1><?php echo $data_keranjang['judul'];  ?></h1>
                <p>Kategori <span><?php echo $data_keranjang['nama']; ?></span></p>
                <p>Total Produk <span><?php echo $data_keranjang['jumlah']; ?></span></p>
              </div>
            </div>
            <div class="container-detail">
              <div class="container-harga">
                <p>Total Harga</p>
                <h1><span>Rp</span><?php echo number_format($harga_diskon_fs, 0, ".", "."); ?></h1>
              </div>
              <div class="bayar" id="button_co<?php echo $data_keranjang['id']; ?>" onclick="checkout('<?php echo $cart_data['id']; ?>', 'idkontol')">Checkout</div>
              <div class="box_remove_cart" onclick="removecart(<?php echo $data_keranjang['id']; ?>)">
                <i class="ri-delete-bin-line" id="icon_remove_cart<?php echo $data_keranjang['id']; ?>"></i>
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
      </div>
      <div class="bottom-nav">
        <div class="bot-nav">
          <a href="../">
            <div class="content-nav">
              <h5>Home</h5>
            </div>
          </a>
          <a href="./keranjang.php">
            <div class="content-nav">
              <h5>Cart</h5>
            </div>
          </a>
          <a href="../akun/akun.php">
            <div class="content-nav">
              <h5>Akun</h5>
            </div>
          </a>
        </div>
      </div>
    </main>
    <?php include '../components/footer.php'; ?>
  </body>
</html>
