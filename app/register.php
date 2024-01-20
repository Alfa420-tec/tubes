<?php
require('../config/koneksi.php');
require('../config/function.php');
require('../config/global.php');

if(isset($_POST['submit'])) {
    $first_name = $_POST['first_name'];
    $last_name  = $_POST['last_name'];
    $username   = replaceUsername($_POST['username']);
    $password   = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];
    if($password == $password_confirm){

        $sql = "INSERT INTO users(first_name, last_name, username, password, level) VALUE('{$first_name}', '{$last_name}', '{$username}', '{$password}', 'Pengguna')";
        $query = mysqli_query($DB_CONNECTION, $sql);

        echo "<script>alert('Register Berhasil!');</script>";
        echo "<meta http-equiv='refresh' content='0; url=login.php'>";
    } else {
        echo "<script>alert('Password konfirmasi salah!');</script>";
        echo "<meta http-equiv='refresh' content='0; url=login.php'>";
    }
}

// dd(BASE_URL === $_SERVER["REQUEST_URI"]);
require('views/register.view.php');
