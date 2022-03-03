<?php
$name="Janusz";
echo "Imię i nazwisko: $name<br>";
echo 'Imię i nazwisko: $name<br>';
//konkatenacja
echo "Imię: ".$name."<br>";
//interpolacja
echo "Imię: ",$name,"<br>";

//typy danych
//a) boolean
$prawda=true;
$fałsz=false;
echo $prawda; //1
echo $fałsz; //nic nie wyświetli

//b) integer
$dec=10;
$bin=0b1011;
$oct=010;
$hex=0x10;
echo "<br>$dec";
echo "<br>$bin";
echo "<br>$oct";
echo "<br>$hex";
echo "<br>",gettype($hex); //integer
echo "<br>",gettype($prawda); //boolean

//zmiennoprzecinkowe
$x=10.5;
echo "<br>",gettype($x); //double

$name="Anna";
echo "<br>Nazwa zmiennej \$name, imię: $name";

//heredoc
$surname="Nowak";
echo <<<ETYKIETA
  <br>
  Imię i nazwisko: $name $surname
  <hr>
ETYKIETA;

?>
