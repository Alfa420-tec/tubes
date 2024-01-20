<?php
require('../../config/koneksi.php');
require('../../config/function.php');
require('../../config/session.php');
require('../../config/global.php');

if(isset($_POST['submit'])) {

    $name 	        = $_POST['name'];
    $category_id 	= $_POST['category_id'];
    $fileFoto 	    = $_FILES['thumbnail']['name'];
    $user_id        = $_SESSION['id_user'];
    $url 		    = $_POST['url'];
    $created_at     = date("Y-m-d h:i:s");

    if(!empty($fileFoto)) {
        // Rename file foto. Contoh: foto-AG007.jpg
        $extFile = pathinfo($fileFoto, PATHINFO_EXTENSION);
        $fileFotoRename = date('mdY_his') .'.'. $extFile;

        $dirImages = '../../img/videos/';
        $pathImage = $dirImages . $fileFotoRename;
        $fileFoto = $fileFotoRename; // untuk keperluan Query INSERT

        move_uploaded_file($_FILES['thumbnail']['tmp_name'], $pathImage);
    } else {
        $fileFoto = '-';
    }
    // Query
    $sql = "INSERT INTO videos(name,url,thumbnail,user_id,category_id,created_at) VALUES('{$name}','{$url}', '{$fileFoto}', '{$user_id}', '{$category_id}', '{$created_at}')";
    $query = mysqli_query($DB_CONNECTION, $sql);

    // mengalihkan halaman
    header('Location: videos.php'); 
}

$sql = "SELECT * FROM categories WHERE type = 'video' ORDER BY name ASC";	
$categories = mysqli_query($DB_CONNECTION, $sql);

// dd(BASE_URL === $_SERVER["REQUEST_URI"]);
require('views/add-videos.view.php');
