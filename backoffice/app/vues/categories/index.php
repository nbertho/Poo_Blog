<?php
  /*
    ../app/vues/posts/index.php
    Variables disponibles:
      -$posts: ARRAY(ARRAY(id, titre, slug, datePublication, texte, media, auteur ))
  */
?>

<h1>Gestion des categories</h1>
<div><a href="<?php echo ROOT ?>categories/add/index">Ajouter un enregistrement</a></div>

<table class="table table-bordered">
  <thead>
    <tr>
      <th>Id</th>
      <th>Titre</th>
      <th>Slug</th>
      <th></th>
    </tr>
  </thead>
  <tbody>

  <?php foreach ($categories as $categorie): ?>
    <tr>
      <td><?php echo $categorie['id']; ?></td>
      <td><?php echo $categorie['titre']; ?></td>
      <td><?php echo $categorie['slug']; ?></td>
      <td>
        <a href="#">Edit</a> |
        <a href="#">Delete</a>
      </td>
    </tr>
  <?php endforeach; ?>

    </tbody>
</table>
