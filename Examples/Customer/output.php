<?php
//print_r($_POST);
$n=$_POST['name'];
$d=$_POST['dob'];
$e=$_POST['email'];
$t=$_POST['type'];
$p=$_POST['pack'];
$a=$_POST['add'];
$result="<table border=1 width=60%>";
$result.="<tr><td>Name<td>".$n;
$result.="<tr><td>DOB<td>".$d;
$result.="<tr><td>Email<td>".$e;
$result.="<tr><td>Type<td>".$t;
$result.="<tr><td>Package<td>".$p;
$result.="<tr><td>Address<td>".$a;
$result.="</table>";
echo $result;
?>
<br/>
<a href="input.html">Back</a>
