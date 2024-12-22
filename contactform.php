<?php
// Check if the form is submitted via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Database connection variables
  $host = 'localhost'; // Database host
  $username = 'root';  // Database username
  $password = '';      // Database password
  $dbname = 'contactform'; // Database name

  // Create a connection to the database
  $conn = new mysqli($host, $username, $password, $dbname);

  // Check if the connection is successful
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // Get form data
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  // Sanitize and validate the data to prevent SQL injection
  $name = $conn->real_escape_string($name);
  $email = $conn->real_escape_string($email);
  $message = $conn->real_escape_string($message);

  // Insert data into the database
  $sql = "INSERT INTO contact_form (name, email, message) VALUES ('$name', '$email', '$message')";
  if ($conn->query($sql) === TRUE) {
    echo "success"; // Response to indicate success
  } else {
    echo "error"; // Response to indicate error
  }

  // Close the connection
  $conn->close();
}
?>
