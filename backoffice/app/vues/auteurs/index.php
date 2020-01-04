<?php
  /*
    ../app/vues/posts/index.php
    Variables disponibles:
      -$posts: ARRAY(ARRAY(id, titre, slug, datePublication, texte, media, auteur ))
  */
?>

<h1>Gestion des auteurs</h1>
<div><a href="<?php echo ROOT ?>posts/add">Ajouter un enregistrement</a></div>

<table class="table table-bordered">
  <thead>
    <tr>
      <th>Id</th>
      <th>Pseudo</th>
      <th>MDP</th>
      <th></th>
    </tr>
  </thead>
  <tbody>

  <?php foreach ($auteurs as $auteur): ?>
    <tr>
      <td><?php echo $auteur['id']; ?></td>
      <td><?php echo $auteur['pseudo']; ?></td>
      <td><?php echo $auteur['mdp']; ?></td>
      <td>
        <a href="#">Edit</a> |
        <a href="#">Delete</a>
      </td>
    </tr>
  <?php endforeach; ?>

    </tbody>
</table>
