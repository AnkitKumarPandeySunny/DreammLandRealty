<?php
require_once __DIR__ . '/../env.php';
loadEnv(__DIR__ . '/../.env');

$host = getenv('DB_HOST');
$user = getenv('DB_USER');
$pass = getenv('DB_PASS');
$db   = getenv('DB_NAME');

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle delete request
if (isset($_GET['delete'])) {
    $id = intval($_GET['delete']);
    $conn->query("DELETE FROM users WHERE id = $id");
    header("Location: ".$_SERVER['PHP_SELF']);
    exit;
}

$result = $conn->query("SELECT * FROM users");

echo "<h2>Landing Page Slider Image</h2>";
echo "<table border='1' cellpadding='10' cellspacing='0' style='width:100%;'>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Role</th>
            <th>Action</th>
        </tr>";

while ($row = $result->fetch_assoc()) {
    echo "<tr>
            <td>" . $row['id'] . "</td>
            <td>" . $row['first_name'] . "</td>
            <td>" . $row['role'] . "</td>
            <td><a href='?delete=" . $row['id'] . "' onclick=\"return confirm('Are you sure?')\">Delete</a></td>
          </tr>";
}

echo "</table>";
?>
