<?php

    $DB_HOST        = 'localhost';
    $DB_DATABASE    = 'entertaiment';
    $DB_USERNAME    = 'root';
    $DB_PASSWORD    = '';

    $DB_CONNECTION = mysqli_connect($DB_HOST, $DB_USERNAME, $DB_PASSWORD, $DB_DATABASE);

    if(!$DB_CONNECTION){
        die("Gagal terhubung dengan database: " . mysqli_connect_error());
    }

?>