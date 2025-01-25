<form action="employee.php" method="post">
Name <input type="text" name="name" value="sok" /><br/>
Hour <input type="text" name="hour" /><br/>
Rate 
<select name="rate">
 <option value="18.0">18.0$</option>
 <option value="20.0">20.0$</option>
 <option value="25.0">25.0$</option>
</select>
<br/>
Rate Tax 
<input type="radio" name="ratetax" value="0.05">5% 
<input type="radio" name="ratetax" value="0.1">10%
<input type="radio" name="ratetax" value="0.15">15%
<br/>
<input type="submit" value="Calculate" />
<input type="reset" value="Clear" /><br/>
</form>
<?php
 if(isset($_POST['name'])){
    $n=$_POST['name'];
    $h=(float)$_POST['hour'];
    $r=(float)$_POST['rate'];
    $rt=(float)$_POST['ratetax'];
    $s=$h*$r;
    $t=$s*$rt;
    $net=$s-$t;
    $result="<table border=1>";
    $result.="<tr><td>Name<td>".$n;
    $result.="<tr><td>Hour<td>".$h;
    $result.="<tr>><td>Rate<td>".$r;
    $result.="<tr><td>Salary<td>".$s;
    $result.="<tr><td>Tax<td>".$t;
    $result.="<tr><td>Income<td>".$net;
    $result.="</table>";
    echo $result;
 }
?>