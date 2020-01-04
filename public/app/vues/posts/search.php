<?php
  /*
    ../app/vues/posts/search.php
    Variables disponibles:
      -$posts: ARRAY(ARRAY(id, titre, slug, datePublication, texte, media, auteur ))
  */
?>

<h1 class="page-header">Résultats de la recherche <small><?php echo $search ?></small></h1>

  <?php foreach ($posts as $post): ?>
    <!-- Article -->
    <article>
      <h2><a href="post/<?php echo $post['idPost'] ?>/<?php echo $post['slugPost'] ?>"><?php echo $post['titrePost'] ?></a></h2>
      <p class="lead">by <a href="#"><?php echo $post['pseudoAuteur'] ?></a></p>
      <p> Posted on <?php echo \Noyau\Fonctions\formatDate($post['datePublication']) ?></p>
      <hr>
      <div><?php echo \Noyau\Fonctions\truncate($post['texte'], 200); ?></div>
      <a href="post/<?php echo $post['idPost'] ?>/<?php echo $post['slugPost'] ?>"><button type="button" class="btn btn-info waves-effect waves-light">Read more</button></a>
      <hr>
    </article>
    <!-- Fin d article-->
  <?php endforeach; ?>
