<?php
//Nama : Renaldi Nurmazid
// Kelas : XI RPL 1
echo "1 <br>";
$star = 10;
for( $a = $star; $a >0 ; $a--)
{
    for($i=1; $i<=$a; $i++){
        echo "&nbsp";
    }
    for($a1=$star;$a1>=$a;$a1--){
        echo "*";
    }
    echo "<br>";
}
echo "<hr>";
echo "2 <br>";
$star=10;
for($a=$star;$a>0;$a--)
{
    for($b=$star;$b>=$a;$b--)
    {
        echo "*";
    }
    echo "<br>";
}
echo "<hr>";
echo "3 <br>";
$star=10;
	for($a=$star;$a>0;$a--){
	for($i=1; $i<=$a; $i++){
		echo " &nbsp";
	}
	for($a1=$star;$a1>=$a;$a1--){
		echo"*";
	}
	echo"<br>";
	}
echo "<hr>";
echo "4 <br>";
$star=10;
	for($a=1; $a<=$star; $a++){
	for($b=1; $b<=$a; $b++){
		echo "&nbsp";
	}
	for($c=$star; $c>=$a; $c-=1){
		echo "*";
	}
	echo "<br>";
	}
echo "<hr>";
echo "5 <br>";
$star=10;
	for($a=1; $a<=$star; $a++){
	for($i=1; $i<=$a; $i++){
		echo " &nbsp";
	}
	for($c=$star; $c>=$a; $c-=1){
		echo "*";
	}
	echo "<br>";
	}
echo "<hr>";
echo "6 <br>";
$star=10;
	for($a=1; $a<=$star; $a++){
	for($c=$star; $c>=$a; $c-=1){
		echo "*";
	}
	echo "<br>";
	}
echo "<hr>";
echo "7 <br>";
$star=10;
	for($a=1; $a<=$star; $a++){
	for($b=$star; $b>=$a; $b-=1){
		echo "&nbsp";
	}
	for($c=1; $c<=$a; $c++){
		echo "*";
	}
	echo "<br>";
	}
	for($a=1; $a<=$star; $a++){
	for($b=1; $b<=$a; $b++){
		echo "&nbsp";
	}
	for($c=$star; $c>=$a; $c-=1){
		echo "*";
	}
	echo "<br>";
	}        
echo "<hr>";
echo "8 <br><br> ";
    for ($i=1;$i<=5;$i++){
    for ($j=$i;$j>=1;$j--){
        echo $j;
    }
    echo "<br>";
}
echo "<hr>";
echo " 9 <br><br>";
for ($i=5; $i >=1 ; $i--) {
    # code...
    for ($j=4; $j>=$i ; $j--) {
    # code...
    //echo "&nbsp;&nbsp;";
    }
    
   for ($k=1; $k <=$i ; $k++) {
    # code...
    echo "$k";
    }
    echo "<br>";
   }
echo "<hr>";
for ($i=1;$i=10;$i++){
    for ($j=11-$i;$j>=$i;$j--)
    {
            echo "*";
            for ($j=$i;$j=$i;$j++){
        echo $j;
            }
        }
}   