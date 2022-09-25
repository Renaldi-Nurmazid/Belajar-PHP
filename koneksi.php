<?php

//deklasrasi variabel
$host = "localhost";
$user = "root";
$pass = "";
$name = "siswa_renaldi1";    

$connection = mysqli_connect($host, $user, $pass, $name);

if($connection) {
    echo "";
} else {
    echo "Koneksi Gagal! : ". mysqli_connect_error();
}

?>