<?php
    class Car{
        
    public function  make_correcttime($speed,$distance,$braketime){
        $distance_brake = $braketime * 1;
        $correctdistance = $distance - $distance_brake;
        $correcttime = round(($correctdistance / $speed),2);
        return $correcttime;
    } 

    }

?>