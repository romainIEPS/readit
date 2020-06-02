<?php
/*
  ./app/controleurs/categoriesControleur.php
  Controleurs des catégories
*/

namespace Controleurs\Categories;
use Modeles\Categories;

  function indexAction(\PDO $connexion) {
    // Je demande au modèle la liste des catégories
      include_once '../app/modeles/categoriesModele.php';
      $categories = Categories\findAll($connexion);
    // Je charge la vue index des categories directement
      include_once '../app/vues/categories/index.php';
  }
