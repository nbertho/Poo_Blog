<?php

// PARAMETRES DE CONNEXION A LA DB
  define('DB_HOST', 'localhost:3306');
  define('DB_NAME', 'material_blog');
  define('DB_USER', 'root');
  define('DB_PWD' , 'root');

// INITIALISATION DES ZONES DYNAMIQUES
   $content1 = '';
   $title    = '';
   $categories ='';

// AUTRES CONSTANTES
  define('POSTS_INDEX_TITLE', '"Last posts"');
  define('SEARCH_ACTION_TITLE', '"Search result(s)"');
