<?php
//distructor_call_itself_when_every_task_is_complete
class dis{
    function __destruct(){
        echo"It is distructor function</br>";
    }
    function __construct(){
        echo"It is constructor function</br>";
    }

    function normal(){
        echo"It is normal function</br>";
    }

 
}

$test=new dis();
$test->normal();$test->normal();

?>