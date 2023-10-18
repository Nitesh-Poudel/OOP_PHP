<<<<<<< HEAD
<?php
    class calculate{
        public $a,$b,$c;//these_variables_will_get_the_vale_passed_by_object_below;

        function sum(){
            $this->c=$this->a+$this->b;//this_is_used_to_tell_the_value
            return $this->c;
        }
        function diff(){
            $this->c=$this->a-$this->b;
            return $this->c;
        }
        
    }
    $c1=new calculate();
    $c1->a=10;
    $c1->b=5;

    $c2=new calculate();//made multiple  objects from same class
    $c2->a=20;//assigning_value_to_the_property__ie.Object_c2's_property"a"
    $c2->b=23;


    echo"from object c1 sum". $c1->sum().'<br>';
    echo"from object c1 diff". $c1->diff().'<br>'.'<br>';

    echo"from object c2 sum". $c2->sum().'<br>';
    echo"from object c2 diff". $c2->diff();

    //this code define how to use class and obj
?>
=======
<?php
    class calculate{
        public $a,$b,$c;//these_variables_will_get_the_vale_passed_by_object_below;

        function sum(){
            $this->c=$this->a+$this->b;//this_is_used_to_tell_the_value
            return $this->c;
        }
        function diff(){
            $this->c=$this->a-$this->b;
            return $this->c;
        }
        
    }
    $c1=new calculate();
    $c1->a=10;
    $c1->b=5;

    $c2=new calculate();//made multiple  objects from same class
    $c2->a=20;//assigning_value_to_the_property__ie.Object_c2's_property"a"
    $c2->b=23;


    echo"from object c1 sum". $c1->sum().'<br>';
    echo"from object c1 diff". $c1->diff().'<br>'.'<br>';

    echo"from object c2 sum". $c2->sum().'<br>';
    echo"from object c2 diff". $c2->diff();

    //this code define how to use class and obj
?>
>>>>>>> 5b81cb5994ffb70ee3a517ffdde3a1360cb2d38e
