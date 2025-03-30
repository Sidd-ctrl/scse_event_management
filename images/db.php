<?php
$host = "localhost";
$user = "root"; // Change if you have a different username
$password = ""; // Set your password if applicable
$database = "scse_event_management";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
