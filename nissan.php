<?php
    require("car.php");

    class Nissan extends Car {
        
        public function Nissan(){

            $this->name = "Nissan";
            $this->capacity = 6;
            $this->speed = 70;
        }
    }

        $nissan = new Nissan();
        $name = $nissan->name;
    
        echo ($nissan->speedsystem(5,$name));

?>

