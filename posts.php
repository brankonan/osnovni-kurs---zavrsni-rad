<?php
include('db_connection.php'); 
include 'header.php';


$query = "SELECT * FROM posts ORDER BY Created_at DESC"; 
$statement = $connection->query($query);
$posts = $statement->fetchAll(PDO::FETCH_ASSOC);
?>
<?php
foreach ($posts as $post):?>

<div class='post'>
 <a href=/osnovni-kurs---zavrsni-rad/single-post.php?post_id=" <?= $post['id'] ?> ">
    <h2> <?= $post['title'] ?> </h2>
</a> 
 <p> <?= $post['body']?> </p>
 <p> <?= "Author: " . $post['author'] ?> </p>
</div>
<?php endforeach; ?>

<?php
include 'sidebar.php';
include 'footer.php';
?>