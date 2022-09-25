<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$nis           = $_POST['nis'];
$nama = $_POST['nama_lengkap'];
$alamat       = $_POST['alamat'];

//query insert data ke dalam database
$query = "INSERT INTO siswa_nilai (nis, nama_lengkap, alamat) VALUES ('$nis', '$nama', '$alamat')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: index.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>