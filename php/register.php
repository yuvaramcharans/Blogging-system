<?php
include("db.php");

$fullname = $_POST['fullname'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$sql = "INSERT INTO users (fullname, email, username, password)
        VALUES ('$fullname', '$email', '$username', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "<h2 align='center'>Registration Successful</h2>";
    echo "<p align='center'><a href='login-form.html'>Click here to Login</a></p>";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>