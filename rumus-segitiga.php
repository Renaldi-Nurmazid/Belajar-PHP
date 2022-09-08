<form action="rumus-segitiga.php" method="POST">
    <h1>RUMUS LUAS DAN KELILING SEGITIGA</h1>
    <p>Alas</p>
    <input type="number" name="alas" placeholder=" Ex 5 "/><br>
    <p>Tinggi</p>
    <input type="number" name="tinggi" placeholder=" Ex 5 "/><br>
    <p>Sisi 1</p>
    <input type="number" name="sisi1" placeholder=" Ex 5 "/><br>
    <p>Sisi 2</p>
    <input type="number" name="sisi2" placeholder=" Ex 5 "/><br>
    <p>Sisi 3</p>
    <input type="number" name="sisi3" placeholder=" Ex 5 "/>
    <input type="submit" name="proses" value=" Hitung Luas & Keliling "/>
</form>

<?php
    if (isset($_POST["proses"]))
    {
        echo "<hr>";
        $alas = $_POST["alas"];
        $tinggi = $_POST["tinggi"];
        $sisi1 = $_POST["sisi1"];
        $sisi2 = $_POST["sisi2"];
        $sisi3 = $_POST["sisi3"];
        $luas = 1 * $alas * $tinggi / 2;
        $keliling = $sisi1 + $sisi2 +$sisi3;

        echo "Alas : $alas <br>";
        echo "Tinggi : $tinggi <br>";
        echo "Luas Segitiga : $luas <br>";
        echo "Keliling Segitiga : $keliling <br>";


    }
    echo "<hr>";
?>
