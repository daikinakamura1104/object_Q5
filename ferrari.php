<?php
    require("car.php");

    class Ferrari extends Car{
       
        public function Ferrari(){
            $this->name = "Ferrari";
            $this->price = 1500;
            $this->capacity = 2;
            $this->speed = 120;
            $this->height = 120;
            $this->liftupheight = $this->height + 0.4;

        }

        public function liftup($height,$liftupheight,$liftupspeed){
            $msg =  "リフトアップ前の車高は".$height."cmです。フロント車高を40mmリフトアップしました。車高は".$liftupheight."cmです。加速スピードは".$liftupspeed."km/hに減速します。";
            return $msg;
        }
    
        public function liftdown($height, $speed){
            $msg = "リフトダウンを行いました。車高は".$height."cmに戻ります。加速スピードは".$speed."km/hに戻ります。";
            return $msg;
        }
    }

    $ferrari = new Ferrari();
    $height = $ferrari->height;
    $speed = $ferrari->speed;
    $liftupheight = $ferrari->liftupheight;
    $liftupspeed = $ferrari->speed * 0.8;

    echo ($ferrari->liftup($height, $liftupheight, $liftupspeed));

    if ($liftupheight === 120.4){

        echo ($ferrari->liftdown($height,$speed));
    }

?>