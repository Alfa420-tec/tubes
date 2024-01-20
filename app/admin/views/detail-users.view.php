<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="description" content="<?php echo $_SITE_DESC ?>">
    <meta name="keywords" content="<?php echo $_SITE_NAME ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $_SITE_NAME ?> | Admin Detail Pengguna</title>

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
        .single_player_container h4 {
            font-size: 18px;
            color: #111111;
            font-weight: 600;
            margin-bottom: 5px;
            text-transform: uppercase;
        }
        .music-categories{
            font-size: 13px;
            display: inline-block;
            color: #5c00ce;
            margin: auto
        }
    </style>
  </head>
<body>

<?php require('partials/navbar.php'); ?>

<!-- Track Section Begin -->
<section class="musik mt-4" style="padding-bottom: 80px;">
    <div class="container">
        <div class="row mb-4">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-6">
                                <h3>Detail Pengguna</h3>
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
        <div class="row mb-4">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-6">
                                <h3>Video <?php echo getFullName($user['first_name'], $user['last_name']) ?></h3>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <?php foreach ($videos as $video):?>
                            <div class="col-lg-3 p-3">
                                <div class="videos__item">
                                    <div class="videos__item__pic set-bg" data-setbg="<?php echo '../../img/videos/' . $video['thumbnail'];?>">
                                        <a href="<?php echo $video['url'] ?>" class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                    </div>
                                    <div class="videos__item__text">
                                        <h5><?php echo $video['name'] ?></h5>
                                        <ul>
                                            <li><i class="fa fa-tags"></i> <?php echo $video['category_name']?></li>
                                            <li><?php echo getDateFormatVideos($video['created_at'])?></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-6">
                                <h3>Musik <?php echo getFullName($user['first_name'], $user['last_name']) ?></h3>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            
                            <?php foreach($musics as $key => $music): ?>
                            <div class="col-lg-12 mb-4">
                                <div class="single_player_container">
                                    <h4><?php echo $music['title']; ?> <span class="music-categories">(<?php echo $music['category_name']?>)</span> </h4>
                                    
                                    <div class="jp-jplayer jplayer" data-ancestor=".jp_container_<?php echo $key+1; ?>" data-url="<?php echo '../../music-files/' . $music['body']; ?>"></div>
                                    <div class="jp-audio jp_container_<?php echo $key+1; ?>" role="application" aria-label="media player">
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
                            <?php endforeach; ?>
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