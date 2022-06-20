<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Seller X-STORE</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../plugins/summernote/summernote-bs4.min.css">

  <style>
    .card{
      border-radius: 17px 17px 17px 17px;
      box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
      display: flex;
    }

    a{
      color:inherit;
      text-decoration: none;
    }
  </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="../dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">X-STORE</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Hai, Raihan Cahtra</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="../index.php" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
         
          <li class="nav-item">
            <a href="../produk/produk.php" class="nav-link">
              <i class="nav-icon fas fa-box"></i>
              <p>
                Produk
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="../kategori/kategori.php" class="nav-link">
              <i class="nav-icon fas fa-th-list"></i>
              <p>
                Kategori
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="../pelanggan/pelanggan.php" class="nav-link">
              <i class="nav-icon fas fa-users-cog"></i>
              <p>
                Akun Pelanggan
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="../transaksi/transaksi.php" class="nav-link">
              <i class="nav-icon fas fa-shopping-bag"></i>
              <p>
                Transaksi
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="../penjualan/penjualan.php" class="nav-link">
              <i class="nav-icon fas fa-bolt"></i>
              <p>
                Flash Sale
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="../pengaturan.php" class="nav-link">
              <i class="nav-icon fas fa-cog"></i>
              <p>
                Pengaturan
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="../keluar.php" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Keluar
              </p>
            </a>
          </li>

      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6"><br>
            <h1 class="m-0">Transaksi</h1><br>
          </div><!-- /.col -->
          <div class="col-sm-6">
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <ul class="nav">
          <li class="nav-item ml-2">
            <div class="card">
              <div class="card-body">
                <a class="nav-link" href="#" id="belum">Belum Dibayar</a>
              </div>
            </div>
          </li>
          
          <li class="nav-item ml-2">
            <div class="card">
              <div class="card-body">
                <a class="nav-link" href="#" id="sudah">Sudah Dibayar</a>
              </div>
            </div>
          </li>

          <li class="nav-item ml-2">
            <div class="card">
              <div class="card-body">
                <a class="nav-link" href="#" id="kirim">Dikirim</a>
              </div>
            </div>
          </li>

          <li class="nav-item ml-2">
            <div class="card">
              <div class="card-body">
                <a class="nav-link" href="#" id="selesai">Selesai</a>
              </div>
            </div>
          </li>

          <li class="nav-item ml-2">
            <div class="card">
              <div class="card-body">
                <a class="nav-link" href="#" id="batal">Dibatalkan</a>
              </div>
            </div>
          </li>
        </ul>
        
       <div class="badan"></div>

        <!-- /.row -->
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2022. X-STORE</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Versi</b> 1.01
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="../plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="../plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../plugins/moment/moment.min.js"></script>
<script src="../plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../dist/js/pages/dashboard.js"></script>

<script type="text/javascript">
	$(document).ready(function(){
		$('.nav-link').click(function(){
			var menu = $(this).attr('id');
			if(menu == "belum"){
				$('.badan').load('belum.php');						
			}else if(menu == "sudah"){
				$('.badan').load('sudah.php');						
			}else if(menu == "kirim"){
				$('.badan').load('kirim.php');						
			}else if(menu == "selesai"){
				$('.badan').load('selesai.php');						
			}else if(menu == "batal"){
				$('.badan').load('batal.php');
      }
		});
 
 
		// halaman yang di load default pertama kali
		$('.badan').load('belum.php');						
 
	});
</script>
</body>
</html>
