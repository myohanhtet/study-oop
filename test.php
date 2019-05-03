<?php

class Parson {

    public $name;
    public $age;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getAge()
    {
        return $this->age * 2;
    }

    public function setAge($age)
    {

        if ($age < 18) {
            
            throw new Exception("Error Processing Request");
            
        }

        $this->age = $age;
    }
}

$phyo = new Parson('Kophyo');

$phyo->setAge(18);

$phyo->age = 3;

var_dump($phyo->getAge());