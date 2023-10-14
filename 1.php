<?php 
// class, object,abstraction,encapsulation,polymorphisam,inheritence,access modifier,exception,final keyword, static keyword,autoload,this keyword, parent keyword, constructor, destructor,abstract class, interface

class Student{
	//class member variable
	var $name,$id,$email,$phone;
	//class member method
	function sayHello(){
		echo 'Hello, ' . $this->name; 
	}
	//field sepecific method
	// function setName($name){
	// 	$this->name = $name;
	// }

	// function getName(){
	// 	echo $this->name;
	// }

	//common setter and getter
	function setData($key,$value){
		$this->$key = $value;
	}

	function getData($key){
		return $this->$key;
	}
}
//create object
$ram = new Student();
print_r($ram);
//use member varibale/property of class
// $ram->name = 'Ram Baburam';
// $ram->setName('Ram Baburam');
$ram->setData('name','Ram Baburam');
$ram->setData('id',54);
$ram->setData('email','info@gmail.com');
$ram->setData('phone',985454545);

print_r($ram);
//call method of class
// $ram->getName();
echo $ram->getData('name');
echo $ram->getData('email');
echo $ram->getData('phone');
echo $ram->getData('id');


 ?>