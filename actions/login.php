<?php
$email = $_POST["user"];
$password=$_POST["password"];

require_once("../database/conexion.php");

try {
    $query=$conexion->prepare("SELECT id, name, password, FROM user WHERE email= :email"); # Los dos puntos en email es para evitar ataques sql    //code...
    $query->execute(["email"=>$email]);
    $user = $query->fetch(PDO::FETCH_ASSOC);#Arreglo asociativo recorre el user 
    if (!$user){
       die("Usuario no encontradado");
    }

    if ($password != $user ["password"]){ #El user que aparece acá es un arreglo
        die ("Contraseña incorrecta");
    }

    session_start(["cookie_lifetime" => 120]); #El control de inactividad en la página
    $_SESSION["user"]=[
        "id" => $user ["id"],
        "email" => $email["email"],
        "name" => $user ["name"]
    ];
    header("Location: http://localhost/loginphp/inicio.php");# Me permite guardar la información despues de ingresar

} catch (PDOException $th) {
    die("Fallo con el usuario: ". $th->getMessage()); #Es para mostrar el mensaje
}
