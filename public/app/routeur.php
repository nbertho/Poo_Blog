<?php
/*
  ./app/routeur.php
 */

// DETAILS D UN POST
  if (isset($_GET['post'])):
    include_once '../app/routeurs/posts.php';
// DETAILS D UNE CATEGORIE
  elseif (isset($_GET['categorie'])):
    include_once '../app/controleurs/categoriesControleur.php';
    \App\Controleurs\CategoriesControleur\showAction($connexion, $_GET['id']);
// ROUTEUR DES USERS
  elseif (isset($_GET['users'])):
    include_once '../app/routeurs/users.php';
// ROUTE PAR DEFAUT
  else:
    include_once '../app/controleurs/postsControleur.php';
    \App\Controleurs\PostsControleur\indexAction($connexion);
  endif;
