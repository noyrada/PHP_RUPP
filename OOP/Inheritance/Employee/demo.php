<form action="demo.php" method="post">
First name <input type="text" name="f" /><br/>
Last  Name <input type="text" name="l"/><br/>
SSN  <input type="text" name="ssn" /><br/>
ID   <input type="text"  name="id" /><br/>
Hour <input type="text" name="hour"/><br/>
Rate 
<select name="rate">
    <option value="20.0">20.0$</option>
    <option value="25.0">25.0$</option>
    <option value="30.0">30.0$</option>
</select>
<br/>
<input type="submit" value="Add" />
</form>
<br/>

<?php
include_once("employee.php");
if(isset($_POST['f'])) {
    $f = $_POST['f'];
    $l = $_POST['l'];
    $s = $_POST['ssn'];
    $i = $_POST['id'];

    $h=(float)$_POST['hour'];
    $r=(float)$_POST['rate'];

    $e=new Employee($i,$f,$l,$s,$h,$r);
    echo "<h1>".$e->toString()."</h1>";
}

?>