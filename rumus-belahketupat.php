<form action="rumus-belahketupat.php" method="POST">
    <h1>RUMUS LUAS DAN KELILING BELAH KETUPAT</h1>
    <p>Sisi :</p>
    <input type="number" name="sisi" placeholder="Ex 5"/><br>
    <p>Diameter 1</p>
    <input type="number" name="d1" placeholder="Ex 5"/><br>
    <p>Diameter 2</p>
    <input type="number" name="d2" placeholder="Ex 5"/>
    <input type="submit" name="proses" value="Hitung Luas & Keliling"/>
</form>

<?php
    if ( isset($_POST["proses"]))
    {
        echo "<hr>";
        $sisi = $_POST["sisi"];
        $d1 = $_POST["d1"];
        $d2 = $_POST["d2"];
        $luas = $d1 * $d2 /2;
        $keliling = 4 * $sisi;

        echo "Sisi : $sisi <br>";
        echo "Diameter 1 : $d1 <br>";
        echo "Diameter 2 : $d2 <br>";
        echo "Luas Belah Ketupat : $luas <br>";
        echo "Keliling Belah Ketupat : $keliling <br>";

    }
    echo "<hr>";
?>
