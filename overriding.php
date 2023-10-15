<?php
    class A{
        public $name,$lastName;
        function showName($f,$l=""){
            $this->name=$f;
            $this->lastName=$l;

            echo "My name is :".$this->name;
        }
    }

    class B extends A{
      
        function showName($f,$l=""){
            $this->name=$f;
            $this->lastName=$l;
        
        echo"Your name is :  ".$this->lastName." ".$this->name."<br>";
        }
    }


    $objB=new B(); 
    $objB->showName("Nitesh","Poudel");

    $objA=new A();
   
    $objA->showName("Ram");
?>