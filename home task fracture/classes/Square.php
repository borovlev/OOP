<?php

class Square extends Figure
{
    public $a;
    
    public function __construct($a)
    {
        $this->a = $a;
    }
    
    public function getArea()
    {
        return $this->a * $this->a;
    }
}