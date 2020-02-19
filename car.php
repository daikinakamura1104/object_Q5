<?php
    class Car{
        
        public $array = array();

        public function sumavgprice($name,$min,$max){
            $array = [rand($min,$max),rand($min,$max),rand($min,$max)];
            $sum = array_sum($array);
            $avg = round($sum/count($array));
            $msg = $name."製の車の合計金額は".$sum."万円です。平均金額は".$avg."万円です。";
            return $msg;
        }
    
    }

?>