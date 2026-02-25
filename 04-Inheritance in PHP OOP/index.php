<?php

class man{
    public $name;
    public $age;

    public function __construct($fname, $age){
        $this->name = $fname;
        $this->age = $age;
    }

    public function info(){
        return "<br />Name: " . $this->name . "<br />Age : " . $this->age;
    }

}

class info extends man{
    public function message()
    {
        return "This is information of messages";
    }
}

$infos = new info("Ibrahim",25);
echo $infos->info();
echo "<br />";
echo $infos->message();