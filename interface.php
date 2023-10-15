<?php
//It_is_used_to_inherit_multiple_class(Interface)implements
//Thisg_to_note
    //it_act_as_like_abstract_class
    //no_method_to_be_implement
    //can't_create_object


    interface A{
        
        function hello($name);
    }

    interface B{
        function hi($name);
        function bye();
    }

    class C implements A,B{
        public function hello($name){
            echo "Hello ".$name;
        }

        public function hi($name){
            echo"Hi.....".$name." babe";

        }

        public function bye(){
            echo"BYe...bye";
        }

    }

    $cKoObj=new c();
    $cKoObj->hello("Ram");
    $cKoObj->hi("Nitesh");


?>