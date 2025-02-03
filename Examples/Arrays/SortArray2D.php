<!DOCTYPE html>
<html>
<head>
    <title>SORT 2D Array</title>
</head>
<body>
    <h1>SORT 2D ARRAY</h1>
    <hr/>
    <form action="create2d.php" method="post">
        <table>
            <tr>
                <td>Row:</td>
                <td><input type="text" name="row" required/></td>
            </tr>
            <tr>
                <td>Col:</td>
                <td><input type="text" name="col" required/></td>
            </tr>
            <tr>
                <td>Min Value:</td>
                <td><input type="text" name="min" required/></td>
            </tr>
            <tr>
                <td>Max Value:</td>
                <td><input type="text" name="max" required/></td>
            </tr>
            <tr>
                <td>Sort Row:</td>
                <td>
                    <input type="radio" id="asc" name="sort_row" value="asc">
                    <label for="asc">Ascending</label>
                    <input type="radio" id="desc" name="sort_row" value="desc">
                    <label for="desc">Descending</label><br>
                </td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="create" value="Create" /></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="sort" value="Sort" /></td>
            </tr>
        </table>
    </form>
</body>
</html>


<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Create the 2D array
    if (isset($_POST['create'])) {
        $r = (int)$_POST['row'];
        $c = (int)$_POST['col'];
        $ma = (int)$_POST['max'];
        $mi = (int)$_POST['min'];

        // Create and fill array with random values
        $x = array();
        for ($i = 0; $i < $r; $i++) {
            for ($j = 0; $j < $c; $j++) {
                $x[$i][$j] = rand($mi, $ma);
            }
        }

        // Store the generated array in session
        $_SESSION['array'] = $x;

        // Display the generated 2D array
        echo "<h2>Generated 2D Array</h2>";
        echo "<table border='2'>";
        foreach ($x as $row) {
            echo "<tr>";
            foreach ($row as $val) {
                echo "<td>" . $val . "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }

    // If the 'Sort' button is clicked, sort the rows based on the selected order
    if (isset($_POST['sort']) && isset($_SESSION['array'])) {
        // Retrieve the 2D array from the session
        $x = $_SESSION['array'];

        // Check for selected sorting option
        $sort_order = isset($_POST['sort_row']) ? $_POST['sort_row'] : 'asc';

        // Sorting the 2D array rows based on the selected order
        for ($i = 0; $i < count($x); $i++) {
            if ($sort_order == 'asc') {
                sort($x[$i]);
            } else {
                rsort($x[$i]);
            }
        }

        // Store the sorted array back into the session
        $_SESSION['array'] = $x;

        // Display the sorted 2D array
        echo "<h2>Sorted 2D Array</h2>";
        
        echo "<table border='2'>";
        foreach ($x as $row) {
            echo "<tr>";
            foreach ($row as $val) {
                echo "<td>" . $val . "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
}
?>