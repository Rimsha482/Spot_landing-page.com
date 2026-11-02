<?php
// Step 1: Database connection
$conn = new mysqli("localhost", "root", "", "spot_landing");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Step 2: Get data from the form
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Step 3: Insert into database
$sql = "INSERT INTO contacts (name, email, message) VALUES ('$name', '$email', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "Thanks for contacting us!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Step 4: Close connection
$conn->close();
?>
