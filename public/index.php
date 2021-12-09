<?php

class Product {
    private $name;
    private $price;
    private $description;

    public function getName(): ?string{
        return $this -> name;
    }
    public function setName(string $name): self{
        $this -> name = $name;
        return $this;
    }
    public function getPrice(): ?float{
        return $this -> price;
    }
    public function setPrice(float $price): self{
        $this -> price = $price;
        return $this;
    }
    public function getDescription(): ?string{
        return $this -> description;
    }
    public function setDescription(string $description): self{
        $this -> description = $description;
        return $this;
    }

    function __construct($name, $price, $description){
        $this -> name = $name;
        $this -> price = $price;
        $this -> description = $description;
    }

    function printProd(){
        echo "<h1>{$this -> name}</h1><h3>{$this -> price} $</h3><p>{$this -> description}</p>";
    }
}

$first = new Product('Ice', 15, 'Some Ice');
$first -> printProd();

$second = new Product('Ice', 35, 'Some Ice');
$second -> printProd();

echo $second -> getName();

$first -> setPrice(20);
$first -> printProd();


class ItemProduct extends Product {
    private $count = 5;

    public function getCount(): ?float{
        return $this -> count;
    }
    public function setCount(float $count): self{
        $this -> count = $count;
        return $this;
    }
    function __construct($name, $price, $description, $count){
        $this -> name = strtoupper($name);
        $this -> price = $price;
        $this -> description = $description;
        $this -> count = $count;
    }
    function printProd(){
        echo "<h1>{$this -> name}</h1><h3>{$this -> price} $</h3><p>{$this -> description}</p><p>{$this -> count} шт.";
    }
}

$d = new ItemProduct('world', 67, 'world', 7);
$d -> printProd();
$red = new ItemProduct('Harry Potter', 200, 'Orden of Phoenix', 1);
$red -> printProd();


echo '<br>';
echo '<br>';


class A1 {
    public function foo() {
        static $x = 0;
        echo ++$x;
    }
}
$a1 = new A1();
$a2 = new A1();
$a1->foo();
$a2->foo();
$a1->foo();
$a2->foo();

// 1234
// статичная переменная принадлежит классу, и вне зависимости от того, какой объект ее использует $x увеличивается на 1 

echo '<br>';

class A2 {
    public function foo() {
        static $x = 0;
        echo ++$x;
    }
}
class B2 extends A2 {}
$a1 = new A2();
$b1 = new B2();
$a1->foo(); 
$b1->foo(); 
$a1->foo(); 
$b1->foo();

$a1->foo();
$a1->foo();
$a1->foo();
$b1->foo();
// 1122 2343
// переменная $x присутствует в 2х классах и увеличиваются они отдельно друг от друга

echo '<br>';

class A {
    public function foo() {
        static $x = 0;
        echo ++$x;
    }
}
class B extends A {}
$a1 = new A;
$b1 = new B;
$a1->foo(); 
$b1->foo(); 
$a1->foo(); 
$b1->foo();

// 1122
// переменная $x присутствует в 2х классах и увеличиваются они отдельно друг от друга. 
// При инициализации нового объекта отсутствуют скобки (), они на работу кода не влияют, но подобный код менее эстетичный. 

?>