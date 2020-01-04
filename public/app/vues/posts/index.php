<?php
  /*
    ../app/vues/posts/index.php
    Variables disponibles:
      -$posts: ARRAY(ARRAY(id, titre, slug, datePublication, texte, media, auteur ))
  */
?>

<h1 class="page-header">
    Material Design for Bootstrap
    <small>made with love</small>
</h1>

  <?php foreach ($posts as $post): ?>
    <!-- Article -->
    <article>
      <h2><a href="post/<?php echo $post['postID'] ?>/<?php echo $post['slug'] ?>"><?php echo $post['titre'] ?></a></h2>
      <p class="lead">by <a href="#"><?php echo $post['pseudo'] ?></a></p>
      <p> Posted on <?php echo \Noyau\Fonctions\formatDate($post['datePublication']) ?></p>
      <hr>
      <div><?php echo \Noyau\Fonctions\truncate($post['texte'], 200); ?></div>
      <a href="post/<?php echo $post['postID'] ?>/<?php echo $post['slug'] ?>"><button type="button" class="btn btn-info waves-effect waves-light">Read more</button></a>
      <hr>
    </article>
    <!-- Fin d article-->
  <?php endforeach; ?>
