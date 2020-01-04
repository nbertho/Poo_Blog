<?php
/*
  ./app/routeur.php
 */

// DETAILS D UN POST
if (isset($_GET['post'])):
    include_once '../app/routeurs/posts.php';

// DETAILS D UNE CATEGORIE
elseif (isset($_GET['categorie'])):
  $categorieCtrl = new App\Controleurs\CategoriesControleur();
  $categorieCtrl->showAction($connexion, $_GET['id']);

// ROUTEUR DES USERS
elseif (isset($_GET['users'])):
  include_once '../app/routeurs/users.php';

// ROUTE PAR DEFAUT
else:
  $postCtrl = new App\Controleurs\PostsControleur();
  $postCtrl->indexAction($connexion);

endif;
