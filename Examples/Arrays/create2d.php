<h1>Create 2D Array</h1>
<hr/>
<form action="create2d.php" method="post">
<table>
<tr><td>Row<td><input type="text" name="row"/>
<tr><td>Col<td><input type="text" name="col"/>
<tr><td>Min Value<td><input type="text" name="min"/>

<tr><td>Max Value<td><input type="text" name="max"/>
<tr><td colspan="2"><input type="submit" value="Create" />
</table>
</form>
<?php
 if(isset($_POST['col'])){
  $r=(int)$_POST['row']; 
  $c=(int)$_POST['col']; 
  $ma=(int)$_POST['max']; 
  $mi=(int)$_POST['min']; 
  //create array
  $x=array();
  for($i=0;$i<$r;$i++)
  $x[$i]=array();
  //assigned value random [min,max]to array 
  for($i=0;$i<$r;$i++)
  for($j=0;$j<$c;$j++)
  $x[$i][$j]=rand($mi,$ma);
  $result="<table border=2>";
  foreach($x as $a){
    $result.="<tr>";
    foreach($a as $t) $result.="<td>".$t;
    $result.="</tr>";
  }
  $result.="</table>";
  echo $result;

 }
?>