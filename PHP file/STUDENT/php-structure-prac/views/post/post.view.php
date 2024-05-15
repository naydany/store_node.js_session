
<?php
require "view/partials/head.php"; 
require "view/partials/nav.php" ;
require "view/partials/banner.php" ;
?>

<a href="view/post/create.view.php" class="btn btn-primary mt-2">Add Post</a>
  <main>
    <div class="p-3">
    <?php foreach($posts as $post): ?>
      <li>
        <?= $post['title'] ?> |  
        <span><?= $post['description'] ?></span> | 
        <a href="post.delete.php?id=<?= $post['id'] ?>" >Delete</a> |
        <a href="post.edit.php?id=<?= $post['id'] ?>">Edit</a>
      </li>

    <?php endforeach; ?>
    </div>
  </main>
<?php require "view/partials/footer.php" ?>