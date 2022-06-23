<?php
include '../config.php';

$idproduk = $_GET['idproduk'];
$produk = $server->query("SELECT * FROM `iklan`, `kategori` WHERE iklan.id='$idproduk' AND iklan.id_kategori=kategori.id");
$produk_data = mysqli_fetch_assoc($produk);

if ($produk_data) {
  $hitung_diskon = ($produk_data['diskon'] / 100) * $produk_data['harga'];
  $harga_diskon = $produk_data['harga'] - $hitung_diskon;

  $rating = $server->query("SELECT * FROM `akun`, `invoice`, `rating` WHERE invoice.id_iklan='$idproduk' AND rating.id_invoice_rat=invoice.idinvoice AND invoice.id_user=akun.id ORDER BY `rating`.`idrating` DESC ");
  $jumlah_rating = mysqli_num_rows($rating);

  $rata_rating = $server->query("SELECT AVG(star_rat) AS rata_rat FROM rating, invoice WHERE invoice.id_iklan='$idproduk' AND rating.id_invoice_rat=invoice.idinvoice ");
  $data_rata = mysqli_fetch_assoc($rata_rating);
  $hasil_rata = substr($data_rata['rata_rat'], 0, 3);
  $for_star = substr($data_rata['rata_rat'], 0, 1);
  $after_dot = substr($data_rata['rata_rat'], 2, 1);
} else {
  header("location: " . $url);
}
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
  <link rel="stylesheet" href="../../assets/css/components/produk.css">
  <title>Produk</title>
</head>
<body>
  <?php include '../components/header.php'; ?>
  <main>
    <div class="container">
      <div class="produk">
        <div class="detail-produk">
          <div class="foto-produk">
            <?php
            $exp_gambar_vi = explode(',', $produk_data['gambar']);
            foreach ($exp_gambar_vi as $key_exp_gambar_vi => $value_exp_gambar_vi) {
            ?>
              <img src="../../assets/images/<?php echo $value_exp_gambar_vi; ?>">
            <?php
            }
            ?>
          </div>
          <div class="desc-produk">
            <h1><?php echo $produk_data['judul']; ?></h1>
            <div class="container-rate-produk">
              <?php
              if ($jumlah_rating) {
              ?>
                <div class="isi-container-rate-produk">
                  <h5><?php echo $hasil_rata; ?></h5>
                  <?php
                  for ($j_icon_star = 1; $j_icon_star <= $for_star; $j_icon_star++) {
                  ?>
                    <i class="ri-star-fill"></i>
                  <?php
                  }
                  if ($after_dot > 0) {
                  ?>
                    <i class="ri-star-half-fill"></i>
                  <?php
                  }
                  ?>
                </div>
                <span>|</span>
              <?php
              }
              ?>
              <div class="isi-container-rate-produk">
                <h4><?php echo $produk_data['terjual']; ?></h4>
                <p>Terjual</p>
              </div>
            </div>
            <div class="container-harga">
              <div class="isi-container-harga">
                <?php
                if ($produk_data['tipe_iklan'] == "flash sale") {
                ?>
                  <h3><span>Rp</span><del><?php echo number_format($produk_data['harga'], 0, ".", "."); ?></del></h3>
                  <h2><span>Rp</span> <?php echo number_format($harga_diskon, 0, ".", "."); ?></h2>
                <?php
                } else {
                ?>
                  <h2><span>Rp</span> <?php echo number_format($produk_data['harga'], 0, ".", "."); ?></h2>
                <?php
                }
                ?>
              </div>
              <?php
              if ($produk_data['tipe_iklan'] == "flash sale") {
              ?>
                <div class="isi_harga_fs">
                  <i class="ri-flashlight-fill"></i>
                  <p>Flash Sale</p>
                </div>
              <?php
              }
              ?>
            </div>
            <div class="rincian-produk">
              <div class="isi-rincian-produk">
                <h5>Kategori</h5>
                <p><?php echo $produk_data['nama']; ?></p>
              </div>
              <div class="isi-rincian-produk">
                <h5>Total Stok</h5>
                <p><?php echo $produk_data['stok']; ?></p>
              </div>
              <div class="isi-rincian-produk">
                <h5>Stok tersisa</h5>
                <p><?php echo $produk_data['stok'] - $produk_data['terjual']; ?></p>
              </div>
              <div class="isi-rincian-produk">
                <h5>Dikirim dari</h5>
                <p><?php echo $kota_toko . ' ' . $provinsi_toko; ?></p>
              </div>
            </div>
            <div class="tambah-keranjang">
              <div class="button-tambah-keranjang">
                <div class="masukkan-keranjang" id="masukkan_keranjang2">
                  <i class="ri-shopping-bag-line"></i>
                  <p>Masukkan Keranjang</p>
                </div>
                <div class="masukkan-keranjang" id="hapus_keranjang">
                  <i class="ri-delete-bin-7-line"></i>
                  <p>Hapus dari Keranjang</p>
                </div>
                <?php
                $cart = $server->query("SELECT * FROM `keranjang` WHERE `id_iklan`='$idproduk'");
                $cart_data = mysqli_fetch_assoc($cart);
                if ($cart_data) {
                ?>
                  <script>
                    masukkan_keranjang2.style.display = 'none';
                    hapus_keranjang.style.display = 'flex';
                  </script>
                <?php
                } else {
                ?>
                  <script>
                    masukkan_keranjang2.style.display = 'flex';
                    hapus_keranjang.style.display = 'none';
                  </script>
                <?php
                }
                ?>
                <div class="beli-sekarang">
                  <p>Beli Sekarang</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="liat-konten">
        <div class="liat-konten-title">
          <p>Deskripsi Produk</p>
        </div>
        <div class="isi-konten">
          <p><?php echo $produk_data['deskripsi']; ?></p>
        </div>
      </div>
      <div class="liat-konten">
        <div class="liat-konten-title">
          <p>Penilaian Produk</p>
          <p><?php echo $jumlah_rating; ?></p>
        </div>
        <div class="isi-konten">
          <?php
          if ($jumlah_rating) {
          ?>
            <div class="container-isi-rating">
              <?php
              while ($data_rating = mysqli_fetch_assoc($rating)) {
                $jstar_user = $data_rating['star_rat'];
              ?>
                <div class="isi-rating">
                  <img src="user.png" alt="" />
                  <div class="text-isi-rating">
                    <div class="nama-rating">
                      <h5><?php echo $data_rating['nama_lengkap']; ?></h5>
                      <p><?php echo $data_rating['waktu_rat']; ?></p>
                    </div>
                    <div class="bintang-rating">
                      <?php
                      for ($star = 1; $star <= $jstar_user; $star++) {
                      ?>
                        <i class="fa-solid fa-star"></i>
                      <?php
                      }
                      ?>
                    </div>
                    <h3 class="desc-rating"><?php echo $data_rating['deskripsi_rat']; ?></h3>
                  </div>
                </div>
              <?php
              }
              ?>
            </div>
            <?php
            } else {
            ?>
              <p>Belum ada penilaian</p>
          <?php
          }
          ?>
        </div>
      </div>
    </div>
    <?php include '../components/bottom-nav.php'; ?>
  </main>
  <?php include '../components/footer.php'; ?>
</body>
</html>