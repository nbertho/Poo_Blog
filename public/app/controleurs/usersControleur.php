<?php
/*
    ./app/controleurs/UsersControleur.php
 */
namespace App\Controleurs;

class UsersControleur {

  /**
  * [loginFormAction description]
  * @return [type] [description]
  */
  function loginFormAction() {
    GLOBAL $content1;
    ob_start();
    include '../app/vues/users/loginForm.php';
    $content1 = ob_get_clean();
  }

  /**
  * [loginVerificationAction description]
  * @param  PDO    $connexion [description]
  * @param  array  $data      [description]
  * @return [type]            [description]
  */
  function loginVerificationAction(\PDO $connexion, array $data) {
    $gestionnaire = new \App\Modeles\UsersGestionnaire();
    $user = $gestionnaire->findOneByLoginAndPassword($connexion, $data);

    // Si l'user existe et a le bon pwd (Redirection vers backoffice))
    if ($user):
      $_SESSION['user'] = $user;
      header('location: '.ROOT_BACKOFFICE);
    else:
      // Sinon (Message d'erreur)
      header('location: '.ROOT.'login?error=1');
    endif;
  }

}
