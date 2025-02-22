<?php

$name     = $_POST['name'];
$email    = $_POST['email']; 
$password = $_POST['password'];

setcookie("name", $name,time()+(60*60));
setcookie("email", $email,time()+(60*60));
setcookie("password", $password,time()+(60*60));

?>

<h1>Save Complete</h1>
<a href="read.php">Read Cookie</a>