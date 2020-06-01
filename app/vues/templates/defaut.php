<?php
/*
  ./app/vues/templates/defaut.php
  TEMPLATE DE L'APPLICATION
*/
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include_once '../app/vues/templates/partials/head.php'; ?>
  </head>
  <body>

	  <?php include_once '../app/vues/templates/partials/nav.php'; ?>
    <!-- END nav -->
    <?php include_once '../app/vues/templates/partials/hero.php'; ?>

    <?php include_once '../app/vues/templates/partials/section.php'; ?>
    <!-- .section -->

    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <?php include_once '../app/vues/templates/partials/footer.php'; ?>
    </footer>

  <!-- loader -->
  <?php include_once '../app/vues/templates/partials/loader.php'; ?>

  <?php include_once '../app/vues/templates/partials/scripts.php'; ?>
  </body>
</html>
