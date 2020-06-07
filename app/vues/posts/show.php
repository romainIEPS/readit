<?php
/*
  ./app/templates/posts/show.php
  Détail d'un post
  Variable disponibles:
    $post ARRAY(title, created_at, resume, image, content,...)
    $tags ARRAY(ARRAY(id, nom))
    $author ARRAY(id, firstname, lastname, image)
    $comments ARRAY(ARRAY(id, pseudo, created_at, content))
*/
?>
<p class="mb-5">
  <img src="images/<?php echo $post['image']; ?>" alt="<?php echo $post['title']; ?>" class="img-fluid">
</p>
<h1 class="mb-3 h1"><?php echo $post['title']; ?></h1>
<p><?php echo $post['content']; ?></p>
<div class="tag-widget post-tag-container mb-5 mt-5">
  <div class="tagcloud">
    <?php foreach ($tags as $tag): ?>
      <a href="#" class="tag-cloud-link">
        <?php echo $tag['name']; ?>
      </a>
    <?php endforeach; ?>
  </div>
</div>
<div class="about-author d-flex p-4 bg-light">
  <div class="bio mr-5">
    <img src="images/<?php echo $author['image']; ?>" alt="<?php echo $author['firstname'] . ' ' . $author['lastname'];; ?>" class="img-fluid mb-4">
  </div>
  <div class="desc">
    <h3><?php echo $author['firstname'] . ' ' . $author['lastname']; ?></h3>
    <p><?php echo $author['biography']; ?></p>
  </div>
</div>
<div class="pt-5 mt-5">
  <?php
    $nombreComm = 0;
    foreach ($comments as $comment):
      $nombreComm += $comment['commentsCount'];
    endforeach;
     if ($nombreComm > 1): ?>
      <h3 class="mb-5"><?php echo $nombreComm;?> Comments</h3>
    <?php else: ?>
      <h3 class="mb-5"><?php echo $nombreComm;?> Comment</h3>
    <?php endif; ?>
  <ul class="comment-list">
    <?php foreach ($comments as $comment): ?>
      <li class="comment">
        <div class="comment-body">
          <h3><?php echo $comment['pseudo']; ?></h3>
          <div class="meta mb-3"><?php echo date_format(date_create($comment['created_at']), "F d, Y") .  ' AT ' . date_format(date_create($comment['created_at']), "h:i A"); ?></div>
          <p><?php echo $comment['content']; ?></p>
        </div>
      </li>
    <?php endforeach; ?>
  </ul>
  <!-- END comment-list -->

  <?php include_once '../app/vues/comments/_addForm.php'; ?>
</div>
