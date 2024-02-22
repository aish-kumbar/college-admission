<?php
// Database connection parameters
$servername = "your_database_host";
$username = "your_database_username";
$password = "your_database_password";
$dbname = "your_database_name";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Extract form data
$name = $_POST['Name'];
$mobile = $_POST['Mobile No']; // Assuming you want to capture mobile number
// Add more variables for other form fields

// Example SQL query to insert data into a table named 'students'
$sql = "INSERT INTO students (name, mobile) VALUES ('$name', '$mobile')";
// Modify the query based on your table structure and form fields

if ($conn->query($sql) === TRUE) {
    echo "Form submitted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
