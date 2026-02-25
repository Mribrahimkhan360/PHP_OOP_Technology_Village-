<?php

abstract class tv{
    public $tutorial;
    public function __construct($name)
    {
        $this->tutorilal = $name;
    }
    abstract public function display();
}

class sony extends tv{
    public function display()
    {
        return "This is a sony tv and the tutorila & ". $this->tutorilal;
    }
}

$tv = new sony("How to use sony tv");
echo $tv->display();