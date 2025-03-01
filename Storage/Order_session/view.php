<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Orders</title>
</head>
<body>
    <h1>List of All Orders</h1>

    <?php
    // Check if there are any orders in the session
    if (isset($_SESSION['orders']) && count($_SESSION['orders']) > 0) {
        // Loop through each order and display it
        echo "<table border='1'>
                <thead>
                    <tr>
                        <th>Order Number</th>
                        <th>Name</th>
                        <th>Quantity</th>
                        <th>Unit Price</th>
                        <th>Total Price</th>
                    </tr>
                </thead>
                <tbody>";

        foreach ($_SESSION['orders'] as $order) {
            $total_price = $order['qty'] * $order['unitprice'];
            echo "<tr>
                    <td>" . $order['order_number'] . "</td>
                    <td>" . $order['name'] . "</td>
                    <td>" . $order['qty'] . "</td>
                    <td>" . $order['unitprice'] . "</td>
                    <td>" . $total_price . "</td>
                  </tr>";
        }

        echo "</tbody></table>";
    } else {
        // If no orders exist in the session
        echo "<p>No orders placed yet.</p>";
    }
    session_destroy();
    ?>
</body>
</html>
