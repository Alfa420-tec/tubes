<?php
require('../../config/koneksi.php');
require('../../config/function.php');
require('../../config/session.php');
require('../../config/global.php');

$sql = "SELECT * FROM users ORDER BY id DESC";		
$users = mysqli_query($DB_CONNECTION, $sql);

$sql_count = "SELECT id FROM categories";
$query_count = mysqli_query($DB_CONNECTION, $sql_count);		
$row = $query_count->num_rows;

// dd(BASE_URL === $_SERVER["REQUEST_URI"]);
require('views/users.view.php');
