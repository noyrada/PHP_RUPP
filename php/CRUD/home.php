<h1>Create User </h1>
<hr/>
<form action="home.php" method="post">
ID <input type="text" name="id" /><br/>
Name <input type="text" name="name" /><br/>
Email <input type="email" name="email" /><br/>
Password <input type="password" name="password" /><br/>
<input type="submit" value="Add" />
</form>

<?php

$conn = mysqli_connect("localhost", "root", "mysql#it@2024", "WEB_DB");

   //$sql="insert into tbuser values(6,'long','long@gmail.com','123456')";
if(isset($_POST['id'])){
    $i=$_POST['id'];
    $n=$_POST['name'];
    $e=$_POST['email'];
    $p=$_POST['password'];
    $sql="insert into tbuser values(".$i.",'".$n."','".$e."','".$p."')";
    mysqli_query($conn,$sql);
}

    //$sql="update tbuser set name='kong', email='kong@gmail.com',password='223344' where id=6";
   //$sql="delete from tbuser where id=6";
   $sql="select * from tbuser";
   $rs=mysqli_query($conn,$sql);
   echo "<table border=1 width=60%>";
   while($row=mysqli_fetch_object($rs)){
   echo "<tr>";
   echo "<td>".$row->id;
   echo "<td>".$row->name;
   echo "<td>".$row->email;
   echo "<td>".$row->password;
   echo "</tr>";

   }
   //echo "</table>"
   mysqli_close($conn);
?>