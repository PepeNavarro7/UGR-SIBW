<?php
  include("database/db_getCientifico.php");
  include("database/db_getComentarios.php");
  include("database/db_getBaneadas.php");
  require_once "/usr/local/lib/php/vendor/autoload.php";

  $loader = new \Twig\Loader\FilesystemLoader('templates');
  $twig = new \Twig\Environment($loader);
    
  if (isset ($_GET['ev'])){
    $idCf = $_GET['ev'];
  } else {
    $idCf = -1;
  }
  $cientifico = getCientifico($idCf);
  $comentarios = getComentarios($idCf);
  $baneadas = getBaneadas();
  
  
  if(!isset($_GET['imp']) || ($_GET['imp']) != '1')
    echo $twig->render('cientifico.html', ['cientifico' => $cientifico, 
        'comentarios' => $comentarios, 'baneadas' => $baneadas]);
  else
    echo $twig->render('cientifico.html', ['cientifico' => $cientifico, 'imp' => 1]);
?>
