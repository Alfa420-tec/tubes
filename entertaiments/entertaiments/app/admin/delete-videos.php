<?php
require('../../config/koneksi.php');
require('../../config/session.php');
require('../../config/global.php');

$id = $_GET['id'];

try {
    $sql = "DELETE FROM videos WHERE id = '{$id}';";
    $query = mysqli_query($DB_CONNECTION, $sql);

    if($query) {
        echo "<script>alert('Video gagal dihapus!');</script>";
    } else {
        echo "<script>alert('Video berhasil dihapus!');</script>";
    }
} catch (\Exception $th) {
    echo "<script>alert('ID Video tidak ditemukan!');</script>";
}

header('Location: videos.php');