<?php
  class Product{
    protected $code;
    protected $name;
    public function __construct($code, $name) {
      $this->code=$code;
      $this->name=$name;
    }
    public function getCode() {
        return $this->code;
    }

    public function getName() {
        return $this->name;
    }
  }
?>
