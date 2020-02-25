<?php

    class Nissan extends Car {
        
        public function Nissan(){

            $this->name = "Nissan";
            $this->speed =  60;
            $this->braketime = rand(1,20);
        }
    }
?>