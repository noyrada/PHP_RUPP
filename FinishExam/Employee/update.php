<?php
include "connect.php";

// ចាប់ទិន្នន័យតាម id ដើម្បីបង្ហាញ form
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = $conn->query("SELECT * FROM tbuser WHERE id = $id");
    $row = $result->fetch_assoc();
}

// ប្រើ POST ដើម្បី update ទិន្នន័យ
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id       = $_POST['id'];
    $name     = $_POST['name'];
    $email    = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("UPDATE tbuser SET name=?, email=?, password=? WHERE id=?");
    $stmt->bind_param("sssi", $name, $email, $password, $id);

    if ($stmt->execute()) {
        echo "Update Success! <a href='listEmployee.php'>Back to List</a>";
        exit();
    } else {
        echo "Update Failed!";
    }
}
?>

<!-- បង្ហាញ Form Edit -->
<h2>Edit User</h2>
<form action="update.php" method="POST">
    <input type="hidden" name="id" value="<?= $row['id'] ?? '' ?>">
    Name: <input type="text" name="name" value="<?= $row['name'] ?? '' ?>" required><br><br>
    Email: <input type="email" name="email" value="<?= $row['email'] ?? '' ?>" required><br><br>
    Password: <input type="text" name="password" value="<?= $row['password'] ?? '' ?>" required><br><br>
    <button type="submit">Update</button>
</form>

