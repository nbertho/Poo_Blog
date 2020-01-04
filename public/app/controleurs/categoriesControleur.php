<?php
/*
    ./app/controleurs/CategoriesControleur.php
 */
namespace App\Controleurs;

class CategoriesControleur {

  /**
  * [indexAction description]
  * @param  PDO   $connexion [Connection to database]
  * @return [type]           [Array of array containing posts info]
  */
  public function indexAction(\PDO $connexion) {
    $gestionnaire = new \App\Modeles\CategoriesGestionnaire();
    $categories = $gestionnaire->findAll($connexion);

    include '../app/vues/categories/index.php';
  }

  /**
  * [showAction description]
  * @param  PDO    $connexion [description]
  * @param  int    $id        [description]
  * @return [type]            [description]
  */
  public function showAction(\PDO $connexion, int $id) {
    $gestionnaire = new \App\Modeles\CategoriesGestionnaire();
    $categorie = $gestionnaire->findOneById($connexion, $id);

    GLOBAL $content1, $title;
    $title = $categorie['titre'];
    ob_start();
    include '../app/vues/categories/show.php';
    $content1 = ob_get_clean();
  }

}
