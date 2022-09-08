<form action="rumus-persegi panjang.php" method="POST">
    <h1>RUMUS LUAS DAN KELILING PERSEGI PANJANG</h1>
    <p>Panjang</p>
    <input type="number" name="panjang" placeholder=" Ex 5 "/><br>
    <p>Lebar</p>
    <input type="number" name="lebar" placeholder=" Ex 5 "/>
    <input type="submit" name="proses" value=" Hitung Luas & Keliling "/>
</form>

<?php
    if (isset($_POST["proses"]))
    {
        echo "<hr>";
        $panjang = $_POST["panjang"];
        $lebar = $_POST["lebar"];
        $luas = $panjang * $lebar;
        $keliling = 2 * ($panjang + $lebar);

        echo "Panjang : $panjang <br>";
        echo "Lebar : $lebar <br>";
        echo "Luas Persegi : $luas <br>";
        echo "Keliling Persegi : $keliling <br>";


    }
    echo "<hr>";
?>
