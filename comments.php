<?php
include 'header.php';
?>
<div class="comments">
<div class="comments">
    <hr>
    <button class="btn btn-default" id="comments-btn">Hide comments</button>
    <h3>Comments</h3>
    <ul>
    <ul id="comments-list">
        <?php foreach ($comments as $comment) { ?>
            <li>
            <li class="comment">
                <h4>
                    <?= $comment['author'] ?>
                </h4>   
                <?php } ?> 
<hr>
    <h3>Comments</h3>
    <ul>
        <?php foreach ($comments as $comment) { ?>
            <li>
                <h4>
                    <?= $comment['author'] ?>
                </h4>
                <?= $comment['text'] ?>
            </li>
        <?php } ?>
    </ul>
</div>
<?php
include 'sidebar.php';
?>
<?php
include 'footer.php';
?>