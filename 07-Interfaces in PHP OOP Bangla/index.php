<?php

interface Animal {
    public function makeSound();
}

class Dog implements Animal{
    public function makeSound()
    {
        return "Woof!";
    }
}

class Cat implements Animal{
    public function makeSound()
    {
        return "Meow!";
    }
}

// $dog = new Dog();
// echo $dog->makeSound(); // Output: Woof!

// $cat = new Cat();
// echo $cat->makeSound(); // Output: Meow!

$v1 = new Dog();
$v2 = new Cat();

$data = array($v1, $v2);
foreach($data as $item)
{
    echo $item->makeSound() . "<br />";
}