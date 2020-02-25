<?php
    class Car{
        
        public $array = array();

        public function sumavgprice($name,$min,$max){
            $randnum = rand(1,5);
            for($i=1; $i<=$randnum; $i++){
                $array []= rand($min,$max);
            }
            $sum = array_sum($array);
            $avg = round($sum/count($array));
            $msg = $name."製の車".$randnum."台の合計金額は".$sum."万円です。平均金額は".$avg."万円です。";
            return $msg;
        }
    
    }

?>