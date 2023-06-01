<?php
    include_once("db_config.php");
    include_once("db_seguridad.php");
    include_once("db_Cientificos.php");

    // Obtenemos la lista de comentarios de un cientifico particular
    function getComentarios($idCf){
        global $mysqli;

        compruebaId($idCf);    
        $res = $mysqli->query("SELECT idComentario, nick, fecha, comentario 
            FROM comentarios WHERE idCientifico=" . $idCf) ;
        $comentarios = array() ;

        while($row = $res->fetch_assoc()){
            $comentario = array(
                'idComentario' => $row['idComentario'],
                'idCientifico' => $idCf,
                'nick' => $row['nick'], 
                'fecha' => $row['fecha'], 
                'comentario' => $row['comentario']);
            array_push($comentarios,$comentario) ;
        }

        return $comentarios ;
    }

    // Añadimos un nuevo comentario
    function addComentario($idCf,$nick,$texto){
        global $mysqli;
        compruebaId($idCf);
        $mysqli->query("INSERT INTO `comentarios`(`idCientifico`, `nick`, `comentario`) 
            VALUES ('$idCf','$nick','$texto')" );
    }

    // Obtenemos la lista completa de todos los comentarios
    function getListaComentarios(){
        global $mysqli;

        $res = $mysqli->query("SELECT idComentario, idCientifico, nick, fecha, comentario 
            FROM comentarios") ;
        $lista = getListaCientificos();
        $cientificos = array();
        // En "cientificos" asocio cada nombre a su ID
        for($i = 0 ; $i<count($lista) ; $i++){
            $nombre = $lista[$i]['nombre'];
            $cientificos[$lista[$i]['idCf']] = $nombre;
        }

        $comentarios = array() ;
        while($row = $res->fetch_assoc()){
            $comentario = array(
                'idComentario' => $row['idComentario'], 
                'idCf' => $row['idCientifico'], 
                'nombreCf' => $cientificos[$row['idCientifico']],
                'nick' => $row['nick'], 
                'fecha' => $row['fecha'],
                'comentario' => $row['comentario']) ;
            array_push($comentarios,$comentario) ;
        }

        return $comentarios;
    }

    // Borramos un comentario
    function deleteComentario($idCm){
        global $mysqli;
        compruebaId($idCm);
        $mysqli->query("DELETE FROM comentarios WHERE idComentario='$idCm'");
    }

    // Me traigo un comentario
    function getUnComentario($idCm){
        global $mysqli;
        compruebaId($idCm);
        $resultado = $mysqli->query("SELECT idComentario, idCientifico, nick, fecha, comentario
        FROM comentarios WHERE idComentario='$idCm'") ;
        $comentario = $resultado->fetch_assoc();
        return $comentario;
    }

    // Modificamos un comentario
    function modifyComentario($idCm,$contenido){
        global $mysqli;
        $mysqli -> query("UPDATE `comentarios` SET `comentario` = '$contenido' 
        WHERE `comentarios`.`idComentario` = $idCm");
    }
?>