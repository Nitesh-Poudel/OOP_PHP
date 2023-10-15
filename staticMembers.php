
<?php
    class intro{
        public static $name="NiteshJI";
        static function  sayHlo(){
            echo "Hello ".self::$name;//because_of_static_proprtty
        }


        public function __construct($n){
            self::$name=$n;//calling_the_function_of_own_class_by_name
          self::sayHlo();
        }
    }

    intro::sayHlo();


    $a=new intro("RamJi");//called_automatically_due_to_having_constructor
    //using_thise_in_derived_class
    class secondPerson extends intro{
        function __construct($n){
            self::$name=$n;
            self::sayHlo();

        }
        static function sayHlo(){
            echo"he is ".self::$name;
        }
    }

    $second=new secondPerson("hari");
    $second::sayHlo();

//in_derived_class_and_base_class_both_it_can_be_acess_in_any_way_ie_using_obj_-or_without
   // secondPerson::sayHlo();


//conclusion_is_by_use_of_static_meber_we_does_not_need_to_create_obj_to_use_methods_and_properties
//self,parent_static_etc_are_keywords_here
?>