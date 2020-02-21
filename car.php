<?php
    class Car{
        
    public function  subtraction_braketime($speed,$distance,$braketime){
        $distance_brake = $braketime * 1;
        $correctdistance = $distance - $distance_brake;
        $correcttime = round(($correctdistance / $speed),2);
        return $correcttime;
    } 

    }

?>