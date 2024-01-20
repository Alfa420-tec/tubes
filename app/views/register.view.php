<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="<?php echo $_SITE_DESC ?>">
    <meta name="keywords" content="<?php echo $_SITE_NAME ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $_SITE_NAME ?> | Register</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="../css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="../css/barfiller.css" type="text/css">
    <link rel="stylesheet" href="../css/nowfont.css" type="text/css">
    <link rel="stylesheet" href="../css/rockville.css" type="text/css">
    <link rel="stylesheet" href="../css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="../css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="../css/style.css" type="text/css">
    <style>

        a:hover{
            color:#6f42c1;
        }
    </style>
</head>

<body>
    <?php require('partials/navbar.php'); ?>

    <!-- Track Section Begin -->
    <section class="track spad">
    <div class="container">
        <div class="row">
            <div class="m-auto col-lg-6">
                <div class="contact__form">
                    <div class="section-title">
                        <h2>Register</h2>
                    </div>
                    <p>Registrasi dengan mudah di <?php echo $_SITE_NAME ?>. Dapat menyenangkan hati dan pikiran. </p>
                        <form action="register.php" method="POST">
                            <div class="row">
                                <div class="col">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                            <i class="fa fa-user"></i>
                                            </div>
                                        </div>
                                        <input type="text" name="first_name" class="form-control" placeholder="Nama Depan" required>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                            <i class="fa fa-user"></i>
                                            </div>
                                        </div>
                                        <input type="text" name="last_name" class="form-control" placeholder="Nama Belakang">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                    <i class="fa fa-user"></i>
                                    </div>
                                </div>
                                <input type="text" name="username" class="form-control" placeholder="Username" required>
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                    <i class="fa fa-lock"></i>
                                    </div>
                                </div>
                                <input type="text" name="password" class="form-control" placeholder="Password" required>
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                    <i class="fa fa-lock"></i>
                                    </div>
                                </div>
                                <input type="text" name="password_confirm" class="form-control" placeholder="Konfirmasi Password" required>
                            </div>
                            
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-primary form-control" value="Register">
                            </div>
                            <p>Sudah punya akun? <a href="./login.php">Login</a></p>
                        </form>
                </div>
            </div>
        </div>
    </div>
    </section>
    <!-- Track Section End -->

    <?php require('partials/footer.php'); ?>

    <!-- Js Plugins -->
    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.magnific-popup.min.js"></script>
    <script src="../js/jquery.nicescroll.min.js"></script>
    <script src="../js/jquery.barfiller.js"></script>
    <script src="../js/jquery.countdown.min.js"></script>
    <script src="../js/jquery.slicknav.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
    <script src="../js/main.js"></script>

    <!-- Music Plugin -->
    <script src="../js/jquery.jplayer.min.js"></script>
    <script src="../js/jplayerInit.js"></script>
</body>

</html>