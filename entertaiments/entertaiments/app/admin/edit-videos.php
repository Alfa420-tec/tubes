<?php
require('../../config/koneksi.php');
require('../../config/function.php');
require('../../config/session.php');
require('../../config/global.php');

if(isset($_POST['submit'])) {

    $name 	        = $_POST['name'];
    $category_id 	= $_POST['category_id'];
    $url 	= $_POST['url'];
    $thumbnail 		= $_FILES['thumbnail']['name'];

    if(!empty($thumbnail)) {
        // Rename file foto. Contoh: foto-AG007.jpg
        $extFile = pathinfo($thumbnail, PATHINFO_EXTENSION);
        $thumbnailRename = date('mdY_his') .'.'. $extFile;

        $dirMusic = '../../img/videos/';
        $pathMusic = $dirMusic . $thumbnailRename;
        $thumbnail = $thumbnailRename; // untuk keperluan Query INSERT

        move_uploaded_file($_FILES['thumbnail']['tmp_name'], $pathMusic);
    } else {
        $thumbnail = '-';
    }
    // Query
    $sql = "UPDATE videos SET 
        name  = '{$name}',
        thumbnail   = '{$thumbnail}',
        category_id    = '{$category_id}',
        url         = '{$url}'
    WHERE id ='{$_GET['id']}'";
    $query = mysqli_query($DB_CONNECTION, $sql);

    // mengalihkan halaman
    header('Location: videos.php'); 
}

$sql = "SELECT videos.id, videos.name, videos.thumbnail, videos.url, categories.name as category_name FROM videos 
INNER JOIN categories ON videos.category_id=categories.id
WHERE videos.id = '{$_GET['id']}'
";		
$query = mysqli_query($DB_CONNECTION, $sql);
$video = mysqli_fetch_array($query);

$sql = "SELECT * FROM categories WHERE type = 'video' ORDER BY name ASC";	
$categories = mysqli_query($DB_CONNECTION, $sql);

// dd(BASE_URL === $_SERVER["REQUEST_URI"]);
require('views/edit-videos.view.php');
