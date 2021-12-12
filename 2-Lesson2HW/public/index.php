<?php

//Задача 1
echo "Задача 1 <br>";
echo '<br>';

abstract class Product {
    protected static $price = 25;
    abstract public function getFinalyCost();
}

class digitalProd extends Product{
    public function getFinalyCost()
    {
        return self::$price;
    }

}

class pieceProd extends Product{
    private $piece;

    public function setPiece(int $piece){
        $this -> piece = $piece;
    }
    public function getPiece(int $piece){
        $this -> piece = $piece;
    }
    public function getFinalyCost()
    {
        return $this -> piece * self::$price;
    }
}

class qntProd extends Product{
    private $quant;

    public function setPiece(float $quant){
        $this -> quant = $quant;
    }
    public function getPiece(float $quant){
        $this -> quant = $quant;
    }
    public function getFinalyCost()
    {
        return $this -> quant * self::$price;
    }
}

$product1 = new digitalProd();
$product2 = new pieceProd();
$product3 = new qntProd();

echo "Стоимость цифрового товара: {$product1 -> getFinalyCost()} $";;

echo '<br>';

$product2 -> setPiece(5);
echo "Стоимость штучного товара: {$product2 -> getFinalyCost()} $";

echo '<br>';

$product3 -> setPiece(8.3);
echo "Стоимость весового товара: {$product3 -> getFinalyCost()} $";

echo '<br>';

$product3 -> setPiece(5.8);
echo "Стоимость весового товара: {$product3 -> getFinalyCost()} $";

echo '<br>';

$product3 -> setPiece(11.78);
echo "Стоимость весового товара: {$product3 -> getFinalyCost()} $";

echo '<br>';
echo '<br>';
echo '<br>';

//
//
//
//Задача 2
echo "Задача 2 <br>";
echo '<br>';

trait SingletonTrait{
    private static $instance = [];
    public static function getInstance(){
        if(!isset(self::$instance[static::class])){
            self::$instance[static::class] = new static;
        }
        return self::$instance[static::class];
    }
}


class Test{
    use SingletonTrait;

    public $value;
}

$a = Test::getInstance();
var_dump(Test::getInstance());
//почему то, если задать взначение $value в class, оно не выводится при помощи echo тут.

$a -> $value = 10;
var_dump(Test::getInstance());
echo "Объект а = {$a -> $value}. <br>";

$a -> $value = 19;
var_dump(Test::getInstance());
echo "Объект а = {$a -> $value}. <br>";

$b = Test::getInstance();
var_dump(Test::getInstance());
echo "Объект b = {$b -> $value}. <br>";

$b -> $value += 23;
var_dump(Test::getInstance());
echo "Объект b = {$b -> $value}. <br>";

?>