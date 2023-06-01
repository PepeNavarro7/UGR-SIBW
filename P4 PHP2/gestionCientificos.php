<?php
    require_once "/usr/local/lib/php/vendor/autoload.php";
    require_once "database/db_Cientificos.php" ;
    require_once 'database/db_Usuarios.php';

    $loader = new \Twig\Loader\FilesystemLoader('templates');
    $twig = new \Twig\Environment($loader);
  
    session_start();
    if (isset($_SESSION['nickUsuario'])){
        $user = getUser($_SESSION['nickUsuario']);
        $usuario = array('nick' => $user['nick'], 'tipo' => $user['tipo']) ;
    } else $usuario = "Empty";
    if($usuario == "Empty")
        header("Location: index.php");
    if( $usuario['tipo']!=("Gestor") && $usuario['tipo']!=("Superusuario") ) 
        header("Location: index.php");

    $listaCientificos = getlistaCientificos();

    echo $twig->render('gestionCientificos.html', ['usuario' => $usuario, 'listaCientificos' => $listaCientificos]);
?>