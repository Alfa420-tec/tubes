<?php
require('../../config/koneksi.php');
require('../../config/session.php');
require('../../config/global.php');
require('../../config/function.php');

$sql = "SELECT * FROM categories ORDER BY id DESC";		
$categories = mysqli_query($DB_CONNECTION, $sql);

// dd(BASE_URL === $_SERVER["REQUEST_URI"]);
require('views/categories.view.php');
