<?php

class Counter
{
    public static $count = 0;
    
    public function __construct()
    {
        self::$count++;
    }
    
    public function __destruct()
    {
        self::$count--;
    }
    
    public function __clone()
    {
        self::$count++;
    }
    
    public function __toString()
    {
        return (string)self::$count;
    }
}