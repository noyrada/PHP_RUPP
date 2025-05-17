<?php
$host = "localhost";
 $db   = "web_db";
 $user = "root";
 $pass = "mysql#it@2024";
 
 // Create connection
 $conn = new mysqli($host, $user, $pass, $db);
 
 // Check connection
 if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
 }

?>