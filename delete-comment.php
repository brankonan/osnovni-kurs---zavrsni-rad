<?php

include 'db_connection.php';

$comment_id =$_GET["comment_id"];
$post_id =$_GET["post_id"];

$sql = "DELETE FROM comments WHERE id=?";
$stmt= $connection->prepare($sql);
$stmt->execute([$comment_id]);
header('Location: single-post.php?post_id=' . $post_id);

?>