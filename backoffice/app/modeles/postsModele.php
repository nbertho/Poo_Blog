<?php
/*
    ./app/modeles/postsModele.php
 */
namespace App\Modeles\PostsModele;

/**
 * [Find all posts]
 * @param  PDO    $connexion [description]
 * @return [type]            [description]
 */
function findAll(\PDO $connexion) {
  $sql = "  SELECT *, posts.id as postID
            FROM posts
            JOIN auteurs ON posts.auteur = auteurs.id
            ORDER BY datePublication DESC;";
  $rs = $connexion ->query($sql);
  return $rs->fetchAll(\PDO::FETCH_ASSOC);
};

/**
 * [Find one post based on his id]
 * @param  PDO    $connexion [description]
 * @param  [type] $id        [description]
 * @return [type]            [description]
 */
function findOneById(\PDO $connexion, $id) {
  $sql = "  SELECT *
            FROM posts
            JOIN auteurs ON posts.auteur = auteurs.id
            WHERE posts.id = :id;";

  $rs = $connexion->prepare($sql);
  $rs->bindValue(':id', $id, \PDO::PARAM_INT);
  $rs->execute();
  return $rs->fetch(\PDO::FETCH_ASSOC);
};

function findAllBySearch($connexion, $search) {
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

function insertInto($connexion, $data) {
  $sql = "INSERT INTO posts (titre, slug, texte, auteur, media, datePublication)
          VALUES (:titre, :slug, :texte, :auteur, :media, NOW());";

  $rs = $connexion->prepare($sql);
  $rs->bindValue(':titre', $data['titre'], \PDO::PARAM_STR);
  $rs->bindValue(':slug', $data['slug'], \PDO::PARAM_STR);
  $rs->bindValue(':texte', $data['texte'], \PDO::PARAM_STR);
  $rs->bindValue(':auteur', $data['auteur'], \PDO::PARAM_INT);
  $rs->bindValue(':media', $data['media'], \PDO::PARAM_STR);
  $rs->execute();
  return $connexion->lastInsertId();

}

function insertCatInto($connexion, $postId, $categorieId) {
  $sql = "INSERT INTO posts_has_categories (post, categorie)
          VALUES (:post, :categorie);";

  $rs = $connexion->prepare($sql);
  $rs->bindValue(':post', $postId, \PDO::PARAM_INT);
  $rs->bindValue(':categorie', $categorieId, \PDO::PARAM_INT);
  $rs->execute();
  return $rs->fetchAll(\PDO::FETCH_ASSOC);
}

function deleteById($connexion, $id) {
  $sql = "DELETE FROM posts
          WHERE id = :id";

  $rs = $connexion->prepare($sql);
  $rs->bindValue(':id', $id, \PDO::PARAM_INT);
  $rs->execute();
}
