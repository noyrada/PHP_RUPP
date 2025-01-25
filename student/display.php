<h1>Your Information</h1>
<?php
$n = $_POST['name'];
$e = $_POST['email'];
$d = $_POST['dob'];
$a = $_POST['add'];
$y = $_POST['year'];
$g = $_POST['gender'];

$report = "<table border=1 width= 60%>";
$report .= "<tr><td> Name </td>" .$n;
$report .= "<tr><td> Email </td>".$e;
$report .= "<tr><td> DOB </td>"  .$d;
$report .= "<tr><td> Address </td>".$a;
$report .= "<tr><td> Year </td>" .$y;
$report .= "<tr><td> Gender </td>".$g;
$report .= "</table>";
echo $report;

?>
<br/>
<br>
<a href="input.html">Back</a>