<?php
require('../../config/koneksi.php');
require('../../config/function.php');
require('../../config/session.php');
require('../../config/global.php');

if(isset($_POST['submit'])) {

    $firstName 	= $_POST['first_name'];
    $lastName 	= $_POST['last_name'];
    $username 	= replaceUsername($_POST['username']);
    $password   = $_POST['password'];
    $level      = $_POST['level'];

    // Query
    $sql = "INSERT INTO users(first_name,last_name,username,password,level) VALUES('{$firstName}', '{$lastName}', '{$username}', '{$password}', '{$level}')";
    $query = mysqli_query($DB_CONNECTION, $sql);

    // mengalihkan halaman
    header('Location: users.php');
}
// dd(BASE_URL === $_SERVER["REQUEST_URI"]);
require('views/add-users.view.php');
