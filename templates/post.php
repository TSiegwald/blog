<?php require('header.php'); ?>
    <h1>Le super blog de l'AVBN !</h1>
    <p><a href="index.php">Retour à la liste des billets</a></p>

    <div class="news">
        <h3>
            <?= htmlspecialchars($post['title']) ?>
            <em>le <?= $post['french_creation_date'] ?></em>
        </h3>

        <p>
            <?= nl2br(htmlspecialchars($post['content'])) ?>
        </p>
    </div>

<!-- templates/post.php:18 -->

    <!-- ... -->
    <h2>Commentaires</h2>

    <form action="index.php?action=addComment&id=<?= $post['identifier'] ?>" method="post">
       <div>
        <label for="author">Auteur</label><br />
        <input type="text" id="author" name="author" />
       </div>
       <div>
        <label for="comment">Commentaire</label><br />
        <textarea id="comment" name="comment"></textarea>
       </div>
       <div>
        <input type="submit" />
       </div>
    </form>
    <!-- ... -->
    <?php
    foreach ($comments as $comment) {
    ?>
        <p><strong><?= htmlspecialchars($comment['author']) ?></strong> le <?= $comment['french_creation_date'] ?></p>
        <p><?= nl2br(htmlspecialchars($comment['comment'])) ?></p>
    <?php
    }
    ?>
<?php require('footer.php'); ?>
