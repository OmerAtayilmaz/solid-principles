<?php

namespace App\S;

class JsonOutput implements OutputType{
        
        public function format($data)
        {
            echo json_encode($data);
        }
}