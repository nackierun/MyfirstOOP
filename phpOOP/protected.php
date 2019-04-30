<?php
//public
//private
//protected
class Person{
    public $firstname = 'firstname: '.'thanasak';
    private $lastname = 'lastname: '.'srisuwan';
    protected $gender = 'gender: '.'male';
    function __construct(){
        echo self::class.":";
        echo $this->firstname.",";
        echo $this->lastname.",";
        echo $this->gender.",";
        echo "</br>";

    }
}
class Subclass extends person {
    function __construct(){
        echo self::class.":";
        echo $this->firstname.",";
        echo $this->lastname.",";
        echo $this->gender.",";
        echo "</br>";
    }

}
$base = new person;
$sub = new Subclass;
        echo $base->firstname.",";
       // echo $base->lastname.",";
       // echo $base->gender.",";
        echo "</br>";
        echo $sub->firstname.",";
       // echo $sub->lastname.",";
       // echo $sub->gender.",";
        echo "</br>";
?>