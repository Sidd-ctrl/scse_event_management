<?php
session_start();
include 'db.php'; // Ensure db.php contains proper database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    if ($role === "admin") {
        $sql = "SELECT * FROM admin WHERE email = '$email' AND password = '$password'";
    } else {
        $sql = "SELECT * FROM participants WHERE email = '$email' AND phoneNumber = '$password'"; // Using phoneNumber as password for participants
    }

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $_SESSION['email'] = $email;
        $_SESSION['role'] = $role;

        if ($role === "admin") {
            header("Location: ../html/admin_dashboard.html");
        } else {
            header("Location: ../html/participant_dashboard.html");
        }
    } else {
        echo "<script>alert('Invalid Credentials!'); window.location.href='login.html';</script>";
    }
}

$conn->close();
?>
