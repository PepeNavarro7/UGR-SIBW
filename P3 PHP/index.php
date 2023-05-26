<?php
  require_once "/usr/local/lib/php/vendor/autoload.php";
  include("database/db_getPortada.php");

  $loader = new \Twig\Loader\FilesystemLoader('templates');
  $twig = new \Twig\Environment($loader);
  
  $portada = getPortada();
  echo $twig->render('index.html', ['portada' => $portada]);
?>
