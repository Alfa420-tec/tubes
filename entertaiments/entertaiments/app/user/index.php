<?php
// dd(BASE_URL === $_SERVER["REQUEST_URI"]);

require('../../config/koneksi.php');
require('../../config/session.php');
require('../../config/function.php');
require('../../config/global.php');

$sql = "SELECT * FROM users WHERE id = '{$_SESSION['id_user']}';";
$query = mysqli_query($DB_CONNECTION, $sql);
$user = mysqli_fetch_array($query);

require('views/index.view.php');
