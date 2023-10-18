<?php
    class random{


        public function one(){
            echo"1st function\n";
            return $this;//tis
        }
        public function two(){
            echo"2nd function\n";
            return $this;
        }
        public function three(){
            echo"3rd function\n";
            return $this;
        }

       
    }
    $test = new random();
    $test->one();$test->two();$test->three();//one_by_one_executatuon

    $test->one()->two()->three();
?>