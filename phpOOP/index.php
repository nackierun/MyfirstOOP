<?php
class Firstclass{
    public $name="thanasak srisuwan";
    public $surname="srisuwan";
    public function sayhi(){
        $name="thanasak";
        $surname="srisuwan";
        echo "hi&nbsp"."".$this->name." ".$this->surname." ".$this->saybye();
    }
    public function saybye(){
        return "</br>goodbye";
    }
}
$obj=new Firstclass;
$obj->name="nack";
$obj->surname="srisuwan";
$obj->sayhi();

?>