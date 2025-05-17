<center>
<h1>List of Employee</h1>
<hr>

<!-- Form of Employee -->
 <form action="listEmployee.php" method="post">

    Name: <input type="text" name="name" required><br><br>
    Email: <input type="email" name="email" required><br><br>
    Password: <input type="password" name="password" required><br><br>
    <button type="submit">Save</button>
</form>


 <?php
//  1. Contect to database
include "connect.php";
 

//  2. Insert and check employee exists
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['name'])) {
        $name  =  $_POST['name'];
        $email =  $_POST['email'];
        $passd =  $_POST['password'];

        // Check if employee already exists
        $check = $conn->prepare("SELECT * FROM tbuser WHERE name = ?");
        $check->bind_param("s", $name);
        $check->execute();
        $check->store_result();

        if ($check->num_rows == 0) {
            // Insert new employee if not exists
            $insert = $conn->prepare("INSERT INTO tbuser (name, email,password) VALUES (?, ?, ?)");
            $insert->bind_param("sss", $name, $email, $passd);
            $insert->execute();
            $insert->close();
        } else {
            echo "<script>alert('Employee with this name already exists.')</script>";
        }

        $check->close();
    }
}

    // Fetch data and Display data to table
    $sql  =  "SELECT * FROM tbuser";
    $rs   =  $conn->query($sql);

    echo "<table border='1' width='50%'>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
            </tr>
        </thead>
        <tbody>
    ";

    while ($row = $rs->fetch_row()) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($row[0]) . "</td>";
        echo "<td>" . htmlspecialchars($row[1]) . "</td>";
        echo "<td>" . htmlspecialchars($row[2]) . "</td>";
        echo "<td>" . htmlspecialchars($row[3]) . "</td>";
        echo "</tr>";
    }

    echo "</tbody></table>";

    $conn->close();

 ?>
 
</center>
