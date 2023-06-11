<?php
require_once "/usr/local/lib/php/vendor/autoload.php";
require_once 'database/db_Usuarios.php';
require_once "database/db_Cientificos.php";
require_once "database/db_imagenes.php";

    $loader = new \Twig\Loader\FilesystemLoader('templates');
    $twig = new \Twig\Environment($loader);

    session_start();
    if (isset($_SESSION['nickUsuario'])){
      $user = getUser($_SESSION['nickUsuario']);
      $usuario = array('nick' => $user['nick'], 'tipo' => $user['tipo']) ;
    } else header("Location: index.php");

    if( !$usuario['tipo']==("Gestor") && !$usuario['tipo']==("Superusuario") ) 
        header("Location: gestionCientificos.php");

    $archivos = array();
    $errors= array();

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if(isset($_FILES['path_foto1']) && isset($_FILES['path_foto2'])){
            $archivos[0] = addImagen($_FILES['path_foto1']);
            $archivos[1] = addImagen($_FILES['path_foto2']);
            $nombre=$_POST['nombre'];
            $fecha=$_POST['fecha'];
            $lugar=$_POST['lugar'];
            $descripcion1=$_POST['descripcion1'];
            $descripcion2=$_POST['descripcion2'];
            $wikipedia=$_POST['wikipedia'];

            if(isset($archivos[0]) and $archivos[0]!=false){
                $path_foto1= $archivos[0];
                $pie_foto1=$_POST['pie_foto1'];
            }
            if(isset($archivos[1]) and $archivos[1] != false){
                $path_foto2= $archivos[1];
                $pie_foto2=$_POST['pie_foto2'];
            }
            $id = getNumCientificos();
            

            addCientifico($id,$nombre,$lugar,$fecha,$path_foto1,$pie_foto1,
                $path_foto2,$pie_foto2,$descripcion1,$descripcion2,$wikipedia);
            //$tags = explode(' ',$_POST['etiquetas']); que hago con éstas?

            if(empty($errors)){
                header("Location: index.php");
            }
        }
    }
    echo $twig->render('aniadirCientifico.html', ['usuario' => $usuario, 'errores'=> $errors]);
?>