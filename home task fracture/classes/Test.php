<?php

class Test
{
    const MY_CONST = 256;
    
    public $blah = 555;
    public static $someProp = 512;
    private $p = 3;
    
    public function __clone()
    {
        echo "cloned";
        var_dump($this);
    }
    
    public static function someMethod()
    {
        echo self::$someProp;
    }
    
    public function __construct(){}
    
    public function test()
    {
        echo self::MY_CONST;
    }
    
    public function __get($name)
    {
        return $this->$name;
    }
    
    public function __set($name, $value)
    {
        echo "You tried to assign $value to $name";
    }
}