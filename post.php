<form action="post.php" method="POST">
    <input type="text" name="namalengkap" placeholder="Ex. Indra El" /><br>
    <input type="text" name="kelas" placeholder="Ex. XI RPL 1" /><br>
    <input type="number" name="nis" placeholder="Ex. 1234567890" /><br>
    <input type="submit" name="simpan" value="Simpan Data" />
</from>

<?php

if( isset($_POST["simpan"]))
   {
    echo "<hr>";

    $namalengkap = $_POST["namalengkap"];
    $kelas = $_POST["kelas"];
    $nis = $_POST["nis"];

    echo "Nama Lengkap : " . $namalengkap . "<br>";
    echo "Kelas : " . $kelas . "<br>";
    echo "NIS : " . $nis . "<br>";
    }

?>      



