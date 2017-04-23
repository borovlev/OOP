<?php

class Hatchback extends Car
{
    public $superPower;
    
    public function __construct($brand, $model, $year, $price, $superPower)
    {
        parent::__construct($brand, $model, $year, $price);
        $this->superPower = $superPower;
    }
    
    // public function __construct($brand, $model, $year, $price)
    // {
    //     $this->brand = $brand;
    //     $this->model = $model;
    //     $this->year = $year;
    //     $this->setPrice($price);
    // }
}
