<?php
require('../../config/koneksi.php');
require('../../config/session.php');
require('../../config/global.php');
require('../../config/function.php');

if(isset($_POST['submit'])) {

    $name 	= $_POST['name'];
    $type 	= $_POST['type'];

    // Query
    $sql = "UPDATE categories 
					SET name = '{$name}',
						type = '{$type}'
					WHERE id ='{$_GET['id']}'";
    $query = mysqli_query($DB_CONNECTION, $sql);

    // mengalihkan halaman
    header('Location: categories.php');
} else {
    $sql = "SELECT * FROM categories WHERE id = '{$_GET['id']}';";
	$query = mysqli_query($DB_CONNECTION, $sql);
    $data = mysqli_fetch_array($query);
}
// dd(BASE_URL === $_SERVER["REQUEST_URI"]);
require('views/edit-categories.view.php');


