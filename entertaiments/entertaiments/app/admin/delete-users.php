<?php
require('../../config/koneksi.php');
require('../../config/session.php');
require('../../config/global.php');

$id = $_GET['id'];

if(!empty($id)) {
    // Query
    $sql = "DELETE FROM users WHERE id = '{$id}';";
    $query = mysqli_query($DB_CONNECTION, $sql);

    if($query) {
        echo "<script>alert('Pengguna gagal dihapus!');</script>";
    } else {
        echo "<script>alert('Pengguna berhasil dihapus!');</script>";
    }
} else {
    echo "<script>alert('ID pengguna tidak ditemukan!');</script>";
}

header('Location: users.php');