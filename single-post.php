<?php
include('db_connection.php'); 
include 'header.php';
?>

<main role="main" class="container">
    <div class="row">
        <div class="col-sm-8 blog-main">

           
            <?php
            if (isset($_GET['post_id'])) {
                $post_id = $_GET["post_id"];
               // var_dump($post_id);
                $sql1 =' SELECT * FROM posts WHERE id ='  . $post_id;
                $statement = $connection->query($sql1);
                $post = $statement->fetch(PDO::FETCH_ASSOC);

                $sql2 = "SELECT * FROM comments c WHERE c.post_id =" . $post_id;
                $statement = $connection->query($sql2);
                $comments = $statement->fetchAll(PDO::FETCH_ASSOC);
            ?>
                <div class="blog-post">
                <a href="single-post.php?post_id=<?php echo ($post['id']) ?>">
                    <h2 class="blog-post-title">
                        <?php echo ($post['title']) 
                         ?>
                    </h2>
                </a>
                <p class="blog-post-meta">
                    <?php echo ($post['created_at']) ?> <a href="#">
                        <?php echo ($post['author']) ?>
                    </a>
                </p>

                <p>
                    <?= $post['body'] ?>
                    </p>
                    </div>
                    <?php include('comments.php') ?>
                </div>
                <?php
            } else {
                echo ('post_id nije prosledjen kroz $_GET');
            }
            ?>

            
     

        <?php include('sidebar.php') ?>

      
    </div>
    
</main>

<?php
include 'sidebar.php';
?>
<?php
include 'footer.php';
?>