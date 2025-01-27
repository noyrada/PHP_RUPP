<?php

// Retrieve and sanitize form data
$name      = htmlspecialchars($_POST['name']);
$sex       = htmlspecialchars($_POST['sex']);
$country   = htmlspecialchars($_POST['country']);
$message   = htmlspecialchars($_POST['message']);
$subscribe = isset($_POST['subscribe']) ? "Yes" : "No";

// Display submitted data
echo "<h1>Form Output</h1>";
echo "<p><strong>Name:</strong> $name</p>";
echo "<p><strong>Sex:</strong> $sex</p>";
echo "<p><strong>Country:</strong> $country</p>";
echo "<p><strong>Message:</strong> $message</p>";
echo "<p><strong>Subscribed:</strong> $subscribe</p>";

// Display data as table
echo "<h1>Display as Table</h1>";
$result  = "<table border='1' width='50%' cellspacing='0' cellpadding='5'>";
$result .= "<tr><th> Field</th><th>    Value</th></tr>";
$result .= "<tr><td> Name</td><td>     $name</td></tr>";
$result .= "<tr><td> Sex</td><td>      $sex</td></tr>";
$result .= "<tr><td> Country</td><td>  $country</td></tr>";
$result .= "<tr><td> Message</td><td>  $message</td></tr>";
$result .= "<tr><td> Subscribed</td><td>$subscribe</td></tr>";
$result .= "</table>";
echo $result;

?>

<br/><br/>
<a href="formData.html">Back</a>
