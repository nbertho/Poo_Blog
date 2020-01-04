<?php
/*
  ./app/routeurs/posts.php
  ROUTE DES USERS ($_GET['users'])
 */

switch ($_GET['post']) {
  case 'index':
    // SHOW ALL POSTS
      include_once '../app/controleurs/postsControleur.php';
      \App\Controleurs\PostsControleur\indexAction($connexion);
      break;
  case 'add-form':
    // SHOW ADD POSTS
      include_once '../app/controleurs/postsControleur.php';
      \App\Controleurs\PostsControleur\addIndex($connexion);
      break;
  case 'add-insert':
    // ADD POSTS
        include_once '../app/controleurs/postsControleur.php';
        \App\Controleurs\PostsControleur\addAction($connexion, ['titre' => $_POST['titre'], 'slug' => $_POST['slug'], 'texte' => $_POST['texte'], 'auteur' => $_POST['auteur'], 'categorie' => $_POST['categorie'], 'media' => $_POST['media']]);
        break;
  case 'delete':
    // DELETE POSTS
        include_once '../app/controleurs/postsControleur.php';
        \App\Controleurs\PostsControleur\deleteAction($connexion, $_GET['id']);
        break;
  }
