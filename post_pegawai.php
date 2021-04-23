<?php
// koneksi database
    include "conn.php";

    $query = "INSERT INTO `pegawai` (`id_pegawai`, `nama`, `nik`, `alamat`) 
    VALUES ('1', 'Robet', '123123123', 'Krian');";

    echo $query;

?>