<?php

require('../config/koneksi.php');
require('../config/function.php');
require('../config/global.php');

if(isset($_GET['search'])) {
    $search = $_GET['search'];

    $sql = "SELECT videos.id, videos.name, videos.url, videos.thumbnail, videos.created_at, videos.category_id, categories.name as category_name, first_name, last_name FROM videos 
    INNER JOIN categories ON videos.category_id=categories.id
    INNER JOIN users ON videos.user_id=users.id
    WHERE videos.name LIKE '%{$search}%'
    ORDER BY id DESC";		
    $videos = mysqli_query($DB_CONNECTION, $sql);
} else {
    $sql = "SELECT videos.id, videos.name, videos.url, videos.thumbnail, videos.created_at, videos.category_id, categories.name as category_name, first_name, last_name FROM videos 
    INNER JOIN categories ON videos.category_id=categories.id
    INNER JOIN users ON videos.user_id=users.id
    ORDER BY id DESC";		
    $videos = mysqli_query($DB_CONNECTION, $sql);
}
$sql = "SELECT * FROM categories WHERE type = 'video' ORDER BY id ASC";	
$categories = mysqli_query($DB_CONNECTION, $sql);

// dd(BASE_URL === $_SERVER["REQUEST_URI"]);
require('views/videos.view.php');
