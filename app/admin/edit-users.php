<?php
require('../../config/koneksi.php');
require('../../config/session.php');
require('../../config/global.php');
require('../../config/function.php');

if(isset($_POST['submit'])) {

    $firstName 	= $_POST['first_name'];
    $lastName 	= $_POST['last_name'];
    $username 	= replaceUsername($_POST['username']);
    $level      = $_POST['level'];

    // Query
    $sql = "UPDATE users 
					SET first_name  = '{$firstName}',
						last_name   = '{$lastName}',
                        username    = '{$username}',
                        level       = '{$level}'
					WHERE id ='{$_GET['id']}'";
    $query = mysqli_query($DB_CONNECTION, $sql);

    // mengalihkan halaman
    header('Location: users.php');
} else {
    $sql = "SELECT * FROM users WHERE id = '{$_GET['id']}';";
	$query = mysqli_query($DB_CONNECTION, $sql);
    $data = mysqli_fetch_array($query);
}
// dd(BASE_URL === $_SERVER["REQUEST_URI"]);
require('views/edit-users.view.php');


