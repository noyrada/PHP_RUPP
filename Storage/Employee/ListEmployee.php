<center>
    <h1>List of Employee</h1>
    <hr>
    <!-- Form for adding new employee -->
    <form action="ListEmployee.php" method="post">
        <table>
            <tr>
                <td>Name</td>
                <td><input type="text" name="name" required /></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email" required></td>
            </tr>
            <tr>
                <td>Password</td> 
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Add" /></td>
            </tr>
        </table>
    </form>

    <?php
    // Configure Connect MySql
    $con = new mysqli("localhost", "root", "mysql#it@2024", "web_db");

    // Database connection
    if ($con->connect_error) {
        die("Connection Failed: " .$con->connect_error);
    }

    // Check if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['name'])) {
            $name  =  $_POST['name'];
            $email =  $_POST['email'];
            $passd =  $_POST['password'];

            // Check if employee already exists
            $stmt = $con->prepare("SELECT name FROM tbuser WHERE name = ?");
            $stmt->bind_param("s", $name);
            $stmt->execute();
            $stmt->store_result();

            if ($stmt->num_rows == 0) {
                // Insert new employee if not exists
                $insert_stmt  = $con->prepare("INSERT INTO tbuser (name, email, password) VALUES (?, ?, ?)");
                $insert_stmt->bind_param("sss", $name, $email, $passd);
                $insert_stmt->execute();
                $insert_stmt->close();
            } else {
                echo "<script>alert('Employee with this name already exists.');</script>";
            }

            $stmt->close();
         }
    }

    // Fetch and Display Employees
    $sql   = "SELECT * FROM tbuser";
    $rs    = $con->query($sql);

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

    $con->close();
        
    ?>
    

</center>