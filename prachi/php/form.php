<?php
// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Database configuration
$servername = "localhost";
$username = "root"; // Default username for localhost
$password = ""; // Default password for localhost
$dbname = "booknow"; // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Debugging: Check if form data is being received
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo "Form data received: <br>";
    echo "Name: " . $_POST['name'] . "<br>";
    echo "Email: " . $_POST['email'] . "<br>";
    echo "Date: " . $_POST['date'] . "<br>";
    echo "Phone: " . $_POST['number'] . "<br>";
    echo "Message: " . $_POST['message'] . "<br>";
}

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$date = $_POST['date']; // Ensure it's 'date' and not 'datee'
$number = $_POST['number'];
$message = $_POST['message'];

// Prepare SQL statement
$sql = "INSERT INTO users (name, email, date, number, message) 
        VALUES ('$name', '$email', '$date', '$number', '$message')";

// Debugging: Show SQL query
echo "SQL query: " . $sql . "<br>";

// Execute the query
if ($conn->query($sql) === TRUE) {
    echo "Form submitted successfully!";
} else {
    echo "Error: " . $conn->error . "<br>SQL: " . $sql;
}

// Close connection
$conn->close();
?>
