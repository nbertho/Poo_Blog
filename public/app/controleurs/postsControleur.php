<?php
/*
    ./app/controleurs/PostsControleur.php
 */
namespace App\Controleurs;

class PostsControleur {

  /**
   * [indexAction description]
   * @param  PDO   $connexion [Connection to database]
   * @return [type]           [Array of array containing posts info]
   */
  public function indexAction(\PDO $connexion) {
    $gestionnaire = new \App\Modeles\PostsGestionnaire();
    $posts = $gestionnaire->findAll($connexion);

    GLOBAL $content1, $title;
    $title = POSTS_INDEX_TITLE;
    ob_start();
      include '../app/vues/posts/index.php';
    $content1 = ob_get_clean();
  }

  /**
   * [showAction description]
   * @param  PDO   $connexion [Connection to database]
   * @param  int   $id        [Post ID]
   * @return array            [Array containing posts info]
   */
  public function showAction(\PDO $connexion, int $id) {
    $gestionnaire = new \App\Modeles\PostsGestionnaire();
    $post = $gestionnaire->findOneById($connexion, $id);

    GLOBAL $content1, $title;
    $title = $post['titre'];
    ob_start();
      include '../app/vues/posts/show.php';
    $content1 = ob_get_clean();
  }

  /**
   * [indexShowMoreAction description]
   * @param  PDO    $connexion [description]
   * @param  [type] $offset    [description]
   * @return [type]            [description]
   */
  public function indexShowMoreAction(\PDO $connexion, $offset) {
    include_once '../app/modeles/postsModele.php';
    $postsAdd = Post\findAllOffset($connexion, $offset);
    include '../app/vues/posts/showMore.php';
  }

  /**
   * [searchAction description]
   * @param  PDO    $connexion [description]
   * @param  string $search    [description]
   * @return [type]            [description]
   */
  public function searchAction(\PDO $connexion, string $search) {
    $gestionnaire = new \App\Modeles\PostsGestionnaire();
    $posts = $gestionnaire->findAllBySearch($connexion, $search);

    GLOBAL $content1, $title;
    $title = $search;
    ob_start();
      include '../app/vues/posts/search.php';
    $content1 = ob_get_clean();
  }

}
