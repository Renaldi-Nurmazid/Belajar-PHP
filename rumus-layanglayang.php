<form action="rumus-layanglayang.php" method="POST">
    <h1>RUMUS LUAS DAN KELILING LAYANG-LAYANG</h1>
    <p>Sisi 1</p>
    <input type="number" name="sisi1" placeholder="Ex 5"/><br>
    <p>Sisi 2</p>
    <input type="number" name="sisi2" placeholder="Ex 5"/><br>
    <p>Sisi 3</p>
    <input type="number" name="sisi3" placeholder="Ex 5"/><br>
    <p>Sisi 4</p>
    <input type="number" name="sisi4" placeholder="Ex 5"/><br>
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
        $sisi1 = $_POST["sisi1"];
        $sisi2 = $_POST["sisi2"];
        $sisi3 = $_POST["sisi3"];
        $sisi4 = $_POST["sisi4"];
        $d1 = $_POST["d1"];
        $d2 = $_POST["d2"];
        $luas = $d1 * $d2 /2;
        $keliling =$sisi1 + $sisi2 + $sisi3 + $sisi4;

        echo "Sisi 1 : $sisi1 <br>";
        echo "Sisi 2 : $sisi2 <br>";
        echo "Sisi 3 : $sisi3 <br>";
        echo "Sisi 4 : $sisi4 <br>";
        echo "Diameter 1 : $d1 <br>";
        echo "Diameter 2 : $d2 <br>";
        echo "Luas Layang-layang : $luas <br>";
        echo "Keliling Layang-layang : $keliling <br>";

    }
    echo "<hr>";
?>
