<?php
/*
  ../noyau/fonctions.php
  Fonctions Personnalisées
*/
namespace Noyau\Fonctions;

/*
---------------------------------------------------------------
SQL REQUEST
---------------------------------------------------------------
*/


/*
---------------------------------------------------------------
TRAITEMENT DES CHAINES DE CARACTERE
---------------------------------------------------------------
*/

  /**
   * [truncate description]
   * @param  string  $data   [description]
   * @param  integer $charNb [description]
   * @return string          [description]
   */

  function truncate(string $data, int $charNb = 200):string {
    if (strlen($data) > $charNb):
      $positionSpace = strpos ( $data , " " , $charNb );
      return substr($data , 0 , $positionSpace);
    else:
      return $data;
    endif;
  };

/*
---------------------------------------------------------------
TRAITEMENT DE DATE
---------------------------------------------------------------
*/
/**
 * [formatDate description]
 * @param  string $date   [description]
 * @param  string $format [description]
 * @return [type]         [description]
 */
  function formatDate(string $date, string $format = "D d M Y") {
    return date_format(date_create($date), $format);
  };
