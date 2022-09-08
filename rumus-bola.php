<form action="rumus-bola.php" method="POST">
    <h1>RUMUS VOLUME & LUAS PERMUKAAN BOLA</h1>
    <p>Jari-jari :</p>
    <input type="number" name="jarijari" placeholder="Ex 5"/>
    <input type="submit" name="proses" value="Hitung Luas & Keliling"/>
</form>

<?php
    if ( isset($_POST["proses"]))
    {
        echo "<hr>";
        $jarijari = $_POST["jarijari"];
        $volume = 4 * 3.14 / 3 * $jarijari * $jarijari * $jarijari;
        $luaspermukaan = 4 * 3.14 * $jarijari * $jarijari;

        echo "Jari-jari : $jarijari <br>";
        echo "Volume Bola : $volume <br>";
        echo "Luas Permukaan Bola : $luaspermukaan <br>";

    }
    echo "<hr>";
?>
