<?php
/*
    ./app/controleurs/auteursControleur.php
 */
namespace App\Controleurs\AuteursControleur;
use \App\Modeles\AuteursModele AS Auteur;


    function indexAction(\PDO $connexion) {
        include_once '../app/modeles/auteursModele.php';
        $auteurs = Auteur\findAll($connexion);

        GLOBAL $content1, $title;
        $title = AUTEURS_INDEX_TITLE;
        ob_start();
          include '../app/vues/auteurs/index.php';
        $content1 = ob_get_clean();
    };
