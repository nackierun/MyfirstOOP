<?php
//public<--
//private
//protected

//employee
class Employee extends Person {
public $jobTitle;
public function __construct($jobTitle,$firstname,$lastname,$gender = 'f'){
$this->jobTitle = $jobTitle;
parent::__construct($firstname,$lastname,$gender);
}
public function getJobTitle(){
return $this->jobTitle;
}
}
//person
class Person{
public $firstname;
public $lastname;
public $gender;
public function __construct($firstname,$lastname,$gender = 'f'){
$this->firstname = $firstname;
$this->lastname = $lastname;
$this->gender = $gender;
}
public function sayhello(){
	return "hello my name is ".$this->firstname ." ".$this->lastname." ".$this->gender."</br>";
}
public function getGender(){
	return $this->gender;
}
}
//creat object of person
$nack = new Person('thanasak','srisuwan','male');
$mack = new Person('sanathak','srisuwan','female');
//output
echo $nack->sayhello();
echo $mack->sayhello()."gender: ".$mack->getGender()."</br>";
//creat object of employee
$employee = new Employee('backend deverloper','mack','srisuwan');
echo $employee->getJobTitle()."</br>";
$mack = new Employee('backend deverloper','mack','srisuwan');
//output
echo $mack->sayhello()." ".$mack->getJobTitle();
echo "\n";
echo $mack->getGender();
echo "\n";
echo $mack->sayhello();
//creat
$mack = new Employee('backend deverloper','mack','srisuwan');
$mack->jobTitle = 'frontend deverloper';
//output
echo $mack->jobTitle;
?>