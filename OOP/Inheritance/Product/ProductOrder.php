<?php

include 'Product.php';
class ProductOrder extends Product{
  protected $qty;
  protected $unitprice;
  protected $discount;

  public function __construct($code,$name,$qty, $unitprice, $discount) {
    parent::__construct($code, $name);
    $this->qty        = $qty;
    $this->unitprice  = $unitprice;
    $this->discount   = $discount;
  }

  public function getQty() {
      return $this->qty;
  }
  public function getUnitPrice() {
      return $this->unitprice;
  }
  public function getDiscount() {
    return $this->discount;
  }
  
}