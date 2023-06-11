<?php
    include_once("database/db_Cientificos.php");
    include_once("database/db_Usuarios.php");

    session_start();
    if (isset($_SESSION['nickUsuario'])){
      $user = getUser($_SESSION['nickUsuario']);
      $usuario = array('nick' => $user['nick'], 'tipo' => $user['tipo']);
    } else $usuario = "Empty";

    if(isset($_POST['valor']) and !empty($_POST['valor'])){
        if($usuario == "Empty"){
            $res = searchCientifico($_POST['valor']) ;
        } else {
            if($usuario['tipo'] !="Gestor" and $usuario['tipo'] != "Superusuario")
                $res = searchCientifico($_POST['valor']) ; 
            else 
                $res = searchCientificoCompleto($_POST['valor']) ;
        }
        echo $res;
    }
    else{
        echo("Eroor");
    }
?>