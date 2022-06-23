<?php
include '../config.php';
$idkategori = $_GET['idkategori'];
$kategori = $server->query("SELECT * FROM `kategori` WHERE `id`='$idkategori'");
$kategori_data = mysqli_fetch_assoc($kategori);
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
    <link rel="stylesheet" href="../assets/css/components/kategori.css">
    <title>X-Store</title>
  </head>
  <body>
<?php include '../components/header.php'; ?>
<main>
     <div class="container">
          <div class="title-kategori">
               <p>Kategori <span><?php echo $kategori_data['nama']; ?></span></p>
          </div>
          <div class="container-produk">
               <?php 
                    $produk = $server->query("SELECT * FROM `iklan` WHERE `id_kategori`='$idkategori'");
                    while ($produk_data = mysqli_fetch_assoc($produk)) {
                         $exp_gambar_pd = explode(',', $produk_data['gambar']);
                         if($produk_data['status'] == ''){
               ?>
               <div class="list-produk">
                    <a href="<?php echo $url; ?>produk/produk/<?php echo $produk_data['id'];  ?>">
                         <img src="../../assets/images/<?php echo $exp_gambar_pd[0]; ?>">
                         <div class="text-list-produk">
                              <div class="container-judul-produk">
                                   <p><?php echo $produk_data['judul']; ?></p>
                              </div>
                              <div class="container-harga-produk">
                                   <h1><span>Rp</span><?php echo number_format($produk_data['harga'], 0, ".", "."); ?></h1>
                                   <p><?php echo $produk_data['terjual']; ?> Terjual</p>
                              </div>
                         </div>
                    </a>
               </div>
               <?php
                    }
               }
               ?>      
          </div>
     </div>
     <?php include '../components/bottom-nav.php'; ?>
  </main>
  <?php include '../components/footer.php'; ?>
  </body>
</html>
