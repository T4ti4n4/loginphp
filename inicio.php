<?php
if (session_status()!== PHP_SESSION_ACTIVE){
    session_start();

    if(!isset($_SESSION["user"])){
        header("Location: http://localhost/loginphp");
    }
}
$user_name= $_SESSION["user"]["name"];
?>






<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Inicio</title>
</head>
<body>
    <h1>Bienvenido usuario: <?php echo $user_name;?> 👍 </h1>
    <a href="http://localhost/loginphp/actions/logout.php">Cerrar Sesión</a>
</body>
</html>