<?php
/*
  ./app/vues/tags/index.html
  Liste des tags
  Variable disponible:
    $tags ARRAY(ARRAY(id, name))
*/
?>
<div class="sidebar-box ftco-animate">
  <h3>Tag Cloud</h3>
    <div class="tagcloud">
      <?php foreach ($tags as $tag): ?>
        <a href="#" class="tag-cloud-link"><?php echo $tag['name']; ?></a>
      <?php endforeach; ?>
    </div>
</div>
