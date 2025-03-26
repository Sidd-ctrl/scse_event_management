<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $event_name = $_POST['event_name'];
    $event_date = $_POST['event_date'];
    $event_time = $_POST['event_time'];
    $club = $_POST['club'];
    $description = $_POST['description'];

    $sql = "INSERT INTO events (event_name, event_date, event_time, club, description) 
            VALUES ('$event_name', '$event_date', '$event_time', '$club', '$description')";

    if ($conn->query($sql) === TRUE) {
        echo "Event added successfully!";
    } else {
        echo "Error: " . $conn->error;
    }
}

$conn->close();
?>