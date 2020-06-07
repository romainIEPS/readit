<?php
/*
  ./app/routeur.php
  ROUTEUR PRINCIPAL DE L'APPLICATION
*/

// ROUTE AJOUT D'UN COMMENTAIRE
// PATTERN: /?comments=add
// CTRL: commentsControleur
// ACTION: storeAction
  if (isset($_GET['comments'])):
    include_once '../app/controleurs/commentsControleur.php';
    \Controleurs\Comments\storeAction($connexion);

// ROUTE DU CONTACT
// PATTERN: /?contact
// CTRL: aucun
// ACTION: aucune
  elseif (isset($_GET['contact'])):
    $title = "Contact";
    ob_start();
      include_once '../app/vues/templates/partials/contact.php';
    $content = ob_get_clean();

// DETAIL D'UN POST
// PATTERN: :
// CTRL: postsControleur
// ACTION: index
  elseif (isset($_GET['postID'])):
    include_once '../app/controleurs/postsControleur.php';
    \Controleurs\Posts\showAction($connexion, $_GET['postID']);

// ROUTE PAR DEFAUT
// PATTERN: /
// CTRL: postsControleur
// ACTION: index
  else:
    include_once '../app/controleurs/postsControleur.php';
    \Controleurs\Posts\indexAction($connexion);
  endif;
