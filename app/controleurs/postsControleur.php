<?php
/*
  ./app/controleurs/postsControleur.php
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
      $title = "Article récents";
      ob_start();
        include_once '../app/vues/posts/index.php';
      $content = ob_get_clean();
  }


  function showAction(\PDO $connexion, $id) {
    // Je demande le détail d'un article au modèle
      include_once '../app/modeles/postsModeles.php';
      $post = Posts\findOneById($connexion, $id);
    // Je demande les tags au modèle
      include_once '../app/modeles/tagsModele.php';
      $tags = \Modeles\Tags\findByPostId($connexion, $id);
    // Je demande l'auteur au modèle
      include_once '../app/modeles/authorsModele.php';
      $author = \Modeles\Authors\findOneById($connexion, $id);
    // et je mets le detail de l'article dans la vue show du posts dans $content
      GLOBAL $content, $title;
      $title = $post['title'];
      ob_start();
        include_once '../app/vues/posts/show.php';
      $content = ob_get_clean();
  }
