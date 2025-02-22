<?php

session_start();
echo '<h1> .session_id(). </h1>';

$item  = $_POST['item'];
if(isset($_SESSION['shop'])) {
    $_SESSION['index'] = $_SESSION['index']+1;
    $_SESSION['shop'][$_SESSION['index']] = $item;
}
else {
    $_SESSION['shop'] = array();
    $_SESSION['index'] = 0;
    $_SESSION['shop'][$_SESSION['index']] = $item;
}
echo "<h1>Your Product</h1>";
echo "<ul>";
foreach ($_SESSION['shop'] as $t) 
echo '<li>'.$t;
echo "</ul>"

?>
<br>
<a href="order.html">More</a>