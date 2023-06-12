<?php
require('../config/koneksi.php');
require('../config/function.php');
require('../config/global.php');

$sql = "SELECT musics.id, musics.title, musics.body, categories.name as category_name, first_name, last_name FROM musics 
INNER JOIN categories ON musics.category_id=categories.id
INNER JOIN users ON musics.user_id=users.id
ORDER BY id DESC LIMIT 4";		
$musics = mysqli_query($DB_CONNECTION, $sql);

$sql = "SELECT videos.id, videos.name, videos.url, videos.thumbnail, videos.created_at, videos.category_id, categories.name as category_name, first_name, last_name FROM videos 
INNER JOIN categories ON videos.category_id=categories.id
INNER JOIN users ON videos.user_id=users.id
ORDER BY id DESC LIMIT 3";		
$videos = mysqli_query($DB_CONNECTION, $sql);

// dd(BASE_URL === $_SERVER["REQUEST_URI"]);
require('views/index.view.php');
