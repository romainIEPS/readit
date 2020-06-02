<?php
/*
  ./app/vues/categories/index.html
  Liste des commentaires
  Variable disponible:
    $categories ARRAY(ARRAY(id, name))
*/
?>
<div class="sidebar-box ftco-animate">
  <div class="categories">
    <h3>Categories</h3>
    <ul>
      <?php foreach ($categories as $categorie): ?>
        <li>
          <a href="#">
            <?php echo $categorie['name']; ?> <span class="ion-ios-arrow-forward"></span>
          </a>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
</div>
