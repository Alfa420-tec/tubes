<?php
require('../../config/koneksi.php');
require('../../config/function.php');
require('../../config/session.php');
require('../../config/global.php');

$sql = "SELECT videos.id, videos.thumbnail, videos.name, created_at, categories.name as category_name, first_name, last_name FROM videos 
INNER JOIN categories ON videos.category_id=categories.id
INNER JOIN users ON videos.user_id=users.id
ORDER BY id DESC";		
$videos = mysqli_query($DB_CONNECTION, $sql);

// dd(BASE_URL === $_SERVER["REQUEST_URI"]);
require('views/videos.view.php');
