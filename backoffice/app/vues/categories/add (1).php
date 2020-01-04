<h1>Ajout d'une catégorie</h1>
<div>
  <a href="<?php echo ROOT ?>categories/index">
    Retour vers la liste des catégories
  </a>
</div>

<form action="<?php echo ROOT ?>categories/add/insert" method="post">
  <div>
    <label for="titre">Titre</label>
    <input type="text" name="titre" id="titre" />
  </div>
  <div>
    <label for="slug">Slug</label>
    <input type="text" name="slug" id="slug" />
  </div>

  <div><input type="submit" /></div>
</form>
