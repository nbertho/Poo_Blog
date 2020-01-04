<?php
/*
    ./app/controleurs/PostsControleur.php
 */
namespace App\Controleurs\UsersControleur;
use \App\Modeles\UsersModele AS User;


/**
 * [loginFormAction description]
 * @return [type] [description]
 */
  function loginFormAction() {
    GLOBAL $content1;
    ob_start();
      include '../app/vues/users/loginForm.php';
    $content1 = ob_get_clean();
  };


  function loginVerificationAction(\PDO $connexion, array $data) {
    include_once '../app/modeles/usersModele.php';
    $user = User\findOneByLoginAndPassword($connexion, $data);

    // Si l'user existe et a le bon pwd (Redirection vers backoffice))
    if ($user):                                              //Sous entendu si $user est différent de false
      $_SESSION['user'] = $user;
      header('location: '.ROOT_BACKOFFICE);        //header() permet de rediriger
    else:
    // Sinon (Message d'erreur)
    header('location: '.ROOT.'login?error=1');
  endif;
  }
