<?php
class employee{
    public $name,$age,$salery;

    function __construct($n,$a,$s){
        $this->name=$n;
        $this->age=$a;
        $this->salery=$s;
    
    }

    function info(){
        echo"<table><tr><td>".$this->name."</td><td>".$this->age."</td><td>".$this->salery."</td></tr></table>";
    }

}



class manager extends employee{
    public $bonus,$tax;
    function __construct($n,$a,$s,$b='000',$t='500'){
        parent:: __construct($n,$a,$s);
        $this->bonus=$b;
        $this->tax=$t;

    }

    function countSalary(){
       $net= $this->salery+$this->bonus-$this->tax;
       echo ucwords($this->name." as a manager your salary is: ".$this->salery."<br>Your bonous : ".$this->bonus."<br>Tax : ".$this->tax."<br><br>Net Salery : ".$net);
    }
}


$m1=new manager('ramm','43','20000','10000','500');
$m1->countSalary();

//In_this_programm_I_have_made_tw0_class_and_inherit_the_proporty_of_base_class_that_is_salary_to_count_salary_of_manager_after_bonus_and_tax_parent::istodefine_construcroir_of_parent_variabale
?>
