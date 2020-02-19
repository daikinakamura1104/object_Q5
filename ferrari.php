<?php
    require("car.php");

    class Ferrari extends Car{
       
        public function Ferrari(){
            $this->name = "Ferrari";
            $this->price = 1500;
            $this->capacity = 2;
            $this->speed = 120;
        }
    }

    $ferrari = new Ferrari();
    echo $ferrari->accelerator();
    echo $ferrari->brake();
?>