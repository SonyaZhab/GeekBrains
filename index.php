<?php
// Задача 1
echo "// Задача 1 <br>";

$a = -7;
$b = 6;

echo $a . '<br>';
echo $b . '<br>';

if ($a > 0 && $b > 0)
    echo 'Разность '. $a . ' - ' . $b . ' = ' . ($a - $b);

elseif ($a < 0 && $b < 0)
    echo 'Произведение '. $a . ' * ' . $b . ' = ' . ($a * $b);

else
    echo 'Сумма '. $a . ' + ' . $b . ' = ' . ($a + $b);

echo '<br>';
echo '<br>';


// Задача 2
echo "// Задача 2 <br>";
$a = 4;
echo 'Вывод чисел от ' . $a . ' до 15. <br>';
switch($a){
    case 0:
        for($i = 0; $i <=15; $i++){
            echo $i . '<br>';
        }
        break;
    case 1:
        for($i = 1; $i <=15; $i++){
            echo $i . '<br>';
        }
        break;
    case 2:
        for($i = 2; $i <=15; $i++){
            echo $i . '<br>';
        }
        break;
    case 3:
        for($i = 3; $i <=15; $i++){
            echo $i . '<br>';
        }
        break;
    case 4:
        for($i = 4; $i <=15; $i++){
            echo $i . '<br>';
        }
        break;
    case 5:
        for($i = 5; $i <=15; $i++){
            echo $i . '<br>';
        }
        break;
    case 6:
        for($i = 6; $i <=15; $i++){
            echo $i . '<br>';
        }
        break;
    case 7:
        for($i = 7; $i <=15; $i++){
            echo $i . '<br>';
        }
        break;
    case 8:
        for($i = 8; $i <=15; $i++){
            echo $i . '<br>';
        }
        break;
    case 9:
        for($i = 9; $i <=15; $i++){
            echo $i . '<br>';
        }
        break;
    case 10:
        for($i = 10; $i <=15; $i++){
            echo $i . '<br>';
        }
        break;
    case 11:
        for($i = 11; $i <=15; $i++){
            echo $i . '<br>';
        }
        break;
    case 12:
        for($i = 12; $i <=15; $i++){
            echo $i . '<br>';
        }
        break;
    case 13:
        for($i = 13; $i <=15; $i++){
            echo $i . '<br>';
        }
        break;
    case 14:
        for($i = 14; $i <=15; $i++){
            echo $i . '<br>';
        }
        break;
    case 15:
        echo $a . '<br>';
        break;
};

echo '<br>';
echo '<br>';

// Задача 3

echo "// Задача 3 <br>";

$a = 3;
$b = 5;

function sum($arg1, $arg2){
    echo $arg1 + $arg2 . '<br>';
};
function diff($arg1, $arg2){
    echo $arg1 - $arg2 . '<br>';
};
function mult($arg1, $arg2){
    echo $arg1 * $arg2 . '<br>';
};
function div($arg1, $arg2){
    echo $arg1 / $arg2 . '<br>';
};

sum($a, $b);
diff($a, $b);
mult($a, $b);
div($a, $b);

echo '<br>';
echo '<br>';

// Задача 4

echo "// Задача 4 <br>";
function mathOperation($arg1, $arg2, $operation){
    switch($operation){
        case 'sum':
            echo $arg1 + $arg2 . '<br>';
            break;
        case 'diff':
            echo $arg1 - $arg2 . '<br>';
            break;
        case 'mult':
            echo $arg1 * $arg2 . '<br>';
            break;
        case 'div':
            echo $arg1 / $arg2 . '<br>';
            break;
    };
};

mathOperation(4,8,'sum');
mathOperation(17,9,'diff');
mathOperation(6,9,'mult');
mathOperation(81,9,'div');

echo '<br>';
echo '<br>';

// Задача 5

echo "// Задача 5 <br>";

echo "Данная задача не обязательна. Её вариация выполнялась на первом уроке. <br>";
echo date('Y');

echo '<br>';
echo '<br>';

// Задача 6

echo "// Задача 6 <br>";

function power($val, $pow){
	if ($val == 0)
    	return 0;
	elseif ($pow == 0)
		return 1;
	elseif ($pow < 0)
        return power(1/$val, -$pow);
	else
        return $val *  power($val, $pow-1);
}
echo power(4, 4);

echo '<br>';
echo '<br>';

// Задача 7

echo "// Задача 7 <br>";

function declan_time($h, $m){
    $hour = '';
    $min = '';
    if($h == 1 || $h == 21)
        $hour = 'час';
    elseif(($h >= 2 && $h <= 4) || ($h >= 22 && $h <= 23))
        $hour = 'часа';
    else
        $hour = 'часов';

    if(($m % 10) === 1)
        $min = 'минута';
    elseif((($m % 10) >= 2) && (($m % 10) <= 4))
        $min = 'минуты';
    else
        $min = 'минут';

    return ($h . ' ' . $hour . ' ' . $m . ' ' . $min . '.');
}
 
echo declan_time(1, 1);
echo '<br>';
echo declan_time(date('H'), date('i'));
echo '<br>';
echo declan_time(02, 23);
echo '<br>';
echo date('H:i:s');
?>