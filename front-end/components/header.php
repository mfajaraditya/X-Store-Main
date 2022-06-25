<header>
  <div class="container">
    <div class="navigation-bar">
      <nav>
        <ul class="nav-bar">
          <li class="nav-list">
            <a href="<?php echo $url; ?>about/about" class="nav-list">Tentang Kami</a>
          </li>
        </ul>
      </nav>
    </div>
    <div class="header">
      <a href="<?php echo $url; ?>">
        <div class="logo-header">
          <img src="<?php echo $url; ?>assets/images/logo.png">
      </a>
    </div>
    </a>

    <div class="box-search-header">
      <div class="search_header">
        <input type="text" placeholder="<?php echo $placeholder_search; ?>" id="search_header" oninput="SearchHeader('<?php echo $url; ?>')">
        <button><i class="fa-solid fa-magnifying-glass"></i></button>
      </div>
      <div class="res_search_header" id="res_search_header">
        <div id="isi_res_search_header"></div>
      </div>
    </div>
    <div class="menu-header">
      <div class="profile-menu-header">
        <?php
        if (isset($_COOKIE['login'])){
        ?>
        <a href="<?php echo $url; ?>keranjang/keranjang">Cart</a>
        <p>|</p>
        <a href="<?php echo $url; ?>akun/akun">
          <img src="<?php echo $url; ?>assets/images/user.png" class="user" />
        </a>
        <?php
        } else {
        ?> 
        <a href="<?php echo $url; ?>daftar-masuk/daftar">Daftar</a>
        <p>|</p>
        <a href="<?php echo $url; ?>daftar-masuk/masuk">Masuk</a>
        <?php
        }
        ?>
      </div>
    </div>
  </div>
  </div>
</header>
<script src="<?php echo $url; ?>assets/js/header.js"></script>