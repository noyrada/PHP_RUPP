<?php
$conn = mysqli_connect("localhost","root","","homeDB");

   //$sql="insert into tbuser values(5,'kong','kong@gmail.com','123456')";
   //$sql="update tbuser set name='vong',email='vong@gmail.com', password='223344' where id=4";
    //$sql="delete from tbuser where id=5";
    
$sql = "select * from tbuser";
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($result)) {
    echo "<h1>".$row['id'].",".$row['name'].",".$row['email'].",".$row['password']."</h1>";
}

mysqli_close($conn);

?>