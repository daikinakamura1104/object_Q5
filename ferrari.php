<?php
    require("car.php");

    class Ferrari extends Car{
       
        public function Ferrari(){

            $this->name = "Ferrari";
            $this->minprice = 1000;
            $this->maxprice = 3000;
        }
    }

    $ferrari = new Ferrari();
    $name = $ferrari->name;
    $minprice = $ferrari->minprice;
    $maxprice = $ferrari->maxprice;

    echo ($ferrari->sumavgprice($name,$minprice,$maxprice));

?>