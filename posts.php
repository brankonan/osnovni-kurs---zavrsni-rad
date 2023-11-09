<?php
include 'header.php';

include 'sidebar.php';




include('db_connection.php'); 


$query = "SELECT * FROM posts ORDER BY Created_at DESC"; 
$statement = $connection->query($query);
$posts = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach ($posts as $post){
 echo "<div class='post'>";
 echo "<h2>" . $post['title']. "</h2>";
 echo "<p>" . $post['body']. "</p>";
 echo "<p>Author: " . $post['author'] . '</p>';
 echo "</div>";
}

include 'footer.php';
?>