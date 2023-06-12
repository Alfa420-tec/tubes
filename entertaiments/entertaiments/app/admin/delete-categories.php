<?php
require('../../config/koneksi.php');
require('../../config/session.php');
require('../../config/global.php');

$id = $_GET['id'];

try {
    $sql = "DELETE FROM categories WHERE id = '{$id}';";
    $query = mysqli_query($DB_CONNECTION, $sql);

    if($query) {
        echo "<script>alert('Kategori gagal dihapus!');</script>";
    } else {
        echo "<script>alert('Kategori berhasil dihapus!');</script>";
    }
} catch (\Exception $th) {
    echo "<script>alert('ID kategori tidak ditemukan!');</script>";
}


header('Location: categories.php');