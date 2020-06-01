<?php
/*
  ./app/templates/posts/show.php
  Détail d'un post
  Variable disponibles:
    $post ARRAY(title, created_at, resume, image, content,...)
*/
?>
<p class="mb-5">
  <img src="images/<?php echo $post['image']; ?>" alt="<?php echo $post['title']; ?>" class="img-fluid">
</p>
<h1 class="mb-3 h1"><?php echo $post['title']; ?></h1>
<p><?php echo $post['resume']; ?></p>
<p><?php echo $post['content']; ?></p>
