<?php
/*
    ./app/controleurs/categoriesControleur.php
 */
namespace App\Controleurs\CategoriesControleur;
use \App\Modeles\CategoriesModele AS Categories;


    function indexAction(\PDO $connexion) {
        include_once '../app/modeles/categoriesModele.php';
        $categories = Categories\findAll($connexion);

        GLOBAL $content1, $title;
        $title = CATEGORIES_INDEX_TITLE;
        ob_start();
          include '../app/vues/categories/index.php';
        $content1 = ob_get_clean();
    };

    function addIndex($connexion) {
      include_once '../app/modeles/categoriesModele.php';
      $categories = Categories\findAll($connexion);


      GLOBAL $content1, $title;
      $title = CATEGORIES_INDEX_TITLE;
      ob_start();
        include '../app/vues/categories/add.php';
        include '../app/vues/categories/index.php';
      $content1 = ob_get_clean();
    }
