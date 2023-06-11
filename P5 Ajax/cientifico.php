<?php
  include_once("database/db_Cientificos.php");
  include_once("database/db_Comentarios.php");
  include_once("database/db_getBaneadas.php");
  include_once("database/db_Usuarios.php");
  require_once "/usr/local/lib/php/vendor/autoload.php";

  $loader = new \Twig\Loader\FilesystemLoader('templates');
  $twig = new \Twig\Environment($loader);
  session_start();
  if (isset($_SESSION['nickUsuario'])){
    $user = getUser($_SESSION['nickUsuario']);
    $usuario = array('nick' => $user['nick'], 'tipo' => $user['tipo']) ;
  }
  else $usuario = "Empty";
    
  if (isset ($_GET['id'])){
    $idCf = $_GET['id'];
  } else {
    $idCf = -1;
  }
  $cientifico = getCientifico($idCf);
  $comentarios = getComentarios($idCf);
  $baneadas = getBaneadas();

  if($usuario == "Empty"){
    if($cientifico['publicado']==0)
      header("Location: index.php");
  } else {
    if( $usuario['tipo']!=("Gestor") && $usuario['tipo']!=("Superusuario") && $cientifico['publicado']==0 ) 
      header("Location: index.php");
  }
  
  
  
  if(!isset($_GET['imp']) || ($_GET['imp']) != '1')
    echo $twig->render('cientifico.html', ['cientifico' => $cientifico, 
      'comentarios' => $comentarios, 'baneadas' => $baneadas, 'usuario' => $usuario]);
  else
    echo $twig->render('cientifico.html', ['cientifico' => $cientifico, 'imp' => 1]);
?>
