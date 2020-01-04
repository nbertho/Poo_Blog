<?php
/*
  ./app/routeurs/users.php
  ROUTE DES USERS ($_GET['users'])
 */

switch ($_GET['users']) {
  case 'loginForm':
  // FORMULAIRE DE CONNEXION AU BACKOFFICE
      include_once '../app/controleurs/usersControleur.php';
      \App\Controleurs\UsersControleur\loginFormAction();
      break;
  case 'loginVerification':
    // TRAITEMENT DU FORMULAIRE DE CONNEXION AU BACKOFFICE
      include_once '../app/controleurs/usersControleur.php';
      \App\Controleurs\UsersControleur\loginVerificationAction($connexion, ['login' => $_POST['login'], 'pwd' => $_POST['pwd']]);
      break;
  }
