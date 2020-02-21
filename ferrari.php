<?php
   
    class Ferrari extends Car{
       
        public function Ferrari(){
            
            $this->name = "Ferrari";
            $this->capacity = 2;
            $this->speed = 120;
            $this->braketime = rand(1,20);
        }
    }
   
?>