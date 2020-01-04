<?php
  /*
    ../app/vues/posts/index.php
    Variables disponibles:
      -$posts: ARRAY(ARRAY(id, titre, slug, datePublication, texte, media, auteur ))
  */
?>

<h1>Gestion des posts</h1>
<div><a href="<?php echo ROOT ?>posts/add/form">Ajouter un enregistrement</a></div>

<table class="table table-bordered">
  <thead>
    <tr>
      <th>Id</th>
      <th>Titre</th>
      <th>Slug</th>
      <th>datePublication</th>
      <th>Texte</th>
      <th>Media</th>
      <th>Auteur</th>
      <th></th>
    </tr>
  </thead>
  <tbody>

  <?php foreach ($posts as $post): ?>
    <tr>
      <td><?php echo $post['postID']; ?></td>
      <td><?php echo $post['titre']; ?></td>
      <td><?php echo $post['slug']; ?></td>
      <td><?php echo $post['datePublication']; ?></td>
      <td><?php echo \Noyau\Fonctions\truncate($post['texte'], 100); ?></td>
      <td><?php echo $post['media']; ?></td>
      <td><?php echo $post['auteur']; ?></td>
      <td>
        <a href="#">Edit</a> |
        <a href="<?php echo ROOT.'posts/'.$post['postID']; ?>/delete">Delete</a>
      </td>
    </tr>
  <?php endforeach; ?>

    </tbody>
</table>
