<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$servername = "localhost";
$username = "root";
$password = "reg";
$database = "your_database_name";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form data
$name = $_POST['name'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$date = $_POST['date'];
$event = $_POST['event'];

// Use prepared statements to prevent SQL injection
$sql = $conn->prepare("INSERT INTO registrations (name, phone, address, date, event) VALUES (?, ?, ?, ?, ?)");
$sql->bind_param("sssss", $name, $phone, $address, $date, $event);

if ($sql->execute()) {
    echo "Registration successful!";
} else {
    echo "Error: " . $sql->error;
}

$sql->close();
$conn->close();
?>
