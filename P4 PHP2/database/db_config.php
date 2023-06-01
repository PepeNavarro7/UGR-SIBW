<?php
    $mysqli = new mysqli("database","sibw_user","sibw_pass","SIBW");
    if ($mysqli->connect_errno){
        echo ("Fallo al conectar " . $mysqli->connect_error);
    }
?>