<?php
    include("db_config.php");
    include_once("db_seguridad.php");

    function getComentarios($idCf){
        global $mysqli;

        compruebaId($idCf);    
        $res = $mysqli->query("SELECT nombre, email, fecha, comentario FROM comentarios WHERE idCientifico=" . $idCf) ;
        $comentarios = array() ;

        while($row = $res->fetch_assoc()){
            $comentario = array(
                'idCientifico' => $idCf,
                'nombre' => $row['nombre'], 
                'fecha' => $row['fecha'], 
                'email' => $row['email'],
                'comentario' => $row['comentario']);
            array_push($comentarios,$comentario) ;
        }

        return $comentarios ;
    }
?>