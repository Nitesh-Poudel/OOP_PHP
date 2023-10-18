<<<<<<< HEAD
<?php
class student{
    public $name;
    public $phone;

    function __construct($n='no-nono',$p='9'){
        $this->name = $n;
        $this->phone=$p;
    }
    function show(){
        echo ucwords("hello ".$this->name." Your number is : ".$this->phone.'<br>');
    }

}
$s1=new student('Ram','987654321');
$s1->show();

$s2=new student();
$s2->show();

=======
<?php
class student{
    public $name;
    public $phone;

    function __construct($n='no-nono',$p='9'){
        $this->name = $n;
        $this->phone=$p;
    }
    function show(){
        echo ucwords("hello ".$this->name." Your number is : ".$this->phone.'<br>');
    }

}
$s1=new student('Ram','987654321');
$s1->show();

$s2=new student();
$s2->show();

>>>>>>> 5b81cb5994ffb70ee3a517ffdde3a1360cb2d38e
?>