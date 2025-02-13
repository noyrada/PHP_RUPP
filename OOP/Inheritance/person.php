<?php

class Person {
    private $firstname;
    private $lastname;
    private $ssn;

    public function __construct($f="sok", $l="san", $s="10001") {
        
    }

    public function setFirstname($f) {
        $this->firstname = $f;
    }

    public function setLastname($l) {
        $this->lastname = $l;
    }

    public function setSSN($s) {
        $this->ssn = $s;
    }

    public function getFirstname(){
        return $this->lastname;
    }

    public function getLastname() {
        return $this->lastname;
    }

    public function getSSN() {
        return $this->ssn;
    }

    public function toString() {
        return $this->getFirstname().",".$this->getLastname().",".$this->getSSN();
    }
    
}