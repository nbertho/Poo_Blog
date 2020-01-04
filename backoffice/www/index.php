<?php
/*
  ./www/index.php
 */

 require_once '../noyau/init.php'; //$connexion PDO et $zone1=''
 include_once '../app/routeur.php'; // Hydrater $zone1 grâce à $connexion
 require_once '../app/vues/templates/defaut.php'; // on affiche $zone1
