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

/**
 * [showAction description]
 * @param  PDO   $connexion [Connection to database]
 * @param  int   $id        [Post ID]
 * @return array            [Array containing posts info]
 */
    function showAction(\PDO $connexion, int $id) {
        include_once '../app/modeles/postsModele.php';
        $post = Post\findOneById($connexion, $id);

        GLOBAL $content1, $title;
        $title = $post['titre'];
        ob_start();
          include '../app/vues/posts/show.php';
        $content1 = ob_get_clean();
    };

    function indexShowMoreAction(\PDO $connexion, $offset) {
        include_once '../app/modeles/postsModele.php';
        $postsAdd = Post\findAllOffset($connexion, $offset);

        include '../app/vues/posts/showMore.php';
    };

/**
 * [searchAction description]
 * @param  PDO    $connexion [description]
 * @param  string $search    [description]
 * @return [type]            [description]
 */
    function searchAction(\PDO $connexion, string $search) {
      include_once '../app/modeles/postsModele.php';
      $posts = Post\findAllBySearch($connexion, $search);
      GLOBAL $content1, $title;
      $title = $search;
      ob_start();
        include '../app/vues/posts/search.php';
      $content1 = ob_get_clean();
    }
