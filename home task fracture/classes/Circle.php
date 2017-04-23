<?php

class Circle extends Figure
{
    public $r;
    
    public function __construct($r)
    {
        $this->r = $r;
    }
    
    public function getArea()
    {
        return 3.14 * $this->r * $this->r;
    }
}