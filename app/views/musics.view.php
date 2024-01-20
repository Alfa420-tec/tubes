<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="<?php echo $_SITE_DESC ?>">
    <meta name="keywords" content="<?php echo $_SITE_NAME ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $_SITE_NAME ?> | Musik</title>

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
        .single_player_container h4 {
            font-size: 24px;
            color: #111111;
            font-weight: 700;
            margin-bottom: 0px;
            text-transform: uppercase;
            margin-top: 15px;
        }
    </style>
</head>

<body>
    <?php require('partials/navbar.php'); ?>

    <!-- Track Section Begin -->
    <section class="music mt-2">
        <div class="container">
            <div class="row mb-3 mt-4">
                <div class="col-12">
                    <form action="musics.php" method="GET">
                    <div class="row">
                        <div class="col-6">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                    <i class="fa fa-search"></i>
                                    </div>
                                </div>
                                <input type="text" name="search" class="form-control" placeholder="Cari Musik .." required>
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
            <?php foreach($categories as $category): ?>
            <div class="row mb-3">
                <div class="col-lg-12">
                    <div class="text-uppercase">
                        <h2 class="font-weight-bold"><?php echo $category['name']; ?></h2>
                    </div>
                </div>
                <?php foreach($musics as $key => $music):
                 if($music['category_id'] == $category['id']) {?>

                <div class="col-lg-6">
                    <div class="single_player_container">
                        <h4><?php echo $music['title']; ?></h4>
                        <p>Ditambahkan oleh: <?php echo getFullName($music['first_name'], $music['last_name']); ?></p>
                        <div class="jp-jplayer jplayer" data-ancestor=".jp_container_<?php echo $key+1 ?>" data-url="<?php echo '../music-files/' . $music['body']; ?>"></div>
                        <div class="jp-audio jp_container_<?php echo $key+1 ?>" role="application" aria-label="media player">
                        <div class="jp-gui jp-interface">
                            <!-- Player Controls -->
                            <div class="player_controls_box">
                            <button class="jp-play player_button" tabindex="0"></button>
                            </div>
                            <!-- Progress Bar -->
                            <div class="player_bars">
                            <div class="jp-progress">
                                <div class="jp-seek-bar">
                                <div>
                                    <div class="jp-play-bar">
                                    <div class="jp-current-time" role="timer" aria-label="time">0:00</div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="jp-duration ml-auto" role="timer" aria-label="duration">00:00</div>
                            </div>
                            <!-- Volume Controls -->
                            <div class="jp-volume-controls">
                            <button class="jp-mute" tabindex="0"><i class="fa fa-volume-down"></i></button>
                            <div class="jp-volume-bar">
                                <div class="jp-volume-bar-value" style="width: 0%"></div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <?php } endforeach; ?>
            </div>
            <?php endforeach; ?>
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