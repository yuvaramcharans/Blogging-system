<?php
include("db.php");

$title = $_POST['title'];
$category = $_POST['category'];
$author = $_POST['author'];
$content = $_POST['content'];

$sql = "INSERT INTO posts (title, category, author, content)
        VALUES ('$title', '$category', '$author', '$content')";

if ($conn->query($sql) === TRUE) {
    echo "<h2 align='center'>Post Published Successfully</h2>";
    echo "<p align='center'><a href='view_posts.php'>View All Posts</a></p>";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>