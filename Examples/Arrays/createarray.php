<h1>Create Array 2D</h1>
<form action="createarray.php" method="post">
Rows <input type="text"  name="row"/><br/>
Cols <input type="text"  name="col"/><br/>
Min Value <input type="text" name="min" /><br/>
Max Value <input type="text" name="max"/><br/>
<input type="submit" value="Create" /><br/>
</form>
<?php
if(isset($_POST['row'])){
 $r=(int)$_POST['row'];
 $c=(int)$_POST['col'];
 $mi=(int)$_POST['min'];
 $ma=(int)$_POST['max'];
 //create 2D
 $x=array();
 for($i=0;$i<$r;$i++)
 $x[$i]=array();
//assigned array to random value [min,max]
for($i=0;$i<$r;$i++)
for($j=0;$j<$c;$j++)
$x[$i][$j]=rand($mi,$ma);
//output
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