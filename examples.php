<?php
$someInt = 123; //int
$someFloat = 3.14; //float
$someText = 'word'; //string
$someText2 = "Foo
in
multiple
lines"; //string
$someTrue = false; //bool
$someNothing = null; //null

$cars = ['gaz', 'zaz', 'uaz', 'vaz', 'maz','bmw']; // array
echo $cars[4];

$person = [
'firstName' => 'John',
'lastname' => 'Doe',
'age' => '54',
];

$people = [
[
    'firstName' => 'John',
    'lastname' => 'Doe',
    'age' => '54',

],
[
    'firstName' => 'Jane',
    'lastname' => 'Doe',
    'age' => '23',
],
];
echo '<pre>';
var_dump($people);

// +
// - 
// /
// *
// %
// . - concatination ( for strings )

// <
// >
// <=
// >=
// ==
// !=
// ===
// !==

// &&  - and
// || - or

if(true){

}
elseif (false){

}
else{

}

switch ($foo) {
    case 'foo':
        # code...
        break;

    case 'bar':
        # code...
        break;
        
    case 'baz':
        # code...
        break;
    
    default:
        # code...
        break;
}

while(false) {

}
do {

}while(false);

for ($i = 0; $i < 10; $i++) { 
    echo $i . '<br>';
}

foreach ($cars as $key => $car) {
    echo $key . ' => ' . $car . '<br>';
}

function addTwoNumbers($num1, $num2 = 10) : int
{
return $num1 + $num2;
}

echo addTwoNumbers(1, 2);

class Animal
{
    private $name;
    protected $energy = 10;
    public static $animalCount = 0;

    public function __construct(string $name)
    {
        $this->name = $name;
        self::$animalCount++;
    }

    public function run()
    {
    $this->energy--;
    }

    public function sleep()
    {
    $this->energy++;
    }
}
class Cat extends Animal implements Purrable
{
    
    protected $energy = 20;
    public function run()
    {
        $this->energy -= 2;
    }
    public function purr()
    {
        echo 'iz purring!';
    }
}

class Lion implements Purrable
{
    public function purr()
    {
        echo 'Lion iz purring!';
    }
}

class Dog
{

}

interface Purrable
{
    public function purr();
}

echo '<pre>';
$muris = new Cat('Muris');
$muris->run();
$muris->run();
$muris->run();
$muris->run();
var_dump($muris);
$puka = new Animal('Puka');
$puka->sleep();
$puka->sleep();
$puka->sleep();
$puka->sleep();
var_dump($puka);

$lion = new Lion;
$dog = new Dog;

function makeSound(Purrable $animal)
{
    $animal->purr();
}

makeSound($muris);
makeSound($lion);
makeSound($dog);