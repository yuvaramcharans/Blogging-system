<?php
session_start();
include("db.php");

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username='$username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();

    if (password_verify($password, $row['password'])) {
        $_SESSION['username'] = $username;
        header("Location: welcome.php");
    } else {
        echo "<h3 align='center'>Invalid Password</h3>";
        echo "<p align='center'><a href='login-form.html'>Try Again</a></p>";
    }
} else {
    echo "<h3 align='center'>User Not Found</h3>";
    echo "<p align='center'><a href='login-form.html'>Try Again</a></p>";
}

$conn->close();
?>