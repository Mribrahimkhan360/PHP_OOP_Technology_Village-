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
    public function message()
    {
        return $this->info();
    }
}

$infos = new info("Ibrahim",25);
echo $infos->info();
echo "<br />";
echo $infos->message();