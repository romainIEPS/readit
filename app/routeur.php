<?php
/*
  ./app/routeur.php
  ROUTEUR PRINCIPAL DE L'APPLICATION
*/

// ROUTE PAR DEFAUT
// PATTERN: :
// CTRL: postsControleur
// ACTION: index
  if (isset($_GET['postID'])):
    include_once '../app/controleurs/postsControleur.php';
    \Controleurs\Posts\showAction($connexion, $_GET['postID']);

// ROUTE PAR DEFAUT
// PATTERN: :
// CTRL: postsControleur
// ACTION: index
  else:
    include_once '../app/controleurs/postsControleur.php';
    \Controleurs\Posts\indexAction($connexion);
  endif;
