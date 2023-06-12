<?php
require('../../config/koneksi.php');
require('../../config/function.php');
require('../../config/session.php');
require('../../config/global.php');

if(isset($_POST['submit'])) {

    $title 	        = $_POST['title'];
    $category_id 	= $_POST['category_id'];
    $body 		    = $_FILES['body']['name'];

    if(!empty($body)) {
        // Rename file foto. Contoh: foto-AG007.jpg
        $extFile = pathinfo($body, PATHINFO_EXTENSION);
        $bodyRename = date('mdY_his') .'.'. $extFile;

        $dirMusic = '../../music-files/';
        $pathMusic = $dirMusic . $bodyRename;
        $body = $bodyRename; // untuk keperluan Query INSERT

        move_uploaded_file($_FILES['body']['tmp_name'], $pathMusic);
    } else {
        $body = '-';
    }
    // Query
    $sql = "UPDATE musics SET 
        title  = '{$title}',
        body   = '{$body}',
        category_id    = '{$category_id}'
    WHERE id ='{$_GET['id']}'";
    $query = mysqli_query($DB_CONNECTION, $sql);

    // mengalihkan halaman
    header('Location: musics.php'); 
}

$sql = "SELECT musics.id, musics.title, musics.body, categories.name as category_name FROM musics 
INNER JOIN categories ON musics.category_id=categories.id
WHERE musics.id = '{$_GET['id']}'
";		
$query = mysqli_query($DB_CONNECTION, $sql);
$music = mysqli_fetch_array($query);

$sql = "SELECT * FROM categories WHERE type = 'musik' ORDER BY name ASC";	
$categories = mysqli_query($DB_CONNECTION, $sql);

// dd(BASE_URL === $_SERVER["REQUEST_URI"]);
require('views/edit-musics.view.php');
