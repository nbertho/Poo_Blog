<?php
/*
  ./app/routeurs/posts.php
  ROUTE DES POSTS ($_GET['post'])
 */

switch ($_GET['post']) {

  case 'show':
    // SHOW ALL POSTS
    $postCtrl = new App\Controleurs\PostsControleur();
    $postCtrl->showAction($connexion, $_GET['id']);
  break;

  case 'show-more':
    // RECHERCHE DE POSTS
    $postCtrl = new App\Controleurs\PostsControleur();
    $postCtrl->indexShowMoreAction($connexion, $_POST['offset']);
  break;

  case 'search':
    // RECHERCHE DE POSTS
    $postCtrl = new App\Controleurs\PostsControleur();
    $postCtrl->searchAction($connexion, $_POST['search']);
  break;

}
