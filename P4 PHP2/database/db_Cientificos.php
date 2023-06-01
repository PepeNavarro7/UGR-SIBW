<?php
    include("db_config.php");
    include_once("db_seguridad.php");

    function getPortada(){
        global $mysqli;

        $res = $mysqli->query("SELECT nombre, path_foto1 FROM cientificos ORDER BY id") ;
        $portada = array() ;

        while($row = $res->fetch_assoc()){
            $cientifico = array(
                'nombre' => $row['nombre'], 
                'path_foto1' => $row['path_foto1']);
            array_push($portada,$cientifico) ;
        }

        return $portada ;
    }
    
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

    // Obtenemos la lista completa de cientificos
    function getListaCientificos(){
        global $mysqli;

        $res = $mysqli->query("SELECT id, nombre, fecha, lugar, path_foto1 FROM cientificos ORDER BY id") ;
        $lista = array() ;

        while($row = $res->fetch_assoc()){
            $cientifico = array(
                'idCf' => $row['id'],
                'nombre' => $row['nombre'],
                'fecha' => $row['fecha'],
                'lugar' => $row['lugar'],
                'path_foto1' => $row['path_foto1'] );
            array_push($lista,$cientifico) ;
        }

        return $lista;
    }

    // Numero de cientificos
    function getNumCientificos(){
        global $mysqli;
        $res = $mysqli->query("SELECT nombre FROM cientificos") ;
        return $res->num_rows;
    }

    // Añadimos un cientifico
    function addCientifico($id, $nombre, $lugar, $fecha, $path_foto1, $pie_foto1,
        $path_foto2, $pie_foto2, $descripcion1, $descripcion2, $wikipedia){
        global $mysqli;
        $mysqli->query("INSERT INTO cientificos(id, nombre, lugar, fecha, path_foto1, pie_foto1, 
            path_foto2, pie_foto2, descripcion1, descripcion2, wikipedia) 
            Values ('$id', '$nombre', '$lugar', '$fecha', '$path_foto1', '$pie_foto1', 
            '$path_foto2', '$pie_foto2', '$descripcion1', '$descripcion2', '$wikipedia')");
    }
    // Borramos un Cientifico
    function deleteCientifico($idCf){
        global $mysqli;
        compruebaId($idCf);
        $mysqli->query("DELETE FROM cientificos WHERE id='$idCf'");
    }

    // Me traigo un Cientifico
    function getUnCientifico($idCf){
        global $mysqli;
        compruebaId($idCf);
        $resultado = $mysqli->query("SELECT id, nombre, lugar, fecha, path_foto1, pie_foto1, path_foto2, 
            pie_foto2, descripcion1, descripcion2, wikipedia
            FROM cientificos WHERE id='$idCf'") ;
        $cientifico = $resultado->fetch_assoc();
        return $cientifico;
    }

    // Modificamos un cientifico
    function modifyCientifico($idCientifico, $nombre, $lugar, $fecha,
        $path_foto1, $pie_foto1, $path_foto2, $pie_foto2, 
        $descripcion1, $descripcion2, $wikipedia){
        global $mysqli;
        compruebaId($idCientifico);
        if(isset($nombre)) $mysqli->query("UPDATE cientificos SET nombre='$nombre' Where id='$idCientifico'");
        if(isset($lugar)) $mysqli->query("UPDATE cientificos SET lugar='$lugar' Where id='$idCientifico'");
        if(isset($fecha)) $mysqli->query("UPDATE cientificos SET fecha='$fecha' Where id='$idCientifico'");
        if(isset($path_foto1)) $mysqli->query("UPDATE cientificos SET path_foto1='$path_foto1' Where id='$idCientifico'");
        if(isset($pie_foto1)) $mysqli->query("UPDATE cientificos SET pie_foto1='$pie_foto1' Where id='$idCientifico'");
        if(isset($path_foto2)) $mysqli->query("UPDATE cientificos SET path_foto2='$path_foto2' Where id='$idCientifico'");
        if(isset($pie_foto2)) $mysqli->query("UPDATE cientificos SET pie_foto2='$pie_foto2' Where id='$idCientifico'");
        if(isset($descripcion1)) $mysqli->query("UPDATE cientificos SET descripcion1='$descripcion1' Where id='$idCientifico'");
        if(isset($descripcion2)) $mysqli->query("UPDATE cientificos SET descripcion2='$descripcion2' Where id='$idCientifico'");
        if(isset($wikipedia)) $mysqli->query("UPDATE cientificos SET wikipedia='$wikipedia' Where id='$idCientifico'");
    }
?>