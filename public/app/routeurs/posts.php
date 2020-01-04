<?php
/*
  ./app/routeurs/posts.php
  ROUTE DES USERS ($_GET['users'])
 */

switch ($_GET['post']) {
  case 'show':
  // SHOW ALL POSTS
      include_once '../app/controleurs/postsControleur.php';
      \App\Controleurs\PostsControleur\showAction($connexion, $_GET['id']);
      break;
  case 'show-more':
    // RECHERCHE DE POSTS
      include_once '../app/controleurs/postsControleur.php';
      \App\Controleurs\PostsControleur\indexShowMoreAction($connexion, $_POST['offset']);
      break;
  case 'search':
    // RECHERCHE DE POSTS
      include_once '../app/controleurs/postsControleur.php';
      \App\Controleurs\PostsControleur\searchAction($connexion, $_POST['search']);
      break;
  }
