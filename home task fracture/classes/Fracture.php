<?php

class Fracture
{
    public $numerator;
    public $denominator;
    
    public function __construct($numerator, $denominator)
    {
        $this->numerator = (int) $numerator;
        
        if ($denominator == 0) {
            throw new FractureException("Division by zero");
        }
        
        $this->denominator = (int) $denominator;
    }
    
    public function getDecimal()
    {
        return $this->numerator / $this->denominator;
    }
    
    public function multiplyBy($number)
    {
        $this->numerator *= $number;
        $this->denominator *= $number;
    }
    
    public function __toString()
    {
        return "{$this->numerator}/{$this->denominator}";
    }
    
    public static function add(Fracture $f1, Fracture $f2)
    {
        $f1Temp = clone $f1;
        $f2Temp = clone $f2;
        
        $f1Temp->multiplyBy($f2->denominator);
        $f2Temp->multiplyBy($f1->denominator);
        
        $numerator = $f1Temp->numerator + $f2Temp->numerator;
        return new Fracture($numerator, $f1Temp->denominator);
    }
}