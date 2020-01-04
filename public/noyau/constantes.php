<?php
/*
    ./noyau/constantes.php
    Constantes du framework
 */

  $local_path = str_replace(basename($_SERVER['SCRIPT_NAME']) , '', $_SERVER['SCRIPT_NAME']);

  // ROOT PUBLIC
    define('ROOT', 'http://'
                  . $_SERVER['HTTP_HOST']
                  . $local_path);

  //ROOT BACKOFFICE
    define('ROOT_BACKOFFICE', str_replace('public','backoffice', ROOT));
