<?php
  /*
    ../app/vues/categories/categories.php
    Variables disponibles:
      -$categorie: ARRAY(ARRAY(id, titre, slug, datePublication, texte, media, auteur ))
  */
?>

  <article>
    <h1><?php echo $categorie['titre']; ?></h1>
    <h2>slug : <?php echo $categorie['slug']; ?></h2>
  </article>
