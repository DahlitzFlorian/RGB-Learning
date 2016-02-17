<?php

    // parent class

    class Vehicle
    {
        
        // attributes
        
        private $speed;
        
        
        // constructor
        
        public function __construct($sp = 100)
        {
            $this->speed = $sp;
        }
        
        
        // methods
        
        public function speed_up($number)
        {
            $this->speed += $number;
        }
        
        public function slow_down($number)
        {
            $this->speed -= $number;
        }
        
        public function output()
        {
            echo $speed . '<br>';
        }
    }
    
    
    
    // Car extending Vehicle
    
    class Car extends Vehicle
    {
        
        // attributes
        
        private $people;
        
        
        // constructor
        
        public function construct($sp = 100, $pe = 1)
        {
            parent::__construct();
            $this->people = $pe;
        }
        
        
        // methods
        
        public function people_in($number)
        {
            $this->people += $number;
        }
        
        public function people_out($number)
        {
            if($this->people <= 1)
                $this->people = 0;
            else
                $this->people -= $number;
        }
        
        public function output()
        {
            parent::output();
            echo $this->people . '<br>';
        }
    }
