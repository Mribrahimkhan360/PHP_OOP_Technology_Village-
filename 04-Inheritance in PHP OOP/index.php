<?php

class man{
    public $name;
    public $age;

    public function __construct($fname, $age){
        $this->name = $fname;
        $this->age = $age;
    }

    protected function info(){
        return "<br />Name: " . $this->name . "<br />Age : " . $this->age;
    }

}

class info extends man{
    public $address;
    public function __construct($fname, $age, $address)
    {
        $this->name = $fname;
        $this->age = $age;
        $this->address = $address;
    }

    public function message()
    {
        return $this->name.' '. $this->age;
    }
}

$infos = new info("Ibrahim",25,"Shariatpur Dhaka Bangladesh");
// echo $infos->info();
// echo "<br />";
echo $infos->message();