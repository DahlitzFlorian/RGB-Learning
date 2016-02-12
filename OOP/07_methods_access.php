<?php

class Vehicle
{
    // attributes
    
    private $speed;
    
    
    // constructor
    
    public function __construct($sp)
    {
        $this->speed = $sp;
    }
    
    
    // methods
    
    public function speed_up($number = 10)
    {
        $this->speed += $number;
    }
}

$bmw = new Vehicle(120);
$bmw->speed_up(25);
