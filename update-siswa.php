<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$id_siswa     = $_POST['id'];
$nis         = $_POST['nis'];
$nama_lengkap = $_POST['nama'];
$alamat       = $_POST['alamat'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE siswa_nilai SET nis = '$nis', nama = '$nama', alamat = '$alamat' WHERE id = '$id'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connection->query($query)) {
    //redirect ke halaman index.php 
    header("location: index.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>