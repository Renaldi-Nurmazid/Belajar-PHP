<form action="rumus-trapesium.php" method="POST">
    <h1>RUMUS LUAS DAN KELILING TRAPESIUM</h1>
    <p>Sisi 1</p>
    <input type="number" name="sisi1" placeholder=" Ex 5 "/><br>
    <p>Sisi 2</p>
    <input type="number" name="sisi2" placeholder=" Ex 5 "/><br>
    <p>Sisi 3</p>
    <input type="number" name="sisi3" placeholder=" Ex 5 "/><br>
    <p>Sisi 4</p>
    <input type="number" name="sisi4" placeholder=" Ex 5 "/><br>
    <p>Tinggi</p>
    <input type="number" name="tinggi" placeholder=" Ex 5 "/>
    <input type="submit" name="proses" value=" Hitung Luas & Keliling "/>
</form>

<?php
    if (isset($_POST["proses"]))
    {
        echo "<hr>";
        $sisi1 = $_POST["sisi1"];
        $sisi2 = $_POST["sisi2"];
        $sisi3 = $_POST["sisi3"];
        $sisi4 = $_POST["sisi4"];
        $tinggi = $_POST["tinggi"];
        $luas = ($sisi1 + $sisi2 ) * $tinggi / 2;
        $keliling = $sisi1 + $sisi2 + $sisi3 + $sisi4;

        echo "Sisi 1 : $sisi1 <br>";
        echo "Sisi 2 : $sisi2 <br>";
        echo "Sisi 3 : $sisi3 <br>";
        echo "Sisi 4 : $sisi4 <br>";
        echo "Tinggi : $tinggi <br>";
        echo "Luas Trapesium : $luas <br>";
        echo "Keliling Trapesium : $keliling <br>";


    }
    echo "<hr>";
?>
