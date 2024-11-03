<?php
// Database connection variables
$servername = "localhost";  // Your database server
$username = "root";         // Database username (default for XAMPP/WAMP is 'root')
$password = "";             // Database password (usually empty for local development)
$dbname = "cars";    // The name of the database

// Create a connection to MySQL database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to select data from the table
$sql = "SELECT id, name, position, salary FROM employees";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Table</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 50px auto;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px 12px;
            text-align: center;
        }
    </style>
</head>
<body>
<h1 style="text-align:center;">Employee Table</h1>

<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Position</th>
        <th>Salary</th>
    </tr>
    </thead>
    <tbody>
    <?php
    // Check if there are any results and display them in a table
    if ($result->num_rows > 0) {
        // Output each row as a table row
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                            <td>{$row['id']}</td>
                            <td>{$row['name']}</td>
                            <td>{$row['position']}</td>
                            <td>\${$row['salary']}</td>
                          </tr>";
        }
    } else {
        echo "<tr><td colspan='4'>No records found</td></tr>";
    }

    // Close the connection
    $conn->close();
    ?>
    </tbody>
</table>
</body>
</html>
