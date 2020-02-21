<?php
    class Car{
        
        
        public function  speedsystem($passenger,$name){
            if($name == "Nissan"){
                $this->speed = $this->speed * 0.6;
            }
            if($passenger <= $this->capacity){
                for($i=1; $i<= $passenger; $i++){
                    $this->speed *= 0.95;
                    $correctspeed = round($this->speed); 
                }
            }else{
                return $msg = "定員オーバーです。";
            }
            return $msg = $name."製の車の乗車人数が".$passenger."人の時の加速性能は".$correctspeed."km/hです。";
        }
    }

?>