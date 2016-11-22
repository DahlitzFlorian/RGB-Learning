<?php

    // parent class

    class Vehicle
    {
        
        public function __construct()
        {}
        
        /*
         * ...more code
         */
    }
    
    
    // new class with extends
    
    class Car extends Vehicle
    {
        
        public function construct()
        {
            parent::__construct();
            echo 'Hello';
        }
        
        /*
         * ...more code
         */
    }
