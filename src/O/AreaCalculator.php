<?php

namespace App\O;

class AreaCalculator {

    public function calculate($shapes){
      
        foreach($shapes as $shape){

            $area[] = $shape->area();
 /* bad practice

            if(is_a($shape,'Square')){
                $area[] = $shape->width * $shape->height;
            }else{
                $area[] = $shape->radius * $shape->radius * pi();
            } */

            
        }   
       
        return array_sum($area);
    }
}