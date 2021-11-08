<?php
echo "Задание 1<br>";

echo "Hello world!<br>";

echo "<br>";

echo "Задание 2<br>";

$name = "Sonya";
echo "Hello, $name!<br>";

echo "<br>";

echo "Задание 3<br>";

define('MY_CONST', 3.14);
echo MY_CONST;
echo "<br>";
echo "<br>";

echo "Задание 4<br>";

$int10 = 42;
$int2 = 0b101010;
$int8 = 052;
$int16 = 0x2A;
echo "Десятеричная система $int10 <br>";
echo "Двоичная система $int2 <br>";
echo "Восьмеричная система $int8 <br>";
echo "Шестнадцатеричная система $int16 <br>";

echo "<br>";

echo "Задание 5<br>";

$precise1 = 1.5;
$precise2 = 1.5e4;
$precise3 = 6E-8;
echo "$precise1 | $precise2 | $precise3<br>";

echo "<br>";

echo "Задание 6<br>";

$a = 1;
echo "$a <br>";
echo '$a<br>';

echo "<br>";

echo "Задание 7<br>";

$a = 'Hello, ';
$b = 'world';
$c = $a . $b;
echo "$c<br>";

echo "<br>";

echo "Задание 8<br>";

$a = 7;
$b = 3;
echo $a + $b . ' Сложение' . '<br>' ;    // сложение
echo $a * $b . ' Умножение' . '<br>';    // умножение
echo $a - $b . ' Вычитание' . '<br>';    // вычитание
echo $a / $b . ' Деление' . '<br>';    // деление
echo $a % $b . ' Остаток от деления' . '<br>';    // остаток от деления
echo $a ** $b . ' Возведение в степень' . '<br>';   // возведение в степень

echo "<br>";

echo "Задание 9<br>";

$a = 3;
$b = 7;
$a += $b;
echo 'a = '.$a . '<br>';
$a = 0;
echo $a++ . '<br>';
echo ++$a . '<br>';
echo $a-- . '<br>';
echo --$a . '<br>';

echo "<br>";

echo "Задание 10<br>";

$a = 5;
$b = 8;
echo var_dump($a == $b) . '<br>';
echo var_dump($a === $b) . '<br>';
echo var_dump($a > $b) . '<br>';
echo var_dump($a < $b) . '<br>';
echo var_dump($a <> $b) . '<br>';
echo var_dump($a != $b) . '<br>';
echo var_dump($a !== $b) . '<br>';
echo var_dump($a <= $b) . '<br>';
echo var_dump($a >= $b);
?>