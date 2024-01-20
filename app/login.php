<?php
require('../config/koneksi.php');
require('../config/function.php');
require('../config/global.php');

session_start();

if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM `users` WHERE `username` = '{$username}' AND `password` = '{$password}'";
    $query = mysqli_query($DB_CONNECTION, $sql);

    if($query->num_rows > 0) {
        $user = mysqli_fetch_array($query);
        $_SESSION['id_user'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['full_name'] = getFullName($user['first_name'],$user['last_name']);
        $_SESSION['level'] = $user['level'];
        echo "<script>alert('Login Berhasil!');</script>";


        if($user['level'] == 'Admin'){
            echo "<meta http-equiv='refresh' content='0; url=admin/'>";
        } else {
            echo "<meta http-equiv='refresh' content='0; url=user/'>";
        }
    } else {
        echo "<script type='text/javascript'>alert('Username dan password salah!');</script>";
    }
}

require('views/login.view.php');
