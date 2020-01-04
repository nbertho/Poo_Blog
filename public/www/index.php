<?php
/*
  ./www/index.php
 */

 require_once '../noyau/init.php'; //$connexion PDO et $zone1=''
 require_once '../vendor/autoload.php';
 include_once '../app/routeur.php'; // Hydrater $zone1 grâce à $connexion


 // On ne charge le template QUE SI on n'est PAS EN AJAX !!!
 if (!(isset($_SERVER['HTTP_X_REQUESTED_WITH'])
   && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')) {
   require_once '../app/vues/templates/defaut.php'; // on affiche $zone1
 }
