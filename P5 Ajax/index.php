<?php
  require_once "/usr/local/lib/php/vendor/autoload.php";
  include("database/db_Cientificos.php");
  require_once 'database/db_Usuarios.php';

  $loader = new \Twig\Loader\FilesystemLoader('templates');
  $twig = new \Twig\Environment($loader);

  // En la sesion tengo guardado nickUsuario, y de ahi saco el usuario y su rol
  session_start();
  if (isset($_SESSION['nickUsuario'])){
    // aunque obtenemos todos los datos del usuario, al html solo le damos los que le interesan
    $user = getUser($_SESSION['nickUsuario']);
    $usuario = array('nick' => $user['nick'], 'tipo' => $user['tipo']) ;
  }
  else $usuario = "Empty";
   
  $portada = getPortada();
  $numero = sizeof($portada);
  echo $twig->render('portada.html', ['portada' => $portada, 'usuario' => $usuario]);
?>
