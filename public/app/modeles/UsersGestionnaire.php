<?php
/*
    ./app/modeles/UsersGestionnaire.php
 */
namespace App\Modeles;

class UsersGestionnaire {

  /**
  * [findOneByLoginAndPassword description]
  * @param  PDO    $connexion [description]
  * @param  [type] $data      [login et pwd]
  * @return [type]            [user correspondant]
  */
  public function findOneByLoginAndPassword(\PDO $connexion, $data) {
    $sql = "  SELECT *
    FROM users
    WHERE login = :login
    AND pwd = :pwd;";
    $rs = $connexion->prepare($sql);
    $rs->bindValue(':login', $data['login'], \PDO::PARAM_STR);
    $rs->bindValue(':pwd', $data['pwd'], \PDO::PARAM_STR);
    $rs->execute();
    return $rs->fetch(\PDO::FETCH_ASSOC);
  }

}
