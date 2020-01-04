<?php
/*
    ./noyau/constantes.php
    Constantes du framework
 */

  $local_path = str_replace(basename($_SERVER['SCRIPT_NAME']) , '', $_SERVER['SCRIPT_NAME']);

  define('ROOT', 'http://'
                . $_SERVER['HTTP_HOST']
                . $local_path);

  define('ROOT_PUBLIC', str_replace('backoffice','public', ROOT));
