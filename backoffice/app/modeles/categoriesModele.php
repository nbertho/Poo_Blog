<?php
/*
    ./app/modeles/postsModele.php
 */
namespace App\Modeles\CategoriesModele;


function findAll(\PDO $connexion) {
  $sql = "  SELECT *
            FROM categories
            ORDER BY slug ASC;";
  $rs = $connexion ->query($sql);
  return $rs->fetchAll(\PDO::FETCH_ASSOC);
};
