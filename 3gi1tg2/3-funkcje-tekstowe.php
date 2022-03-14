<?php
    $text=<<<SCHOOL
    ZSŁ - Zespół Szkół
    Łączności
SCHOOL;
echo "$text<br>";
echo nl2br($text);

$name="jANusZ";
echo "<br>$name<br>";
echo strtolower($name)."<br>";
echo strtoupper($name)."<br>";
$surname="bąk";
echo strtoupper($surname)."<br>";
echo mb_strtoupper($surname)."<br>";

$text="jaNUsz koWAlski";
echo "<br>$text<br>";
echo mb_strtolower($text)."<br>";
echo ucfirst(mb_strtolower($text))."<br>";
echo ucwords(mb_strtolower($text))."<br>";

$lorem="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus auctor sagittis elementum. Phasellus vel erat arcu. Maecenas vestibulum sapien sit amet ultricies porta. Nam nec scelerisque est. Pellentesque et magna vulputate, molestie ante sed, faucibus purus. Etiam vehicula lorem nibh, ac tristique arcu tincidunt at. Aliquam ut mollis nisl, id vulputate sapien. Etiam sed dictum lectus, sit amet porttitor dolor.<br>";


echo $lorem;
echo wordwrap($lorem, 40, "<br>");
echo wordwrap($lorem, 40, "<hr>");


$name="  Jan ";
echo "Długość imienia $name wynosi: ".strlen($name)."<br>";
echo "Długość imienia ".ltrim($name)." wynosi: ".strlen(ltrim($name))."<br>";
echo "Długość imienia ".rtrim($name)." wynosi: ".strlen(rtrim($name))."<br>";
echo "Długość imienia ".trim($name)." wynosi: ".strlen(trim($name))."<br>";

$name="Janusz";
echo substr($name, 0, 3)."<br>"; //Jan
echo substr($name, 2, 2)."<br>"; //nu

echo str_replace("Janusz","Krzychu",$name);

?>
