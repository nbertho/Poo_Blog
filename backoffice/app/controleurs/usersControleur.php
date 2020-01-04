<?php
/*
    ./app/controleurs/PostsControleur.php
 */
namespace App\Controleurs\UsersControleur;
use \App\Modeles\UsersModele AS Users;

function logout() {
  session_destroy();
  header('location: '.ROOT_PUBLIC);
}
