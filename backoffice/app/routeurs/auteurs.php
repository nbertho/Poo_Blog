<?php
/*
  ./app/routeurs/posts.php
  ROUTE DES USERS ($_GET['users'])
 */

switch ($_GET['auteurs']) {
  case 'index':
  // SHOW ALL POSTS
      include_once '../app/controleurs/auteursControleur.php';
      \App\Controleurs\AuteursControleur\indexAction($connexion);
      break;
  }
