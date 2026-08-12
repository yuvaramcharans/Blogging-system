<?php
include("db.php");
?>
<!DOCTYPE html>
<html>
<head>
    <title>View Blog Posts</title>
    <link rel="stylesheet" href="css/blog.css">
</head>
<body>

    <h1 align="center">All Blog Posts</h1>
    <hr>

    <p align="center">
        <a href="index.html">Home</a> |
        <a href="post-form.html">Add Post</a> |
        <a href="logout.php">Logout</a>
    </p>

    <?php
    $sql = "SELECT * FROM posts ORDER BY id DESC";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<div class='post-box'>";
            echo "<h2>" . $row['title'] . "</h2>";
            echo "<p><b>Category:</b> " . $row['category'] . "</p>";
            echo "<p><b>Author:</b> " . $row['author'] . "</p>";
            echo "<p><b>Date:</b> " . $row['created_at'] . "</p>";
            echo "<p>" . substr($row['content'], 0, 200) . "...</p>";
            echo "</div><hr>";
        }
    } else {
        echo "<p align='center'>No posts available.</p>";
    }

    $conn->close();
    ?>

</body>
</html>