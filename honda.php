<?php
    require("car.php");

    class Honda extends Car{
        
        public function Honda(){
            
            $this->name = "Honda";
            $this->minprice = 150;
            $this->maxprice = 250;
        }
    }

    $honda = new Honda();
    $name = $honda->name;
    $minprice = $honda->minprice;
    $maxprice = $honda->maxprice;

    echo ($honda->sumavgprice($name,$minprice,$maxprice));

    
?>