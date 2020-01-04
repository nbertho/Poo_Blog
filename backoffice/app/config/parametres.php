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
  define('POSTS_INDEX_TITLE', '"Tous les posts"');
  define('POSTS_ADD_TITLE', '"Ajouter un post"');
  define('CATEGORIES_INDEX_TITLE', '"Tous les categories"');
  define('AUTEURS_INDEX_TITLE', '"Tous les auteurs"');
  define('SEARCH_ACTION_TITLE', '"Search result(s)"');
