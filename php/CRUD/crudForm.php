<center>
<h1>Please Enter Data</h1>
<hr/>
<form action="crud.php" method="post">
<table>
<tr><td>ID<td><input type="text" name="id" />
<tr><td>Name<td><input type="text"  name="name" />
<tr><td>Email <td><input type="email" name="email" />
<tr><td>Password<td><input type="password" name="password" />
<tr><td colspan="2"><input type="submit" value="Add" />
<table>

</form>
<br/>
<?php
$con=mysqli_connect("localhost","root","","homedb");
//$sql="insert into tbuser values(6,'kong','kong@gmail.com','123456')";
//$sql="update tbuser set name='vuthy',email='vuthy@gmail.com',password='223344' where id=6";
//$sql="delete from tbuser where id=6";
if(isset($_POST['id'])){
    $i=$_POST['id'];
    $n=$_POST['name'];
    $e=$_POST['email'];
    $p=$_POST['password'];
    $sql="insert into tbuser values(".$i.",'".$n."','".$e."','".$p."')";
    mysqli_query($con,$sql);
}
$sql="select * from tbuser";
$rs=mysqli_query($con,$sql);
echo "<table border=1 width=60%>";
while($row=mysqli_fetch_object($rs)){
echo "<tr>";
echo "<td>".$row->id;
echo "<td>".$row->name;
echo "<td>".$row->email;
echo "<td>".$row->password;
echo "<td><a href=>Edit</a>";
echo "<td><a href=>Delete</a>";
echo "</tr>";    
}
echo "</table>";
mysqli_close($con);
?>
</center>