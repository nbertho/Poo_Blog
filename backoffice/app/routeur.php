<?php
/*
  ./app/routeur.php
 */

if (isset($_GET['users'])):
  include_once '../app/routeurs/users.php';
elseif (isset($_GET['post'])):
  include_once '../app/routeurs/posts.php';
elseif (isset($_GET['categories'])):
  include_once '../app/routeurs/categories.php';
elseif (isset($_GET['auteurs'])):
  include_once '../app/routeurs/auteurs.php';
else:
    GLOBAL $content1, $title;
    $title = 'Accueil';
    ob_start();
      include '../app/vues/templates/partials/_dashboard.php';
    $content1 = ob_get_clean();
endif;
