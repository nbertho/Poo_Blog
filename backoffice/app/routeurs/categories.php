<?php
/*
  ./app/routeurs/posts.php
  ROUTE DES USERS ($_GET['users'])
 */

switch ($_GET['categories']) {
  case 'index':
  // SHOW ALL POSTS
      include_once '../app/controleurs/categoriesControleur.php';
      \App\Controleurs\CategoriesControleur\indexAction($connexion);
      break;
  case 'add-index':
    // SHOW ALL POSTS
      include_once '../app/controleurs/categoriesControleur.php';
      \App\Controleurs\CategoriesControleur\addIndex($connexion);
      break;
  }
