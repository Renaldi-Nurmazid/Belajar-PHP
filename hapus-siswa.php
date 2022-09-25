<?php

include('koneksi.php');

//get id
$id = $_GET['id'];

$query = "DELETE FROM siswa_renaldi1 WHERE siswa_nilai = '$id'";

if($connection->query($query)) {
    header("location: index.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>