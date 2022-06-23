<?php
include '../config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://kit.fontawesome.com/79bd89534b.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../assets/css/components/about-us.css">
  <title>X-Store</title>
</head>
<body>
  <header>
    <div class="container">
      <div class="header">
        <a href="<?php echo $url; ?>">
          <div class="logo-header">
            <img src="<?php echo $url; ?>assets/images/logo.png">
        </a>
      </div>
    </div>
    </div>
  </header>
  <main>
    <div class="container">
      <div class="container-au">
        <div class="about-us">
          <h1>Tentang Kami</h1>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsum voluptas laborum temporibus magni. Facilis reprehenderit harum dolorem quaerat repellendus cumque sapiente laboriosam quibusdam tempore, similique dignissimos enim itaque ea maiores!</p><br>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reprehenderit magnam error velit enim sunt impedit eaque explicabo deserunt nihil, nostrum deleniti itaque, soluta tempore rem veniam ex nulla adipisci sapiente?</p>
        </div>
      </div>
    </div>
  </main>
  <?php include '../components/footer.php'; ?>
</body>
</html>