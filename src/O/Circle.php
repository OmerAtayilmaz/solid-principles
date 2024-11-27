<?php

namespace App\O;
use App\O\Shape;

class Circle implements Shape {
    public function __construct(private $radius){
        
    }

    public function area()
    {
        return $this->radius * $this->radius * pi();
    }
}