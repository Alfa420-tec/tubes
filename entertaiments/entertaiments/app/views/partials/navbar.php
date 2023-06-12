<!-- Page Preloder -->
<div id="preloder">
  <div class="loader"></div>
</div>

<!-- Header Section Begin -->
<header class="header header--normal">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-md-2">
                <div class="header__logo">
                    <h2 class="text-white font-weight-bold m-auto"><?php echo $_SITE_NAME_LOGO; ?></h2>
                </div>
            </div>
            <div class="col-lg-10 col-md-10">
                <div class="header__nav">
                    <nav class="header__menu mobile-menu">
                        <ul>
                            <li class="<?= ($_SERVER["REQUEST_URI"] === BASE_URL) ? 'active' : ''; ?>"><a href="./">Home</a></li>
                            <li class="<?= ($_SERVER["REQUEST_URI"] === BASE_URL . 'musics.php') ? 'active' : ''; ?>"><a href="./musics.php">Musik</a></li>
                            <li class="<?= ($_SERVER["REQUEST_URI"] === BASE_URL . 'videos.php') ? 'active' : ''; ?>"><a href="./videos.php">Videos</a></li>
                        </ul>
                    </nav>
                    <div class="header__right__social">
                        <a href="./login.php" class="btn btn-outline-primary"><i class="fa fa-sign-in"> </i> Login</a>
                        <a href="./register.php" class="btn btn-outline-secondary"><i class="fa fa-user-plus"> </i> Register</a>
                    </div>
                </div>
            </div>
        </div>
        <div id="mobile-menu-wrap"></div>
    </div>
</header>
<!-- Header Section End -->
