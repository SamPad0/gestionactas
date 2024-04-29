<?php

$host = "localhost";
$usuario = "root";
$password = "";
$basededatos = "gestionactas";

function connect_to_database() {
    global $host, $usuario, $password, $basededatos;
    $conexion = new mysqli($host, $usuario, $password, $basededatos);
    
    if ($conexion->connect_error) {
        die("Conexión no establecida: " . $conexion->error);
    }
    return $conexion;
}

?>
