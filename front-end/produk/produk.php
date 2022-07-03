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
  <script src="https://kit.fontawesome.com/79bd89534b.js" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA==" crossorigin="anonymous" />
  <link rel="stylesheet" href="../../assets/css/components/produk.css">
  <title>Produk</title>
</head>

<body>
  <?php include '../components/header.php'; ?>
  <main>
    <div class="back_varian_produk" id="back_varian_produk">
      <div class="varian_produk">
        <i class="fas fa-window-close close_varian_produk" onclick="close_back_varian_produk()"></i>
        <?php
        if (!$produk_data['warna'] == '') {
        ?>
          <div class="varian_ukuran">
            <h1>Warna</h1>
            <div class="box_select_varian">
              <?php
              $exp_warna_vp = explode(',', $produk_data['warna']);
              foreach ($exp_warna_vp as $key_warna_vp => $value_warna_vp) {
              ?>
                <div class="isi_box_select_varian c_id_varian_warna" id="id_varian_warna<?php echo $key_warna_vp; ?>" onclick="click_varian_warna('<?php echo $key_warna_vp; ?>', '<?php echo $value_warna_vp; ?>')"><?php echo $value_warna_vp; ?></div>
              <?php
              }
              ?>
            </div>
          </div>
        <?php
        }
        ?>
        <?php
        if (!$produk_data['ukuran'] == '') {
        ?>
          <div class="varian_ukuran">
            <h1>Size</h1>
            <div class="box_select_varian">
              <?php
              $exp_ukuran_vp = explode(',', $produk_data['ukuran']);
              foreach ($exp_ukuran_vp as $key_ukuran_vp => $value_ukuran_vp) {
                $exp_ukuran_saja_vp = explode('===', $value_ukuran_vp);
                $hitung_diskon_vp = ($product_data['diskon'] / 100) * $exp_ukuran_saja_vp[1];
                $harga_diskon_vp = $exp_ukuran_saja_vp[1] - $hitung_diskon;
              ?>
                <div class="isi_box_select_varian c_id_varian_ukuran" id="id_varian_ukuran<?php echo $key_ukuran_vp; ?>" onclick="click_varian_ukuran('<?php echo $key_ukuran_vp; ?>', '<?php echo $exp_ukuran_saja_vp[0]; ?>', '<?php echo $harga_diskon_vp; ?>', '<?php echo $exp_ukuran_saja_vp[1]; ?>')"><?php echo $value_ukuran_vp[0]; ?></div>
              <?php
              }
              ?>
            </div>
          </div>
        <?php
        }
        ?>
        <div class="harga_varian_produk">
          <p>Jumlah</p>
          <div class="box_pm_jumlah">
            <div class="box_button_jumlah" onclick="kurang()">
              <img src="../../assets/icons/kurang.svg">
            </div>
            <div class="box_hasil_jumlah">
              <input type="text" value="1" id="jumlah_produk" readonly>
            </div>
            <div class="box_button_jumlah" onclick="tambah(<?php echo $produk_data['stok'] - $produk_data['terjual']; ?>)">
              <img src="../../assets/icons/tambah.svg">
            </div>
          </div>
        </div>
        <div class="harga_varian_produk">
          <p>Harga</p>
          <h1>Rp <span id="harga_varian_produk"><?php echo number_format($harga_diskon, 0, ".", "."); ?></span></h1>
        </div>
        <input type="hidden" id="warna_value">
        <input type="hidden" id="ukuran_value">
        <input type="hidden" id="ukuran_harga_value" value="<?php echo $harga_diskon; ?>">
        <input type="hidden" id="ukuran_harga_satuan_value" value="<?php echo $harga_diskon; ?>">
        <input type="hidden" id="ukuran_harga_satuan_value_send" value="<?php echo $product_data['harga']; ?>">
        <div class="box_button_varian" id="buvar_masukkan_keranjang">
          <div class="button" id="masukan_keranjang" onclick="addcart('<?php echo $idproduk; ?>')">
            <p>Masukkan Keranjang</p>
          </div>
        </div>
        <div class="box_button_varian" id="buvar_beli_sekarang">
          <div class="button" id="beli_sekarang" onclick="checkout('<?php echo $idproduk; ?>',)">
            <p>Beli Sekarang</p>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <?php
      if (isset($_COOKIE['login'])) {
      ?>
        <div class="produk">
          <div class="detail_produk">
            <div class="foto_produk">
              <div class="owl-carousel owl-theme">
                <?php
                $exp_gambar_vi = explode(',', $produk_data['gambar']);
                foreach ($exp_gambar_vi as $key_exp_gambar_vi => $value_exp_gambar_vi) {
                ?>
                  <img src="../../assets/images/<?php echo $value_exp_gambar_vi; ?>">
                <?php
                }
                ?>
              </div>
            </div>
            <div class="desc_produk">
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
              <div class="tambah_keranjang">
                <div class="button_tambah_keranjang">
                  <div class="masukan_keranjang" id="masukan_keranjang2" onclick="view_addcart()">
                    <i class="ri-shopping-bag-line"></i>
                    <p>Masukkan Keranjang</p>
                  </div>
                  <div class="masukan_keranjang" id="hapus_keranjang" onclick="removecart('<?php echo $idproduk; ?>')">
                    <i class="ri-delete-bin-7-line"></i>
                    <p>Hapus Dari Keranjang</p>
                  </div>
                  <?php
                  $cart = $server->query("SELECT * FROM `keranjang` WHERE `id_iklan`='$idproduk' AND `id_user`='$iduser'");
                  $cart_data = mysqli_fetch_assoc($cart);
                  if ($cart_data) {
                  ?>
                    <script>
                      masukan_keranjang2.style.display = 'none';
                      hapus_keranjang.style.display = 'flex';
                    </script>
                  <?php
                  } else {
                  ?>
                    <script>
                      masukan_keranjang2.style.display = 'flex';
                      hapus_keranjang.style.display = 'none';
                    </script>
                  <?php
                  }
                  ?>
                  <div class="beli_sekarang" onclick="view_checkout()">
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
        <!-- ISI KONTEN -->
        <div class="liat-konten">
          <div class="liat-konten-title">
            <p>Penilaian Produk</p>
            <p><?php echo $jumlah_rating; ?></p>
          </div>
          <!-- RATING PENGGUNA -->
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
    <div class="back_add_card"></div>
    <div id="res" style="display: block;"></div>
  <?php
      } else {
        include '../components/belum-login.php';
      }
  ?>
  </main>
  <?php include '../components/footer.php'; ?>
  <script src="../../assets/js/produk.js"></script>
  <?php
  if (!$produk_data['warna'] == '') {
  ?>
    <script>
      id_varian_warna0.click();
    </script>
  <?php
  }
  if (!$produk_data['ukuran'] == '') {
  ?>
    <script>
      id_varian_ukuran0.click();
    </script>
  <?php
  }
  ?>
</body>

</html>