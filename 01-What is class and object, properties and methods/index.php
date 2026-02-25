<?php

class man
{
    public $name;
    public $age;
    public $address;

    function info() {
        return "<br />Name: " . $this->name;
    }
}

$man1 = new man();
$man2 = new man();

$man1->name='John';
$man2->name='Smith';

echo $man1->name;
echo $man1->info();
echo "<br />";

echo $man2->name;
// echo $man2->info();