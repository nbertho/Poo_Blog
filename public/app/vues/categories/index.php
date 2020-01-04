<?php
  /*
    ../app/vues/categories/index.php
    Variables disponibles:
      -$categories: ARRAY(id, titre, slug)
  */
?>

<?php foreach ($categories as $categorie): ?>
  <li><a href="categorie/<?php echo $categorie['id'] ?>/<?php echo $categorie['slug'] ?>"><?php echo $categorie['titre'] ?></a></li>
<?php endforeach; ?>
