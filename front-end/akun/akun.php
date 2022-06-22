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
    <link rel="stylesheet" href="./styles/main.css" />
    <title>Document</title>
  </head>
  <body>
    <header>
      <div class="container">
        <div class="navigation-bar">
          <nav>
            <ul class="nav-bar">
              <li class="nav-list">
                <a href="about.html" class="nav-list">Tentang Kami</a>
              </li>
            </ul>
          </nav>
        </div>
        <div class="header">
          <div class="logo-header">
            <p>
              <a href="./index.html"><img src="logo.png" alt="" /></a>
            </p>
          </div>
          <div class="box-search-header">
            <div class="search-header">
              <input
                type="text"
                placeholder="Cari disini...."
                id="search-header"
              />
              <button>
                <a href="search.html"
                  ><i class="fa-solid fa-magnifying-glass"></i
                ></a>
              </button>
            </div>
          </div>
          <div class="menu-header">
            <div class="profile-menu-header">
              <a href="daftar.html">Daftar</a>
              <p>|</p>
              <a href="masuk.html">Masuk</a>
              <p>|</p>
              <a href="keranjang.html">Cart</a>
              <p>|</p>
              <a href="akun.html">
                <img src="user.png" alt="" href="akun.html" class="user" />
              </a>
            </div>
          </div>
        </div>
      </div>
    </header>
    <main>
      <div class="container">
        <div class="profil">
          <div class="info-akun">
            <div class="info-akun2">
              <img src="user.png" alt="" />
              <div class="container-data-user">
                <h1>Test</h1>
                <p>user@gmail.com</p>
              </div>
            </div>
            <div class="menu-info-akun">
              <a href="edit.html">
                <div class="content-menu-info-akun">
                  <p>Edit Profile</p>
                </div>
              </a>
              <a href="index.html">
                <div class="content-menu-info-akun">
                  <p>Logout</p>
                </div>
              </a>
            </div>
          </div>
          <div class="tab-menu">
            <div class="container-pilih-menu">
              <div class="menu-info-akun-mobile">
                <a href="akun.html"
                  ><i class="fa-solid fa-wallet"></i>Belum Dibayar</a
                >
                <a href="scripts/pages/dikemas.html"
                  ><i class="fa-solid fa-box-check">Dikemas</i></a
                >
                <a href="scripts/pages/dikirim.html"
                  ><i class="fa-solid fa-person-carry-box"></i>Dikirim</a
                >
                <a href="scripts/pages/selesai.html"
                  ><i class="fa-solid fa-circle-check"></i>Selesai</a
                >
              </div>
              <div class="container-pilih-menu2">
                <div class="pilih-menu">
                  <div class="content-pilih-menu-active" id="belum-bayar">
                    <a href="akun.html">Belum Bayar</a>
                  </div>
                  <div class="content-pilih-menu" id="dikemas">
                    <a href="scripts/pages/dikemas.html">Dikemas</a>
                  </div>
                  <div class="content-pilih-menu" id="dikirim">
                    <a href="scripts/pages/dikirim.html">Dikirim</a>
                  </div>
                  <div class="content-pilih-menu" id="selesai">
                    <a href="scripts/pages/selesai.html">Selesai</a>
                  </div>
                  <div class="content-pilih-menu" id="dibatalkan">
                    <a href="scripts/pages/dibatalkan.html">Dibatalkan</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="container-content-menu">
              <div id="container-content-menu" style="display: block">
                <div class="container-isi-menu">
                  <div class="isi-keranjang">
                    <div class="container-gambar-judul">
                      <img src="./bg-1.jpg" alt="" />
                      <div class="container-judul">
                        <h1>Test test</h1>
                        <p>
                          Kategori
                          <span>Fashion</span>
                        </p>
                        <p>
                          Total Produk
                          <span>1</span>
                        </p>
                      </div>
                    </div>
                    <div class="container-detail-isi">
                      <div class="container-harga">
                        <p>Total Harga</p>
                        <h1>
                          <span>Rp</span>
                          1.000.000
                        </h1>
                      </div>
                      <a href="#">
                        <div class="bayar">Bayar</div>
                      </a>
                    </div>
                  </div>
                </div>
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
      </div>
    </main>
    <footer-bar>
      <div class="container">
        <p class="copyright">Copyright &copy; 2022 - X-Store</p>
      </div>
    </footer-bar>
  </body>
</html>