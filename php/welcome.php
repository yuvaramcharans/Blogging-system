<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login-form.html");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <h1 align="center">Welcome to Blogging System</h1>
    <hr>

    <p align="center">Hello, <b><?php echo $_SESSION['username']; ?></b></p>

    <p align="center">
        <a href="post-form.html">Add New Post</a> |
        <a href="view_posts.php">View Posts</a> |
        <a href="logout.php">Logout</a>
    </p>

</body>
</html>