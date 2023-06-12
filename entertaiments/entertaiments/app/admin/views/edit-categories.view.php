<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="description" content="<?php echo $_SITE_DESC ?>">
    <meta name="keywords" content="<?php echo $_SITE_NAME ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $_SITE_NAME ?> | Admin Ubah Kategori</title>

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
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
  </head>
<body>

<?php require('partials/navbar.php'); ?>

<!-- Track Section Begin -->
<section class="musik mt-4">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-6">
                                <h3>Ubah Kategori</h3>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="edit-categories.php?id=<?php echo $_GET['id']; ?>" method="POST">
                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label">Nama Kategori</label>
                                <div class="col-sm-10">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Nama Kategori" value="<?php echo $data['name']; ?>" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="type" class="col-sm-2 col-form-label">Tipe</label>
                                <div class="col-sm-10">
                                    <select name="type" id="type" class="form-control" required>
                                        <option value="musik"  <?php echo ($data['type'] == 'musik') ? 'selected' : ''; ?>>Musik </option>
                                        <option value="video"  <?php echo ($data['type'] == 'video') ? 'selected' : ''; ?>>Video </option>
                                        
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="category" class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <input type="submit" name="submit" value="Simpan" class="btn btn-primary">
                                    <a href="categories.php" class="btn btn-outline-secondary">Kembali</a>
                                </div>
                            </div>
                            </form>
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

    <script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#example').DataTable();
        });
    </script>
  </body>
</html>