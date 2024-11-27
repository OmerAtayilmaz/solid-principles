<?php

namespace App\O;


class Square implements Shape {

    public function __construct(private $width, private $height){

    }

    public function area()
    {
        return $this->width * $this->height;
    }
}   