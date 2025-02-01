<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $full_name = htmlspecialchars($_POST['full_name']);
    $email     = htmlspecialchars($_POST['email']);
    $address   = htmlspecialchars($_POST['address']);
    $city      = htmlspecialchars($_POST['city']);
    $state     = htmlspecialchars($_POST['state']);
    $zip       = htmlspecialchars($_POST['zip']);
    $card_name = htmlspecialchars($_POST['card_name']);
    $card_number = htmlspecialchars($_POST['card_number']);
    $exp_month = htmlspecialchars($_POST['exp_month']);
    $exp_year  = htmlspecialchars($_POST['exp_year']);
    $cvv       = htmlspecialchars($_POST['cvv']);

    echo "<h2>Form Submitted Successfully</h2>";
    echo "<h3>Billing Details:</h3>";
    echo "Name    : $full_name <br>";
    echo "Email   : $email <br>";
    echo "Address : $address <br>";
    echo "City    : $city, State: $state, Zip: $zip <br>";
    
    echo "<h3>Payment Details:</h3>";
    echo "Card Holder : $card_name <br>";
    echo "Card Number : **--**-" .substr($card_number, -4). "<br>";

    echo "Expiration Date : $exp_month / $exp_year <br>";
    echo "CVV: *** (Hidden for Secuity) <br>";
} 
else {
    echo "<h2>Invalid Request</h2>";
}

?>