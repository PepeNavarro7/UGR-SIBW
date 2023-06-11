<?php
    include_once("database/db_Usuarios.php");
    include_once("database/db_Comentarios.php");

    session_start();
    if (isset($_SESSION['nickUsuario'])){
        $user = getUser($_SESSION['nickUsuario']);
        $usuario = array('nick' => $user['nick'], 'tipo' => $user['tipo']) ;
    } else header("Location: index.php");
    if($usuario['tipo'] !="Moderador" and $usuario['tipo'] != "Superusuario") 
        header("Location: index.php");

    if($_POST['idComentario']){
        deleteComentario($_POST['idComentario']);
        header("Location: gestionComentarios.php");
    }
?>