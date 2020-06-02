<?php
/*
  ./app/controleurs/tagsControleur.php
  Controleurs des tags
*/

namespace Controleurs\Tags;
use Modeles\Tags;

  function indexAction(\PDO $connexion) {
    // Je demande au modèle la liste des tags
      include_once '../app/modeles/tagsModele.php';
      $tags = Tags\findAll($connexion);
    // Je charge la vue index des tags directement
      include_once '../app/vues/tags/index.php';
  }
