<?php

trait SomethingAwareTrait
{
    private $something;
    
    public function setSomething($something)
    {
        $this->something = $something;
    }
}