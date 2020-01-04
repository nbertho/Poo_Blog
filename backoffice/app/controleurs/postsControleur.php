<?php
/*
    ./app/controleurs/PostsControleur.php
 */
namespace App\Controleurs\PostsControleur;
use \App\Modeles\PostsModele AS Post;


/**
 * [indexAction description]
 * @param  PDO   $connexion [Connection to database]
 * @return [type]           [Array of array containing posts info]
 */
    function indexAction(\PDO $connexion) {
        include_once '../app/modeles/postsModele.php';
        $posts = Post\findAll($connexion);

        GLOBAL $content1, $title;
        $title = POSTS_INDEX_TITLE;
        ob_start();
          include '../app/vues/posts/index.php';
        $content1 = ob_get_clean();
    };

    function addIndex(\PDO $connexion) {
        include_once '../app/modeles/categoriesModele.php';
        $categories = \App\Modeles\CategoriesModele\findAll($connexion);

        include_once '../app/modeles/auteursModele.php';
        $auteurs = \App\Modeles\AuteursModele\findAll($connexion);

        GLOBAL $content1, $title;
        $title = POSTS_ADD_TITLE;
        ob_start();
          include '../app/vues/posts/add.php';
        $content1 = ob_get_clean();
    };

    function addAction(\PDO $connexion, array $data) {
      include '../app/modeles/postsModele.php';
      $idLast = \App\Modeles\PostsModele\insertInto($connexion, $data);

      $categories = $_POST['categorie'];
      foreach ($categories as $categorie) {
        $test = \App\Modeles\PostsModele\insertCatInto($connexion, $idLast, $categorie);
      };
      header('location: '.ROOT.'/posts/index');
    };

    function deleteAction($connexion, $id) {
      echo '<br/><h1>ICI '.$id.' ICI</h1><br/>';
      include '../app/modeles/postsModele.php';
      \App\Modeles\PostsModele\deleteById($connexion, $id);
      header('location: '.ROOT.'posts/index');
    }
