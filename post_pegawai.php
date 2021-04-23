<?php
// koneksi database
    include "conn.php";

    // mendapatkan var post
    // artinya ketika post nama dipanggil ? maka kirim post nama , : jika tidak isi dengan kosong
    $nama_pegawai = isset($_POST["nama"]) ? $_POST["nama"] : "";
    // echo $nama_pegawai;ss
    $nik = isset($_POST["nik"]) ? $_POST["nik"] : "";
    // echo $nik;
    $alamat = isset($_POST["alamat"]) ? $_POST["alamat"] : "";
    // echo $alamat;
    


    $sql = "INSERT INTO `pegawai` ( `nama`, `nik`, `alamat`) 
    VALUES ('".$nama_pegawai."', '".$nik."', '".$alamat."');";

    // echo $sql;

    $query = mysqli_query($conn,$sql);
    if($query){
        $msg = "Simpan data pegawai berhasil";
    }else{
        $msg = "Simpan data pegawai berhasil";
    }
    // echo $msg;
    $response = array(
        'status' => 'OK',
        'msg' => $msg
    );

    echo json_encode($response);


    // echo $query;

?>