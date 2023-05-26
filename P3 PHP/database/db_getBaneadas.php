<?php
    include("db_config.php");
    
    function getBaneadas(){
        global $mysqli;

        $res = $mysqli->query("SELECT palabra FROM baneadas") ;
        $palabras = array() ;

        while($row = $res->fetch_assoc()){
            array_push($palabras,$row['palabra']);
        }

        return $palabras;
    }
?>