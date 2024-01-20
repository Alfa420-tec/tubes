<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="description" content="<?php echo $_SITE_DESC ?>">
    <meta name="keywords" content="<?php echo $_SITE_NAME ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title><?php echo $_SITE_NAME ?> | Home</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@400;500;600;700&display=swap" rel="stylesheet" />

    <!-- Css Styles -->
    <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="../css/font-awesome.min.css" type="text/css" />
    <link rel="stylesheet" href="../css/barfiller.css" type="text/css" />
    <link rel="stylesheet" href="../css/nowfont.css" type="text/css" />
    <link rel="stylesheet" href="../css/rockville.css" type="text/css" />
    <link rel="stylesheet" href="../css/magnific-popup.css" type="text/css" />
    <link rel="stylesheet" href="../css/owl.carousel.min.css" type="text/css" />
    <link rel="stylesheet" href="../css/slicknav.min.css" type="text/css" />
    <link rel="stylesheet" href="../css/style.css" type="text/css" />
    <style>
    .single_player_container h4 {
      font-size: 26px;
      color: #111111;
      font-weight: 700;
      margin-bottom: 0px;
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

<!-- Hero Section Begin -->
<section class="hero spad set-bg" data-setbg="../img/Background.jpg">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="hero__text">
          <h1><?php echo $_SITE_NAME; ?></h1>
          <p>Website hiburan </br> Bersantailah dan nikmati video dan musik yang tersedia.</p>
          <a href="https://www.youtube.com/watch?v=K4DyBUG242c" class="play-btn video-popup"><i class="fa fa-play"></i></a>
        </div>
      </div>
    </div>
  </div>
  <div class="linear__icon">
    <i class="fa fa-angle-double-down"></i>
  </div>
</section>
<!-- Hero Section End -->

<!-- Track Section Begin -->
<section class="track spad">
  <div class="container">
    <div class="row">
      <div class="col-lg-7">
        <div class="section-title">
          <h2>Terakhir Ditambahkan</h2>
          <h1>Last Music</h1>
        </div>
      </div>
      <div class="col-lg-5">
        <div class="track__all">
          <a href="musics.php" class="primary-btn border-btn">Lihat Semua</a>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-7 p-0">
        <div class="track__content nice-scroll">
          <?php foreach ($musics as $key => $music): ?>
          <div class="single_player_container">
            <h4><?php echo $music['title']; ?> <span class="music-categories">(<?php echo $music['category_name']?>)</span></h4>
            <p>Ditambahkan oleh: <?php echo getFullName($music['first_name'], $music['last_name']); ?></p>
            <div class="jp-jplayer jplayer" data-ancestor=".jp_container_<?php echo $key+1?>" data-url="<?php echo '../music-files/'. $music['body']; ?>"></div>
            <div class="jp-audio jp_container_<?php echo $key+1?>" role="application" aria-label="media player">
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
          <?php endforeach; ?>
        </div>
      </div>


      <div class="col-lg-5 p-0">
        <div class="track__pic">
          <img src="../img/skill-video.jpg" alt="" />
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Track Section End -->

<!-- Youtube Section Begin -->
<section class="youtube spad">
  <div class="container">
    <div class="row">
        <div class="col-lg-7">
          <div class="section-title float-left">
            <h2>Terakhir Ditambahkan</h2>
            <h1>Last Video</h1>
          </div>
        </div>
        <div class="col-lg-5">
          <div class="track__all">
            <a href="videos.php" class="primary-btn border-btn">Lihat Semua</a>
          </div>
        </div>
      </div>
    <div class="row">
      <?php foreach($videos as $video): ?>
      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="youtube__item">
          <div class="youtube__item__pic set-bg" data-setbg="<?php echo '../img/videos/' . $video['thumbnail']; ?>">
            <a href="<?php echo $video['url']; ?>" class="play-btn video-popup"><i class="fa fa-play"></i></a>
          </div>
          <div class="youtube__item__text">
            <h4><?php echo $video['name']; ?></h4>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<!-- Youtube Section End -->

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