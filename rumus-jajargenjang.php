<form action="rumus-jajargenjang.php" method="POST">
    <h1>RUMUS LUAS DAN KELILING JAJAR GENJANG</h1>
    <p>Panjang</p>
    <input type="number" name="panjang" placeholder="Ex 5"/><br>
    <p>Lebar</p>
    <input type="number" name="lebar" placeholder="Ex 5"/><br>
    <p>Alas</p>
    <input type="number" name="alas" placeholder="Ex 5"/><br>
    <p>Tinggi</p>
    <input type="number" name="tinggi" placeholder="Ex 5"/>
    <input type="submit" name="proses" value="Hitung Luas & Keliling"/>
</form>

<?php
    if ( isset($_POST["proses"]))
    {
        echo "<hr>";
        $panjang = $_POST["panjang"];
        $lebar = $_POST["lebar"];
        $alas = $_POST["alas"];
        $tinggi = $_POST["tinggi"];
        $luas = $alas * $tinggi;
        $keliling = 2 * ($panjang + $lebar);

        echo "Panjang : $panjang <br>";
        echo "Lebar : $lebar <br>";
        echo "Alas : $alas <br>";
        echo "Tinggi : $tinggi <br>";
        echo "Luas Jajar Genjang : $luas <br>";
        echo "Keliling Jajar Genjang : $keliling <br>";

    }
    echo "<hr>";
?>
