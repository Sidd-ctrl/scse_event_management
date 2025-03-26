<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['participantName'];
    $rollNumber = $_POST['rollNumber'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['phoneNumber'];

    $sql = "INSERT INTO participants (name, rollNumber, email, phoneNumber) 
            VALUES ('$name', '$rollNumber', '$email', '$phoneNumber')";

    if ($conn->query($sql) === TRUE) {
        echo "Participant registered successfully!";
    } else {
        echo "Error: " . $conn->error;
    }
}

$conn->close();
?>
