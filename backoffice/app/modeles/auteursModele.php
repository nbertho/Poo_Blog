<?php
/*
    ./app/modeles/postsModele.php
 */
namespace App\Modeles\AuteursModele;


function findAll(\PDO $connexion) {
  $sql = "  SELECT *
            FROM auteurs
            ORDER BY pseudo ASC;";
  $rs = $connexion ->query($sql);
  return $rs->fetchAll(\PDO::FETCH_ASSOC);
};
