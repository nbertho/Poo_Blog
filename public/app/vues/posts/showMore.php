<?php
  /*
    ../app/vues/posts/index.php
    Variables disponibles:
      -$posts: ARRAY(ARRAY(id, titre, slug, datePublication, texte, media, auteur ))
  */
?>
<?php foreach ($postsAdd as $postAdd): ?>
  <article>
    <h2><a href="post/<?php echo $postAdd['postID'] ?>/<?php echo $postAdd['slug'] ?>"><?php echo $postAdd['titre'] ?></a></h2>
    <p class="lead">by <a href="#"><?php echo $postAdd['pseudo'] ?></a></p>
    <p> Posted on <?php echo \Noyau\Fonctions\formatDate($postAdd['datePublication']) ?></p>
    <hr>
    <div><?php echo \Noyau\Fonctions\truncate($postAdd['texte'], 200); ?></div>
    <a href="post/<?php echo $postAdd['postID'] ?>/<?php echo $postAdd['slug'] ?>"><button type="button" class="btn btn-info waves-effect waves-light">Read more</button></a>
    <hr>
  </article>
<?php endforeach; ?>
