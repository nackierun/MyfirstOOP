<?php
class Firstclass{
	public $name="thanasak";
	public function sayhi(){
	
echo "HI"."".$this->name;

	}
}
$obj=new Firstclass;
$obj->name="nack";
$obj->sayhi();
$obj->name;
?>