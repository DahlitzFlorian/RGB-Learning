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
}

$bmw = new Vehicle(120);
