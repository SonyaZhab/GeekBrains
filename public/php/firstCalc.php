<?php

if(isset($_POST['submit'])){
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];
    $operation = $_POST['operation'];    
}
if(!$operation || (!$number1 && $number1 != '0' && !is_numeric($number1)) || (!$number2 && $number2 != '0' && !is_numeric($number2))){
    $error_result = "Не все поля заполнены или вы используете буквы!";
}
else {
    switch($operation){
        case '+' : $result = $number1 + $number2;
            break;
        case '-' : $result = $number1 - $number2;
        break;
        case '*' : $result = $number1 * $number2;
        break;
        case '/' :
            if($number2 == '0'){
                $error_result =  "На ноль делить нельзя!";
            }else
                $result = $number1 / $number2;
                break;
    }
}

if(isset($error_result)){
    echo $error_result;
}else{
    echo $result;
}
?>