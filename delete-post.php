<?php

include 'db_connection.php';

$post_id =$_GET["post_id"];

// $sql = "DELETE FROM posts WHERE id = ':$post_id'";
// $statement = $connection->prepare($sql);
// $statement->execute();

$sql = "DELETE FROM posts WHERE id=?";
$stmt= $connection->prepare($sql);
$stmt->execute([$post_id]);
header('Location: '. '/');

?>