<form action="ProductInfo.php" method="post">
  <h1>Order Product Form</h1><br>
  Code <input type="text" name="code"><br>
  Name <input type="text" name="name"><br>
  Qty <input type="text" name="qty"><br>
  Unitprice <select name="unitprice" >
    <option value="1.0">1.0</option>
    <option value="2.0">2.0</option>
    <option value="3.0">3.0</option>
    <option value="4.0">4.0</option>
    <option value="5.0">5.0</option>
  </select><br>
  Discount 
  <input type="radio" name="dis" value="5" checked>5% 
  <input type="radio" name="dis" value="10">10%
  <input type="radio" name="dis" value="15">15%
  <br>
  <input type="submit" value="Order">
</form>

<?php
  include 'ProductOrder.php';

  if(isset($_POST['code'])){
  $code=$_POST['code'];
  $name=$_POST['name'];
  $qty=$_POST['qty'];
  $unitprice=$_POST['unitprice'];
  $dis=$_POST['dis'];

  function income($unitprice,$dis,$qty){
    $price=$unitprice*$qty;
    return $price-($price*$dis)/100;
  }

  $productorder =new ProductOrder($code,$name,$qty,$unitprice,$dis);
  echo "Code:". $productorder->getCode()."<br>";
  echo "Name:". $productorder->getName()."<br>";
  echo "QTY:". $productorder->getQty()."<br>";
  echo "UnitPrice:". $productorder->getUnitPrice()."$<br>";
  echo "Discount:". $productorder->getDiscount()."%<br>";
  echo "Income:". income($productorder->getUnitPrice(),$productorder->getDiscount(),$productorder->getQty())."$<br>";
  }
?>
