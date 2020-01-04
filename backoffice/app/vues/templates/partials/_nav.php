<?php
  /*
    _nav.php
  */
?>

<nav class="navbar navbar-inverse navbar-fixed-top">
<div class="container">
<div class="navbar-header">
  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
    <span class="sr-only">Toggle navigation</span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
  </button>
  <a class="navbar-brand" href="#">Bootstrap theme</a>
</div>
<div id="navbar" class="navbar-collapse collapse">
  <ul class="nav navbar-nav">
    <li><a href="<?php echo ROOT_PUBLIC ?>" target="_blank">Site public</a></li>
    <li class="active"><a href="<?php echo ROOT ?>">Dashboard</a></li>
    <li><a href="#about">Getting started</a></li>
    <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Gestion du contenu <span class="caret"></span></a>
      <ul class="dropdown-menu">
        <li class="dropdown-header">Posts</li>
          <li><a href="<?php echo ROOT ?>posts/index">Liste des posts</a></li>
          <li><a href="<?php echo ROOT ?>posts/add/form">Ajouter un post</a></li>
          <li role="separator" class="divider"></li>
          <li class="dropdown-header">Catégories</li>
          <li><a href="<?php echo ROOT ?>categories/index">Liste des catégories</a></li>
          <li><a href="<?php echo ROOT ?>categories/add/index">Ajouter une catégorie</a></li>
          <li role="separator" class="divider"></li>
          <li class="dropdown-header">Auteurs</li>
          <li><a href="<?php echo ROOT ?>auteurs/index">Liste des auteurs</a></li>
          <li><a href="<?php echo ROOT ?>auteurs/add">Ajouter un auteur</a></li>
      </ul>
    </li>

    <li><a href="#contact">Contact</a></li>
    <li><a href="<?php echo ROOT ?>users/logout">Déconnexion</a></li>
  </ul>
</div><!--/.nav-collapse -->
</div>
</nav>