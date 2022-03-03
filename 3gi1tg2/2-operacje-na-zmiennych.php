<?php
echo PHP_VERSION; //7.1.13
echo "<br>",2**10; //1024

$x=10;
$y=5;
echo "<br>",$x<=>$y;

$x=1;
$y=1.0;
echo "<br>",gettype($x); //integer
echo "<br>",gettype($y); //double

if ($x==$y) {
  echo "<br>Równe";
}else {
  echo "<br>Różne";
}

if ($x===$y) {
  echo "<br>Identyczne";
}else {
  echo "<br>Nieidentyczne";
}

/*
preinkrementacja ++$i
postinkrementacja $i++
predekrementacja --$i
postdekrementacja $i--
*/
echo "<br>";
$x=1;
echo $x; //1
$x=$x++;
echo $x; //1
$x=++$x;
echo $x; //2
$y=++$x;
echo $x; //3
echo $y; //3
$y=$x++;
echo $x; //4
echo $y; //3



?>
