<?php
/*
  ./app/routeurs/users.php
  ROUTE DES USERS ($_GET['users'])
 */

switch ($_GET['users']) {

  case 'loginForm':
    // FORMULAIRE DE CONNEXION AU BACKOFFICE
    $userCtrl = new App\Controleurs\UsersControleur();
    $userCtrl->loginFormAction();
  break;

  case 'loginVerification':
    // TRAITEMENT DU FORMULAIRE DE CONNEXION AU BACKOFFICE
    $userCtrl = new App\Controleurs\UsersControleur();
    $userCtrl->loginVerificationAction($connexion, ['login' => $_POST['login'], 'pwd' => $_POST['pwd']]);
  break;

}
