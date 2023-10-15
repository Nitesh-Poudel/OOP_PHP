<?php
    abstract class A{
        public $x=10;
        public $y=15;

        abstract public function add();
        
        
    }

    class B extends A{
        public function add(){
            $sum=$this->x+$this->y;
            return $sum;
        }

    }

    $obj=new B();
    echo$obj->add();
?>