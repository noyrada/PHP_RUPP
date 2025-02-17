<?php
include("person.php");

class Employee extends Person {
    private $id;
     private $hour;
     private $rate;
     public function __construct($i=1,$f="sok",$l="chan",$s="100001",$h=100,$r=20){
        Person::__construct($f,$l,$s);
        $this->setId($i);
        $this->setHour($h);
        $this->setRate($r);
     }
     public function setId($i){
        $this->id=$i;

     }
     public function setHour($h){
        $this->hour=$h;
     }
     public function setRate($r){
        $this->rate=$r;
     }
     public function getId(){
        return $this->id;
     }
     public function  getHour(){
        return $this->hour;
     }
     public function getRate(){
     return $this->rate;
     }
     public function getSalary(){
        return $this->hour * $this->rate;
     }
     public function toString(){
        $re=Person::toString();
        return $this->getId().",".$re.",".$this->getHour().",".$this->getRate().",".$this->getSalary();
     }
     
}