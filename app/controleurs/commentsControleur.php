<?php
/*
  ./app/controleurs/commentsControleur.php
  Controleurs des commentaires
*/

namespace Controleurs\Comments;
use Modeles\Comments;

  function storeAction(\PDO $connexion) {
    // Je demande au modèle la liste des catégories
      include_once '../app/modeles/commentsModele.php';
      $id = Comments\insertOneByPostId($connexion, $_POST);
    // Je redirige vers le post
      if ($id > 0):
        header('location:  ?postID=' . $_POST['postID']);
      endif;
  }
