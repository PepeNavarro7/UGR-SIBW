<?php
    require_once "/usr/local/lib/php/vendor/autoload.php";
    require_once "database/db_Comentarios.php";
    require_once 'database/db_Usuarios.php';

    $loader = new \Twig\Loader\FilesystemLoader('templates');
    $twig = new \Twig\Environment($loader);
  
  

    session_start();
    if (isset($_SESSION['nickUsuario'])){
        $user = getUser($_SESSION['nickUsuario']);
        $usuario = array('nick' => $user['nick'], 'tipo' => $user['tipo']) ;
    } else header("Location: index.php");
    if( !$usuario['tipo']=="Moderador" && $usuario['tipo']=="Superusuario" )
        header("Location: index.php");
    if( !isset($_GET['cm']) )
        header("Location: gestionComentarios.php");

    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        $idComentario = $_POST['idComentario'];
        $contenido = $_POST['texto'] . "*Mensaje editado por un Moderador*";
        modifyComentario($idComentario,$contenido);
        header("Location: gestionComentarios.php");
    }

    $comentario = getUnComentario($_GET['cm']);
    echo $twig->render('editarComentario.html', ['usuario' => $usuario, 'comment' => $comentario]);
?>