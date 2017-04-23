<?php

class Driver
{
    use SomethingAwareTrait;
    
    public $name;
    
    public function __construct($name)
    {
        $this->name = $name;
    }
    
    public function drive(Car $car)
    {
        echo "{$this->name} drives {$car->brand}";
    }
}