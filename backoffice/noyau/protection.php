<?php
if (!isset($_SESSION['user'])):
  header('location: '.ROOT_PUBLIC.'login?error=2');
endif;
