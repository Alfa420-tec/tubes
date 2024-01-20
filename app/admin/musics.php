<?php
require('../../config/koneksi.php');
require('../../config/function.php');
require('../../config/session.php');
require('../../config/global.php');

$sql = "SELECT musics.id, musics.title, categories.name as category_name, first_name, last_name FROM musics 
INNER JOIN categories ON musics.category_id=categories.id
INNER JOIN users ON musics.user_id=users.id
ORDER BY id DESC";		
$musics = mysqli_query($DB_CONNECTION, $sql);

$sql_count = "SELECT id FROM musics;";
$query_count = mysqli_query($DB_CONNECTION, $sql_count);		
$row = $query_count->num_rows;

// dd(BASE_URL === $_SERVER["REQUEST_URI"]);
require('views/musics.view.php');
