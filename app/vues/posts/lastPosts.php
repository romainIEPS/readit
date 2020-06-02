<?php
/*
  ./app/vues/posts/index.html
  Liste des posts récents
  Variable disponible:
    $lastPosts ARRAY(ARRAY(postImage, postResume, postDate, authorName))
*/
?>
<div class="sidebar-box ftco-animate">
  <h3>Recent Blog</h3>
  <?php foreach ($lastPosts as $lastPost): ?>
    <div class="block-21 mb-4 d-flex">
      <a class="blog-img mr-4" style="background-image: url('images/<?php echo $lastPost['postImage']; ?>');"></a>
      <div class="text">
        <h3 class="heading"><a href="#"><?php echo $lastPost['postResume']; ?></a></h3>
        <div class="meta">
          <div><a href="#"><span class="icon-calendar"></span><?php echo date_format(date_create($lastPost['postDate']), "M d, Y"); ?></a></div>
          <div><a href="#"><span class="icon-person"></span> <?php echo $lastPost['authorName']; ?></a></div>
          <div><a href="#"><span class="icon-chat"></span> 19</a></div>
        </div>
      </div>
    </div>
  <?php endforeach; ?>
</div>
