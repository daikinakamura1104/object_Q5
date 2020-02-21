<?php
    require("car.php");
    require("honda.php");
    require("nissan.php");
    require("ferrari.php");
    require("toyota.php");
    
    $distance = 1000;

    $honda = new Honda();
    $nissan = new Nissan();
    $ferrari = new Ferrari();
    $toyota = new Toyota();


    $cars = array($honda,$nissan,$ferrari,$toyota);
    $alltime = array();
    $correctalltime = array();
    
    

    foreach($cars as $value){
        $speed = $value->speed;
        $braketime = $value->braketime;
        var_dump($braketime);
        $alltime[] += $value->subtraction_braketime($speed,$distance,$braketime);
    }
    
       $correctalltime = array("Honda" => $alltime[0], "Nissan" => $alltime[1],"Ferrari" => $alltime[2],"Toyota" => $alltime[3]);

       asort($correctalltime);
       $first=(array_slice($correctalltime,0,1));
       $firstname= key($first);
       $second=(array_slice($correctalltime,1,1));
       $secondname= key($second);
       $third=(array_slice($correctalltime,2,1));
       $thirdname= key($third);
       $fourth=(array_slice($correctalltime,3,1));
       $fourthname = key($fourth);
        echo "総距離が1000kmのレースを行いました。";
        echo "第1位は".$firstname."製の車です。";
        echo "第2位は".$secondname."製の車です。";
        echo "第3位は".$thirdname."製の車です。";
        echo "第4位は".$fourthname."製の車です。";

        
    
    

?>