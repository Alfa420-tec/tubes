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
                            <li class="<?= ($_SERVER["REQUEST_URI"] === BASE_URL_ADMIN) ? 'active' : ''; ?>"><a href="./">Dashboard</a></li>
                            <li class="<?= ($_SERVER["REQUEST_URI"] === BASE_URL_ADMIN . 'users.php') ? 'active' : ''; ?>"><a href="./users.php">Pengguna</a></li>
                            <li class="<?= ($_SERVER["REQUEST_URI"] === BASE_URL_ADMIN . 'categories.php') ? 'active' : ''; ?>"><a href="./categories.php">Kategori</a></li>
                            <li class="<?= ($_SERVER["REQUEST_URI"] === BASE_URL_ADMIN . 'musics.php') ? 'active' : ''; ?>"><a href="./musics.php">Musik</a></li>
                            <li class="<?= ($_SERVER["REQUEST_URI"] === BASE_URL_ADMIN . 'videos.php') ? 'active' : ''; ?>"><a href="./videos.php">Videos</a></li>
                        </ul>
                    </nav>
                    <div class="header__right__social">
                        <a href="logout.php" class="btn btn-outline-danger"> <i class="fa fa-sign-out"> </i> Logout</i></a>
                    </div>
                </div>
            </div>
        </div>
        <div id="mobile-menu-wrap"></div>
    </div>
</header>
<!-- Header Section End -->
