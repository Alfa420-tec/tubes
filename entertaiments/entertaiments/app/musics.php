<?php

require('../config/koneksi.php');
require('../config/function.php');
require('../config/global.php');

if(isset($_GET['search'])) {
    $search = $_GET['search'];

    $sql = "SELECT musics.id, musics.title, musics.body, musics.category_id, categories.name as category_name, first_name, last_name FROM musics 
    INNER JOIN categories ON musics.category_id=categories.id
    INNER JOIN users ON musics.user_id=users.id
    WHERE title LIKE '%{$search}%'
    ORDER BY id DESC";		
    $musics = mysqli_query($DB_CONNECTION, $sql);
    
} else {
    $sql = "SELECT musics.id, musics.title, musics.body, musics.category_id, categories.name as category_name, first_name, last_name FROM musics 
    INNER JOIN categories ON musics.category_id=categories.id
    INNER JOIN users ON musics.user_id=users.id
    ORDER BY id DESC";		
    $musics = mysqli_query($DB_CONNECTION, $sql);
}

$sql = "SELECT * FROM categories WHERE type = 'musik' ORDER BY id ASC";	
$categories = mysqli_query($DB_CONNECTION, $sql);

// dd(BASE_URL === $_SERVER["REQUEST_URI"]);
require('views/musics.view.php');
