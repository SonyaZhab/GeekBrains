<?php 
$a = 1;
$b = 2;

echo "Переменная a = " . "$a<br>";
echo "Переменная b = " . "$b<br>";
echo "<br>";
$a = $a + $b;
$b = $a - $b;
$a = $a - $b;

echo "Переменная a = " . "$a<br>";
echo "Переменная b = " . "$b";
?>