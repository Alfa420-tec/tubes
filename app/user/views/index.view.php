<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="description" content="<?php echo $_SITE_DESC ?>">
    <meta name="keywords" content="<?php echo $_SITE_NAME ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $_SITE_NAME ?> | User Dashboard </title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@400;500;600;700&display=swap" rel="stylesheet" />

    <!-- Css Styles -->
    <link rel="stylesheet" href="../../css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="../../css/font-awesome.min.css" type="text/css" />
    <link rel="stylesheet" href="../../css/barfiller.css" type="text/css" />
    <link rel="stylesheet" href="../../css/nowfont.css" type="text/css" />
    <link rel="stylesheet" href="../../css/rockville.css" type="text/css" />
    <link rel="stylesheet" href="../../css/magnific-popup.css" type="text/css" />
    <link rel="stylesheet" href="../../css/owl.carousel.min.css" type="text/css" />
    <link rel="stylesheet" href="../../css/slicknav.min.css" type="text/css" />
    <link rel="stylesheet" href="../../css/style.css" type="text/css" />
    <style>
      .section-title h1 {
          font-size: 100px;
          color: #f2f2f2;
          font-family: "Rockville Solid Regular";
          position: static;
          left: 0;
          top: -45px;
          width: 100%;
          z-index: -1;
      }
    </style>
  </head>
<body>

<?php require('partials/navbar.php'); ?>

<!-- Track Section Begin -->
<section class="track spad">
  <div class="container">
    <div class="row">
        <div class="col-12">
          <div class="section-title float-left">
            <h1>Selamat Datang Kembali <?php if(isset($_SESSION['full_name'])) echo $_SESSION['full_name']; ?></h1>
          </div>
        </div>
        <div class="col-8 m-auto">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-6">
                            <h3>Detail Profile</h3>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Nama Lengkap</p>
                        </div>
                        <div class="col-sm-9">
                            <p class="text-muted mb-0"><?php echo getFullName($user['first_name'], $user['last_name']); ?></p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Username</p>
                        </div>
                        <div class="col-sm-9">
                            <p class="text-muted mb-0"><?php echo $user['username']; ?></p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Level</p>
                        </div>
                        <div class="col-sm-9">
                            <p class="text-muted mb-0"><?php echo $user['level']; ?></p>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
  </div>
</section>
<!-- Track Section End -->

<?php require('partials/footer.php'); ?>
    <!-- Js Plugins -->
    <script src="../../js/jquery-3.3.1.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/jquery.magnific-popup.min.js"></script>
    <script src="../../js/jquery.nicescroll.min.js"></script>
    <script src="../../js/jquery.barfiller.js"></script>
    <script src="../../js/jquery.countdown.min.js"></script>
    <script src="../../js/jquery.slicknav.js"></script>
    <script src="../../js/owl.carousel.min.js"></script>
    <script src="../../js/main.js"></script>

    <!-- Music Plugin -->
    <script src="../../js/jquery.jplayer.min.js"></script>
    <script src="../../js/jplayerInit.js"></script>
  </body>
</html>