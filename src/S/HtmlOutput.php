<?php

use App\S\OutputType;

class HtmlOutput implements OutputType{
        
        public function format($data)
        {
            echo "<h1>$data</h1>";
        }
}