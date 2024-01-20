<?php
require('../../config/koneksi.php');
require('../../config/session.php');
require('../../config/global.php');
require('../../config/function.php');

if(isset($_POST['submit'])) {

    $name 	= $_POST['name'];
    $type 	= $_POST['type'];

    // Query
    $sql = "INSERT INTO categories(name,type) VALUES('{$name}', '{$type}')";
    $query = mysqli_query($DB_CONNECTION, $sql);

    // mengalihkan halaman
    header('Location: categories.php');
}
// dd(BASE_URL === $_SERVER["REQUEST_URI"]);
require('views/add-categories.view.php');
