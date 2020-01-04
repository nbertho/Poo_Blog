<?php
  /*
    ../app/vues/posts/show.php
    Variables disponibles:
      -$post: ARRAY(ARRAY(id, titre, slug, datePublication, texte, media, auteur ))
  */
?>

  <article>
    <!-- Title -->
    <h1><?php echo $post['titre'] ?></h1>
    <!-- Author -->
    <p class="lead">by <a href="#"><?php echo $post['auteur'] ?></a></p>
    <hr>
    <!-- Date/Time -->
    <p>Posted on <?php echo \Noyau\Fonctions\formatDate($post['datePublication'])?></p>
    <hr>
    <!-- Preview Image -->
    <img class="img-responsive z-depth-2" src="<?php echo $post['media'] ?>" alt="<?php echo $post['titre'] ?>">
    <hr>
    <!-- Post Content -->
    <div><?php echo $post['texte'] ?></div>
    <hr>
  </article>
