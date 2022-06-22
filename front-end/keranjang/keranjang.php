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
    <title>X-Store</title>
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
            <p><a href="./index.html">X-STORE</a></p>
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
        <div class="header-keranjang">
          <h1>Keranjang Belanja Anda</h1>
        </div>
        <div class="container-isi">
          <div class="content-keranjang">
            <div class="container-gambar">
              <img src="bg-1.jpg" alt="" />
              <div class="container-judul">
                <h1>Test test</h1>
                <p>Kategori <span>Fashion</span></p>
                <p>Total Produk <span>3</span></p>
              </div>
            </div>
            <div class="container-detail">
              <div class="container-harga">
                <p>Total Harga</p>
                <h1><span>Rp</span> 200000</h1>
              </div>
              <div class="bayar">
                <a href="checkout.html">Checkout</a>
              </div>
            </div>
          </div>
          <div class="content-keranjang">
            <div class="container-gambar">
              <img src="bg-1.jpg" alt="" />
              <div class="container-judul">
                <h1>Test test</h1>
                <p>Kategori <span>Fashion</span></p>
                <p>Total Produk <span>3</span></p>
              </div>
            </div>
            <div class="container-detail">
              <div class="container-harga">
                <p>Total Harga</p>
                <h1><span>Rp</span> 200000</h1>
              </div>
              <div class="bayar">
                <a href="checkout.html">Checkout</a>
              </div>
            </div>
          </div>
          <!-- <div class="keranjang-kosong">
            <p>Belum ada produk di keranjang</p>
          </div> -->
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
    <footer>
      <div class="container">
        <p class="copyright">Copyright &copy; 2022 - X-Store</p>
      </div>
    </footer>
  </body>
</html>