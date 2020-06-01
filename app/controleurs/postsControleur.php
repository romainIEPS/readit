<?php
/*
  ./app/controleurs/xxxControleur.php
  Controleurs des posts
*/

namespace Controleurs\Posts;
use Modeles\Posts;

  function indexAction(\PDO $connexion) {
    // Je demande la liste des posts au modele
      include_once '../app/modeles/postsModeles.php';
      $posts = Posts\findAll($connexion);
    // et je mets la vue index dans $content
      GLOBAL $content, $title;
      ob_start();
        include_once '../app/vues/posts/index.php';
      $content = ob_get_clean();
  }
