<?php
/*
    ./app/modeles/categoriesModele.php
 */
namespace App\Modeles;

/**
 *
 */
class CategoriesGestionnaire {

  /**
  * [Find all categories]
  * @param  PDO    $connexion [description]
  * @return [type]            [description]
  */
  public function findAll(\PDO $connexion) {
    $sql = "  SELECT *
    FROM categories
    ORDER BY titre ASC;";
    $rs = $connexion ->query($sql);
    return $rs->fetchAll(\PDO::FETCH_ASSOC);
  }

  /**
  * [findOneById description]
  * @param  PDO    $connexion [description]
  * @param  [type] $id        [description]
  * @return [type]            [description]
  */
  public function findOneById(\PDO $connexion, $id) {
    $sql = "  SELECT *
    FROM categories
    WHERE id = :id;";

    $rs = $connexion->prepare($sql);
    $rs->bindValue(':id', $id, \PDO::PARAM_INT);
    $rs->execute();
    return $rs->fetch(\PDO::FETCH_ASSOC);
  }

}
