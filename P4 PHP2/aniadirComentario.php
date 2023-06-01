<?php
// Funcion auxiliar para llamar a la base de datos
include_once("database/db_Comentarios.php");
include_once("database/db_Usuarios.php");

session_start();
if (isset($_SESSION['nickUsuario'])){
  $user = getUser($_SESSION['nickUsuario']);
  $usuario = array('nick' => $user['nick'], 'tipo' => $user['tipo']) ;
}

if(isset($_POST['Texto'])){
    addComentario($_POST['idCf'], $user['nick'], $_POST['Texto']);
    header("Location: cientifico.php?id=" . $_POST['idCf']);
}
else echo "Fallo";
?>