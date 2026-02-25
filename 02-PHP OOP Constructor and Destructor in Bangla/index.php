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
    function __destruct()
    {
        echo $this->name . '<br />' . $this->age . '<br />' . $this->address;
    }

    
}

// __construct
// $info = new man("Ibrahim",28,"Shariatpur");
// echo "Informarion of man <br>";
// echo "Name: ".$info->name."<br>";
// echo "Age: ".$info->age."<br>";
// echo "Address: ".$info->address."<br>";

// __destruct
$info = new man("Ibrahim",28,"Shariatpur");