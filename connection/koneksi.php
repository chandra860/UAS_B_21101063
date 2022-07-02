<?php
    
    $koneksi = mysqli_connect(
        "localhost",
        "root",
        "",
        "uas_db",
    );

    if (!$koneksi){
        die("koneksi ke Engine Mysql Gagal");
    }

?>