<?php
    require("car.php");

    class Ferrari extends Car{
       
        public function Ferrari(){

            $this->name = "Ferrari";
            $this->capacity = 2;
            $this->speed = 120;
        }
    }

    $ferrari = new Ferrari();
    
    echo ($ferrari->speedsystem(3));
?>