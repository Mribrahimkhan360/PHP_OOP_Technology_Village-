<?php

class man
{
    public $name;
    public $age;
    public $address;

    function info($fname, $age , $address) {
        // return "<br />Name: " . $this->name;
        $this->name = $fname;
        $this->age = $age;
        $this->address = $address;
        return "<br />Name: " . $this->name . "<br />Age : " . $this->age . "<br />Address : " . $this->address;
    }
}

// $man1 = new man();
// $man2 = new man();

// $man1->name='John';
// $man2->name='Smith';

// echo $man1->name;
// echo $man1->info();
// echo "<br />";

// echo $man2->name;
// echo $man2->info();

// ==================

$man1 = new man();
echo $man1->info("Ibrahim", 30,"Shariatpur Dhaka Bangladesh");