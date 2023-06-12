<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="<?php echo $_SITE_DESC ?>">
    <meta name="keywords" content="<?php echo $_SITE_NAME ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $_SITE_NAME ?> | Video</title>

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
</head>

<body>
    <?php require('partials/navbar.php'); ?>

    <!-- Video Section Begin -->
    <section class="videos mt-2">
        <div class="container">
            <div class="row mb-3 mt-4">
                <div class="col-12">
                    <form action="videos.php" method="GET">
                    <div class="row">
                        <div class="col-6">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                    <i class="fa fa-search"></i>
                                    </div>
                                </div>
                                <input type="text" name="search" class="form-control" placeholder="Cari Video .." required>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="input-group mb-3">
                                <input type="submit" name="submit" class="btn btn-outline-primary" value="Cari">
                            </div>
                        </div>
                    </div>
                    
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <?php foreach($categories as $category): ?>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="text-uppercase">
                                <h2 class="font-weight-bold"><?php echo $category['name']; ?></h2>
                            </div>
                        </div>
                        <?php foreach ($videos as $video):
                        if($video['category_id'] == $category['id']){

                        ?>
                        <div class="col-lg-3 p-3">
                            <div class="videos__item">
                                <div class="videos__item__pic set-bg" data-setbg="<?php echo '../img/videos/'. $video['thumbnail']; ?>">
                                    <a href="<?php echo $video['url'] ?>" class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                </div>
                                <div class="videos__item__text">
                                    <h5><?php echo $video['name']; ?>/h5>
                                    <ul>
                                        <li><?php echo getFullName($video['first_name'], $video['last_name']); ?></li>
                                        <li><?php echo getDateFormatVideos($video['created_at']); ?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <?php } endforeach; ?>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
    <!-- Video Section End -->
    

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