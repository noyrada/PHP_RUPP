<h1>Play Game Random</h1>
<form action="enter.php" method="post">
Type 
<input type="radio" name="type" value="1">One
<input type="radio" name="type" value="2">Two
<input type="radio" name="type" value="3">Three
<br/>
Your num<input type="text"  name="yournum" /><br/>
<input type="submit" value="Play" />
</form>
<?php
if(isset($_POST['yournum'])){
$t=(int)$_POST['type'];
$y=(int)$_POST['yournum'];
$m=0;
switch($t){
    case 1:$m=rand(0,9);$result=" One ";break;
    case 2:$m=rand(10,99);$result=" Two ";break;
    case 3:$m=rand(100,999);$result=" Three ";break;
}
    $result.=$y." : ".$m;
    $result.=($y==$m)? " Win!!" :"  Lose !!";
    echo "<h1>".$result."</h1>";
}

?>