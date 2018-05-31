<?php 
class Person{

public $name;

public $date;


public function set_name($new_name){

	$this->name= $new_name;
}


public function get_name(){

	return $this->name;
}



public function set_date($new_date){

	$this->date= $new_date;
}

public function get_date(){

	return $this->date;
}

}

$clin= new Person();

$clin->set_name("Clinton Were");

echo "My Name is " . $clin->get_name() . "<br>";

$clin->set_date(date("d/m/y"));

echo "date today is " . $clin->get_date() . "<br>";





class Trainee extends Person{

	static $company;
	private $ID;

	static function my_company(){


		echo "my company is " . Trainee::$company="Cohesion Digital" . "<br>";
	}


	function get_ID(){

		echo "my ID number is " . $this->ID="31868647";
	}
}

Trainee::my_company();

$trainee= new Trainee();
$trainee->get_ID();


?>