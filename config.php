<?php

$host ="localhost";
$usuariodb = "admin";
$password = "Tienda.2021";
$nombredb = "sqa";
$dsn = "mysql:host=$host;dbname=$nombredb";

try{
    $conexion = new PDO($dsn, $usuariodb, $password);
}catch(PDOException $error){
    echo $error->getMessage();
}

?>