<?php
/*
  ./app/routeurs/users.php
  ROUTE DES USERS ($_GET['users'])
 */

switch ($_GET['users']) {
  case 'logout':
    // FORMULAIRE DE CONNEXION AU BACKOFFICE
      include '../app/controleurs/usersControleur.php';
      \App\Controleurs\UsersControleur\logout();
      break;
}
