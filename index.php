<?php
include 'config.php';
$result = $conn->query("SELECT * FROM posts");
?>

<!DOCTYPE html>
<html>
<head>
    <title>CRUD Application</title>
</head>
<body>
<h2>Blog Posts</h2>

<a href="create.php">Add New Post</a>
<hr>

<?php while($row = $result->fetch_assoc()) { ?>
<h3><?php echo $row['title']; ?></h3>
<p><?php echo $row['content']; ?></p>

<a href="update.php?id=<?php echo $row['id']; ?>">Edit</a>
<a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
<hr>
<?php } ?>

</body>
</html>