<?php

class Person {
    // PROPERTIES
    //only declared, not assigned, like a blueprint
    // private = only used inside class, not shown in HTML
    // use method to return value
    private $name;
    private $eyecolor;
    private $age;

    //runs in the beginning when we create class
    public function __construct($name, $eyecolor, $age){
        $this->name = $name;
        $this->eyecolor = $eyecolor;
        $this->age = $age;
    }

    //clean class or get rid of stuff
    //runs when object gets closed off
    public function __destruct()
    {
        
    }

    //METHODS
    public function setName($name){
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }
}