<DOCTYPE html>
<html>
  <head>
    <?php 
      define('__ROOT__', dirname(dirname(__FILE__))); 
     ?> 
  </head>
  <body>
    <header>
     <?php
           require_once(__DIR__ . "\layout\header.php")
     ?>
    </header>
  

    <?php require_once('routes.php'); ?>

    <footer>
      Copyright
    </footer>
  <body>
<html>