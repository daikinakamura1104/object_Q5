<?php

    class Toyota extends Car{
        
        public function Toyota(){
            
            $this->name = "Toyota";
            $this->braketime = rand(1,20);
            $price = 110;
            // case文使う
            if($price != ""){
                if($price < 100 ){
                    $this->speed = 50;
                    return $this->speed;
                }
                else if($price >= 100 && $price < 150){
                    $this->speed = 60;
                    return $this->speed;
                }else if($price > 150 && $price < 200){
                    $this->speed = 80;
                    return $this->speed;
                }else if($price > 200 && $price < 250){
                    $this->speed = 90;
                    return $this->speed;
                }else{
                    $this->speed = 100;
                    return $this->speed;
                }
            }
        }
    }
   
?>