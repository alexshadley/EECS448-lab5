<html>
<body>

<?php
$username = $_POST["username"];

// create database connection
$mysqli = new mysqli("mysql.eecs.ku.edu", "ashadley", 'P@$$word123', "ashadley");
// check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$get_all_posts_query = "SELECT * FROM Posts WHERE user_id='{$username}';";
$posts = $mysqli->query($get_all_posts_query);

echo "<h1>Posts for {$username}</h1>";

echo "<table>";
while($post = $posts->fetch_assoc()) {
  $content = $post['content'];
  $user_id = $post['user_id'];
  echo "<tr><td>{$content}</td></tr>";
}
echo "</table>";
?>

</body>
</html>
