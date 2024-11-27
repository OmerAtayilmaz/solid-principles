<?php

namespace App\S;

class SaleRepositories implements SaleRepositoryInterface{
    
    public function __construct()
    {
        echo "Hello World!";
    }

    public function getSales() : int
    {
        return 100;
    }
      
}