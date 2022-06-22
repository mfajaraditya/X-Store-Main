<header>
      <div class="container">
        <div class="navigation-bar">
          <nav>
            <ul class="nav-bar">
              <li class="nav-list">
                <a href="../front-end/about/about.php" class="nav-list">Tentang Kami</a>
              </li>
            </ul>
          </nav>
        </div>
        <div class="header">
        <a href="<?php echo $url; ?>">
        <div class="logo-header">
              <img src="<?php echo $url; ?>assets/images/logo.png"></a>    
          </div>
        </a>
          
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
              <a href="../front-end/daftar-masuk/daftar.php">Daftar</a>
              <p>|</p>
              <a href="../front-end/daftar-masuk/masuk.php">Masuk</a>
              <p>|</p>
              <a href="../front-end/keranjang/keranjang.php">Cart</a>
              <p>|</p>
              <a href="../front-end/akun/akun.php">
                <img src="user.png" alt="" href="akun.html" class="user" />
              </a>
            </div>
          </div>
        </div>
      </div>
    </header>