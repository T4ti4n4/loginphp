<?php

require_once("./../config/database.php");

try {
    $conexion= new PDO("mysql:host=".DB_HOST.";dbname". DB_NAME.";charset=utf8",DB_USER,DB_PASSWORD);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $th) {
    die("No se pudo conectar con la base de datos".$th->getMessage());
}