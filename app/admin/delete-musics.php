<?php
require('../../config/koneksi.php');
require('../../config/session.php');
require('../../config/global.php');

$id = $_GET['id'];

try {
    $sql = "DELETE FROM musics WHERE id = '{$id}';";
    $query = mysqli_query($DB_CONNECTION, $sql);

    if($query) {
        echo "<script>alert('Musik gagal dihapus!');</script>";
    } else {
        echo "<script>alert('Musik berhasil dihapus!');</script>";
    }
} catch (\Exception $th) {
    echo "<script>alert('ID Musik tidak ditemukan!');</script>";
}


header('Location: musics.php');