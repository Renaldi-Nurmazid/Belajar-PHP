<?php
// Materi Percabngan (IF ELSE)
$nilai = 78;
echo "Nilai Kamu adalah $nilai <br>";
echo "Maka status kamu = ";
if ($nilai > 78)
{
    echo "Lulus";
}
else if ($nilai == 78)
{
    echo "KKM";
}
else 
{
    echo "Tidak Lulus";
}
echo "<hr>";

$nilaiweb = 80;
$nilaipbo = 82;
echo "Nilai web kamu  = $nilaiweb <br>";
echo "Nilai PBO kamu  = $nilaipbo <br>";
echo "Maka kamu dinyatakan ";

if ($nilaiweb >= 80 AND $nilaipbo >= 80)
{
    echo "Lulus 2 Mapel Produktif";
}
else if ($nilaiweb >= 80 OR $nilaipbo >=80)
{
    if($nilaiweb >= 80)
    {echo  "  lulus mapel web ";}

    echo "Lulus mapel produktif";
}
else 
{
    echo "Tidak lulus mapel produktif";
}
echo "<hr>";
// Materi perulangan(while,do while,for)
$i = 1;
while ($i <= 5)
{
    echo "hello word ! Ke - $i <br>";
    $i++;//assigment +1
}
echo "<hr>";
$j = 1;
do
{
    echo $j . "<br>";
    $j++;
} while($j <= 5);
echo "<hr>";

$k = 1 ;
for($k = 1; $k <= 10; $k++)
{
    echo $k . "<br>";
}
echo "<hr>";
for ($x = 9; $x >= 1; $x--)
{
    for($y = 1; $y <= $x; $y++){
    echo $y;
    }
    echo "<br>";
}
echo "<hr>";
for ($z = 1 ; $z <= 10; $z++)
{
    if ($z % 2 == 0){
        echo $z . ". genap <br>";
    }else{
        echo $z . ". ganjil <br>";
    }
}