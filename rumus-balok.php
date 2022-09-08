<form action="rumus-balok.php" method="POST">
    <h1>RUMUS VOLUME & LUAS PERMUKAAN BALOK</h1>
    <p>Panjang :</p>
    <input type="number" name="panjang" placeholder="Ex 5"/>
    <p>Lebar :</p>
    <input type="number" name="lebar" placeholder="Ex 5"/>
    <p>Tinggi :</p>
    <input type="number" name="tinggi" placeholder="Ex 5"/>
    <input type="submit" name="proses" value="Hitung Luas & Keliling"/>
</form>

<?php
    if ( isset($_POST["proses"]))
    {
        echo "<hr>";
        $panjang = $_POST["panjang"];
        $lebar = $_POST["lebar"];
        $tinggi = $_POST["tinggi"];
        $volume = $panjang * $tinggi * $lebar;
        $luaspermukaan = 2 * ($panjang * $lebar) + 2 * ($lebar * $tinggi) + 2 * ($panjang * $tinggi);

        echo "Panjang : $panjang <br>";
        echo "Lebar : $lebar <br>";
        echo "Tinggi : $tinggi <br>";
        echo "Volume Kubus : $volume <br>";
        echo "Luas Permukaan Kubus : $luaspermukaan <br>";

    }
    echo "<hr>";
?>
