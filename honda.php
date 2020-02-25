<?php

    class Honda extends Car{
        
        public function Honda(){

            $this->name = "Honda";
            $this->speed = 60;
            $this->braketime = rand(1,20);
        }
    }
    
?>