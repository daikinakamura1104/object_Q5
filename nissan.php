<?php

    require("car.php");

    class Nissan extends Car{
        
        public function Nissan(){
            
            $this->name = "Nissan";
            $this->minprice = 100;
            $this->maxprice = 149;
        }
    }

    $nissan = new Nissan();
    $name = $nissan->name;
    $minprice = $nissan->minprice;
    $maxprice = $nissan->maxprice;

    echo ($nissan->sumavgprice($name,$minprice,$maxprice));

    
?>