<?php
/*
  ./app/routeur.php
  ROUTEUR PRINCIPAL DE L'APPLICATION
*/


// ROUTE PAR DEFAUT
// PATTERN: :
// CTRL: postsControleur
// ACTION: index
  include_once '../app/controleurs/postsControleur.php';
  \Controleurs\Posts\indexAction($connexion);
