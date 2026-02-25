<?php

class man{
    private $name;
    public $age;
    protected $address;


    public function info($name, $age, $address){
        $this->name = $name;
        $this->age = $age;
        $this->address = $address;

        return "<br />Name: " . $this->name . "<br />Age : " . $this->age . "<br />Address : " . $this->address;
    }

    
}

$infos = new man();
echo $infos->info("Ibrahim", 30,"Shariatpur Dhaka Bangladesh");
