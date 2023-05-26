<?php
    include("db_config.php");
    include_once("db_seguridad.php");

    function getPortada(){
        global $mysqli;

        $res = $mysqli->query("SELECT nombre, path_foto1 FROM cientificos") ;
        $portada = array() ;

        while($row = $res->fetch_assoc()){
            $cientifico = array(
                'nombre' => $row['nombre'], 
                'path_foto1' => $row['path_foto1']);
            array_push($portada,$cientifico) ;
        }

        return $portada ;
    }
?>