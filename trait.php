<?php
    //trait_is_the_class_like_structrure_used_to_make_functions_that_is_used_in_multiple_class
    trait sayHlo{//
        public $name;
        function __construct($n){
            $this->name=$n;
        }
        
        public function hlo(){
           
            
            echo"hello ".$this->name;
            echo"</br>";
        }
        public function bye(){
            echo"By ".$this->name;
            echo"</b>";
        }




    }

    class one{
        use sayHlo;
       
    }
    
    class two{
        use sayHlo;
    }

   $one=new one("nitesh");
    $two = new two("hari");

    for($i=0;$i<=10;$i++){$one->hlo();}
    $two->hlo();

    $one->bye();
?>