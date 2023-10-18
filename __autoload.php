<?php
    //require "autoloadClasses/first.php";
    //require "autoloadClasses/second.php";

    function __autoload($class){
        require "autoloadClasses/".$class.".php";//autoload
    }

    $objFirst=new first();//object_of_first_class
    //$objSecond=new second();//object_of_first_class
    
?>