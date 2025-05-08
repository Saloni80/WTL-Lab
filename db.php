<?php

$host = "localhost";
$username = "root";  
$password = "";      
$database = "test_db";


$conn = new mysqli($host, $username, $password, $database);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT * FROM users";
$result = $conn->query($sql);

$insert = "INSERT INTO users (name, email) VALUES ('Prasad', 'magdumprasad08@gmail.com')";

echo "<h2>User List</h2>";
if ($result->num_rows > 0) {
    echo "<ul>";
    while($row = $result->fetch_assoc()) {
        echo "<li>" . $row["name"] . " - " . $row["email"] . "</li>";
    }
    echo "</ul>";
} else {
    echo "No users found.";
}

$conn->close();
?>
