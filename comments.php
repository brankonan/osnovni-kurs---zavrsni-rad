<div class="comments">
    <hr>
    <button class="btn btn-default" id="comments-btn">Hide comments</button>
    <h3>Comments</h3>
    <ul>
    <ul id="comments-list">
        <?php foreach ($comments as $comment) { ?>
            <li class="comment">
                <div>
                    <?= $comment['author'] ?>
                    <p><?= $comment['text'] ?></p>
                 </div>
                 <script>
                    var comment_id = <?= $comment["id"]; ?>;
                </script>
                <button class="btn btn-primary" onclick="confirmDeleteComment()">Delete this comment</button>   
        <?php } ?> 
</div>
