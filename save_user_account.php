<?php
// Database connection details
$servername = "127.0.0.1";
$username = "root";
$password = '';
$dbname = "herbal_website";

// Create a new connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve the form data
$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];
$role = "user"; // Set the default role to "user"

// Prepare the SQL statement
$sql = "INSERT INTO users (username, email, password, role) 
        VALUES ('$username', '$email', '$password', '$role')";

// Execute the query
if ($conn->query($sql) === TRUE) {
    echo "User account created successfully.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
