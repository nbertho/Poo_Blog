<?php
/*
    ./app/controleurs/categoriesControleur.php
 */
namespace App\Controleurs\CategoriesControleur;
use \App\Modeles\CategoriesModele AS Categories;


/**
 * [indexAction description]
 * @param  PDO   $connexion [Connection to database]
 * @return [type]           [Array of array containing posts info]
 */
  function indexAction(\PDO $connexion) {
    include_once '../app/modeles/categoriesModele.php';
    $categories = Categories\findAll($connexion);
    include '../app/vues/categories/index.php';
  };

/**
 * [showAction description]
 * @param  PDO    $connexion [description]
 * @param  int    $id        [description]
 * @return [type]            [description]
 */
  function showAction(\PDO $connexion, int $id) {
      include_once '../app/modeles/categoriesModele.php';
      $categorie = Categories\findOneById($connexion, $id);

      GLOBAL $content1, $title;
      $title = $categorie['titre'];
      ob_start();
        include '../app/vues/categories/show.php';
      $content1 = ob_get_clean();
  };
