<?php

class man{
    public $name;
    public $age;
    public $address;

    function __construct($name, $age, $address)
    {
        $this->name = $name;
        $this->age = $age;
        $this->address = $address;
    }

    
}

$info = new man("Ibrahim",28,"Shariatpur");
echo "Informarion of man <br>";
echo "Name: ".$info->name."<br>";
echo "Age: ".$info->age."<br>";
echo "Address: ".$info->address."<br>";