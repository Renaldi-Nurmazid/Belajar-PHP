<form action="rumus-lingkaran.php" method="POST">
    <h1>RUMUS LUAS DAN KELILING LINGKARAN</h1>
    <p>Jari - jari:</p>
    <input type="number" name="jarijari" placeholder="Ex 5"/>
    <input type="submit" name="proses" value="Hitung Luas & Keliling"/>
</form>

<?php
    if ( isset($_POST["proses"]))
    {
        //$rumus = 22/7 OR 3.14;
        echo "<hr>";
        $jarijari = $_POST["jarijari"];
        $luas = 3.14 * $jarijari * $jarijari;
        $keliling = 2 * 3.14 * $jarijari;

        echo "Jari-jari : $jarijari <br>";
        echo "Luas Lingkaran : $luas <br>";
        echo "Keliling Lingkaran : $keliling <br>";

    }
    echo "<hr>";
?>
