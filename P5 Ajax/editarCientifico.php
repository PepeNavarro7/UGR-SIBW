<?php
    require_once "/usr/local/lib/php/vendor/autoload.php";
    require_once "database/db_Cientificos.php";
    require_once 'database/db_Usuarios.php';

    $loader = new \Twig\Loader\FilesystemLoader('templates');
    $twig = new \Twig\Environment($loader);

    session_start();
    if (isset($_SESSION['nickUsuario'])){
        $user = getUser($_SESSION['nickUsuario']);
        $usuario = array('nick' => $user['nick'], 'tipo' => $user['tipo']) ;
    } else header("Location: index.php");
    if( $usuario['tipo']!="Gestor" && $usuario['tipo']!="Superusuario" )
        header("Location: index.php");
    if( !isset($_GET['id']) )
        header("Location: gestionCientificos.php");

    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        $idCientifico = $_POST['idCientifico'];
        $nombre = $_POST['nombre'];
        $lugar = $_POST['lugar'];
        $fecha = $_POST['fecha'];
        $path_foto1 = $_POST['path_foto1'];
        $pie_foto1 = $_POST['pie_foto1'];
        $path_foto2 = $_POST['path_foto2'];
        $pie_foto2 = $_POST['pie_foto2'];
        $descripcion1 = $_POST['descripcion1'];
        $descripcion2 = $_POST['descripcion2'];
        $wikipedia = $_POST['wikipedia'];
        $publicado = $_POST['publicado'];
        modifyCientifico($idCientifico, $nombre, $lugar, $fecha,
            $path_foto1, $pie_foto1, $path_foto2, $pie_foto2, 
            $descripcion1, $descripcion2, $wikipedia, $publicado);
        header("Location: gestionCientificos.php");
    }

    $cientifico = getUnCientifico($_GET['id']);
    echo $twig->render('editarCientifico.html', ['usuario' => $usuario, 'cientifico' => $cientifico]);
?>