<?php
     require("car.php");

     class Ferrari extends Car{
         
         public function Ferrari(){
             
             $this->name = "Ferrari";
             $this->minprice = 1500;
             $this->maxprice = 2000;
         }
     }
 
     $ferrari = new Ferrari();
     $name = $ferrari->name;
     $minprice = $ferrari->minprice;
     $maxprice = $ferrari->maxprice;
 
     echo ($ferrari->sumavgprice($name,$minprice,$maxprice));
 
     
?>