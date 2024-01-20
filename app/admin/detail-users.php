<?php
require('../../config/koneksi.php');
require('../../config/function.php');
require('../../config/session.php');
require('../../config/global.php');

$sql = "SELECT * FROM users WHERE id = '{$_GET['id']}';";
$query = mysqli_query($DB_CONNECTION, $sql);
$user = mysqli_fetch_array($query);

$sql = "SELECT thumbnail, videos.name, created_at, url, categories.name as category_name FROM videos 
INNER JOIN categories ON videos.category_id=categories.id
WHERE videos.user_id = '{$_GET['id']}'
ORDER BY videos.id DESC";		
$videos = mysqli_query($DB_CONNECTION, $sql);

$sql = "SELECT musics.id, musics.title, musics.body, categories.name as category_name FROM musics 
INNER JOIN categories ON musics.category_id=categories.id
WHERE musics.user_id = '{$_GET['id']}'
ORDER BY musics.id DESC";		
$musics = mysqli_query($DB_CONNECTION, $sql);

// dd(BASE_URL === $_SERVER["REQUEST_URI"]);
require('views/detail-users.view.php');


