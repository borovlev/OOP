<?php

class Car
{
    use SomethingAwareTrait;
    
    public $brand;
    public $model;
    public $year;
    protected $price;
    
    
    
    public function __construct($brand, $model, $year, $price)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
        $this->setPrice($price);
    }
    
    public function setPrice($price)
    {
        if ($price < 0) {
            die('Wrong price');
        }
        
        $this->price = round($price, 2);
    }
    
    public function getPrice()
    {
        return $this->price;
    }
    
    public function getFormattedPrice()
    {
        return number_format($this->price, 2, ', ', ' ');
    }
}

