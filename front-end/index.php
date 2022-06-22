<?php
include "./config.php";
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./assets/css/main.css" />
    <title>X-Store</title>
  </head>
  <body>
    <?php include './components/header.php'; ?>
    <main>
      <div class="container-kategori">
        <div class="kategori">
        <?php
            $kategori = $server->query("SELECT * FROM `kategori`");
            while ($kategori_data = mysqli_fetch_assoc($kategori)){
              ?>
              <a href="<?php echo $url; ?>kategori/kategori/<?php echo $kategori_data['id']; ?>">
              <div class="content-kategori">
                <img src="assets/icons/<?php echo $kategori_data['icon']; ?>" />
                <p><?php echo $kategori_data['nama']; ?></p>
              </div>
            </a>
            <?php 
              }
            ?>
        </div>
      </div>
      <!-- <div class="container">
        <div class="flash-sale">
          <div class="title-fs">
            <div class="container-title-fs">
              <div class="container-fs">
                <h1>Flash Sale</h1>
              </div>
            </div>
          </div>
          <div class="container-iklan-fs-1">
            <div class="container-iklan-fs">
              <div class="iklan-fs">
                <img src="./bg-1.jpg" alt="" />
                <a href="produk.html">
                  <div class="title-iklan-fs">
                    <h1>
                      Test <br />
                      <span>Rp. 2.000.000</span>
                    </h1>
                  </div>
                </a>
              </div>
              <div class="iklan-fs">
                <img src="./bg-2.jpg" alt="" />
                <a href="#">
                  <div class="title-iklan-fs">
                    <h1>
                      Test <br />
                      <span>Rp. 2.000.000</span>
                    </h1>
                  </div>
                </a>
              </div>
              <div class="iklan-fs">
                <img src="./bg-3.jpg" alt="" />
                <a href="#">
                  <div class="title-iklan-fs">
                    <h1>
                      Test <br />
                      <span>Rp. 2.000.000</span>
                    </h1>
                  </div>
                </a>
              </div>
              <div class="iklan-fs">
                <img src="./bg-4.jpg" alt="" />
                <a href="#">
                  <div class="title-iklan-fs">
                    <h1>
                      Test <br />
                      <span>Rp. 2.000.000</span>
                    </h1>
                  </div>
                </a>
              </div>
              <div class="iklan-fs">
                <img src="./bg-5.jpg" alt="" />
                <a href="#">
                  <div class="title-iklan-fs">
                    <h1>
                      Test <br />
                      <span>Rp. 2.000.000</span>
                    </h1>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="flash-sale">
          <div class="title-fs">
            <div class="container-title-fs">
              <div class="container-fs">
                <h1>Produk Terlaris</h1>
              </div>
            </div>
          </div>
          <div class="container-iklan-fs-1">
            <div class="container-iklan-fs grid-terlaris">
              <div class="iklan-fs">
                <img src="./bg-1.jpg" alt="" />
                <a href="#">
                  <div class="title-iklan-fs">
                    <h1>
                      Test <br />
                      <span>Rp. 2.000.000</span>
                    </h1>
                  </div>
                </a>
              </div>
              <div class="iklan-fs">
                <img src="./bg-2.jpg" alt="" />
                <a href="#">
                  <div class="title-iklan-fs">
                    <h1>
                      Test <br />
                      <span>Rp. 2.000.000</span>
                    </h1>
                  </div>
                </a>
              </div>
              <div class="iklan-fs">
                <img src="./bg-3.jpg" alt="" />
                <a href="#">
                  <div class="title-iklan-fs">
                    <h1>
                      Test <br />
                      <span>Rp. 2.000.000</span>
                    </h1>
                  </div>
                </a>
              </div>
              <div class="iklan-fs">
                <img src="./bg-4.jpg" alt="" />
                <a href="#">
                  <div class="title-iklan-fs">
                    <h1>
                      Test <br />
                      <span>Rp. 2.000.000</span>
                    </h1>
                  </div>
                </a>
              </div>
              <div class="iklan-fs">
                <img src="./bg-5.jpg" alt="" />
                <a href="#">
                  <div class="title-iklan-fs">
                    <h1>
                      Test <br />
                      <span>Rp. 2.000.000</span>
                    </h1>
                  </div>
                </a>
              </div>
              <div class="iklan-fs">
                <img src="./bg-1.jpg" alt="" />
                <a href="#">
                  <div class="title-iklan-fs">
                    <h1>
                      Test <br />
                      <span>Rp. 2.000.000</span>
                    </h1>
                  </div>
                </a>
              </div>
              <div class="iklan-fs">
                <img src="./bg-2.jpg" alt="" />
                <a href="#">
                  <div class="title-iklan-fs">
                    <h1>
                      Test <br />
                      <span>Rp. 2.000.000</span>
                    </h1>
                  </div>
                </a>
              </div>
              <div class="iklan-fs">
                <img src="./bg-3.jpg" alt="" />
                <a href="#">
                  <div class="title-iklan-fs">
                    <h1>
                      Test <br />
                      <span>Rp. 2.000.000</span>
                    </h1>
                  </div>
                </a>
              </div>
              <div class="iklan-fs">
                <img src="./bg-4.jpg" alt="" />
                <a href="#">
                  <div class="title-iklan-fs">
                    <h1>
                      Test <br />
                      <span>Rp. 2.000.000</span>
                    </h1>
                  </div>
                </a>
              </div>
              <div class="iklan-fs">
                <img src="./bg-5.jpg" alt="" />
                <a href="#">
                  <div class="title-iklan-fs">
                    <h1>
                      Test <br />
                      <span>Rp. 2.000.000</span>
                    </h1>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="bottom-nav">
        <div class="bot-nav">
          <a href="index.html">
            <div class="content-nav">
              <h5>Home</h5>
            </div>
          </a>
          <a href="keranjang.html">
            <div class="content-nav">
              <h5>Cart</h5>
            </div>
          </a>
          <a href="akun.html">
            <div class="content-nav">
              <h5>Akun</h5>
            </div>
          </a>
        </div>
      </div> -->
    </main>
  <?php include './components/footer.php'; ?>
  </body>
</html>
