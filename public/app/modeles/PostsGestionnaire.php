<?php
/*
    ./app/modeles/PostsGestionnaire.php
 */
namespace App\Modeles;

class PostsGestionnaire {

  /**
  * [Find all posts]
  * @param  PDO    $connexion [description]
  * @return [type]            [description]
  */
  function findAll(\PDO $connexion) {
    $sql = "  SELECT *, posts.id as postID
              FROM posts
              JOIN auteurs ON posts.auteur = auteurs.id
              ORDER BY datePublication DESC
              LIMIT 10;";
    $rs = $connexion ->query($sql);
    return $rs->fetchAll(\PDO::FETCH_ASSOC);
  }

  /**
  * [Find one post based on his id]
  * @param  PDO    $connexion [description]
  * @param  [type] $id        [description]
  * @return [type]            [description]
  */
  public function findOneById(\PDO $connexion, $id) {
    $sql = "  SELECT *
              FROM posts
              JOIN auteurs ON posts.auteur = auteurs.id
              WHERE posts.id = :id;";
    $rs = $connexion->prepare($sql);
    $rs->bindValue(':id', $id, \PDO::PARAM_INT);
    $rs->execute();
    return $rs->fetch(\PDO::FETCH_ASSOC);
  }

  public function findAllBySearch($connexion, $search) {
    $sql = "SELECT DISTINCT
            posts.id AS idPost,
            posts.titre AS titrePost,
            posts.slug AS slugPost,
            auteurs.pseudo AS pseudoAuteur,
            texte, media, datePublication
            FROM posts
            JOIN auteurs ON auteur = auteurs.id
            JOIN posts_has_categories ON posts.id = posts_has_categories.post
            JOIN categories ON categorie = categories.id
            WHERE posts.titre LIKE :search
            OR posts.texte LIKE :search
            OR categories.titre LIKE :search
            OR auteurs.pseudo LIKE :search;";
    $rs = $connexion->prepare($sql);
    $rs->bindValue(':search', '%'.$search.'%', \PDO::PARAM_STR);
    $rs->execute();
    return $rs->fetchAll(\PDO::FETCH_ASSOC);
  }

  public function findAllOffset($connexion, $offset) {
    $sql = "  SELECT *, posts.id as postID
              FROM posts
              JOIN auteurs ON posts.auteur = auteurs.id
              ORDER BY datePublication DESC
              LIMIT 10
              OFFSET :offset;";
    $rs = $connexion->prepare($sql);
    $rs->bindValue(':offset', $offset, \PDO::PARAM_INT);
    $rs->execute();
    return $rs->fetchAll(\PDO::FETCH_ASSOC);
  }

}
