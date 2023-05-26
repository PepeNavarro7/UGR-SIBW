<?php
    include("db_config.php");
    include_once("db_seguridad.php");

    
    function getCientifico($idCf){
        global $mysqli;

        compruebaId($idCf);
        $res = $mysqli->query("SELECT nombre, lugar, fecha, path_foto1, pie_foto1, 
                        path_foto2, pie_foto2, descripcion1, descripcion2, wikipedia FROM cientificos WHERE id=" . $idCf) ;
        if($res->num_rows > 0){
            $row = $res->fetch_assoc();
            $cientifico = array(
                'id' => $idCf,
                'nombre' => $row['nombre'],
                'lugar' => $row['lugar'],
                'fecha' => $row['fecha'],
                'path_foto1' => $row['path_foto1'],
                'pie_foto1' => $row['pie_foto1'],
                'path_foto2' => $row['path_foto2'],
                'pie_foto2' => $row['pie_foto2'],
                'descripcion1' => $row['descripcion1'],
                'descripcion2' => $row['descripcion2'],
                'wikipedia' => $row['wikipedia']
            );
        }

        return $cientifico;
    }
?>