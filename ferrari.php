<?php
   
    class Ferrari extends Car{
       
        public function Ferrari(){
            
            $this->name = "Ferrari";
            $this->speed = 120;
            // パーセントでブレーキ数だす
            $this->braketime = rand(1,20);
            // ブレーキからの復帰時間
            
        }
    }
   
?>