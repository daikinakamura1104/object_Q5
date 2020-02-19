<?php
    require("car.php");

    class Nissan extends Car{
        
        public function Nissan(){

            $this->name = "Nissan";
            $this->capacity = 6;
            $this->speed = 60;
        }
    }

    $nissan = new Nissan();
    
    echo ($nissan->speedsystem(5));

?>