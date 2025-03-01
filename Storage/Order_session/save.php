<?php
// Start the session
session_start();

// Initialize session
if (!isset($_SESSION['orders'])) {
    $_SESSION['orders'] = [];
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Increment the order number (for new orders)
    $order_number = count($_SESSION['orders']) + 1;

    // Save the new order in the session
    $order = [
        'order_number' => $order_number,
        'name' => $_POST['name'],
        'qty' => $_POST['qty'],
        'unitprice' => $_POST['unitprice'],
    ];
    
     // Add the new order to the orders array
    $_SESSION['orders'][] = $order;

    // Display confirmation with the order number and links
    echo "<h1>Order Confirmed</h1>";
    echo "<p>Order Number: " . $order_number . "</p>";
    echo "<p>Thank you for your order, " . $_POST['name'] . "!</p>";

    // Provide links to either place another order or view the orders
    echo "<a href='order.html'>Place More Orders</a><br>";
    echo "<a href='view.php'>View Orders</a>";
}

?>