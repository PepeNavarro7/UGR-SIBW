<?php
    require_once "/usr/local/lib/php/vendor/autoload.php";
    require_once 'database/db_Usuarios.php';

    $loader = new \Twig\Loader\FilesystemLoader('templates');
    $twig = new \Twig\Environment($loader);
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nick = $_POST['nick'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];

        if (registrar($nick, $email, $pass)) {
            session_start();
            $_SESSION['nickUsuario'] = $nick;  // guardo en la sesión el nick del usuario que se ha registrado
        }
        // Si el registro es efectivo, nos vamos a la portada
        header("Location: index.php");
        exit();
    }
    echo $twig->render('registro.html', ['usuario' => "Empty"]);
?>