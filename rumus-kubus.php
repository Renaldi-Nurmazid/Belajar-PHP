<form action="rumus-kubus.php" method="POST">
    <h1>RUMUS VOLUME & LUAS PERMUKAAN KUBUS</h1>
    <p>Sisi :</p>
    <input type="number" name="sisi" placeholder="Ex 5"/>
    <input type="submit" name="proses" value="Hitung Luas & Keliling"/>
</form>

<?php
    if ( isset($_POST["proses"]))
    {
        echo "<hr>";
        $sisi = $_POST["sisi"];
        $volume = 3 * $sisi;
        $luaspermukaan = 6 * $sisi * $sisi;

        echo "Sisi : $sisi <br>";
        echo "Volume Kubus : $volume <br>";
        echo "Luas Permukaan Volume : $luaspermukaan <br>";

    }
    echo "<hr>";
?>
