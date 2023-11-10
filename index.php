<?php
include('db_connection.php'); 
include ('head.php');
include ('header.php');

$query = "SELECT * FROM posts ORDER BY Created_at DESC"; 
$statement = $connection->query($query);
$posts = $statement->fetchAll(PDO::FETCH_ASSOC);
?>
<body>
<main role="main" class="container">
<?php
    foreach ($posts as $post):?>

    <div class="row">
        <div class="col-sm-8 blog-main">
            <div class='blog-post'>
                <a class="blog-post-title" href=/single-post.php?post_id=<?php echo $post['id'] ?> ">
                    <h2> <?= $post['title'] ?> </h2>
                </a> 
                <p> <?= $post['body']?> </p>
                <p class="blog-post-meta"> <?= "Author: " . $post['author'] ?> </p>
            </div>
            <?php endforeach; ?>
        </div>
    

<?php
include 'sidebar.php';
?> 
</div>
</main>
<?php
include 'footer.php';
?>
</body>
