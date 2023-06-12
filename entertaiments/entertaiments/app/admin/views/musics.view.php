<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="description" content="<?php echo $_SITE_DESC ?>">
    <meta name="keywords" content="<?php echo $_SITE_NAME ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $_SITE_NAME ?> | Admin Musik </title>

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
                                <h3>Daftar Musik</h3>
                            </div>
                            <div class="col-6">
                                <div class="float-right"><a href="add-musics.php" class="btn btn-primary">Tambah</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="example" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th width="5">No</th>
                                    <th>Judul</th>
                                    <th>Kategori</th>
                                    <th>Dibuat Oleh</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                $i = 1;
                                while($data = mysqli_fetch_array($musics)) {
                            ?>
                                <tr>
                                    <td class="text-center"><?php echo $i++; ?></td>
                                    <td><?php echo $data['title']; ?></td>
                                    <td><?php echo $data['category_name']; ?></td>
                                    <td><?php echo $data['first_name']; ?> <?php echo $data['last_name']; ?></td>
                                    <td class="text-center">
                                        <a href="edit-musics.php?id=<?php echo $data['id']; ?>" class="btn btn-warning btn-sm">Ubah</a>
                                        <a href="delete-musics.php?id=<?php echo $data['id']; ?>" class="btn btn-danger btn-sm confirm">Hapus</a>
                                    </td>
                                </tr>
                            <?php
                                }
                            ?>
                            </tbody>
                        </table>
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
        var elems = document.getElementsByClassName('confirm');
        var confirmIt = function (e) {
            if (!confirm('Apakah yakin akan dihapus?')) e.preventDefault();
        };

        for (let i = 0, l = elems.length; i < l; i++) {
            elems[i].addEventListener('click', confirmIt, false);
        }
    </script>
  </body>
</html>