<form action="rumus-tabung.php" method="POST">
    <h1>RUMUS VOLUME & LUAS PERMUKAAN TABUNG</h1>
    <p>Jari-jari :</p>
    <input type="number" name="jarijari" placeholder="Ex 5"/>
    <p>Tinggi :</p>
    <input type="number" name="tinggi" placeholder="Ex 5"/>
    <input type="submit" name="proses" value="Hitung Luas & Keliling"/>
</form>

<?php
    if ( isset($_POST["proses"]))
    {
        echo "<hr>";
        $jarijari = $_POST["jarijari"];
        $tinggi = $_POST["tinggi"];
        $volume = 3.14 * $jarijari * $jarijari * $tinggi;
        $luaspermukaan = 2 * 22 /7 * $jarijari * ($tinggi + $jarijari);

        echo "Jari-Jari : $jarijari <br>";
        echo "Tinggi : $tinggi <br>";
        echo "Volume Kubus : $volume <br>";
        echo "Luas Permukaan Tabung : $luaspermukaan <br>";

    }
    echo "<hr>";
?>
