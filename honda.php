<?php
    require("car.php");

    class Honda extends Car{
        
        public function Honda(){

            $this->name = "Honda";
            $this->capacity = 8;
            $this->speed = 60;
        }
    }

    $honda = new Honda();

    echo ($honda->speedsystem(6));

    
?>