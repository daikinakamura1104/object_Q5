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
    $name = $ferrari->name;

    echo ($ferrari->speedsystem(1,$name));
   
?>