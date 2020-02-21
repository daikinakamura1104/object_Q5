<?php
    require("car.php");

    class Honda extends Car{
        
        public function Honda(){

            $this->name = "Honda";
            $this->capacity = 6;
            $this->speed = 60;
        }
    }
    $honda = new Honda();
    $name = $honda->name;

    echo ($honda->speedsystem(5,$name));
    
?>